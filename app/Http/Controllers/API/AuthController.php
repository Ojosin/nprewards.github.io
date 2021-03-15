<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendRegistration;
use App\Mail\send_forgot;
use App\Exceptions\BaseException;


class AuthController extends Controller
{
    //
     /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','registration','cek_email',
            'activatedAccount','cek_email_exist', 'send_forgot','cek_password_confirm','change_password']
        ]);
    }

    /**
     * Get a JWT via given credentials.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function login(Request $request)
    {
        $credentials = auth()->attempt( ['email' => $request->email, 
        'password' => $request->password, 
        'type_user' => $request->type_user,
        'active'=>'active'
        ] );
        
        if (! $token = $credentials ) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        
        $user = \Auth::user();
        return $this->respondWithToken($token,$request->email);
    }

    /**
     * Get the authenticated User.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
     * Log the user out (Invalidate the token).
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    /**
     * Refresh a token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get the token array structure.
     *
     * @param  string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token,$username)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'username'=>$username,
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function registration(Request $request)
    {   
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'nama_perusahaan'=>'required',
            'no_kta'=>'required',
            'no_telpon'=>'required',
            'password'=>'required|same:retype_password',
            'retype_password'=>'required'
        ]);

        \DB::beginTransaction();
        try {
            $validEmail = \App\Models\M_user::where('email',$request->email)->first();

            if($validEmail)
            {
                return response()->json(['errors'=>['email'=>['This email is already exist',"" ] ]],422);
            }
            $data = $request->all();
            unset($data['retype_password']);
            $data['password'] = bcrypt($request->password);
            $data['type_user'] = 'user_bu';
            $data['ip_address'] = $request->ip();
            $data['created_at'] = date('Y-m-d H:i:s');
            $save = \App\Models\M_user::create($data);

            $data['id'] = $save->id;
            $data['password'] = $request->password;
            Mail::to($request->email)->send(new SendRegistration($data));

            \DB::commit();

            return BaseException::jsonSuccessResponse('0','Success');
        } catch (\Exception $e) {
            \DB::rollback();
            print_r($e->getMessage());
            exit();
            return BaseException::jsonErrorResponse('1', $e->getMessage());
        }
    }


    public function cek_email(Request $request)
    {
        $validEmail = \App\Models\M_user::where('email',$request->email)->first();

        if($validEmail)
        {
            return response()->json(['errors'=>['email'=>['This email is already exist',"" ] ]],422);
        }
        else
        {
            return response()->json(['status' => 'success']);    
        }
    
    }


    public function cek_email_exist(Request $request)
    {
        $validEmail = \App\Models\M_user::where('email',$request->email)->where('type_user',$request->type_user)->where('active','active')->first();

        if(!$validEmail)
        {
            return response()->json(['errors'=>['email'=>['Sorry This email not exist',"" ] ]],422);
        }
        else
        {
            return response()->json(['status' => 'success']);
        }
        
    }

    public function send_forgot(Request $request)
    {
        \DB::beginTransaction();
        try {
            $validEmail = \App\Models\M_user::where('email',$request->email)->first();

            if(!$validEmail)
            {
                return response()->json(['errors'=>['email'=>['This not  exist',"" ] ]],422);
            }

            $data['password'] = bcrypt($validEmail->password);
            $data['type_user'] = $validEmail->type_user;
            $data['name'] = $validEmail->name;

            $data['id'] = $validEmail->id;
            $data['email'] = $validEmail->email;
            $data['password'] = $validEmail->password;
            Mail::to($request->email)->send(new send_forgot($data));

            \DB::commit();

            return BaseException::jsonSuccessResponse();
        } catch (\Exception $e) {
            \DB::rollback();
            return BaseException::jsonErrorResponse('1', $e->getMessage());
        }
    }

    public function activatedAccount(Request $request)
    {
        $cek = \App\Models\M_user
        ::whereNull('active')
        ->where('email',$request->email)->where('id',$request->id)->update(['active'=>'active']);

        if($cek)
        {
            return response()->json(['status' => 'success']);
        }
        else
        {
            return response()->json(['status' => 'failed']);
        }
    }

    public function cek_password_confirm(Request $request)
    {
        $this->validate($request,[
            'password'=>'required|same:retype_password',
            'retype_password'=>'required'
        ]);
        $validEmail = \App\Models\M_user::where('email',$request->email)->where('type_user',$request->type_user)->where('active','active')->first();

        if(!$validEmail)
        {
            return response()->json(['errors'=>['email'=>['Sorry This email not exist',"" ] ]],422);
        }
        else
        {
            return response()->json(['status' => 'success']);
        }
    }

    public function change_password(Request $request)
    {
        $cek = \App\Models\M_user
        ::where('active','active')
        ->where('email',$request->email)->where('type_user',$request->type_user)
        ->where('id',$request->id)->update(['password'=>bcrypt( $request->password) ]);

        if($cek)
        {
            return response()->json(['status' => 'success']);
        }
        else
        {
            return response()->json(['status' => 'failed']);
        }
    }
}
