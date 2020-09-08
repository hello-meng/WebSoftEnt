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
                    <h2>โปรแกรมสำหรับร้าน Jewelry <br /> </h2>
                </div>
                <div class="blog__details__pic">
                    <img src="<?= base_url('img/products/jewelry/jewelry.jpg'); ?>" alt="">
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-9">
                <div class="blog__details__text">
                    <p>
                        1. สร้างรหัสสินค้า สามารถกำหนดรหัสสินค้าได้เองหรือใช้รหัสสินค้าผู้ผลิต 13 หลักได้
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/1.jpg'); ?>" alt="">
                    </div>
                    <p>
                        2. สร้างเอกสารจัดซื้อสินค้า (PR,PO,GRN) และรับสินค้าเข้าคลังสินค้า คลังสินค้าสามารถกำหนดได้ตามความต้องการ เช่น FRONT , MAIN , คลังซ่อม , คลังนิรภัย
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/2.jpg'); ?>" alt="">
                    </div>
                    <p>
                        3. หลังจากรับสินค้าเข้าคลังสินค้าเรียบร้อยแล้ว สามารถพิมพ์ป้ายราคาสินค้าได้
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/3.jpg'); ?>" alt="">
                    </div>

                    <p>
                        4.การขายสินค้า
                        รูปแบบการขายสินค้า
                        - แบบมี Ticket
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4.jpg'); ?>g" alt="">
                    </div>
                    <p>
                        -	แบบไม่มี Ticket
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-2.jpg'); ?>" alt="">
                    </div>
                    <p>
                        รูปแบบบิลเขียน
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-3.jpg'); ?>" alt="">
                    </div>
                    <p>
                        โปรแกรม Ticket
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-4.jpg'); ?>" alt="">
                    </div>
                    <p>
                        อัตราแลกเปลี่ยนเงินตรา
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-5.jpg'); ?>" alt="">
                    </div>
                    <p>
                        บันทึกข้อมูลลูกค้า
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-6.jpg'); ?>" alt="">
                    </div>
                    <p>
                        รองรับการชำระเงินหลายประเภท และหลายสกุลเงิน
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-7.jpg'); ?>" alt="">
                    </div>
                    <p>
                        พิมพ์ใบรับประกันสินค้า ใบการันตี
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-8.jpg'); ?>" alt="">
                    </div>
                    <p>
                        Vat Refund
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/4-9.jpg'); ?>" alt="">
                    </div>
                    <p>
                        5. คำนวณและจ่ายค่าการตลาด (บริษัททัวร์,ไกด์,หัวหน้าทัวร์)
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/5.jpg'); ?>" alt="">
                    </div>
                    <p>
                        6.ประมวลผลบิลขายเพื่อตัดสต็อคสินค้า
                        ระบบสามารถประมวลบิลขายเพื่อตัดสต็อคสินค้าผ่านระบบสต็อคเอง ทำงานร่วมกับโปรแกรมอื่นภายนอกได้ผ่านช่องการ Interface ของแต่ละโปรแกรม
                    </p>
                    <div class="blog__details__pic">
                        <img src="<?= base_url('img/products/jewelry/6.jpg'); ?>" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 