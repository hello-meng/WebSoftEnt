<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <h2>medium Shop</h2>
                </div>
                <div class="blog__details__pic">
                    <img src="<?= base_url('img/blog/details/blog-details.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 