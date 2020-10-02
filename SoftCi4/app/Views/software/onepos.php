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
                    <h2>โปรแกรมสำหรับร้าน Jewelry<br /> </h2>
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
                    โปรแกรมสำหรับร้านขายสินค้า Jewelry รองรับการเก็บข้อมูลและทำงานทั้งระบบของร้าน จัดการข้อมูลลูกค้า ข้อมูลคู่ค้า สมาชิก ค่านายหน้า ข้อมูลสินค้า บันทึกการขายสินค้า VAT Refund For Tourists คำนวณค่าการตลาด และจัดการระบบสต๊อกสินค้า เพื่อช่วยให้การทำงานง่าย สะดวก รวดเร็ว เชื่อมโยงกันเป็นระบบ
                    </p>
                    <p>
                        1.จัดการข้อมูลลูกค้า
                        <ul>
                            <li>บันทึกข้อมูลการเข้าใช้บริการของลูกค้า กรุ๊ปทัวร์</li>
                            <li>บันทึกข้อมูลรายชื่อของลูกค้าที่ใช้บริการในรูปแบบ Namelist</li>
                            <li>บันทึกข้อมูลชนชาติ ประเทศของลูกค้า</li>
                            <li>บันทึกข้อมูลทะเบียนรถ และเวลาการเข้าใช้บริการ</li>
                        </ul>
                    </p>
                    <p>
                        2.จัดการข้อมูลคู่ค้า บริษัททัวร์ สมาชิก
                        <ul>
                            <li>บันทึกข้อมูลของคู่ค้า บริษัททัวร์ สมาชิก</li>
                            <li>บันทึกข้อมูลค่านายหน้า</li>
                        </ul>
                    </p>
                    <p>
                        3.จัดการข้อมูลสินค้าและระบบสต็อกสินค้า
                        <ul>
                            <li>บันทึกข้อมูลสินค้า ราคาขายตามชาชาติ</li>
                            <li>สร้างรหัสสินค้า สามารถกำหนดรหัสสินค้าได้เองหรือใช้รหัสสินค้าผู้ผลิต 13 หลักได้</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/1.jpg'); ?>" alt="">
                            </div>
                            <li>สร้างเอกสารจัดซื้อสินค้า (PR,PO,GRN) และรับสินค้าเข้าคลังสินค้า คลังสินค้าสามารถกำหนดได้ตามความต้องการ เช่น FRONT , MAIN , คลังซ่อม , คลังนิรภัย</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/2.jpg'); ?>" alt="">
                            </div>
                            <li>หลังจากรับสินค้าเข้าคลังสินค้าเรียบร้อยแล้ว สามารถพิมพ์ป้ายราคาสินค้าได้</li>
                            <div class="blog__details__pic">
                            <img src="<?= base_url('img/products/jewelry/3.jpg'); ?>" alt="">
                        </div>
                        </ul>
                    </p>
                    <p>
                        4.จัดการระบบการขายสินค้า
                        <ul>
                            <li>มีระบบการขายสินค้าหลายรูปแบบเพื่อช่วยให้สามารถขายสินค้าได้รวดเร็ว และตรงความต้องการ</li>
                                    -แบบมี Ticket
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4.jpg'); ?>" alt="">
                            </div>
                                    -แบบมีไม่มี Ticket
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-2.jpg'); ?>" alt="">
                            </div>
                            <li>จัดการข้อมูลอัตราแลกเปลี่ยนเงินตรา</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-5.jpg'); ?>" alt="">
                            </div>
                            <li>บันทึกข้อมูลลูกค้าในบิลขาย</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-6.jpg'); ?>" alt="">
                            </div>
                            <li>รองรับการชำระเงินหลายประเภท เงินสด เงินสกุลต่างประเทศหลากหลายสกุลเงิน บัตรเครดิต คูปอง เงินเชื่อ</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-7.jpg'); ?>" alt="">
                            </div>
                            <li>พิมพ์ใบรับประกันสินค้า ใบการันตี</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-8.jpg'); ?>" alt="">
                            </div>
                        </ul>
                    </p>
                    <p>
                        5.จัดการข้อมูล VAT Refund For Tourists
                        <ul>
                            <li>บันทึกข้อมูลของลูกค้าและพิมพ์เอกสารการขอคืนภาษี</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/4-9.jpg'); ?>" alt="">
                            </div>
                        </ul>
                    </p>                 
                    <p>
                        6.คำนวณและจ่ายค่าการตลาด (บริษัททัวร์,ไกด์,หัวหน้าทัวร์)
                        <ul>
                            <li>คำนวณค่าการตลาดจากข้อมูลคู่ค้า บริษัททัวร์ สมาชิก ที่บันทึกไว้ แยกตามกรุ๊ปทัวร์ วันที่และเวลาได้</li>
                            <li>จัดทำเอกสารการจ่ายค่าการตลาด คู่ค้า บริษัททัวร์ สมาชิก</li>
                            <li>จัดทำเอกสาร หนังสือรับรองการหักภาษี ณ ที่จ่าย คู่ค้า บริษัททัวร์ สมาชิก</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/5.jpg'); ?>" alt="">
                            </div>
                        </ul>
                    </p>   
                    <p>
                        7.ประมวลผลบิลขายเพื่อตัดสต็อคสินค้า
                        <ul>
                            <li>ระบบสามารถประมวลบิลขายเพื่อตัดสต็อคสินค้าผ่านระบบสต็อคเอง หรือทำงานร่วมกับโปรแกรมอื่นภายนอกได้ผ่านช่องการ Interface ของแต่ละโปรแกรม</li>
                            <div class="blog__details__pic">
                                <img src="<?= base_url('img/products/jewelry/6.jpg'); ?>" alt="">
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