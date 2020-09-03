<?php
    $companyName1 = "Soft Enterprises";
?>

<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- About Us Section Begin -->
<section class="about spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__text">
                    <div class="section-title">
                        <h2>Welcome to<br /> <?= $companyName1 ?></h2>
                        <p>
                            It has survived not only five centuries, but also the leap into electronic typesetting,
                            remaining essentially unchanged. It was popularised in the 1960s with the release of
                            Letraset sheets
                        </p>
                    </div>
                    <span>Manager: Kwanchai Kijkunasatian</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__pic">
                    <img src="<?= base_url('img/about/about-us.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Us Section End -->
<!-- History Section Begin -->
<section class="history spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="section-title">
                    <h2>Our History & Awards</h2>
                    <p>
                        Cars is an auto repair and car wash service. Our company was founded in 1998 by a group of
                        experts with extensive experience in this field
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="history__item">
                    <span>2009</span>
                    <h4>Open Company</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
                <div class="history__item">
                    <span>2015</span>
                    <h4>Ars Fennica Award</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
                <div class="history__item">
                    <span>2019</span>
                    <h4>Best Family Cars of 2019</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="history__item">
                    <span>2012</span>
                    <h4>Ars Fennica Award</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
                <div class="history__item">
                    <span>2017</span>
                    <h4>Open Another Branch</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
                <div class="history__item">
                    <span>2020</span>
                    <h4>2020 Best Buy Awards</h4>
                    <p>Risus commodo viverra maecenas accumsan</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Section End -->

<?= $this->endSection() ?> 