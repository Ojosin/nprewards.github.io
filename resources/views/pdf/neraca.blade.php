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


  <div style="margin-bottom: 30px;font-size: 18px">
      <table  width="100%">
          <tr style="text-align: center;">
              <td>
                <br>Formulir Data Keuangan </br>
                <br>Neraca dan Badan Usaha </br>
                <br>Per 31 Des </br>
                <br>(dalam ribuan rupiah)</br>
              </td>
          </tr>
      </table>
  </div>


  <table width="100%" border="1" cellspacing="0" cellpadding="">
  	<tr style="background: #D3D3D3">
  		<th>No</th>
  		<th>Aktiva</th>
  		<th>Tahun "N"</th>
  		<th>Tahun "N-1"</th>
  		<th>No</th>
  		<th>Pasiva</th>
  		<th>Tahun "N"</th>
  		<th>Tahun "N-1"</th>
  	</tr>
	  	@php
	  		$no= 1;
	  		$tot= 0;
	  		$tot_dasar= 0;
	  	@endphp
{{-- 	  	@foreach($neraca as $ne)
 --}}	  	
 			<tr>
 				<td style="text-align: center;">I</td>
 				<td>AKTIVA LANCAR</td>
 				<td></td>
 				<td></td>

 				<td style="text-align: center;">I</td>
 				<td>KEWAJIBAN LANCAR</td>
 				<td></td>
 				<td></td>

 			</tr>
 			<tr>

		  		<td style="text-align: center;">1</td>
		  		<td>Kas dan Bank</td>
		  		<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>


		  		<td style="text-align: center;">1</td>
		  		<td>Utang Usaha</td>
		  		<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		{{-- <td>
		  			{{$neraca->jumlah_lembar_saham}} 
		  		</td>

		  		<td>
		  			{{$neraca->nilai_saham}} 
		  		</td>

		  		<td>
		  			{{$neraca->modal_disetor}} 
		  		</td> --}}
	  		</tr>
	  		<tr>
	  			<td style="text-align: center;">2</td>
	  			<td>Piutang</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">2</td>
	  			<td>Utang Bank (jangka pendek)</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>
	  		<tr>
	  			<td style="text-align: center;">3</td>
	  			<td>Persediaan</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">3</td>
	  			<td>Uang Muka Proyek</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

			<tr>
				<td style="text-align: center;">4</td>
	  			<td>Piutang Pajak</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
		  		<td style="text-align: center;"> 4 </td>
		  		<td>Utang Pajak</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

	  		<tr>
	  			<td style="text-align: center;">5</td>
	  			<td>Biaya Bayar dimuka</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">5</td>
	  			<td>Biaya yanga Harus dibayar</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>
	  		<tr>
	  			<td style="text-align: center;">6</td>
	  			<td>Pekerjaan dalam Proses</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>	

		  		<td style="text-align: center;">6</td>
	  			<td>Utang Jangka Panjang Sudah Jatuh Tempo</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

			<tr>
				<td></td>
	  			<td> Total Aktiva Lancar </td>
	  			<td> </td>
	  			<td>  </td>
	  			<td style="text-align: center;"> 7 </td>
	  			<td> Utang Lainnya</td>
	  			<td></td>
	  			<td></td>
	  		</tr>
	  		<tr>
	  			<td colspan="5" style="text-align: right;"></td>
	  			<td> TOTAL KEWAJIBAN LANCAR</td>
	  			<td></td>
	  			<td></td>
	  		</tr>

	  		<tr>
	  			<td colspan="4" style="text-align: right;"></td>
	  			<td style="text-align: center;">II</td>
	  			<td> KEWAJIBAN JANGKA PANJANG</td>
	  			<td></td>
	  			<td></td>
	  		</tr>
			
			<tr>
				<td style="text-align: center;">II</td>
	  			<td>AKTIVA TETAP</td>
	  			<td></td>
	  			<td></td>

	  			<td style="text-align: center;">1</td>
	  			<td>Utang Bank (Jangka Panjang)</td>
	  			<td></td>
	  			<td></td>
	  		</tr>

	  		<tr>
	  			<td style="text-align: center;">1</td>
	  			<td>Peralatan proyek</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">2</td>
	  			<td>Utang Lainnya</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>
	  		<tr>
	  			<td style="text-align: center;">2</td>
	  			<td>Inventaris</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">II</td>
	  			<td>MODAL</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

	  		<tr>
	  			<td style="text-align: center;">3</td>
	  			<td>Peralatan Lainnya</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">1</td>
	  			<td>Modal Disetor</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>


	  		<tr>
	  			<td style="text-align: center;">1</td>
	  			<td>Komulasi Penyusutan</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">2</td>
	  			<td>Selisih Penilaian Kembali Aktiva Tetap</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

	  		<tr>
	  			<td></td>
	  			<td>Total Aktiva Tetap</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td style="text-align: center;">3</td>
	  			<td>Laba Ditahan</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>



			<tr>
				<td style="text-align: center;">III</td>
	  			<td>AKTIVA LAINNYA</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
		  		<td></td>
		  		<td></td>
		  		<td></td>
		  		<td></td>
	  		</tr>

			<tr>
				<td></td>
	  			<td>Total Aktiva</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>

		  		<td></td>
	  			<td>Total Kewajiban dan Modal</td>
	  			<td>
		  			{{$neraca->kasbank_aktv_sblm}} 
		  		</td>
				<td>
		  			{{$neraca->kasbank_aktv_sudah}} 
		  		</td>
	  		</tr>

	  	@php
	  		$tot+=$neraca->modal_disetor;
	  		$tot_dasar+=$neraca->modal_disetor;
	  		$no++;
	  	@endphp
{{--   	@endforeach
 --}}  	<tr>
  		<td></td>
  		<td></td> 
  		<td></td>
  		<td colspan="2" style="text-align: right;">Total Aktiva</td>
  		<td> {{$tot}}  </td>
  	</tr>
  	<tr>
  		<td></td>
  		<td></td>
  		<td></td>
  		<td colspan="2" style="text-align: right;">Total Kewajiban dan Modal</td>
  		<td> {{$tot_dasar}}  </td>
  	</tr>
  </table>


</body>

</html>