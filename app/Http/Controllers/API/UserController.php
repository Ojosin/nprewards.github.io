<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Log;
use App\Exceptions\BaseException;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $result =  \App\Models\M_user::
        with('group')
        ->orderBy('id','desc')
        ->whereNotIn('username',['superadmin'])
        ->where('type_user','user_bu');
        if(!empty($request->q))
        {
            $result->where('name','like','%'.$request->q.'%');
        }
        return $result->paginate(10);
    }

    public function get_user_peng()
    {
        $result =  \App\Models\M_user::
        with('group')
        ->orderBy('id','desc')
        ->whereNotIn('username',['superadmin'])
        ->where('type_user','user_peng');
        if(!empty($request->q))
        {
            $result->where('name','like','%'.$request->q.'%');
        }
        return $result->paginate(10);    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Log::debug('LOG AMP ');

        if($request->type_user == 'user_bu')
        {
            $this->validate($request,[
                'name'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'no_telpon'=>'required|numeric',
                'nama_perusahaan'=>'required',
                'no_kta'=>'required',
            ]);    
        }
        else
        {
            $this->validate($request,[
                'name'=>'required',
                'username'=>'required',
                'email'=>'required|email',
                'no_telpon'=>'required|numeric',
                'nama_perusahaan'=>'required',
            ]);    
        }
        

        $data = $request->all();
        $data['password'] = bcrypt('123123');
        $data['active'] = 'deactive';
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['created_by'] = \Auth::user()->id;
        $save = \App\Models\M_user::create($data);

        return response()->json(['status' => 'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return \App\Models\M_user::find($id);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'name'=>'required',
        ]);

        $data = $request->all();
        $data['updated_at'] = date('Y-m-d H:i:s');
        $data['updated_by'] = \Auth::user()->id;
        
        $update = \App\Models\M_user::find($id);
        $update->update($request->except('id'));

        if($update)
        {
            return BaseException::jsonSuccessResponse();
        }
        else
        {
            return BaseException::jsonErrorResponse('1','error');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        if(!empty($id))
        {
            $data = \App\Models\M_user::find($id);
            $data->delete();
            return BaseException::jsonSuccessResponse();
        }
        else
        {
            return BaseException::jsonErrorResponse('1','error');
        }
    }
}
