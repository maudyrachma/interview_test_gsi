<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Personel
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Personel</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php 
      $data=$this->session->flashdata('sukses');
      if($data!=""){ ?>
      <div id="notifikasi" class="alert alert-success alert-dismissible"><strong>Sukses! </strong> <?=$data;?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php } ?>
     
      <?php 
      $data2=$this->session->flashdata('error');
      if($data2!=""){ ?>
      <div id="notifikasi" class="alert alert-danger alert-dismissible"><strong> Error! </strong> <?=$data2;?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <?php } ?>
      
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Personel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Nama</th>
                  <th>E-mail</th>
                  <th>NIK</th>
                  <th>J. Kelamin</th>
                  <th>Agama</th>
                  <th>Tempat Lahir</th>
                  <th>Tanggal Lahir</th>
                  <th>Join</th>
                  <th>Telp</th>
                 <!--  <th>Jabatan</th> -->
                  <th>Username</th>
                  <th>Assesment</th>
                  <!-- <th>Password</th> -->
                  <!-- <th>Photo</th> -->
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                  $no = 1;
                  foreach ($data_personel as $personel_temporary):
                ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $personel_temporary->nama; ?></td>
                    <td><?php echo $personel_temporary->email; ?></td>
                    <td><?php echo $personel_temporary->nik; ?></td>
                    <td><?php echo $personel_temporary->jenis_kelamin; ?></td>
                    <td><?php echo $personel_temporary->agama; ?></td>
                    <td><?php echo $personel_temporary->tempat_lahir; ?></td>
                    <td><?php echo $personel_temporary->tanggal_lahir; ?></td>
                    <td><?php echo $personel_temporary->join; ?></td>
                    <td><?php echo $personel_temporary->telp; ?></td>
                    <!-- <td><?php echo $personel_temporary->jabatan; ?></td> -->
                    <td><?php echo $personel_temporary->username; ?></td>
                     <td><?php echo $personel_temporary->assesment; ?></td>
                     <!-- <td><?php echo $personel_temporary->password; ?></td> -->
                    <!-- <td>
                      <?php if($personel_temporary->photo != ""){ ?>
                          <img src="<?php echo base_url('public_assets/dist/img/'.$personel_temporary->photo); ?>" width="100" />
                        <?php }else{ ?>
                        <img src="<?php echo base_url('public_assets/dist/img/no-photo.png'); ?>" width="100" />
                        <?php } ?>
                    </td> -->
                    <td>
                      <div class="tooltip-demo">
                        <a data-toggle="modal" data-target="#editModal<?=$personel_temporary->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">
                          <i class="fa fa-pencil"> Edit</i>
                        </a>
                        <a href="<?php echo site_url('Register/delete/'.$personel_temporary->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$personel_temporary->nama;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">
                          <i class="fa fa-trash"> Delete</i>
                        </a>
                      </div>
                    </td>
                  </tr>

                <?php 
                  endforeach;
                ?>

                </tbody>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

    <!-- Modal Edit -->
    <?php $no=0; foreach ($data_personel as $personel_temporary): $no++; ?>
    <form action="<?php echo base_url('Register/update')?>" method="post">
      <div class="modal fade" id="editModal<?=$personel_temporary->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="float: left;">Edit Part</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; padding-top: 4px;">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <input type="hidden" readonly value="<?=$personel_temporary->id;?>" name="id" class="form-control id">

              <div class="form-group">
                <label for="">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control nama" value="<?=$personel_temporary->nama;?>" readonly>
              </div>

              <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control email" value="<?=$personel_temporary->email;?>" readonly>
              </div>

              <div class="form-group">
                <label for="">NIK</label>
                <input type="number" name="nik" id="nik" class="form-control nik" value="<?=$personel_temporary->nik;?>" readonly>
              </div>

              <div class="form-group">
                <label for="">Jenis Kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control jenis_kelamin" value="<?=$personel_temporary->jenis_kelamin;?>" required>
              </div>

              <div class="form-group">
                <label for="">Agama</label>
                <input type="text" name="agama" id="agama" class="form-control agama" value="<?=$personel_temporary->agama;?>" required>
              </div>

              <div class="form-group">
                <label for="">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control tempat_lahir" value="<?=$personel_temporary->tempat_lahir;?>" required>
              </div>

              <div class="form-group">
                <label for="">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control tanggal_lahir" value="<?=$personel_temporary->tanggal_lahir;?>" readonly>
              </div>

              <div class="form-group">
                <label for="">Tanggal Join</label>
                <input type="date" name="join" id="join" class="form-control join" value="<?=$personel_temporary->join;?>" required>
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
                <input type="text" name="username" id="username" class="form-control username" value="<?=$personel_temporary->username;?>" required>
              </div>
              <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control password" value="<?=$personel_temporary->password;?>" required>
              </div> 
              <div class="form-group">
                <label for="">Assesment</label>
                <textarea name="assesment" id="assesment" class="form-control" rows="4" cols="50" value="<?=$personel_temporary->assesment;?>" required></textarea>
              </div>            
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php endforeach; ?>
  </div>

<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').dataTable();
  });
</script>
