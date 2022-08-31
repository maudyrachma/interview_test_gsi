<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Nama Part
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Nama Part</li>
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
              <h3 class="box-title" style="padding-top: 9px;">Nama Part</h3>
                
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal" style="float: right;"><i class="fa fa-arrow-circle-down"></i> Add</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                
            <div class="table-responsive">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th width="30px">No</th>
                  <th>Nama Part</th>
                  <th>Qty</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                <?php 
                  $no = 1;
                  foreach ($data_part as $part_temporary):
                ?>

                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $part_temporary->nama_part; ?></td>
                    <td><?php echo $part_temporary->qty; ?></td>
                    <td>
                      <div class="tooltip-demo">
                        <a data-toggle="modal" data-target="#editModal<?=$part_temporary->id;?>" class="btn btn-warning btn-circle" data-popup="tooltip" data-placement="top" title="Edit Data">
                          <i class="fa fa-pencil"> Edit</i>
                        </a>
                        <a href="<?php echo site_url('Part/delete/'.$part_temporary->id); ?>" onclick="return confirm('Apakah Anda Ingin Menghapus Data <?=$part_temporary->nama_part;?> ?');" class="btn btn-danger btn-circle" data-popup="tooltip" data-placement="top" title="Hapus Data">
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

    <!-- Modal Add Part-->
    <form action="<?php echo base_url('Part/add')?>" method="post">
      <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="float: left;">Add New Part</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; padding-top: 4px;">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">   
              <div class="form-group">
                  <label>Nama Part</label>
                  <input type="text" class="form-control" name="nama_part" id="nama_part" placeholder="Masukkan Nama Part">
              </div>
              <div class="form-group">
                  <label>Qty</label>
                  <input type="number" class="form-control" name="qty" id="qty" placeholder="Masukkan Qty">
              </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <!-- End Modal Add Part-->

    <!-- Modal Edit Part-->
    <?php $no=0; foreach ($data_part as $part_temporary): $no++; ?>
    <form action="<?php echo base_url('Part/update')?>" method="post">
      <div class="modal fade" id="editModal<?=$part_temporary->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title" id="exampleModalLabel" style="float: left;">Edit Part</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="float: right; padding-top: 4px;">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <input type="hidden" readonly value="<?=$part_temporary->id;?>" name="id" class="form-control">

              <div class="form-group">
                  <label>Nama Part</label>
                  <input type="text" class="form-control nama_part" name="nama_part" id="nama_part" value="<?=$part_temporary->nama_part;?>" required placeholder="Masukkan Nama Part">
              </div>
               
              <div class="form-group">
                  <label>Qty</label>
                  <input type="text" class="form-control qty" name="qty" id="qty" value="<?=$part_temporary->qty;?>" required placeholder="Masukkan Qty">
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
    <!-- End Modal Edit Part-->

    <!-- Modal Delete Part-->
    <!-- <form action="/part/delete" method="post">
      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Part</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
             
               <h4>Are you sure want to delete this part?</h4>
             
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Yes</button>
            </div>
          </div>
        </div>
      </div>
    </form> -->
    <!-- End Modal Delete Part-->

  </div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
<!-- <script type="text/javascript">
  $(document).ready(function() {
    $('#example').dataTable();

    // get Edit Product
    $('.btn-edit').on('click',function(){
        // get data from button edit
        const id = $(this).data('id');
        const name = $(this).data('name');
        const price = $(this).data('qty');
        // Set data to Form Edit
        $('.id').val(id);
        $('.nama_part').val(name);
        $('.qty').val(qty);
        // Call Modal Edit
        $('#editModal').modal('show');
    });

    // get Delete Product
    $('.btn-delete').on('click',function(){
        // get data from button edit
        const id = $(this).data('id');
        // Set data to Form Edit
        $('.id').val(id);
        // Call Modal Edit
        $('#deleteModal').modal('show');
    });
  });
</script> -->


