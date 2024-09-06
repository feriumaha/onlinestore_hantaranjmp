<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("ci_admin/dashboard/include/header-meta.php"); ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2004',  1000,      400],
          ['2005',  1170,      460],
          ['2006',  660,       1120],
          ['2007',  1030,      540]
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
</head>

<body class="fix-header fix-sidebar card-no-border">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <?php $this->load->view("ci_admin/dashboard/include/header.php");?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <?php $this->load->view("ci_admin/dashboard/include/sidebar.php");?>
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Dashboard</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
               
            
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="card bg-warning text-white">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title text-white">Admin Count</h3>
                                                <p class="font-weight-bold"><?php echo $total_admin ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-7">
                        <div class="card bg-primary text-white">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title text-white">Product Count</h3>
                                                <p class="font-weight-bold"><?php echo $total_product ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>          

                    <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                            <div>
                                                <h3 class="card-title">Digital Marketing</h3>
                                                    <form method="post" action="<?php echo base_url("overview/addscriptdm"); ?>">
                                                        <div class="form-group">
                                                            <label for="facebook pixel">Facebook Pixel Script:</label>
                                                            <textarea class="form-control" name="code_fb"></textarea>
                                                            <input type="hidden" name="fb_pixel">
                                                            <input type="hidden" name="id_fb">
                                                        </div>
                                                        <div class="Google ads">
                                                            <label for="pwd">Google ads script</label>
                                                            <textarea class="form-control" name="code_google"></textarea>
                                                            <input type="hidden" name="google_ads">
                                                            <input type="hidden" name="id_google">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                            <div>
                                                <h3 class="card-title">Tambahkan Admin</h3>
                                                    <form action="<?php echo base_url('overview/addadmin'); ?>" method="post">
                                                        <div class="form-group">
                                                            <label for="Username">Username:</label>
                                                            <input type="text" name="username" class="form-control" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd">Password</label>
                                                            <input type="password" name="password" class="form-control" required>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <table class="table table-stripped">
                                            <thead>
                                                <tr>
                                                    <td>Username</td>
                                                    <td>Password in ecnrypt</td>
                                                    <td>option</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($admin as $row): ?>
                                                    <tr>
                                                        <td><?php echo $row->username; ?> <?php if($row->status == 1){echo"<span class='badge badge-info'>Main Admin</span>";}?></td>
                                                        <td><?php echo $row->password; ?></td>
                                                        <td>
                                                            <?php
                                                                if($row->status != 1){
                                                                    echo"
                                                                        <a href='".site_url('overview/deladmin')."/$row->admin_id' class='btn btn-danger'>Delete</a>
                                                                    ";
                                                                }
                                                            ?>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                    <h3 class="card-title">SlideShow</h3>
                                    <?php 
                                        if(isset($error)){
                                            echo"
                                                <div class='alert alert-danger'>
                                                    <strong>Error!</strong> $error
                                                </div>
                                            ";
                                        }
                                    ?>
                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('overview/uploadslide');?>">
                                        <div class="form-group">
                                            <label for="photo_product">Slide File</label>
                                            <input type="file" name="slide_file" class="form-control" required>
                                            <hr>
                                            <div class="alert alert-success">
                                                <strong>Info!</strong>
                                                <p>
                                                    *Ukuran file maksimal adalah 1MB<br>
                                                    *Lebar design 1100PX dan Tinggi design 500PX<br>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Upload</button>
                                        </div>
                                    </form>
                                        <table class="table table-responsive table-stripped">
                                            <thead>
                                                <tr>
                                                    <td>#</td>
                                                    <td>option</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($slide as $rowslide): ?>
                                                <tr>
                                                    <td><img src="<?php echo base_url("assets/images/slideshow/$rowslide->file_name"); ?>" class="img-fluid" style="width:500px; height:auto;"></td>
                                                    <td><a href="<?php echo site_url("overview/delslide/$rowslide->slideshow_id")?>">Delete</a></td>
                                                </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
    
            </div>
           
            <?php $this->load->view("ci_admin/dashboard/include/footer.php"); ?>
           
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <?php $this->load->view("ci_admin/dashboard/include/scripts.php"); ?>
</body>

</html>
