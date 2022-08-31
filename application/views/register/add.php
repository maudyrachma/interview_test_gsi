<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Register
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Register</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
          <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <!-- <div class="box-header">
                    <h3 class="box-title">Input</h3>
                </div> -->
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" enctype="multipart/form-data" method="post" action="<?php echo base_url('register/proses_register');?>">
                    <div class="box-body">
                      <div class="form-group">
                          <label for="">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Email</label>
                          <input type="email" name="email" id="email" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">NIK</label>
                          <input type="number" name="nik" id="nik" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Jenis Kelamin</label>
                          <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Agama</label>
                          <input type="text" name="agama" id="agama" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Tempat Lahir</label>
                          <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Tanggal Lahir</label>
                          <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Tanggal Join</label>
                          <input type="date" name="join" id="join" class="form-control" placeholder="">
                      </div>
                      <!-- <div class="form-group">
                          <label for="">Jabatan</label>
                          <select class="form-control" id="jabatan" name="jabatan" required>
                            <option value="">-Select-</option>
                            <option value="HELPDESK">Helpdesk</option>
                            <option value="TEKNISI">Teknisi</option>
                            <option value="USER">User</option>
                          </select>
                      </div> -->
                      <div class="form-group">
                          <label for="">Username</label>
                          <input type="text" name="username" id="username" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Password</label>
                          <input type="password" name="password" id="password" class="form-control" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label for="">Assesment</label>
                          <textarea name="assesment" id="assesment" class="form-control" rows="4" cols="50" required></textarea>
                      </div>
                      </div>
                      <!-- <div class="form-group">
                          <label for="">Photo</label>
                          <input type="file" name="photo" id="photo" class="form-control">
                      </div> -->
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
              </div><!-- /.box -->
          </div><!--/.col (right) -->
      </div>   <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
