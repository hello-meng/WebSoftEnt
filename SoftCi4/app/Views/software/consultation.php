<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__title">
                    <h2>รับปรึกษาและพัฒนาโปรแกรมตามความต้องการ</h2>
                </div>
                <div class="blog__details__comment">
                    <h5>ปรึกษาปัญหาโปรแกรมที่มีอยู่ เพือเพิ่มโปรแกรมหรือรายงาน ปรึกษาพัฒนาโปรแกรมใหม่เพื่อใช้แทนโปรแกรมเดิมที่มีปัญหา</h5>
                    <h4>สนใจติดต่อสอบถามรายละเอียดของโปรแกรม</h4>
                </div>
                <div class="blog__details__pic">
                    <img src="<?= base_url('img/about/about-us.jpg'); ?>" alt="">
                </div>                
            </div>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->

<?= $this->endSection() ?> 