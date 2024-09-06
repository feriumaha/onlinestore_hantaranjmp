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
        <div class="row justify-content-center">
            <!--Titles-->
            <div class="title pb-5 col-12">
                
                <h3 class="mbr-section-subtitle mbr-light mbr-fonts-style display-5">
                    Semua Produk</h3>
            </div>
            <?php foreach($product as $rowproduct):?>
            <div class="card col-12 col-md-6 p-2 col-lg-2">
                <div class="card-wrapper shadow-sm rounded">
                    <div class="card-img">
                        <img src="<?php echo base_url("assets/images/product/$rowproduct->file_name"); ?>" class="rounded-top" alt="Mobirise" title="">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7"><?php echo $rowproduct->product_name?></h4>
                        
                        <!--Btn-->
                        <div class="mbr-section-btn align-center">
                            <a href="<?php echo site_url('detail/product/'.$rowproduct->product_id.'')?>" class="btn btn-secondary btn-sm">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;?>

        </div>
    </div>
</section>
<?php $this->load->view("partials/footer.php"); ?>
<?php $this->load->view("partials/script.php"); ?> 
</body>
</html>