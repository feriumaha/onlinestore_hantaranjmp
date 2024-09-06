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
        <?php $this->load->view("ci_admin/dashboard/include/header.php");?>
        <?php $this->load->view("ci_admin/dashboard/include/sidebar.php");?>
        <div class="page-wrapper">
            <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor">Edit Product Product</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
                
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Photo Product</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                    <?php 
                                        if(isset($error)){
                                            echo"
                                                <div class='alert alert-danger'>
                                                    <strong>Error!</strong> $error
                                                </div>
                                            ";
                                        }
                                    ?>
                                        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admineditproduct/addphoto');?>">
                                            <div class="form-group">
                                                <label for="photo_product">Photo Product:</label>
                                                <input type="file" name="photo_product" class="form-control" required>
                                                <input type="hidden" name="product_id" value="<?php foreach($data as $rowfile): echo $rowfile->product_id ; endforeach; ?>">
                                                <hr>

                                                <div class="alert alert-success">
                                                    <strong>Info!</strong>
                                                    <p>
                                                        *Ukuran file maksimal adalah 1MB<br>
                                                        *Lebar design 719PX dan Tinggi design 726PX<br>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Photo</button>
                                            </div>
                                        </form>
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>File Name</th>
                                                    <th>Option</th>
                                                </tr>
                                            </thead>
                                            <tbody id="myTable">
                                                <?php foreach($data as $row): ?>
                                                <tr class="record">
                                                    <td>
                                                        <img src="<?php echo base_url("assets/images/product/".$row->file_name."");?>" class="img-fluid" style="width:100px; height:auto;">
                                                    </td>
                                                    <td>
                                                        <?php echo $row->file_name; ?>
                                                        <?php if($row->status == 1){echo"<span class='badge badge-success'>Main Photo</span>";}?>
                                                    </td>
                                                    <td>
                                                        <div class='btn-group'>
                                                            <?php 
                                                                if($row->status != 1){
                                                                    $filename = $row->file_name;
                                                                    $id = $row->product_id;
                                                                    $join = $id.$filename;
                                                                    echo"
                                                                    <a href='".site_url('admineditproduct/delete_photo')."/$join' class='btn btn-danger'><span class='mdi mdi-delete'></span></a>
                                                                    ";
                                                                }elseif($row->status == 1){
                                                                    echo"
                                                                    Main photo cannot be deleted
                                                                    ";
                                                                }
                                                            ?>
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

                    <div class="col-lg-12 col-md-7">
                        <div class="card">
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex flex-wrap">
                                            <div>
                                                <h3 class="card-title">Form Product</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <form method="post" enctype="multipart/form-data" action="<?php echo site_url('admineditproduct/editdata');?>">
                                            <?php foreach($data as $rows): ?>
                                            <div class="form-group">
                                                <label for="product_name">Product Name:</label>
                                                <input type="text" name="product_name" value="<?php echo $rows->product_name; ?>" class="form-control" required>
                                                <input type="hidden" name="product_id" value="<?php echo $rows->product_id; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="Price">Price:</label>
                                                <input type="number" name="price" value="<?php echo $rows->price; ?>" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="Price">Detail Product:</label>
                                                <textarea id="ckedtor" class="form-control ckeditor" name="detail"><?php echo $rows->detail; ?></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="link_shopee">Link Shopee:</label>
                                                <input type="link" name="shopee_link" value="<?php echo $rows->shopee_link; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="link_bukalapak">Link Bukalapak:</label>
                                                <input type="link" name="bukalapak_link" value="<?php echo $rows->bukalapak_link; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="link_tokopedia">Link Tokopedia:</label>
                                                <input type="link" name="tokopedia_link" value="<?php echo $rows->tokopedia_link; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="link_lazada">Link Lazada:</label>
                                                <input type="link" name="lazada_link" value="<?php echo $rows->lazada_link; ?>" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="link_lazada">Tag Metadata:</label>
                                                <input type="text" name="metadata" value="<?php echo $rows->metadata; ?>" class="form-control">
                                            </div>
                                            <?php endforeach; ?>
                                            <div class="form-group">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
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
