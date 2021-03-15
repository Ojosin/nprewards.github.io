<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title> Sertifikat </title>
    {{-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href=" {{ asset('assets/main.css') }} " >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
       
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> --}}

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
  		<th>Jenis</th>
  		<th>Jumlah</th>
  		<th>Kapasitas / Output</th>
  		<th>Merek</th>
  		<th>Nomor</th>
  		<th>Tahun</th>
  		<th>Kondisi</th>
  		<th>Lokasi</th>
  		<th>Harga</th>
  		<th>Kepemilikan</th>
  	</tr>
	  	@php
	  		$no= 1;
	  	@endphp
	  	@foreach($peralatan as $per)
	  	<tr>
	  		<td>{{$no}}</td>
	  		<td>
	  			{{$per->jenis}} 
	  		</td>
			<td>
	  			{{$per->jumlah}} 
	  		</td>

	  		<td>
	  			{{$per->kapasitas}} 
	  		</td>

	  		<td>
	  			{{$per->merk}} 
	  		</td>

	  		<td>
	  			{{$per->nomor}} 
	  		</td>

	  		<td>
	  			{{$per->tahun}} 
	  		</td>


	  		<td>
	  			{{$per->kondisi}} 
	  		</td>

	  		<td>
	  			{{$per->lokasi}} 
	  		</td>

	  		<td>
	  			{{$per->harga}} 
	  		</td>

	  		<td>
	  			{{$per->kepemilikan}} 
	  		</td>

	  		


	  	</tr>
	  	@php
	  		$no++;
	  	@endphp
  	@endforeach
  </table>


</body>

</html>