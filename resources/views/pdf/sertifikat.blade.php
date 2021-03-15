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

<body style="background-color: #fff">

  <table width="100%">
    <tr>
        <td style="text-align: center;"  width="10%">
            <img src="<?php  echo public_path().'/assets/images/logo-kadin-indonesia.png' ?>" width="100" height="100">
            <br>
            Nomor Registrasi ............
        </td>
        <td width="80%" style="text-align: center;">
            <h2>IKATAN NASIONAL KONSULTAN INDONESIA </h2>
            <h2>(National Association of Indonesian Consultants) </h2>
            <br><br>
            <h2>SERTIFIKAT BADAN USAHA JASA KONSULTANSI NON-KONSTRUKSI</h2>
        </td>
        <td width="10%" style="text-align: center;">
            <img src="<?php  echo public_path().'/assets/images/inkindo.jpg' ?>" width="100" height="100">
            <br>
            Nomor Akreditasi
            <br>
            01-009-310707
        </td>
    </tr>
  </table>

  <div style="margin-bottom: 20px;margin-top: 20px;">
      <table>
          <tr>
              <td style="text-align: justify;">
                  Sesuai  dengan  ketentuan  Undang  Undang  Republik  Indonesia  Nomor  1  Tahun  1987  tentang  Kamar  Dagang  dan  Industri,  Keputusan  Presiden  Republik  Indonesia  Nomor  17  Tahun  2010  tentang  Persetujuan  Perubahan  Anggaran  Dasar  dan  Anggaran  Rumah  Tangga  Kamar  Dagang  dan  Industri,  serta  berdasarkan  Keputusan  Dewan Pengurus Kamar Dagang dan Industri Indonesia Nomor Skep/071/DP/VII/2007 tentang Akreditasi DPP Ikatan Nasional Konsultan Indonesia sebagai Penerbit Sertifikat Kompetensi & Kualifikasi Perusahaan serta perpanjangannya, dengan ini Badan Sertifikasi Anggota Nasional  INKINDO menetapkan bahwa :
              </td>
          </tr>
      </table>
  </div>

  <table cellpadding="0" cellspacing="0">
      <tr>
          <td>
            <table cellspacing="0" cellspacing="0">
                <tr>
                    <td>Nama Badan Usaha</td>
                    <td> :</td>
                    <td> {{$administrasi->nama_badan_usaha}} </td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td> : </td>
                    <td>{{$administrasi->alamat}}</td>
                </tr>

                <tr>
                    <td>Telepon</td>
                    <td> : </td>
                    <td>{{$administrasi->telepon}}</td>
                </tr>

                <tr>
                    <td>Kabupaten / Kota</td>
                    <td> : </td>
                    <td>{{$administrasi->kabupaten->nama_kabupaten}}</td>
                </tr>
                <tr>
                    <td>NPWP</td>
                    <td> : </td>
                    <td>{{$administrasi->npwp}}</td>
                </tr>
                <tr>
                    <td>Nama Pimpinan Badan Usaha</td>
                    <td> : </td>

                    <td>{{( !empty($pengurus->nama)  )  ? $pengurus->nama : "" }}</td>
                </tr>
                <tr>
                    <td>Golongan Badang Usaha</td>
                    <td> : </td>
                </tr>
            </table>
          </td>
      </tr>
  </table>

    <div style="margin-bottom: 20px">
        <table>
        
          <tr>
              <td>dinyatakan  dapat  melaksanakan  kegiatan  usaha  jasa  konsultansi  non-konstruksi  di  seluruh  wilayah  Republik  Indonesia  dengan  klasifikasi  dan  kualifikasi  sebagaimana tercantum di halaman belakang sertifikat ini. Sertifikat ini berlaku sejak tanggal ditetapkan sampai dengan tanggal  .................................</td>
          </tr>
        </table>
    </div>


<table width="100%">
    <tbody>
        <tr>
            <td style="width: 10%; height: 50px;" rowspan="3">
                <p style="margin-right: 200px;margin-left: 50px;text-align: center;"> 
                    Pas Foto<br /> 
                    3 x 4 cm <br /> 
                    Dirut/Pimpinan<br /> 
                    Badan Usaha <br /> 
                </p>
            </td>
            <td style="width: 45%; height: 50px; text-align: center;">
                <div style="text-align: center;">
                    Sertifikat ini telah diregistrasi pada <br> Kamar Dagang dan Industri Indonesia <hr style="width: 300px"> Kamar Dagang dan Industri Indonesia 
                </div>
            </td>
            {{-- <td style="width: 15.4361%; height: 50px; text-align: center;">Diserahkan</td> --}}
            <td style="width: 45%; height: 50px; text-align: center;">
                <div style="text-align: center;" >
                    Ditetapkan di Jakarta Pada tanggal :  <br> Dewan Pengurus  Nasional <br> Ikatan Nasional Konsultan Indonesia
                </div>
            </td>
        </tr>
        <tr>
            <td style="width: 15%; height: 50px;">&nbsp;</td>
            <td style="width: 15.5639%; height: 50px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="width: 15%; height: 50px;text-align: center;" >------------------------------ <br>Ketua Umun</td>
            <td style="width: 15.4361%; height: 50px;text-align: center;">
                ------------------------------ <br>Ketua Umum
            </td>
        </tr>
    </tbody>
</table>


{{-- 
  <table>
      <tr>
            <td style="border-style: dotted;text-align: center;" width="5%" rowspan="3">
              Pas Foto
              <br>
               3 x 4 cm 
               <br>
                Dirut/Pimpinan 
                <br>
                Badan Usaha 
            </td>
            <td width="45%">
                <div style="margin-left: 100px;margin-right: 500px">
                    <table cellpadding="0" cellspacing="0">
                        <tr>
                            <td>Sertifikat ini telah diregistrasi pada <br> 
                                Kamar Dagang dan Industri Indonesia <hr>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Kamar Dagang dan Industri Indonesia 
                            </td>
                        </tr>
                        <tr>

                            <td>
                                <div style="margin-top: 50px;text-align: center;">
                                    <br>
                                    Ketua Umum
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
            <td width="50%" style="text-align: center;"> Ditetapkan di Jakarta <br> Pada tanggal :  31 Januari 2008 <br>
            Dewan Pengurus Nasional <br> Ikatan Nasional Konsultan Indonesia</td>
      </tr>
  </table>

 --}}

</body>

</html>