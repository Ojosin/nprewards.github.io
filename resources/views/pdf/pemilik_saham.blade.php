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

<body style="background-color: #fff" class="f10">


  <div style="margin-bottom: 30px;">
      <table  width="100%">
          <tr>
              <td>
                <span>Daftar Peralatan : {{$administrasi->nama_badan_usaha}}</span>
              </td>
          </tr>
      </table>
  </div>


  <table width="100%" border="1" cellspacing="0" cellpadding="">
  	<tr style="background: #D3D3D3">
  		<th>No</th>
  		<th>Nama Pemilik Saham</th>
  		<th>Jenis Kepemilikan</th>
  		<th>Jumlah Lembar</th>
  		<th>Nilai Saham</th>
  		<th>Modal Disetor</th>
  	</tr>
	  	@php
	  		$no= 1;
	  		$tot= 0;
	  		$tot_dasar= 0;
	  	@endphp
	  	@foreach($pemilik_saham as $pem)
	  	<tr>
	  		<td>{{$no}}</td>
	  		<td>
	  			{{$pem->nama}} 
	  		</td>
			<td>
	  			{{$pem->jenis_pemilik}} 
	  		</td>

	  		<td>
	  			{{$pem->jumlah_lembar_saham}} 
	  		</td>

	  		<td>
	  			{{$pem->nilai_saham}} 
	  		</td>

	  		<td>
	  			{{$pem->modal_disetor}} 
	  		</td>
	  	</tr>
	  	@php
	  		$tot+=$pem->modal_disetor;
	  		$tot_dasar+=$pem->modal_disetor;
	  		$no++;
	  	@endphp
  	@endforeach
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td colspan="2" style="text-align: right;">Jumlah Modal Disetor</td>
  		<td> {{$tot}}  </td>
  	</tr>
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td colspan="2" style="text-align: right;">Modal Dasar</td>
  		<td> {{$tot_dasar}}  </td>
  	</tr>
  </table>


</body>

</html>