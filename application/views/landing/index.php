<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PETA LANDING
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo site_url('dashboard');?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">PETA LANDING</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">PETA LANDING</h3>
                <div class="form-group">
                    <label>Minimum value</label>
                    <input type="text" name="value" class="form-control" placeholder="input minimal last value" id="cari" value="5.000.000.000">
                </div>
                <div class="form-group">
                  <input type="submit" class="btn btn-success" name="submit" id="search" value="submit">
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Stock</th>
                  <th>Last Price</th>
                  <th>Last Value</th>
                  <th>Lowest Price 1 Year</th>
                  <th>Highest Price 1 Year</th>
                  <th>Highest Price in 37 days</th>
                  <th>Ratio Last Price to Lowest Price 1 Year</th>
                  <th>Ratio Last Price to Highest Price in 37 Days</th>
                </tr>
                </thead>
                <tbody id="isi">

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
  </div>
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
<script type="text/javascript">
  $(function() {
    var load   = $('#cari').val();
    $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: "<?php echo base_url("Landing/get_data"); ?>", // Isi dengan url/path file php yang dituju
        data: {id : load}, // data yang akan dikirim ke file yang dituju
        dataType: "json",
        success: function(response){ // Ketika proses pengiriman berhasil
            $("#isi").html(response);
        },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
            alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
        }
    });
    $('#search').click(function(){
      var id   = $('#cari').val();
      $.ajax({
          type: "POST", // Method pengiriman data bisa dengan GET atau POST
          url: "<?php echo base_url("Landing/get_data"); ?>", // Isi dengan url/path file php yang dituju
          data: {id : id}, // data yang akan dikirim ke file yang dituju
          dataType: "json",
          success: function(response){ // Ketika proses pengiriman berhasil
              $("#isi").html(response);
          },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
              alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
          }
      });
    });

    var cari  = document.getElementById("cari");
    cari.addEventListener("keyup", function(e) {
      // tambahkan 'Rp.' pada saat form di ketik
      // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
      cari.value = formatRupiah(this.value);
    });

    /* Fungsi formatRupiah */
    function formatRupiah(angka) {
      var number_string = angka.replace(/[^,\d]/g, "").toString(),
        split = number_string.split(","),
        sisa = split[0].length % 3,
        rupiah = split[0].substr(0, sisa),
        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

      // tambahkan titik jika yang di input sudah menjadi angka ribuan
      if (ribuan) {
        separator = sisa ? "." : "";
        rupiah += separator + ribuan.join(".");
      }

      rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
      return rupiah;
    }
  });
</script>
