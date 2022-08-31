<?php include_once dirname(__FILE__).'/../layouts/header.php';?>
<?php include_once dirname(__FILE__).'/../layouts/side.php';?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small><?php echo date('d-F-Y');?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chart</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
                <canvas id="myChart"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-xs-12 col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chart</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div>
                <canvas id="myChart2"></canvas>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      </div>
    </section>
    <!-- /.content -->
<?php include_once dirname(__FILE__).'/../layouts/footer.php';?>
<script type="text/javascript">
  var ctx = document.getElementById('myChart').getContext("2d")
  var myChart = new Chart(ctx, {
   type: 'line',
   data: {
      labels: ["SEN","SEL","RAB","KAM","JUM","SAB","MGG"],
      datasets: [{
         label: "Jaringan",
         borderColor: "#80b6f4",
         pointBorderColor: "#80b6f4",
         pointBackgroundColor: "#80b6f4",
         pointHoverBackgroundColor: "#80b6f4",
         pointHoverBorderColor: "#80b6f4",
         pointBorderWidth: 5,
         pointHoverRadius: 10,
         pointHoverBorderWidth: 1,
         pointRadius: 3,
         fill: false,
         borderWidth: 4,
         data: [100, 120, 150, 170, 180, 100, 50]
      },
      {
        label: "RFID Reader",
            borderColor: "#e89c9c",
            pointBorderColor: "#e89c9c",
            pointBackgroundColor: "#e89c9c",
            pointHoverBackgroundColor: "#e89c9c",
            pointHoverBorderColor: "#e89c9c",
            pointBorderWidth: 5,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
            data: [50, 100, 75, 150, 120, 180, 200]
        },
        {
        label: "Barcode Reader",
            borderColor: "#dce775",
            pointBorderColor: "#dce775",
            pointBackgroundColor: "#dce775",
            pointHoverBackgroundColor: "#dce775",
            pointHoverBorderColor: "#dce775",
            pointBorderWidth: 5,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
            data: [10, 30, 75, 50, 10, 50, 100, 50]
        },
        {
        label: "Komputer",
            borderColor: "#9575cd",
            pointBorderColor: "#9575cd",
            pointBackgroundColor: "##9575cd",
            pointHoverBackgroundColor: "#9575cd",
            pointHoverBorderColor: "#dce775",
            pointBorderWidth: 5,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
            data: [0, 50, 75, 100, 125, 200, 100]
        }, 

        ]

    },
    options: {
      legend: {
         position: "bottom"
      },
       scales: {
         yAxes: [{
            ticks: {
                fontColor: "rgba(0,0,0,0.5)",
                fontStyle: "bold",
                beginAtZero: true,
                maxTicksLimit: 5,
                padding: 20
                },
               gridLines: {
               drawTicks: false,
               display: false
               }
      }],
         xAxes: [{
            gridLines: {
               zeroLineColor: "transparent"
        },
            ticks: {
               padding: 20,
               fontColor: "rgba(0,0,0,0.5)",
               fontStyle: "bold"
               }
            }]
          }
      }

  });

  var ctx = document.getElementById('myChart2').getContext("2d")
  var myChart2 = new Chart(ctx, {
   type: 'line',
   data: {
      labels: ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL","AGS","SEPT","OKT","NOV","DES"],
      datasets: [{
         label: "Jaringan",
         borderColor: "#80b6f4",
         pointBorderColor: "#80b6f4",
         pointBackgroundColor: "#80b6f4",
         pointHoverBackgroundColor: "#80b6f4",
         pointHoverBorderColor: "#80b6f4",
         pointBorderWidth: 5,
         pointHoverRadius: 10,
         pointHoverBorderWidth: 1,
         pointRadius: 3,
         fill: false,
         borderWidth: 4,
         data: [100, 120, 150, 170, 180, 170, 160, 200, 150, 150, 100, 80]
      },
      {
        label: "RFID Reader",
            borderColor: "#e89c9c",
            pointBorderColor: "#e89c9c",
            pointBackgroundColor: "#e89c9c",
            pointHoverBackgroundColor: "#e89c9c",
            pointHoverBorderColor: "#e89c9c",
            pointBorderWidth: 5,
            pointHoverRadius: 10,
            pointHoverBorderWidth: 1,
            pointRadius: 3,
            fill: false,
            borderWidth: 4,
            data: [50, 100, 75, 150, 120, 180, 200, 100, 120, 150, 170, 180]
        },
         


        ]

    },
    options: {
      legend: {
         position: "bottom"
      },
       scales: {
         yAxes: [{
            ticks: {
                fontColor: "rgba(0,0,0,0.5)",
                fontStyle: "bold",
                beginAtZero: true,
                maxTicksLimit: 5,
                padding: 20
                },
               gridLines: {
               drawTicks: false,
               display: false
               }
      }],
         xAxes: [{
            gridLines: {
               zeroLineColor: "transparent"
        },
            ticks: {
               padding: 20,
               fontColor: "rgba(0,0,0,0.5)",
               fontStyle: "bold"
               }
            }]
          }
      }

  });


</script>
