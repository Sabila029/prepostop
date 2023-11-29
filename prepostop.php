<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PrepostOperasi</title>

    <style>
      .box1{
        width: 450px;
        height: 80px;
        background: transparent;
      }
      .box2{
        width: 300px;
        height: 80px;
        background: transparent;
      }

      .kbw-signature { width: 250px; height: 200px; }
    </style>



<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="js/jquery.signature.js"></script>
<script>
$(function() {
  var sig = $('#sig2').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});

</script>
<script>
$(function() {
  var sig = $('#sig3').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>

<script>
$(function() {
  var sig = $('#sig4').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>

<script>
$(function() {
  var sig = $('#sig5').signature();
  $('#disable').click(function() {
    var disable = $(this).text() === 'Disable';
    $(this).text(disable ? 'Enable' : 'Disable');
    sig.signature(disable ? 'disable' : 'enable');
  });
  $('#clear').click(function() {
    sig.signature('clear');
  });
  $('#json').click(function() {
    alert(sig.signature('toJSON'));
  });
  $('#svg').click(function() {
    alert(sig.signature('toSVG'));
  });
});
</script>


  </head>




  <body>
    <div class="container mt-3" >

      <h3 style="text-align: right;">RM 10 Lanjutan 2</h3>

      <h6>RSUD Dr. M YUNUS BENGKULU</h6>
      <h6>JALAN BHAYANGKARA KOTA BENGKULU</h6>

 <div class="row">
  <div class="col-6">
    <div class="box" style="border: 1px solid black; text-align: center"><font size="5"><b>SERAH TERIMA</b>
    <br><b>PRE OPERASI DAN POST OPERASI</b></font></div> 
  </div>

  <div class="col-6">
     <div class="box" style="border: 1px solid black;">
      <div class="col-md-10">
                <label for="">NO. MR</label>
                : <input type="text" id="no_Registration" name="no_Registration" autofocus readonly>
      </div>
      <div class="col-md-10">
                <label for="">Nama</label>
                : <input type="text" id="thename" name="thename" readonly>
             </div>
           </td>

      <div class="col-md-10">
                <label for="">Tanggal Lahir</label>
                : <input type="date" id="date_of_birth" name="date_of_birth" readonly>
             </div>
      <div>
                                   <label for="">Jenis Kelamin</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="gender" readonly>
                                        <label class="form-check-label" for="gender">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="gender" value="gender" readonly>
                                        <label class="form-check-label" for="gender">Perempuan</label>
                                    </div>
                                </div>
           
  </div>
 </div>


    <table class="table table-bordered" style="border: 1px solid black;">
      <tbody>

        <tr>
          <td colspan="6">
            <div class="row">
              <div class="col-2">
               <label for="">Tanggal Operasi</label>
               </div>
               <div class="col-4">
               : <input type="date" id="v_01" name="v_01" style="width: 100px;" >
             </div>
             <div class="col-1">
                  <label for="">Sifat</label>
              </div>
              <div class="col-2">
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="t_01" id="t_01_elektif">
                <label class="form-check-label" for="t_01_elektif">Elektif</label>
                </div>
                <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="t_01" id="t_01_cito">
                <label class="form-check-label" for="t_01_cito">Cito</label>
                </div>                 
                </div>
              </div>
                   </td>
                  </tr>

        <tr>
          <td colspan="6">
            <div class="row">
              <div class="col-6">
             <div class="row mb-3">
                <div class="col-md-4">
                 <label for="">Operator</label>
                </div>
                <div class="col-md-6">
                : dr.<input type="text" id="v_02" name="v_02" style="width: 150px;" >
                </div>
              </div>
            </div>
            <div class="col-6">
              <div class="row mb-3">
                <div class="col-md-4">
                 <label for="">Anastesiolog</label>
                </div>
                <div class="col-md-6">
                : dr.<input type="text" id="v_03" name="v_03" style="width: 150px;" >
                </div>
              </div>
            </div>
            </div>
          </td>
        </tr>

        <tr>
          <td colspan="6">
            <div class="row mb-3">
                                <div class="col-md-2">
                                    <label for="">Diagnosa Op. /Lokasi </label>
                                </div>
                                <div class="col-md-6">
                                   : <input type="text" id="v_04" name="v_04" style="width: 300px;">
                                </div>
                            </div>
          </td>
        </tr>

        <tr style="background-color: black; color: white; text-align: center;" >
          <td colspan="4" style="width: 50%;"><b>DAFTAR CEK PRE OPERASI</b></td>
          <td colspan="2"><b>PEMERIKSAAN POST OPERASI</b></td>
        </tr>
        <tr style="text-align: center; background-color: #C0C0C0;">
          <td></td>
          <td><b>Item Pengecekan</b></td>
          <td><b>Ya</b></td>
          <td><b>Tidak</b></td>
          <td colspan="2"><b>Item Pemeriksaan</b></td>
        </tr>


        <tr>
          <td style="text-align: center;">1</td>
          <td>Bon Permintaan</td>
         <td>
            <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02">
                              </div>
                            </div>
           </td>
           <td>
           <div class="mb-1">
                              <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="t_02" id="t_02">
                              </div>
                            </div>
          </td>
          <td style="text-align: center;">1</td>
          <td>
             <div class="row align-items-center">
              <div class="col-md-6">
                <label class="col-form-label">Laporan Operasi/Lap Anestesi</label>
              </div>
              <div class="col-md-4">
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="t_05" value="t_05">
                  <label>Ada</label>
                </div>
                <div class="form-check-inline">
                  <input type="radio" class="form-check-input" name="t_05" value="t_05">
                  <label>Tidak</label>
                </div>
              </div>
            </div>
          </td>
         </tr>


         <tr>
           <td style="text-align: center;">2</td>
           <td>Gelang Identitas Pasien</td>
           <td>
            <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_06">
                              <label class="form-check-label" name="t_06"></label>
                            </div>
           </td>
           <td>
           <div class="mb-1 form-check">
                              <input for="tidak" type="checkbox" class="form-check-input" id="t_07">
                              <label class="form-check-label" name="t_07"></label>
                            </div>
          </td>
           <td rowspan="3" style="text-align: center;">2</td>
           <td rowspan="3">
             <div class="col-md-4">
                <label for="">Tanda-tanda vital :</label>
             </div>
             <div class="row">
              <div class="col-6">
             <div class="col-md-5">
                <label for="">TD</label>
                : <input type="text" id="v_07" name="v_07" style="width: 50%">mmHg
             </div>
            <div class="col-md-5">
                <label for="">RR</label>
                : <input type="text" id="v_08" name="v_08" style="width: 50%">x/mnt
             </div>
          </div>
          <div class="col-6">
            <div class="col-md-5">
                <label for="">N</label>
                : <input type="text" id="v_09" name="v_09" style="width: 50%">x/mnt
             </div>
            <div class="col-md-5">
                <label for="">S</label>
                : <input type="text" id="v_10" name="v_10" style="width: 50%">°C
             </div>
          </div>
          </div>
           </td>
         </tr>


         <tr>
           <td style="text-align: center;">3</td>
           <td>Informed Concent Bedah</td>
          <td>
            <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_08">
                              <label class="form-check-label" name="t_08"></label>
                            </div>
           </td>
           <td>
           <div class="mb-1 form-check">
                              <input for="tidak" type="checkbox" class="form-check-input" id="t_09">
                              <label class="form-check-label" name="t_09"></label>
                            </div>
          </td>
         </tr>

          <tr>
           <td style="text-align: center;">4</td>
           <td>Informed Concent Anestesi</td>
           <td>
            <div class="mb-1 form-check">
                              <input for="perempuan" type="checkbox" class="form-check-input" id="t_010">
                              <label class="form-check-label" name="t_010"></label>
                            </div>
           </td>
           <td>
           <div class="mb-1 form-check">
                              <input for="perempuan" type="checkbox" class="form-check-input" id="t_011">
                              <label class="form-check-label" name="t_011"></label>
                            </div>
          </td>
         </tr>

         <tr>
           <td style="text-align: center;">5</td>
           <td>Asesmen Pra Anestesi</td>
          <td>
            <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_012">
                              <label class="form-check-label" name="t_012"></label>
                            </div>
           </td>
           <td>
           <div class="mb-1 form-check">
                              <input for="tidak" type="checkbox" class="form-check-input" id="t_013">
                              <label class="form-check-label" name="t_013"></label>
                            </div>
          </td>
           <td rowspan="2" style="text-align: center;">3</td>
           <td rowspan="2">
             <div class="row mb-3">
                <div class="col-md-2">
                 <label for="">Kesadaran</label>
                </div>
                <div class="col-md-8">
                : <input type="text" id="v_01" name="v_01">
                </div>
              </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">6</td>
           <td>Asesmen Pra Operasi</td>
          <td>
            <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
           <div class="mb-1 form-check">
                              <input for="tidak" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
          </td>
         </tr>

         <tr>
           <td rowspan="2" style="text-align: center;">7</td>
           <td rowspan="2">
            <p>Pemeriksaan Penunjang</p>
            <p>X-Ray/CT-Scan/MRI/USG/EKG/EEG/</p>
            <p>Laboraturium</p></td>
           <td rowspan="2">
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="2">
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>4</td>
           <td>   
                                <div>
                                   <label class="col-3" for="">Jalan Nafas</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Bersih</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Parsial</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Tersumbat</label>
                                    </div>
                                </div>
                            


           </td>
         </tr>

         <tr>
           <td rowspan="3">5</td>
           <td>
             <div class="row mb-3">
                <div class="col-md-2">
                 <label for="">Kulit</label>
                </div>
                <div class="col-md-8">
                : <input type="text" id="v_01" name="v_01">
                </div>
              </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2">8</td>
           <td>
             <div class="row mb-3">
                <div class="col-md-2">
                 <label for="">Persiapan Darah</label>
                </div>
                <div class="col-md-8">
                : <input type="text" id="v_01" name="v_01">
                </div>
              </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div>
                                   <label class="col-2" for="">Warna</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Kemerahan</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Pucat</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Sianosis</label>
                                    </div>
                                </div>
           </td>
         </tr>

         <tr>
           <td>
            <div class="row mb-3">
                <div class="col-md-2">
                 <label for="">Jumlah</label>
                </div>
                <div class="col-md-8">
                : <input type="text" id="v_01" name="v_01">
                </div>
              </div>
            </td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="row mb-3">
                <div class="col-md-2">
                 <label for="">Turgor</label>
                </div>
                <div class="col-md-8">
                : <input type="text" id="v_01" name="v_01">
                </div>
              </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">9</td>
           <td>Informed Concent Tranfusi</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>6</td>
           <td>
            <div class="row">
              <div class="col-4">
            <div class="mb-1">
                              <label for="alasan" type="text" id="v_12" name="v_12">Klasifikasi Luka Operasi</label>
                            </div>
             <div class="mb-1 form-check">
                              <input for="perempuan" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04">Bersih</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="mb-1 form-check">
                              <input for="laki" type="checkbox" class="form-check-input" id="t_05">
                              <label class="form-check-label" name="t_05">Bersih</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input for="perempuan" type="checkbox" class="form-check-input" id="t_06">
                              <label class="form-check-label" name="t_06">Terkontaminasi</label>
                            </div>
                          </div>
                          <div class="col-4">
                            <div class="mb-1 form-check">
                              <input for="laki" type="checkbox" class="form-check-input" id="t_07">
                              <label class="form-check-label" name="t_07">Terkontaminasi</label>
                            </div>
                            <div class="mb-1 form-check">
                              <input for="perempuan" type="checkbox" class="form-check-input" id="t_08">
                              <label class="form-check-label" name="t_08">Infeksi</label>
                              </div>
                            </div>
            </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2">10</td>
           <td>
             <div class="col-md-10">
                <label for="">Premediksi:</label>
                Jam : <input type="time" id="v_01" name="v_01">WIB
             </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="4">7</td>
           <td>
             <div class="col-md-10">
                <label for="">Drain</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>


         <tr>
           <td>
             <div class="col-md-10">
                <label for="">Nama Obat </label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Lokasi</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">11</td>
           <td>Lembar Penandaan Operasi</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Jumlah Cairan</label>
                : <input type="text" id="v_01" name="v_01"> CC
             </div>
           </td>
         </tr>

         <tr>
           <td rowspan="2" style="text-align: center;">12</td>
           <td>Tanda-tanda vital</td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Warna</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td>
             <div class="row">
              <div class="col-3">
             <div class="col-md-7">
                <label for="">TD</label>
                : <input type="text" id="v_01" name="v_01" style="width: 40%">
             </div>
           </div>
           <div class="col-3">
            <div class="col-7">
                <label for="">RR</label>
                : <input type="text" id="v_01" name="v_01" style="width: 40%">
             </div>
           </div>
          <div class="col-3">
            <div class="col-md-7">
                <label for="">N</label>
                : <input type="text" id="v_01" name="v_01" style="width: 40%">
             </div>
           </div>
           <div class="col-3">
            <div class="col-md-7">
                <label for="">S</label>
                : <input type="text" id="v_01" name="v_01" style="width: 40%">
             </div>
          </div>
          </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="5">8</td>
           <td><div class="col-md-10">
                <label for="">Infus</label>
                : <input type="text" id="v_01" name="v_01">
             </div></td>
         </tr>

         <tr>
           <td style="text-align: center;">13</td>
           <td>
             <div class="col-md-10">
                <label for="">Puasa, mulai jam</label>
                : <input type="time" id="v_01" name="v_01"> WIB
             </div>
           </td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
              <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Jenis Cairan</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">14</td>
           <td>Lavement/Hukmah/Klisma dilakukan</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Lokasi</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">15</td>
           <td>Persiapan Kulit/Cukur dilakukan</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Jumlah Tetesan</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;" rowspan="4">16</td>
           <td>
             <div class="col-md-10">
                <label for="">Protese</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Sisa Cairan</label>
                : <input type="text" id="v_01" name="v_01"> CC
             </div>
           </td>
         </tr>

         <tr>
           <td>Gigi Palsu Dilepas</td>
            <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="3">9</td>
           <td>
             <div class="col-md-10">
                <label for="">Katheter urin</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td>Kontak Lensa dilepas</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Jumlah Urin</label>
                : <input type="text" id="v_01" name="v_01"> CC
             </div>
           </td>
         </tr>

         <tr>
           <td>Alat bantu dengar dilepas</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Warna</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">17</td>
           <td>Pace Maker (Alat Pace Jantung) Terpasang</td>
            <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="5">10</td>
           <td>
              <div class="col-md-10">
                <label for="">Produk Operasi</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">18</td>
           <td>Perhiasan Dilepas</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div>
                                   <label class="col-2" for="">Implant</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Pins</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Plate</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Screw</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Kirsner</label>
                                    </div>
                                </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">19</td>
           <td>Cat Kuku Dihapus</td>
          <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
              <div class="col-md-10">
                <label for="">Spesimen</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">20</td>
           <td>`IV.Line (infus) terpasang</td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
              <div class="col-md-10">
                <label for="">Jaringan Tubuh</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>


         <tr>
           <td style="text-align: center;" rowspan="2">21</td>
           <td rowspan="2">Kateter Urin Terpasang</td>
           <td rowspan="2">
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td rowspan="2">
             <div class="mb-1 form-check">
                              <input for="ya" type="checkbox" class="form-check-input" id="t_04">
                              <label class="form-check-label" name="t_04"></label>
                            </div>
           </td>
           <td>
             <div class="col-md-10">
                <label for="">Corpal</label>
                : <input type="text" id="v_01" name="v_01">
             </div>
           </td>
         </tr>

         <tr>
           <td style="text-align: center;">11</td>
           <td>
              <div>
                                   <label class="col-7" for="">Alasan Transfer ke ruangan</label>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Skor Aldert</label>
                                        <input type="text" name="" id="">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Skor Stewart</label>
                                        <input type="text" name="" id="">
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">Skor Bromage</label>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>
           </td>
         </tr>

         <tr style="text-align: center; background-color: #C0C0C0;" >
          <td colspan="3" style="width: 50%;"><b>Catatan / Keterangan Lain :</b></td>
          <td colspan="3"><b>Catatan / Keterangan Lain :</b></td>
        </tr>


        <tr >
          <td colspan="3" style="width: 50%;">
          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">HBsAG</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02">B20/HIV</label>
                                    </div></td>
          <td colspan="3">
             <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">PA</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Kultur</label>
                                    </div>
                                     <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_01" value="option1">
                                        <label class="form-check-label" for="t_01">Formulir PA/Kultur</label>
                                    </div>

          </td>
        </tr>


         <tr >
          <td colspan="3" style="width: 50%;">
          <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02"></label>
                                        <input type="text" name="" id=""></td>
          <td colspan="3"><div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="t_02" value="option2">
                                        <label class="form-check-label" for="t_02"></label>
                                        <input type="text" name="" id=""></td>
        </tr>


        <tr style="text-align: center;">
          <td colspan="3" style="width: 50%;">
          <div class="col-9">
                <label for="">Tanggal</label>
                : <input type="date" id="v_01" name="v_01">
                 <label for="">Jam</label>
                : <input type="time" id="v_01" name="v_01"> WIB
             </div>
             
           </td>
          <td colspan="3" style="width: 50%;">
          <div class="col-8">
                <label for="">Tanggal</label>
                : <input type="date" id="v_01" name="v_01">
                 <label for="">Jam</label>
                : <input type="time" id="v_01" name="v_01"> WIB
             </div>
             
           </td>
        </tr>


      </tbody>
    </table>



    <table  class="table table-bordered" style="border: 1px solid black;">
      <tr style="text-align: center;">
          <td>
            <div>
<div class="col-md-8">
                <label for="">Diserahkan oleh perawat </label>
                Ruang :<input type="text" id="v_01" name="v_01" style="width: 100px;">
             </div>
    <div class="mb-1" >
      <div id="sig2"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text">
  </div>
</div>
          </td>
          <td style="text-align: center;">
            <div>
 <div class="mb-3">
    <label for="alasan" type="text">Diterima oleh perawat Ruang </label>
    <p>Terima Ibis</p>
  </div>
    <div class="mb-1" >
      <div id="sig3"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text">
  </div>
</div>

          </td>
          <td style="text-align: center;">
            <div>
 <div class="mb-3">
    <label for="alasan" type="text">Diserahkan oleh perawat</label>
    <p>Recovery Room (RR)</p>
  </div>
    <div class="mb-1" >
      <div id="sig4"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text">
  </div>
</div>

          </td>
          <td>
            <div>
<div class="col-md-8">
                <label for="">Diterima oleh perawat </label>
                Ruang :<input type="text" id="v_01" name="v_01" style="width: 100px;">
             </div>
    <div class="mb-1" >
      <div id="sig5"></div>
    <br><label for="ruang">NIP.</label>
    <input type="text">
  </div>
</div>
          </td>
        </tr>
      
    </table>



    </div>
  </body>
</html>