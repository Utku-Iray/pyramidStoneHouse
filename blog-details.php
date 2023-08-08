<?php
 include 'php/head.php' ;
 include 'php/header.php';

$blogJSON = json_decode(file_get_contents('data/blog.json'));

foreach ($blogJSON as $singleBlog) {
    if ($singleBlog->blog_url == $_GET["url"]) {
        $blogDetails = $singleBlog;
        break;
    }
}
?>
    <!-- Header Banner -->
    <div class="banner-header section-padding valign bg-img bg-fixed" data-overlay-dark="4" data-background="img/slider/7.jpg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-left caption mt-90">
                    <h5>Hotel Blog</h5>
                    <h1>Duyurular</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- News 2 -->
    <section class="news2 section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        
                             <div class="col-md-12">
                             <div class="item">
                                 <div class="post-img">
                                     <a href="blog.php"> <img src="<?= $blogDetails->blog_image ?>" alt=""> </a>
                                     
                                 </div>
                                 <div class="post-cont">
                                     <a href="news.html"><span class="tag">Pyramid Stone House</span></a>
                                     <h5><a href="#0"><?= $blogDetails->blog_name ?></a></h5>
                                     <p><?= $blogDetails->blog_content ?></p>
                                 </div>
                             </div>
                         </div>
                        
                       
                      
                        <!-- <div class="col-md-12">
                            
                            <ul class="news-pagination-wrap align-center mb-30 mt-30">
                                <li><a href="blog2.html#"><i class="ti-angle-left"></i></a></li>
                                <li><a href="blog2.html#">1</a></li>
                                <li><a href="blog2.html#" class="active">2</a></li>
                                <li><a href="blog2.html#">3</a></li>
                                <li><a href="blog2.html#"><i class="ti-angle-right"></i></a></li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="news2-sidebar row">
                        <!-- <div class="col-md-12">
                            <div class="widget search">
                                <form>
                                    <input type="text" name="search" placeholder="Type here ...">
                                    <button type="submit"><i class="ti-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                        </div> -->
                        <div class="col-md-12">
                            <div class="widget">
                                <div class="widget-title">
                                    <h6>Duyurular</h6>
                                </div>
                                <ul class="recent">
                                    <?php foreach ($blogJSON as $blogs ) { ?>
                                      <li>
                                      <div class="thum"> <img src="<?= $blogs->blog_image ?>" alt=""> </div>
                                      <a href="blog-details.php?url=<?= $blogs->blog_url ?>"><?= $blogs->blog_name ?></a>
                                  </li>
                                  <?php } ?>
                                   
                                  
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php include 'php/footer.php' ?>