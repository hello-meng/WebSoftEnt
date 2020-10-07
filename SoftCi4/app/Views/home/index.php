<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Hero Section Begin -->
<section class="hero spad set-bg" data-setbg="<?= base_url('img/hero-bg.jpg'); ?>">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero__text">
                    <h2>
                        <span>Welcome to</span>
                        Soft Enterprises
                    </h2>
                    <p>ยินดีบริการ โปรแกรมชั้นยอด และบริการอันยอดเยี่ยม</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->
<!-- Services Section Begin -->
<section class="services spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Programs</h2>
                    <p>โปรแกรมทั้งหมดที่สามารถรองรับธุรกิจของคุณได้</p>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- @*----------------Row 1 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                <div class="services__text">
                    <a href="<?= site_url('software/buffet') ?>"><h4>โปรแกรม Restaurant Buffet & Alacart</h4></a>
                    <a href="<?= site_url('software/buffet') ?>"><p>กำหนดค่าบริการต่อคน เด็ก, ผู้ใหญ่ จับเวลา ควบคุมห้องครัวและบาร์น้ำ</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                <div class="services__pic">
                    <a href="<?= site_url('software/buffet') ?>"><img src="<?= base_url('img/services/buffet.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                <div class="services__text">
                    <a href="<?= site_url('software/restaurant') ?>"><h4>โปรแกรม Restaurant, Bistro, Coffee Shop</h4></a>
                    <a href="<?= site_url('software/restaurant') ?>"><p>เหมาะสำหรับร้านอาหารขนาดใหญ่ กลาง เล็ก สั่งอาหารด้วย mobile & Touch Screen</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                <div class="services__pic">
                    <a href="<?= site_url('software/restaurant') ?>"><img src="<?= base_url('img/services/restaurant.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <!-- @*----------------Row 2 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                <div class="services__text">
                    <a href="<?= site_url('software/qsr') ?>"><h4>โปรแกรม Quick Service Restaurant (QSR)</h4></a>
                    <a href="<?= site_url('software/qsr') ?>"><p>สำหรับร้านอาหารที่ชำระเงิน และรับสินค้าและบริการที่เคาน์เตอร์</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                <div class="services__pic">
                    <a href="<?= site_url('software/qsr') ?>"><img src="<?= base_url('img/services/qsr.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                <div class="services__text">
                    <a href="<?= site_url('software/foodzone') ?>"><h4>โปรแกรม Shop zone, Food zone</h4></a>
                    <a href="<?= site_url('software/foodzone') ?>"><p>สำหรับร้านอาหารพื้นที่เช่า เก็บยอดขาย รองรับบัตรเงินสด/สายรัดข้อมือ และอื่นๆ</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                <div class="services__pic">
                    <a href="<?= site_url('software/foodzone') ?>"><img src="<?= base_url('img/services/foodzone.jpg'); ?>" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- @*----------------Row 3 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                <div class="services__text">
                    <a href="<?= site_url('software/mediumshop') ?>"><h4>โปรแกรมร้านค้า Small shop, Minimart</h4></a>
                    <a href="<?= site_url('software/mediumshop') ?>"><p>เหมาะสำหรับร้านค้าขนาดเล็ก กลาง ,มินิมาร์ท, Gift shop</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                <div class="services__pic">
                    <a href="<?= site_url('software/mediumshop') ?>"><img src="<?= base_url('img/services/mediumshop.jpg'); ?>" alt=""></a>                    
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                <div class="services__text">
                    <a href="<?= site_url('software/departmentstore') ?>"><h4>โปรแกรม Department Store</h4></a>
                    <a href="<?= site_url('software/departmentstore') ?>"><p>เหมาะสำหรับร้านค้าขนาดใหญ่ รองรับการพิมพ์ Barcode, รองรับออกใบกำกับภาษี สินค้าโปรโมชั่น, Vat refund</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                <div class="services__pic">
                    <a href="<?= site_url('software/departmentstore') ?>"><img src="<?= base_url('img/services/largeshop.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <!-- @*----------------Row 4 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                <div class="services__text">
                    <a href="<?= site_url('software/jewelry') ?>"><h4>โปรแกรมร้าน Jewelry / Tour shop</h4></a>
                    <a href="<?= site_url('software/jewelry') ?>"><p>รองรับร้านจิวเวลรี่ขนาดใหญ่ กลาง เล็ก ระบบการขายพร้อมใบ Certificate,รูป,คอมมิชชั่น,Vat Refund</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                <div class="services__pic">
                    <a href="<?= site_url('software/jewelry') ?>"><img src="<?= base_url('img/services/jewelry.jpg'); ?>" alt=""></a>                    
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                <div class="services__text">
                    <a href="<?= site_url('software/rent') ?>"><h4>โปรแกรมระบบเช่า Rent</h4></a>
                    <a href="<?= site_url('software/rent') ?>"><p>เหมาะสำหรับเช่าสินค้าและอุปกรณ์ เช่น เช่าชุด เช่าอุปกรณ์</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                <div class="services__pic">
                    <a href="<?= site_url('software/rent') ?>"><img src="<?= base_url('img/services/rent.jpg'); ?>" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- @*----------------Row 5 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-1 col-md-6 order-md-1">
                <div class="services__text">
                    <a href="<?= site_url('software/carservices') ?>"><h4>โปรแกรมอู่ซ่อมรถ</h4></a>
                    <a href="<?= site_url('software/carservices') ?>"><p>ควบคุมการซ่อมนอกและใน การเบิกใช้อะไหล่ การคิดต้นทนซ่อมและงานระหว่างซ่อม</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-2 col-md-6 order-md-2">
                <div class="services__pic">
                    <a href="<?= site_url('software/carservices') ?>"><img src="<?= base_url('img/services/carservices.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-3 col-md-6 order-md-4">
                <div class="services__text">
                    <a href="<?= site_url('software/booking') ?>"><h4>โปรแกรมจัดการจอง/จัด ยานพาหนะ</h4></a>
                    <a href="<?= site_url('software/booking') ?>"><p>เหมาะสำหรับบริษัทรับจองยานพาหนะทุกประเภท พร้อมพนักงานขับ</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-4 col-md-6 order-md-3">
                <div class="services__pic">
                    <a href="<?= site_url('software/booking') ?>"><img src="<?= base_url('img/services/booking.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <!-- @*----------------Row 6 ---------------*@ -->
            <div class="col-lg-3 p-0 order-lg-6 col-md-6 order-md-5">
                <div class="services__text">
                    <a href="<?= site_url('software/sop') ?>"><h4>S&OP / S&OP Commission</h4></a>
                    <a href="<?= site_url('software/sop') ?>"><p>รองรับการบริหารแบบ Sales & Operation Planning</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-5 col-md-6 order-md-6">
                <div class="services__pic">
                    <a href="<?= site_url('software/sop') ?>"><img src="<?= base_url('img/services/sop.jpg'); ?>" alt=""></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-8 col-md-6 order-md-8">
                <div class="services__text">
                    <a href="<?= site_url('software/consultation') ?>"><h4>รับปรึกษาและพัฒนาโปรแกรมตามความต้องการ</h4></a>
                    <a href="<?= site_url('software/consultation') ?>"><p>ปรึกษาปัญหาโปรแกรมที่มีอยู่ เพือเพิ่มโปรแกรมหรือรายงาน ปรึกษาพัฒนาโปรแกรมใหม่เพื่อใช้แทนโปรแกรมเดิมที่มีปัญหา</p></a>
                </div>
            </div>
            <div class="col-lg-3 p-0 order-lg-7 col-md-6 order-md-7">
                <div class="services__pic">
                    <a href="<?= site_url('software/consultation') ?>"><img src="<?= base_url('img/services/development1.jpg'); ?>" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<?= $this->endSection() ?> 