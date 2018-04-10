<!-- Bootstrap core CSS -->
<link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--  Bootstrap-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Custom fonts for this template -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Cabin:700" rel="stylesheet" type="text/css">

<!-- Custom styles for this template -->
<link href="<?php echo base_url();?>assets/css/grayscale.css" rel="stylesheet">
<table class="table table-bordered table-dark " style="border-color:black;" >
  <tr>
    <th>Nama</th>
    <th>Komentar</th>
    <!-- <th>Action</th> -->
  </tr>
  <?php
    // $barisan_data = $obj -> show_record("data");
    foreach ($user as $u) {
  ?>

  <tr>
    <td><?php echo $u->Nama?> </td>
    <td><?php  echo $u->Komentar?><?php } ?></td>
    <!-- <?php if($_SESSION("username")==$_SESSION("Login")) : ?>
      <td> <a href="hapus.php?id=" onclick="return confirm('Yakin?')"> Hapus</a></td>
    <?php endif; ?> -->
  </tr>
</table>


<!-- Bootstrap core JavaScript -->
<script src="<?php echo base_url();?>/assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url();?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url();?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url();?>/assets/js/grayscale.js"></script>
