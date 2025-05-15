<!-- meta-single.php -->
<!DOCTYPE html>

<?php

include 'db.php'; 

$result = $conn->query("SELECT * FROM blogs ORDER BY id ASC LIMIT 12");
$blogs = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $blogs[] = $row;
    }
}
?>

<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,  user-scalable=0" />
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Top logistics companies | best logistics company | best logistic service</title>
    <meta name="keywords" content="">
    <meta name="description" content="TCI EXPRESS is the best Logistics Company in India. Our services include: Surface Express, Domestic Air Express, International Air Express, Cold chain Express, C2C FTL Express, and E-Commerce Express." />
    <link rel="canonical" href="https://www.tciexpress.in/get-estimate.aspx" />
    <meta name="author" content="">

    <?php include 'includes/header.php'; ?>
</head>
<body>    




    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <?php include 'includes/sidebar.php'; ?>

        <section class="section first-section">
            <div class="container-fluid">
                <div class="masonry-blog clearfix">
                    <div class="left-side">
                    <?php if (isset($blogs[0])): ?>
                        <div class="masonry-box post-media">
                             <img src="http://localhost/8-insight/images/blogs/TCI%20Express%20AI%20Driven%20solution.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <!-- <span class="bg-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span> -->
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[0]['slug']; ?>"><?php echo $blogs[0]['title']; ?></a></h4>
                                        <!-- <small><a target="_blank" href="single" title="">24 July, 2017</a></small>
                                        <small><a target="_blank" href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    <?php endif; ?>    
                    </div><!-- end left-side -->

                    <div class="center-side">
                    <?php if (isset($blogs[1])): ?>
                        <div class="masonry-box post-media">
                             <img src="http://localhost/8-insight/images/blogs/Automotive%20Logistics%20Services%20_%20Secure,%20Fast%20&%20Tech-Driven%20Solutions%20_%20TCI%20Express.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <!-- <span class="bg-green"><a target="_blank" href="blog-category-01.html" title="">Travel</a></span> -->
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[1]['slug']; ?>"><?php echo $blogs[1]['title']; ?></a></h4>
                                        <!-- <small><a target="_blank" href="single" title="">24 July, 2017</a></small>
                                        <small><a target="_blank" href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    <?php endif; ?>       
                        <div class="masonry-box small-box post-media">
                             <img src="https://tciexpress.in/images/express%20services/Air-International-express.png" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <!-- <span class="bg-green"><a target="_blank" href="blog-category-01.html" title="">Travel</a></span> -->
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[3]['slug']; ?>"><?php echo $blogs[3]['title']; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->

                        <div class="masonry-box small-box post-media">
                             <img src="https://tciexpress.in/images/express%20services/Rail-express.png" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <!-- <span class="bg-green"><a target="_blank" href="blog-category-01.html" title="">Travel</a></span> -->
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[4]['slug']; ?>"><?php echo $blogs[4]['title']; ?></a></h4>
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                            </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    </div><!-- end left-side -->

                    <div class="right-side hidden-md-down">
                    <?php if (isset($blogs[2])): ?>
                        <div class="masonry-box post-media">
                             <img src="http://localhost/8-insight/images/blogs/TCI%20Express%20India%E2%80%99s%20Largest%20Logistics%20Company.jpg" alt="" class="img-fluid">
                             <div class="shadoweffect">
                                <div class="shadow-desc">
                                    <div class="blog-meta">
                                        <!-- <span class="bg-aqua"><a target="_blank" href="blog-category-01.html" title="">Lifestyle</a></span> -->
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[2]['slug']; ?>"><?php echo $blogs[2]['title']; ?></a></h4>
                                        <!-- <small><a target="_blank" href="single" title="">03 July, 2017</a></small>
                                        <small><a target="_blank" href="blog-author.html" title="">by Jessica</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end shadow-desc -->
                             </div><!-- end shadow -->
                        </div><!-- end post-media -->
                    <?php endif; ?>       
                    </div><!-- end right-side -->
                </div><!-- end masonry -->
            </div>
        </section>

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <!-- <h3 class="color-aqua"><a target="_blank" href="blog-category-01.html" title="">Lifestyle</a></h3> -->
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[5]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/express%20services/C2C-Express.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[5]['slug']; ?>"><?php echo $blogs[5]['title']; ?></a></h4>
                                        <p><?php echo $blogs[5]['title']; ?></p>
                                        <!-- <small><a target="_blank" href="blog-category-01.html" title="">Lifestyle</a></small> -->
                                        <!-- <small><a target="_blank" href="single" title="">24 July, 2017</a></small> -->
                                        <!-- <small><a target="_blank" href="blog-author.html" title="">by Amanda</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[6]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/express%20services/Cold-chain-express.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[6]['slug']; ?>"><?php echo $blogs[6]['title']; ?></a></h4>
                                        <p><?php echo $blogs[6]['title']; ?></p>
                                        <!-- <small><a target="_blank" href="blog-category-01.html" title="">Lifestyle</a></small>
                                        <small><a target="_blank" href="single" title="">22 July, 2017</a></small>
                                        <small><a target="_blank" href="blog-author.html" title="">by Martines</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div class="section-title">
                            <!-- <h3 class="color-pink"><a target="_blank" href="blog-category-01.html" title="">Fashion</a></h3> -->
                        </div><!-- end title -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[7]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/about/2.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[7]['slug']; ?>"><?php echo $blogs[7]['title']; ?></a></h4>
                                        <!-- <small><a target="_blank" href="blog-category-01.html" title="">Fashion</a></small>
                                        <small><a target="_blank" href="blog-category-01.html" title="">21 July, 2017</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[8]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/about/about1.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[8]['slug']; ?>"><?php echo $blogs[8]['title']; ?></a></h4>
                                        <!-- <small><a target="_blank" href="blog-category-01.html" title="">Fashion</a></small>
                                        <small><a target="_blank" href="blog-category-01.html" title="">11 July, 2017</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->

                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[9]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/about/4.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[9]['slug']; ?>"><?php echo $blogs[9]['title']; ?></a></h4>
                                        <!-- <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Man</a></small>
                                        <small><a href="blog-category-01.html" title="">08 July, 2017</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <br>
                                <hr class="invis">

                                <div class="blog-box">
                                    <div class="post-media">
                                        <a target="_blank" href="/8-insight/<?php echo $blogs[10]['slug']; ?>"></a>
                                            <img src="https://tciexpress.in/images/about/3.png" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a target="_blank" href="/8-insight/<?php echo $blogs[10]['slug']; ?>"><?php echo $blogs[10]['title']; ?></a></h4>
                                        <!-- <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Style</a></small>
                                        <small><a href="blog-category-01.html" title="">04 July, 2017</a></small> -->
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="banner-spot clearfix">
                            <div class="banner-img">
                                <img src="https://tciexpress.in/images/logo.png" alt="" class="img-fluid">
                            </div><!-- end banner-img -->
                        </div><!-- end banner -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-9">
                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <!-- <h3 class="color-green"><a href="blog-category-01.html" title="">Travel</a></h3> -->
                            </div><!-- end title -->

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/news.aspx" title="">
                                            <img src="https://tciexpress.in/images/about/2.png" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/news.aspx" title="">INVESTOR PRESENTATION</a></h4>
                                    <p>In case you are looking for complete company information along with details on finance and corporate governance. Please download our Investor Presentation.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Travel</a></small>
                                    <small><a href="single" title="">21 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Boby</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/news.aspx" title="">
                                            <img src="https://tciexpress.in/images/about/about1.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/news.aspx" title="">NEWS</a></h4>
                                    <p>The most awaited report of the year is out now! Learn about future aspects, industry trends and impact on macro economic changes in India in our Annual Report FY 2016-17. Please download now for complete insight.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Travel</a></small>
                                    <small><a href="single" title="">20 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Samanta</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/news.aspx" title="">
                                            <img src="https://tciexpress.in/images/about/4.png" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/news.aspx" title="">ANNUAL REPORT</a></h4>
                                    <p>TCIEXPRESS has a strong media presence. It has been covered consistently by all major media houses, be it electronic, print or online.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Travel</a></small>
                                    <small><a href="single" title="">19 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jackie</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->

                        <hr class="invis">

                        <div class="blog-list clearfix">
                            <div class="section-title">
                                <!-- <h3 class="color-red"><a href="blog-category-01.html" title="">Food</a></h3> -->
                            </div><!-- end title -->

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/career.aspx" title="">
                                            <img src="https://tciexpress.in/images/about/3.png" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/career.aspx" title="">JOBS</a></h4>
                                    <p>TCI Express annual report is a comprehensive report on a company's activities throughout the preceding year. Annual reports will give our shareholders information about the company's activities and financial performance.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Food</a></small>
                                    <small><a href="single" title="">11 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/corporate-responsibilities.aspx" title="">
                                            <img src="https://tciexpress.in/images/csr.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/corporate-responsibilities.aspx" title="">CSR</a></h4>
                                    <p>We at TCI Express believe that CSR needs to go beyond communities and beyond the concept of philanthropy. Our main focus is to create higher standards of sustainability factoring social and environmental impacts for the greater good of people.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Food</a></small>
                                    <small><a href="single" title="">10 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a target="_blank" href="https://tciexpress.in/index.aspx" title="">
                                            <img src="https://tciexpress.in/images/reports.jpg" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a target="_blank" href="https://tciexpress.in/index.aspx" title="">ANNUAL REPORT</a></h4>
                                    <p>TCI Express annual report is a comprehensive report on a company's activities throughout the preceding year. Annual reports will give our shareholders information about the company's activities and financial performance.</p>
                                    <!-- <small><a href="blog-category-01.html" title="">Food</a></small>
                                    <small><a href="single" title="">09 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Matilda</a></small> -->
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->
                        </div><!-- end blog-list -->
                    </div><!-- end col -->

                    <div class="col-lg-3">
                        <div class="section-title">
                            <!-- <h3 class="color-yellow"><a href="blog-category-01.html" title="">Vlogs</a></h3> -->
                        </div><!-- end title -->

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/surface-express" title="">
                                    <img src="https://tciexpress.in/images/express%20services/surface_express.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank" href="https://tciexpress.in/surface-express" title="">Surface Express</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Videos</a></small>
                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/domestic-air-express" title="">
                                    <img src="https://tciexpress.in/images/express%20services/Air-Domestic-Express.png" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank" href="https://tciexpress.in/domestic-air-express" title="">Domestic Air Express</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Videos</a></small>
                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/international-air-express" title="">
                                    <img src="https://tciexpress.in/images/express%20services/Air-International-express.png" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span class="videohover"></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank" href="https://tciexpress.in/international-air-express" title="">International Air Express</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Beauty</a></small>
                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="section-title">
                            <!-- <h3 class="color-grey"><a href="blog-category-01.html" title="">Health</a></h3> -->
                        </div><!-- end title -->

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/automobiles" title="">
                                    <img src="https://tciexpress.in/images/express%20services/web-images-auto.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank" href="https://tciexpress.in/automobiles" title="">Automobiles</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Spa</a></small>
                                <small><a href="blog-category-01.html" title="">21 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/pharmaceuticals" title="">
                                    <img src="https://tciexpress.in/images/express%20services/web-images-pharma.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank" href="https://tciexpress.in/pharmaceuticals" title="">Pharmaceuticals</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Health</a></small>
                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        <hr class="invis">

                        <div class="blog-box">
                            <div class="post-media">
                                <a target="_blank" href="https://tciexpress.in/Retail" title="">
                                    <img src="https://tciexpress.in/images/express%20services/web-images-retail.jpg" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta">
                                <h4><a target="_blank"  href="https://tciexpress.in/Retail" title="">Retail</a></h4>
                                <!-- <small><a href="blog-category-01.html" title="">Beauty</a></small>
                                <small><a href="blog-category-01.html" title="">20 July, 2017</a></small> -->
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <!-- <div class="row"> -->
                    <!-- <div class="col-lg-10 offset-lg-1"> -->
                        <!-- <div class="banner-spot clearfix"> -->
                            <!-- <div class="banner-img"> -->
                                <!-- <img src="https://tciexpress.in/images/logo.png" alt="" class="img-fluid"> -->
                            <!-- </div>end banner-img -->
                        <!-- </div>end banner -->
                    <!-- </div>end col -->
                <!-- </div>end row -->
            </div><!-- end container -->
        </section>

        <?php include 'includes/footer.php'; ?>
       