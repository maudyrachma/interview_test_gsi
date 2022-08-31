<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Laporan
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Laporan</li>
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
              <h3 class="box-title" style="padding-top: 9px;">Laporan</h3>
                
              <button type="button" class="btn btn-primary" data-toggle="" data-target="#" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Export</button>
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Add</button> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">

            <div class="row">
              <div class="col-lg-2 col-sm-4">
                <div class="input-group start-date">
                  <label>From</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calender"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="start_date" name="start_date">
                    </div>
                </div>
              </div>

              <div class="col-lg-2 col-sm-4">
                <div class="input-group end-date">
                  <label>To</label>
                    <div class="input-group date">
                      <div class="input-group-addon">
                        <i class="fa fa-calender"></i>
                      </div>
                      <input type="date" class="form-control pull-right" id="end_date" name="end_date">
                    </div>
                </div>
              </div>

              <div class="col-lg-1 col-sm-2">
                <div class="input-group end-date">
                  <label>Status</label>
                    <div class="input-group">
                      <select class="form-control" id="" name="" required>
                        <option value="">Proses</option>
                        <option value="">Pending</option>
                        <option value="">Finish</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="col-lg-1 col-sm-1">
                <div class="form-group met-cheq">
                  <label>Go</label>
                    <div class="input-group">
                      <button class="btn btn-warning btn-md" name="search" id="search">Search</button>
                    </div>
                  </div>
              </div>
            </div>
  
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Status</th>
                  <th>Tanggal</th>
                  <th>Jam</th>
                  <th>Nama Pelapor</th>
                  <th>Area ID</th>
                  <th>Kategori Masalah</th>
                  <th>Penjelasan</th>
                  <th>Remark</th>
                  <th>Teknisi</th>
                  <th>Durasi(menit)</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <!-- <?php 
                  $no = 1;
                  foreach ($data_kategori as $kategori_temporary):
                ?> -->

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $kategori_temporary->kategori_masalah; ?></td>
                    <td>
                      <div class="tooltip-demo">
                        <a data-toggle="modal" data-target="#editModal<?=$kategori_temporary->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">
                          <i class="fa fa-pencil"> Edit</i>
                        </a>
                        <a href="<?php echo site_url('Kat_masalah/delete/'.$kategori_temporary->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$kategori_temporary->kategori_masalah;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">
                          <i class="fa fa-trash"> Delete</i>
                        </a>
                      </div>
                      <!-- <a href="#" class="btn btn-primary btn-sm btn-edit" data-id="<?php echo $part_temporary->id;?>" data-name="<?php echo $part_temporary->nama_part;?>" data-qty="<?php echo $part_temporary->qty;?>">
                        <i class="fa fa-pencil"> Edit</i>
                      </a>
                      <a href="#" class="btn btn-danger btn-sm btn-edit" data-id="<?php echo $part_temporary->id;?>" data-name="<?php echo $part_temporary->nama_part;?>" data-qty="<?php echo $part_temporary->qty;?>">
                         <i class="fa fa-trash"> Delete</i>
                      </a> -->
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

    <!-- Modal Add Laporan-->
    <!-- <form action="<?php echo base_url('Kat_masalah/add')?>" method="post">
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="float: left;">Add Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; padding-top: 4px;">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">   
              <div class="form-group">
                  <label>Kategori Masalah</label>
                  <input type="text" class="form-control" name="kategori_masalah" id="kategori_masalah" placeholder="Masukkan Kategori Masalah">
              </div>  
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </form> -->
    <!-- End Modal Laporan-->

    <!-- Modal Edit Laporan-->
   <!--  <?php $no=0; foreach ($data_kategori as $kategori_temporary): $no++; ?>
    <form action="<?php echo base_url('Kat_masalah/update')?>" method="post">
      <div class="modal fade" id="editModal<?=$kategori_temporary->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="float: left;">Edit Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; padding-top: 4px;">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <input type="hidden" readonly value="<?=$kategori_temporary->id;?>" name="id" class="form-control">

              <div class="form-group">
                  <label>Kategori Masalah</label>
                  <input type="text" class="form-control kategori_masalah" name="kategori_masalah" id="kategori_masalah" value="<?=$kategori_temporary->kategori_masalah;?>" required placeholder="Masukkan Kategori Masalah">
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
    <?php endforeach; ?> -->
    <!-- End Modal Edit Laporan-->
  </div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>


