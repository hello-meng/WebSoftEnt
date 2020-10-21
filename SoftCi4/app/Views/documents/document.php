<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="<?= base_url('img/document-bg.jpg'); ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Document</h2>
                    </div>
                    <div class="breadcrumb__text__cc">
                        <h3>เอกสารหนังสือชี้ชวน</h3>
                        <a href="<?= base_url('downloads/brochure-softent.pdf'); ?>" class="primary-btn">Download PDF</a>
                    </div>                  
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

<?= $this->endSection() ?> 