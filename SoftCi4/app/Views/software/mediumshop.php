<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <div class="blog__details__author">
                        <!--<img src="../img/blog/details/blog-author.png" alt="">-->
                        <p> </p>
                    </div>
                    <h2>โปรแกรมสำหรับร้านค้าย่อย<br /> </h2>
                </div>
                <div class="blog__details__pic">
                    <img src="<?= base_url('img/products/jewelry/smallshop.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="blog__details__text">
                    <p>
                    โปรแกรมสำหรับร้านขายสินค้าร้านค้าขนาดเล็ก จัดการข้อมูลสินค้า บันทึกการขายสินค้า เพื่อช่วยให้การทำงานง่าย สะดวก รวดเร็ว
                    </p>
                    
                    <p>
                        1.จัดการข้อมูลสินค้า
                        <ul>
                            <li>สร้างรหัสสินค้า สามารถกำหนดรหัสสินค้าได้เองหรือใช้รหัสสินค้าผู้ผลิต 13 หลักได้</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/1.jpg'); ?>" alt="">
                            </div>
                            <li>บันทึกข้อมูลรูปภาพสินค้า</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/1X.jpg'); ?>" alt="">
                            </div>
                            <li>โอนย้ายคลังสินค้าสามารถกำหนดได้ตามความต้องการ เช่น FRONT , MAIN , คลังซ่อม , คลังนิรภัย</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/2.jpg'); ?>" alt="">
                            </div>
                           
                        </ul>
                    </p>
                    <p>
                        2.จัดการระบบการขายสินค้า
                        <ul>
                            <li>มีระบบการขายสินค้าด้วย Barcode,QR Code,RFID,Wristband</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/3.jpg'); ?>" alt="">
                                <img src="<?= base_url('img/products/jewelry/rfid.jpg'); ?>" alt="">
                            </div>
                            <li>รองรับการชำระเงินหลายประเภท เงินสด บัตรเครดิต</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-7.jpg'); ?>" alt="">
                            </div>
                          
                        </ul>
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 