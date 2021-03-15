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
              <td style="text-align: center;">
                <span>Daftar Pengalaman Badan Usaha  <br> Dalam Kurun Waktu 10 (sepuluh) Tahun Terakhir <br><br> {{$administrasi->nama_badan_usaha}}</span>
              </td>
          </tr>
      </table>
  </div>


  <table width="100%" border="1" cellspacing="0" cellpadding="">
  	<tr>
  		<th>Kode SB / SL</th>
  		<th>Subbidang / Sublayanan,Nama Proyek, Lokasi,Pemberi Tugas,Pimpinan Proyek</th>
  		<th>Utama Associate</th>
  		<th>Nomor Kontrak </th>
  		<th>Tgl Mulai</th>
  		<th>Tgl Selesai</th>
  		<th>Nilai Kontrak </th>
  		<th>Bobot</th>
  		<th>Nilai Kontrak Setelah Bobot</th>
  	</tr>
	  	@php
	  		$no= 1;
	  		$tot= 0;
	  	@endphp
	  	@foreach($pengalaman_bu as $peng)
	  	<tr>
	  		<td>
	  			<div style="color: #B9B7F0">
	  				{{$peng->kode_sb}} 
	  			</div>
	  		</td>
			<td  colspan="8">
				<div style="color: #B9B7F0">
					{{$peng->keterangan}} 	
				</div>
	  			
	  		</td>
	  	</tr>
	  	@php
	  		$det_peng = \App\Models\M_pengalaman_bu::with('provinsi','klasifikasi_sb')->where('kode_sb',$peng->id_klasifikasi_sb)->get();
	  	@endphp
	  	@foreach($det_peng as $dp)
		  	<tr>
		  		<td>{{$dp->klasifikasi_sb->kode_sb}}</td>
		  		<td>{{$dp->nama_paket}}</td>
		  		<td>{{$dp->utama}}</td>
		  		<td>{{$dp->nomor_kontrak}}</td>
		  		<td>{{$dp->tgl_mulai}}</td>
		  		<td>{{$dp->tgl_selesai}}</td>
		  		<td>{{$dp->tgl_nilai_kontrak}}</td>
		  		<td>{{$dp->bobot}}</td>
		  		<td>{{$dp->nilai_kontrak_dibobotkan}}</td>
		  	</tr>
	  	@endforeach
	  	@php
	  		$tot+=$peng->jumlah;
	  		// $no++;
	  	@endphp
  	@endforeach
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td colspan="5" style="text-align: right;">Jumlah Nilai Setelah dibobotkan</td>
  		<td style="text-align: right;"> {{$tot}}  </td>
  	</tr>
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td colspan="5" style="text-align: right;"> KD (3 x NPt *) / Tahun</td>
  		<td style="text-align: right;"> {{date('Y')}}  </td>
  	</tr>
  </table>


</body>

</html>