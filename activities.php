<?php 
include 'php/head.php' ;
include 'php/header.php' ;
$activitiesJSON = json_decode(file_get_contents('data/activities.json'));
?>
<!-- Header Banner -->
<div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption mt-90">
                <h5>Popüler</h5>
                <h1>Aktiviteler</h1>
            </div>
        </div>
    </div>
</div>
<!-- News  -->
<section class="news section-padding bg-blck">
    <div class="container">
        <div class="row">
            <?php foreach ($activitiesJSON as $activities ) {?>
                <div class="col-md-6 mb-30">
                <div class="item">
                    <div class="position-re o-hidden"> <img src="<?= $activities->photo ?>" alt="">
                        
                    </div>
                    <div class="con"> <span class="category">
                            <a href="#0">AKTİVİTELER</a>
                        </span>
                        <h5><a href="activities-details.php?url=<?= $activities->url ?>"><?= $activities->name ?></a></h5>
                    </div>
                </div>
            </div>
            <?php  } ?>
            
          

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
                    <p><i class="ti-check"></i><small> Ücretsiz şekilde bizi arayabilirsiniz</small></p>
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
<!-- <section class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="owl-carousel owl-theme">
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/1.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/2.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/3.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/4.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/5.png" alt=""></a>
                    </div>
                    <div class="clients-logo">
                        <a href="#0"><img src="img/clients/6.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php include 'php/footer.php' ?>