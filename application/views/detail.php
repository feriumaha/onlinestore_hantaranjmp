<!DOCTYPE html>
<html  >
<head>
  <?php $this->load->view("partials/header-meta.php"); ?>
</head>
<body>
<?php $this->load->view("partials/header.php")?>
<section class="services1 cid-scKgNO2GRM" id="services1-1">
    <!---->
    
    <!---->
    <!--Overlay-->
    
    <!--Container-->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 p-3 bg-white shadow-sm">
                <div id="demo" class="carousel slide shadow-sm" data-ride="carousel">

                <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo base_url("assets/images/default_product.png"); ?>" class="img-fluid rounded" alt="Los Angeles" width="550px" height="auto">
                    </div>
                    <?php foreach($detail as $details):?>
                        <div class="carousel-item">
                            <img src="<?php echo base_url("assets/images/product/$details->file_name"); ?>" class="img-fluid rounded" alt="Los Angeles" width="550px" height="auto">
                        </div>
                    <?php endforeach; ?>
                    </div>

                <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>  
            </div>
            <?php foreach($detail as $details):?>
            <div class="col-sm-6 p-2">
                <div class="bg-white p-3 shadow-sm rounded">
                    <h5><?php echo $details->product_name; ?></h5>
                    <hr>
                    <span class="text-secondary font-weight-bold">Rp <?php echo rupiah($details->price); ?></span>
                    <div class="btn-group col-sm-12">
                        <button class="btn btn-sm btn-secondary"><span class="socicon socicon-whatsapp mbr-iconfont mbr-iconfont-btn"></span> Order Via Whatsapp</button>
                        <a href="<?php echo $details->shopee_link; ?>" class="btn btn-sm text-white" style="background-color:#fa8231;">Order Via Shopee</a>
                    </div>

                    <p class="text-center">Anda juga bisa belanja melalui marketplace</p>
                    <div class="btn-group col-sm-12">
                        <a href="<?php echo $details->bukalapak_link; ?>" class="btn btn-sm"><img src="<?php echo base_url("assets/images/ext-icons/bukalapak.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                        <a href="<?php echo $details->shopee_link; ?>" class="btn btn-sm"><img src="<?php echo base_url("assets/images/ext-icons/shopee.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                        <a href="<?php echo $details->tokopedia_link; ?>" class="btn btn-sm"><img src="<?php echo base_url("assets/images/ext-icons/tokopedia.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                        <a href="<?php echo $details->lazada_link; ?>" class="btn btn-sm"><img src="<?php echo base_url("assets/images/ext-icons/lazada.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                    </div>

                    <p class="text-center font-weight-bold">BAGIKAN</p>
                    <div class="col-sm-12">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a target="_blank" class="nav-link" href="https://api.whatsapp.com/send?text=<?php echo $details->product_name; ?> <?php echo base_url('detail/product/'.$details->product_id.'') ?>"><img src="<?php echo base_url("assets/images/ext-icons/whatsapp.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" class="nav-link" href="https://line.me/R/msg/text/?<?php echo $details->product_name; ?> <?php echo base_url('detail/product/'.$details->product_id.'') ?>"><img src="<?php echo base_url("assets/images/ext-icons/line.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" class="nav-link" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url('detail/product/'.$details->product_id.'') ?>"><img src="<?php echo base_url("assets/images/ext-icons/facebook.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                            </li>
                            <li class="nav-item">
                                <a target="_blank" class="nav-link" href="https://twitter.com/intent/tweet?text=<?php echo $details->product_name; ?> <?php echo base_url('detail/product/'.$details->product_id.'') ?>"><img src="<?php echo base_url("assets/images/ext-icons/twitter.png"); ?>" class="img-fluid" style="width:40px; height:auto;"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 shadow-sm bg-white p-3 rounded" style="margin-top:20px;">
                <h5>Detail Produk</h5>
                <hr>
                <?php echo $details->detail; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php $this->load->view("partials/footer.php"); ?>
<?php $this->load->view("partials/script.php"); ?> 
</body>
</html>