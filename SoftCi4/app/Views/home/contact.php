<?= $this->extend('layout/_layout')  ?>

<?= $this->section('content') ?> 

<!-- Map Begin -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.035741793329!2d100.80393970652857!3d13.716285123894083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311d687eb29ce327%3A0xdefdcc952f4c9654!2sHua%20Seng%20Karmai%20Shop!5e0!3m2!1sth!2sth!4v1597723832845!5m2!1sth!2sth"
            height="500" style="border:0" allowfullscreen=""></iframe>
</div>
<!-- Map End -->
<!-- Contact Section Begin -->
<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact__content">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>Your email address will not be published. Required fields are marked.</p>
                    </div>
                    <form action="#">
                        <div class="input__item">
                            <p>Name:</p>
                            <input type="text">
                        </div>
                        <div class="input__item">
                            <p>Email:</p>
                            <input type="text">
                        </div>
                        <div class="input__item">
                            <p>Message:</p>
                            <textarea></textarea>
                        </div>
                        <button type="submit" class="site-btn">Submit Form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<?= $this->endSection() ?> 