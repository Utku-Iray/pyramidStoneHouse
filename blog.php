<?php
 include 'php/head.php' ;
 include 'php/header.php'; 
 $blogJSON = json_decode(file_get_contents('data/blog.json'));
 ?>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/5.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Hotel Blog</h5>
                    <h1>Duyurular</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News  -->
    <section class="news section-padding ">
        <div class="container">
            <div class="row">
                <?php foreach ($blogJSON as $blog) {?>
                    <div class="col-md-4 mb-30">
                    <div class="item">
                        <div class="position-re o-hidden"> <img src="<?= $blog->blog_first_image ?>" alt="">
                            
                        </div>
                        <div class="con"> <span class="category">
                                    <a href="blog-details.php?url=<?= $blog->blog_url ?>"><?= $blog->blog_description ?></a>
                                </span>
                            <h5><a href="blog-details.php?url=<?= $blog->blog_url ?>"><?= $blog->blog_name ?></a></h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
               
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
                            <p class="color-1">Rezervasyon</p> <a class="color-1" href="tel:855-100-4444">0384 219 4040</a>
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
                                <form action="rooms2.html" class="form1 clearfix">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Giriş</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Giriş">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="input1_wrapper">
                                                <label>Çıkış</label>
                                                <div class="input1_inner">
                                                    <input type="text" class="form-control input datepicker" placeholder="Çıkış">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Kişi</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Kişi</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="select1_wrapper">
                                                <label>Çocuk</label>
                                                <div class="select1_inner">
                                                    <select class="select2 select" style="width: 100%">
                                                        <option value="0">Çocuk</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn-form1-submit mt-15">Rezervasyon</button>
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
    <?php
 include 'php/footer.php' ;
 ?>