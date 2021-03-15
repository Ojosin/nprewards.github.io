<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Sertifikat </title>
    
    <style type="text/css">
        
        * {
            font-family: Roboto,  sans-serif;
        }
        div{
            margin:0;
            padding:0;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: Roboto,sans-serif;         
            margin: 0; 
            padding: 0; 
            border: 0; 
        }
        .f14{
            font-size: 14px;
        }
        .f12{
            font-size: 12px;
        }
        .f10{
            font-size: 10px;
        }
        .f11{
            font-size: 11px;
        }
        .normal{
            font-weight: normal;
        }
        table { 
          border-collapse: collapse; border-spacing: 0; /* cellspacing */
        }

        th, td { 
          padding: 3px;  /* cellpadding */
          margin: 3px;
        }
        .color_b {
            background-color: #B0C4DE
        }
        .bold{
            font-weight: bold;
        }
        

    </style>
</head>

<body style="background-color: #fff" class="f12">


  <div style="margin-bottom: 30px;">
      <table  width="100%">
          <tr>
              <td style="text-align: center;" width="100%">
                Sususan Pengurus : {{$administrasi->nama_badan_usaha}}
                <br>
              </td>
          </tr>
      </table>
  </div>


  <table width="100%">
  	<tr>
  		<td width="20%" style="font-weight: bold;">Jabatan</td>
  		<td width="40%" style="font-weight: bold;">Nama & Alamat</td>
  	</tr>
	  	@foreach($pengurus as $peng)
	  	<tr>
	  		<td>
	  			{{$peng->m_jabatan->nama_jabatan}} 
	  		</td>
	  		<td>
	  			<div style="margin-bottom: 10px">
	  			 {{$peng->nama}} 
	  			 <br>
	  			 {{$peng->alamat}}, {{strtolower($peng->kabupaten->nama_kabupaten)}} , {{strtolower($peng->provinsi->nama_provinsi)}} 
	  			</div>
	  		</td>
	  	</tr>
  	@endforeach
  </table>


</body>

</html>