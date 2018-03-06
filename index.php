<?php
include 'class/action.php';

if(!isset($_SESSION["Login"])){
  header("Location: login.php");
  exit;
}

if(isset($_POST["submitc"])){
  if(!isset($_SESSION["Login"])){
    echo "<script>
            alert('Mohon Login terlebih dahulu');
          </script>";
  }
}
 ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Departemen Teknologi Informasi</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!--  Bootstrap-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.css" rel="stylesheet">


  </head>

  <body id="page-top">
    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-header"><br>Departemen Teknologi Informasi</h1>
              <p class="intro-text">Institut Teknologi Sepuluh Nopember <br>Surabaya</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="content-section text-center"> <!-- karena ada content-section jd auto atur height-->
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-lg-5 panel panel-info panelbg">
              <div class="panel-heading">
                  <h2> Visi</h2>
              </div>
            <p><br>Menjadi Program Studi Teknologi Informasi yang unggul dalam bidang keamanan siber dan Teknologi
               berbasis internet<i>(internet of Things)</i> untuk mendukung pembangunan <i>Smart City</i>
               secara berkelanjutan</p>
          </div>
          <div class="col-sm-6 col-lg-offset-1 panel panel-info panelbg">
              <div class="panel-heading">
                  <h2> Misi</h2>
              </div>
            <p>
              <div style="text-align: justify" id="besar">
                <ol>
                  <li>Menyelenggarakan pendidikan dan pengajaran Teknologi Informasi dengan menggunakan kurikulum yang adaptif, berorientasi ke masa depan dan didukung SDM yang berkualitas serta fasilitas yang memadai.</li>
                  <li>Melaksanakan penelitian yang bermutu di bidang Keamanan Siber dan <i>Internet of Things</i> untuk Teknologi <i>Smart City.</i> </li>
                  <li>Menjalin kemitraan dengan instansi dalam maupun luar negeri. </li>
                  <li>Menyelenggarakan pengabdian kebada masyarakat berupa pelatihan, penyuluhan, penerapan hasil penelitian untuk pengembangan potensi dan pemberdayaan masyarakat daerah.</li>
                </ol>
              </div>
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Download Section -->
    <section id="profile" class="download-section content-section text-center">
      <div class="page-header">
        <h1>Profil Lulusan</h1>
      </div>
      <div class="container">
        <div class="row">
          <div class="container">
            <div class="col-lg-4">
                <h2>Spesialis Keamanan Siber</h2>
              <p><i>(Cyber Security Specialist)</i></p>
              <img src="img/ka.png" class="img-thumbnail img-responsive hilang" width="304" height="236">
            </div>
            <div class="col-lg-4">
              <h2>Analis Keamanan Aplikasi</h2>
              <p><i>(Application Security Analyst)</i></p>
              <img src="img/ks.png" class="img-thumbnail img-responsive hilang" width="304" height="236">
            </div>
            <div class="col-lg-4">
              <h2>Spesialis Integrasi Sistem</h2>
              <p><i>(Sistem Integrator Specialist)</i></p>
              <img src="img/is.png" class="img-thumbnail img-responsive hilang" width="304" height="236">
            </div>

            <div class="col-lg-offset-2 col-lg-4">
              <h2><br>Pengembang layanan awan</h2>
              <p><i>(Cloud Service Developer)</i></p>
              <img src="img/cc.png" class="img-thumbnail img-responsive hilang" width="304" height="236">
            </div>

            <div class="col-lg-offset-1 col-lg-4">
              <h2><br>Spesialis Internet of Things</h2>
              <p><i>(IoT Specialist)</i></p>
              <img src="img/iot.png" class="img-thumbnail img-responsive hilang" width="304" height="236">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="page-header bordercolor">
              <h2>Seleksi Masuk</h2>
            </div>
            <div style="text-align:justify">
              <ul>
                <li>SNMPTN ( <a href="https://smits.its.ac.id/sarjana/#snmptn">https://smits.its.ac.id/sarjana/#snmptn</a>)</li>
                <li>SBMPTN ( <a href="https://smits.its.ac.id/sarjana/#sbmptn">https://smits.its.ac.id/sarjana/#sbmptn</a>)</li>
                <li>PKM  ( <a href="https://smits.its.ac.id/sarjana/#pkm">https://smits.its.ac.id/sarjana/#pkm</a>) </li>
              </ul>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="page-header bordercolor">
              <h2>Hubungi Kami</h2>
            </div>
            <p>Email : <strong>teknologi.informasi@its.ac.id</strong> </p>
          </div>
          <!-- Map Section -->
          <div class="col-lg-4" id="google-maps">
              <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.23497771358!2d112.79156582375936!3d-7.284288475946817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa1323221a93%3A0x306c3c99adedb258!2sSepuluh+Nopember+Institute+of+Technology!5e0!3m2!1sen!2sid!4v1519734716299" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> -->
          </div>
        </div>
      </div>
    </section>

    <form class="" action="class/action.php" method="post">
      <div class="form-group container scroll">
        <label for="comment">Comment:</label>
        <textarea placeholder="1 account 1 comment :)" class="form-control" rows="5" id="comment" name="comment"></textarea>
      </div>

      <div class="" style="text-align:center">
          <button class="btn btn-primary" name="submitc"  type="submit" >Submit</button>
      </div>
    </form>

      <form class="" action="logout.php" method="post">
        <button class="btn btn-primary" name="submitc"  type="submit" >Logout</button>
      </form>
      
      <div class="page-header bordercolor">
        <h2>Komentar</h2>
      </div>

      <table class="table table-bordered" >
        <tr>
          <th>Nama</th>
          <th>Komentar</th>
        </tr>
        <?php
          $barisan_data = $obj -> show_record("data");
          foreach ($barisan_data as $row) {

        ?>
        <tr>
          <td><?php echo $row["Nama"];?> </td>
          <td><?php  echo $row["Komentar"]; }?></td>
        </tr>
      </table>


    <!-- Footer -->
    <footer>
      <div class="container-fluid text-center" id="foot">
        <p>Copyright &copy; Teknologi Informasi 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.js"></script>

  </body>

</html>
