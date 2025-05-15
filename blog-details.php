<!-- meta-single.php -->
<!DOCTYPE html>
<?php
include 'db.php'; 

if (isset($_GET['slug'])) {
    $slug = intval($_GET['slug']); // Security: prevent SQL injection
    $result = $conn->query("SELECT * FROM blogs WHERE slug = $slug");
    $blog = $result->fetch_assoc();
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
    <title><?php echo $blog['keywords']; ?></title>
    <meta name="keywords" content="<?php echo $blog['keywords']; ?>">
    <meta name="description" content="<?php echo $blog['meta_description']; ?>" />
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

        <section class="section wb">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="page-wrapper">
                            <div class="blog-title-area">
                                <!-- <ol class="breadcrumb hidden-xs-down">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                    <li class="breadcrumb-item active">The Future of Logistics: AI, Automation, and IoT Trends – How TCI Express is Leading the Way </li>
                                </ol> -->

                                <!-- <span class="color-aqua"><a href="blog-category-01.html" title="">Lifestyle</a></span> -->

                                <h3><?php echo $blog['title']; ?></h3>

                                <!-- <div class="blog-meta big-meta">
                                    <small><a href="single.html" title="">21 July, 2017</a></small>
                                    <small><a href="blog-author.html" title="">by Jessica</a></small>
                                    <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                                </div>end meta -->

                                <div class="post-sharing">
                                    <!-- <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="down-mobile">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="down-mobile">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul> -->
                                </div><!-- end post-sharing -->
                            </div><!-- end title -->

                            <div class="single-post-media">
                                <img src="images/blogs/<?php echo htmlspecialchars($blog['blog_image']); ?>" alt="" class="img-fluid">
                            </div><!-- end media -->

                            <div class="blog-content">  
                            <?php echo $blog['body']; ?>    

                            </div><!-- end content -->

                        
                        </div><!-- end page-wrapper -->
                    </div><!-- end col -->

                   
                </div><!-- end row -->
            </div><!-- end container -->
        </section>

        <?php include 'includes/footer.php'; ?>