
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="UTF-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="ROBOTS" content="index,follow" />
    <meta name="author" content="Mixen Mexico" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>AATT - Alejandro Abbud Torres Torija </title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/colors/green.css" id="colors">
    <link rel="stylesheet" type="text/css" href="../css/style5.css" />

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Java Script
    ================================================== -->
    <script src="../scripts/jquery.min.js"></script>
    <script src="../scripts/jquery-ui.min.js"></script>
    <script src="../scripts/jquery.flexslider.js"></script>
    <script src="../scripts/jquery.selectnav.js"></script>
    <script src="../scripts/jquery.twitter.js"></script>
    <script src="../scripts/jquery.modernizr.js"></script>
    <script src="../scripts/jquery.easing.1.3.js"></script>
    <script src="../scripts/jquery.isotope.min.js"></script>
    <script src="../scripts/jquery.jcarousel.js"></script>
    <script src="../scripts/jquery.fancybox.min.js"></script>
    <script src="../scripts/jquery.layerslider.min.js"></script>
    <script src="../scripts/custom.js"></script>

    <script type='text/javascript' src='../unitegallery/js/unitegallery.min.js'></script>

    <link rel='stylesheet' href='../unitegallery/css/unite-gallery.css' type='text/css' />
    <script type='text/javascript' src='../unitegallery/themes/tiles/ug-theme-tiles.js'></script>
    <link rel='stylesheet' href='../unitegallery/themes/default/ug-theme-default.css' type='text/css' />


    <link rel="stylesheet" href="../css/colorbox.css" />
    <script src="../js/jquery.colorbox.js"></script>
    <script>
        $(document).ready(function(){
            //Examples of how to assign the ColorBox event to elements
            $(".group1").colorbox({rel:'group1'});
            $(".group2").colorbox({rel:'group2', transition:"fade"});
            $(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
            $(".group4").colorbox({rel:'group4', slideshow:true});
            $(".ajax").colorbox();
            $(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
            $(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
            $(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
            $(".inline").colorbox({inline:true, width:"50%"});
            $(".callbacks").colorbox({
                onOpen:function(){ alert('onOpen: colorbox is about to open'); },
                onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
                onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
                onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
                onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
            });

            $('.non-retina').colorbox({rel:'group5', transition:'none'})
            $('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});

            //Example of preserving a JavaScript event for inline calls.
            $("#click").click(function(){
                $('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
                return false;
            });
        });
    </script>


    <script type="text/javascript">

        jQuery(document).ready(function(){
            jQuery("#gallery").unitegallery();
        });

    </script>



</head>