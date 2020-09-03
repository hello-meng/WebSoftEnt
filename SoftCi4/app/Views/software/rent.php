<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <h2>โปรแกรมระบบเช่า Rent</h2>
                </div>              
                <div class="row d-flex justify-content-center">
                <div class="col-lg-9">
                    <div class="blog__details__text">
                        <p> โปรแกรมเหมาะสำหรับเช่าสินค้าและอุปกรณ์ เช่น เช่าชุด เช่าอุปกรณ์ ใช้ได้กับธุรกิจเช่าโดยมีมูลค่าการเช่า ค่าปรับ
                            ด้วย
                        </p>
                    </div>
                    <div class="blog__details__item">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <img src="<?= base_url('img/products/rent/rent1.jpg'); ?>" alt="">
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="blog__details__item__text">
                                    <ul>
                                        <li>สามารถคิดค่ามัดจำและคืนมัดจำหลังจากเช่าได้</li>
                                        <li>สามารถใส่ส่วนลดค่าเช่า หรือค่ามัดจำได้</li>
                                        <li>ชำระเงินผ่าน wristband (option เสริม)</li>
                                        <li>สามารถชำระเงินผ่าน wristband (option เสริม)</li>
                                        <li>ใส่ค่าปรับจากการทำอุปกรณ์ชำรุดหรือเสียหายได้</li>
                                        <li>ทำเป็นรายการซื้ออุปกรณ์ กรณีที่ลูกค้าไม่คืนอุปกรณ์เช่า</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="blog__details__desc">
                        <p>5G NR is a new air interface being developed for 5G. An air interface is the radio frequency
                            portion of the circuit between the mobile device and the active base station. The active
                            base station can change as the user is on the move, with each changeover known as a handoff.
                        5G will initially be made available through</p>
                    </div> -->
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 