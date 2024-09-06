<!DOCTYPE html>
<html lang="en">

<head>
<?php $this->load->view("ci_admin/dashboard/include/header-meta.php"); ?>
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
                        <h3 class="text-themecolor">Product</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Product</li>
                        </ol>
                    </div>
                    <div class="col-md-7 col-4 align-self-center">
                        <a href="<?php echo site_url('adminaddproduct'); ?>" class="btn waves-effect waves-light btn-primary pull-right hidden-sm-down"><span class="mdi mdi-plus-box-outline"></span> Add Product</a>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Your Product List</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                                    <hr>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Option</th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                        <?php foreach($products as $row): ?>
                                            <tr class="record">
                                                <td><img src="<?php echo base_url("assets/images/product/".$row->file_name."");?>" class="img-fluid" style="width:100px; height:auto;"></td>
                                                <td><?php echo $row->product_name; ?></td>
                                                <td>Rp <?php echo rupiah($row->price); ?></td>
                                                <td>
                                                    <div class='btn-group'>
                                                        <a href="<?php echo site_url('admineditproduct/showdata/'.$row->product_id.''); ?>" class='btn btn-primary'><span class='mdi mdi-pencil'></span></a>
                                                        <a href="<?php echo site_url('adminproduct/delete/'.$row->product_id.''); ?>" onclick="return confirm('Anda akan menghapus <?php echo $row->product_name; ?> ?')" class='delbutton btn btn-danger'><span class='mdi mdi-delete'></span></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach ;?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <?php $this->load->view("ci_admin/dashboard/include/footer.php"); ?>
            <!-- ============================================================== -->
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
