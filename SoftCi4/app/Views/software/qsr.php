<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <div class="blog__details__author"></div>
                    <h2>โปรแกรมสำหรับร้านแบบ Quick Service Restaurant<br /></h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="blog__details__text">
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/qsr.jpg'); ?>" alt="">
                    </div>
                    <p>
                        คุณสมบัติโปรแกรม
                    </p>
                    <p>
                        <ul>
                            <li>ระบบใช้งานง่ายรองรับกับการใช้งานแบบทัชสกรีนและจอธรรมดา</li>
                            <li>รองรับโปรโมชั่น คูปองส่วนลด เพื่อดึงดูดลูกค้า</li>
                            <li>รองรับการพิมพ์รายการอาหารออกปริ้นเตอร์</li>
                            <li>พิมพ์ใบเสร็จรับเงินได้</li>
                        </ul>
                    </p>
                    <p>
                        การทำงานของโปรแกรม
                    </p>
                    <p>
                        เข้าสู่ระบบ
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture1.jpg'); ?>" alt="">
                    </div>
                    <p>
                        หน้าจอหลักของโปรแกรม
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture2.jpg'); ?>" alt="">
                    </div>
                    <p>
                        หน้าจอสั่งอาหาร
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture3.jpg'); ?>" alt="">
                    </div>
                    <p>
                        พิมพ์บิลสำหรับเสิร์ฟอาหารตามคิว
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture5.jpg'); ?>" alt="">
                    </div>
                    <p>
                        โปรโมชั่น คูปองส่วนลด
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture6.jpg'); ?>" alt="">
                    </div>
                    <p>
                        ชำระเงินและพิมพ์ใบกำกับภาษี ใบเสร็จรับเงิน
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/qsr/picture7.jpg'); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 