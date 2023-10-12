<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="3" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>BİZİMLE İLETİŞİME GEÇİN</h5>
                <h1>İletişim</h1>
            </div>
        </div>
    </div>
</div>
<!-- Contact -->
<section class="contact section-padding">
    <div class="container">
        <div class="row mb-90">
            <div class="col-md-6 mb-60">
                <h3>Pyramid Stone House</h3>
                <p>Masalların, gerçeküstü öykülerin, kulaktan kulağa yayılan tüm o büyülü anlatılara konu olmuş bir kentin tam ortasında, sevgiye, mutluluğa, güzel anılar biriktirmeye inanan herkes evinde hissetsin diye kesişti yollarımız. “Hiçbir şey tesadüf değildir” derler, bu karşılaşma da öyle.</p>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-call"></span></div>
                    <div class="text">
                        <p>Rezervasyon</p> <a href="tel:0384 219 4040">0384 219 4040</a>
                    </div>
                </div>
                <div class="reservations mb-30">
                    <div class="icon"><span class="flaticon-envelope"></span></div>
                    <div class="text">
                        <p>E-Mail</p> <a href="mailto:info@pyramidstonehouse.com">info@pyramidstonehouse.com</a>
                    </div>
                </div>
                <div class="reservations">
                    <div class="icon"><span class="flaticon-location-pin"></span></div>
                    <div class="text">
                        <p>Adres</p> Aşağı Mahalle, Keçeci Evi Sokak,<br>
                        No:4 Uçhisar/NEVŞEHİR
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-30 offset-md-1">
                <h3>Bizimle İletişime Geçin</h3>
                <form action="mail/tesekkurler" method="POST">
                    <!-- form message -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                        </div>
                    </div> -->
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="customerNameSurname" type="text" placeholder="Adınız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerMail" type="email" placeholder="E-Mail *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerPhone" type="text" placeholder="Numaranız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerSubject" type="text" placeholder="Konu *" required="">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="customerNote" cols="30" rows="4" placeholder="Mesaj *" required=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Gönder</span></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Map Section -->
        <div class="row">
            <div class="col-md-12 map animate-box" data-animate-effect="fadeInUp">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d779.2773851990422!2d34.798324269596094!3d38.62336099823649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzjCsDM3JzI0LjEiTiAzNMKwNDcnNTYuMyJF!5e0!3m2!1str!2str!4v1693307325375!5m2!1str!2str" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
<!-- Rezervasyon & Booking Form -->
<section class="testimonials">
    <div class="background bg-img bg-fixed section-padding pb-0" data-background="img/slider/2.jpg" data-overlay-dark="2">
        <div class="container">
            <div class="row">
                <!-- Rezervasyon -->
                <div class="col-md-5 mb-30 mt-30">
                    <p><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i><i class="star-rating"></i></p>
                    <h5>Masalların, gerçeküstü öykülerin, kulaktan kulağa yayılan tüm o büyülü anlatılara konu olmuş bir kentin tam ortasında, sevgiye, mutluluğa, güzel anılar biriktirmeye inanan herkes evinde hissetsin diye kesişti yollarımız.</h5>
                    <div class="reservations mb-30">
                        <div class="icon color-1"><span class="flaticon-call"></span></div>
                        <div class="text">
                            <p class="color-1">Rezervasyon</p> <a class="color-1" href="tel:0384 219 4040">0384 219 4040</a>
                        </div>
                    </div>
                    <p><i class="ti-check"></i><small>Call us, it's toll-free.</small></p>
                </div>
                <!-- Booking From -->
                <div class="col-md-5 offset-md-2">
                    <div class="booking-box">
                        <div class="head-box">
                            <h6>Odalar & Suitler</h6>
                            <h4>Otel Rezervasyon Formu</h4>
                        </div>
                        <div class="booking-inner clearfix">
                            <form action="mail/tesekkurler" method="POST">
                    <!-- form message -->
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert"> Your message was sent successfully. </div>
                        </div>
                    </div> -->
                    <!-- form elements -->
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input name="customerNameSurname" type="text" placeholder="Adınız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerMail" type="email" placeholder="E-Mail *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerPhone" type="text" placeholder="Numaranız *" required="">
                        </div>
                        <div class="col-md-6 form-group">
                            <input name="customerSubject" type="text" placeholder="Konu *" required="">
                        </div>
                        <div class="col-md-12 form-group">
                            <textarea name="customerNote" cols="30" rows="4" placeholder="Mesaj *" required=""></textarea>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="butn-dark2"><span>Gönder</span></button>
                        </div>
                    </div>
                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Clients -->

<!-- Footer -->
<?php include 'php/footer.php' ?>