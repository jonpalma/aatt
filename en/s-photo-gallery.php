<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<?php include('modules/head.php'); ?>
<body>
<!-- Wrapper / Start -->
<div id="wrapper">

    <!-- Header
    ================================================== -->

    <?php include('modules/header.php'); ?>
    <!-- 960 Container / End -->
    <?php include('modules/menu.php'); ?>
    <!-- Content
    ================================================== -->
    <div id="content" style="color:#222;" class="background">


        <!-- 960 Container -->
        <div class="container floated">
            <img src="images/viajes/banner.jpg" width="1020" height="200" alt="" title=""></div>
        <!-- 960 Container / End -->

        <!-- Page Content -->
        <div class="page-content" >
            <div class="container" >
                <div class="sixteen columns" style="text-align:;">
                    <h2 class="purple-titulo">More than10 years receiving groups of students, local authorities and travelers in Europe.</h2>
                    <br>
                    <h3>
                        Photo Gallery in Paris, Poitiers, Berlin, Amsterdam, Zurich, Rotterdam and Copenhagen.
                    </h3>

                </div>
                <!--			<div class="six columns" style="text-aling:justify;">-->
                <!--				<img src="images/viajes/img.png" alt="">-->
                <!--			</div>-->
            </div>
            <br />
            <!-- 960 Container / End -->
            <div class="container" >
                <div class="sixteen columns" style="text-align:;">

                    <div id="gallery" style="display:none;">

                        <?php
                        $dirname = "images/viajes/gallery/";
                        $images = glob($dirname."*[Jj][Pp][Gg]");

                        foreach ($images as $image) {

                            echo '<img alt="Image 1 Title" src="'.$image.'"
                     data-image="'.$image.'"
                     data-description="Image 1 Description">';

                        }
                        ?>

                    </div>
                </div>

            </div>

            <hr>
            <!-- 960 Container -->
            <?php include('modules/ciudades.php'); ?>
            <!-- fin contendor circulos -->
        </div>
        <!-- Page Content / End -->
    </div>
    <!-- Content / End -->
</div>
<!-- Wrapper / End -->
<?php include('modules/footer.php'); ?>
</body>
</html>