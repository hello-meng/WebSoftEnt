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
                        บริษัทดำเนินธุรกิจ ออกแบบพัฒนาระบบ ซอฟท์แวร์ และจำหน่ายอุปกรณ์ไอทีครบวงจร 
                        รับให้คำปรึกษาเกี่ยวกับ ซอฟท์แวร์ ฮาร์ดแวร์ และ เน็ตเวิร์ค
                        โดยมุ่งหวังให้ลูกค้าได้รับความประทับใจในการบริการมากที่สุด 
                        ซอฟท์แวร์ที่พัฒนาขึ้นมาได้มีบริษัทชั้นนำได้ใช้งานจริงมากกว่า 10 ปี 
                        สามารถรองรับข้อมูลปริมาณจำนวนมากโดยไม่มีปัญหา 
                        และบุคคลากรที่พัฒนามีประสบการณ์มากกว่า 20 ปี 
                        ซึ่งสามารถพัฒนาซอฟท์แวร์ได้ความต้องการของลูกค้า ตรงจุดประสง รวดเร็ว 
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
                    บริษัทของเราก่อตั้งขึ้นในปี 2550 โดยกลุ่มผู้เชี่ยวชาญที่มีประสบการณ์ในด้านนี้
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="history__item">
                    <span>2550</span>
                    <h4>Open Company</h4>
                    <p>จดทะเบียนจัดตั้งบริษัท</p>
                </div>
                <div class="history__item">
                    <!-- <span>2562</span>
                    <h4>Ars Fennica Award</h4>
                    <p>Risus commodo viverra maecenas accumsan</p> -->
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="history__item">
                    <span>2560</span>
                    <h4>Reband Company</h4>
                    <p>บริษัทได้ทำการเปลี่ยนชื่อเป็น Soft Enterprises</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- History Section End -->

<?= $this->endSection() ?> 