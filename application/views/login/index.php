<?php
$assets  = $this->config->item('assets');
$path    = $this->config->item('path');
?>
</!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="icon" href="<?php echo $assets;?>/dist/img/krm.png" type="image/gif" sizes="16x16">
   <title>LOGIN | KRAMA YUDHA</title>

   <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/style-login.css');?>">
   <link rel="stylesheet" href="<?php echo base_url('assets/fonts/fontawesome/css/all.css');?>">
</head>
<body>
   <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
         <div class="user_card">
            <div class="d-flex justify-content-center">
               <div class="brand_logo_container">
                  <img src="<?php echo $assets;?>/dist/img/krm2.png" class="brand_logo" alt="Logo">
                  <h6 class="pt-3">PT. KRAMA YUDHA RATU MOTOR</h6>
               </div>
            </div>

            <div class="d-flex justify-content-center form_container pt-5">
            <?php
            // Cek apakah terdapat session nama message
            //if($this->session->flashdata('message')){ // Jika ada
            //  echo '<div class="alert alert-danger">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
            //}
            //?>

            <form action="<?php echo base_url('auth/proses_login');?>" method="POST">
               <div class="input-group mb-3">
                  <div class="input-group-append">
                     <span class="input-group-text"><i class="fas fa-user"></i></span>
                  </div>
                  <input type="text" name="username" id="username" class="form-control input_user" value="" placeholder="username" required>
               </div>
               <div class="input-group mb-2">
                  <div class="input-group-append">
                     <span class="input-group-text"><i class="fas fa-key"></i></span>
                  </div>
                  <input type="password" name="password" id="password" class="form-control input_pass" placeholder="password" required>
               </div>
               <div class="form-group">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" id="customControlInline">
                     <label class="custom-control-label" for="customControlInline">Ingat saya</label>
                  </div>
               </div>
               <div class="pt-2">
                  <button class="btn login_btn" type="submit">Login</button>
               </div>
            </form>
            </div>
         </div>
      </div>
   </div>