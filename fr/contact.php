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

    <?php include('modules/menu.php'); ?>

    <!-- Content
    ================================================== -->
    <div id="content">

        <!-- 960 Container -->
        <div class="container floated">
            <div class="sixteen floated page-title">
                <nav id="breadcrumbs">
                    <h4>Vos questions, suggestions et/ou commentaires sont les bienvenus:</h4>
                </nav>

            </div>

        </div>
        <!-- 960 Container / End -->

        <!-- 960 Container -->
        <div class="container floated">

            <!-- Sidebar -->
            <div class="four floated sidebar left">
                <aside class="sidebar padding-reset">

                    <div class="widget">
                        <h4>Siège Social </h4>

                        <ul class="contact-informations">
                            <li>
                                <address>
                            <span class="address">Alejandro Abbud 
                                <br>
                            <br>
                            <strong>Email:</strong> alejandro.abbud@yahoo.com
                                <br>

                            <strong>Téléphone et WhatsApp: </strong> (+336) 61726130
                                <br>
                                <br>
                                3 Saint Fiacre 75002. <br>
                                Paris, Francia.
<br>
                        <br>
                            

<br /><small> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3993459960243!2d2.345217214298529!3d48.86966321771378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3d8ddf3d39%3A0x9e0efb4335750123!2s3+Rue+Saint-Fiacre%2C+75002+Paris%2C+Francia!5e0!3m2!1ses-419!2smx!4v1513964353581" width="225" height="275" frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.google.com.mx/maps/place/3+Rue+Saint-Fiacre,+75002+Paris,+Francia/@48.8696632,2.3452172,17z/data=!4m13!1m7!3m6!1s0x47e66e3d8ddf3d39:0x9e0efb4335750123!2s3+Rue+Saint-Fiacre,+75002+Paris,+Francia!3b1!8m2!3d48.8697543!4d2.3449785!3m4!1s0x47e66e3d8ddf3d39:0x9e0efb4335750123!8m2!3d48.8697543!4d2.3449785">Agrandir la carte</a></small>

                            </span>
                                </address>
                            </li>
                        </ul>
                    </div>

                </aside>
            </div>
            <!-- Sidebar / End -->

            <!-- Page Content -->
            <div class="eleven floated">
                <section class="page-content">
                    <h3 class="margin">Contact</h3>

                    <!-- Contact Form -->
                    <section id="contact">

                        <!-- Form -->
                        <form method="post" action="Dvr/process" name="N30" id="N30">
                            <input name="token" type="hidden" id="token" value="0d87b5c76b4c480a107b621cc67f469d"/>
                            <div id="result"></div>
                            <fieldset>

                                <div>
                                    <label for="nombre" accesskey="U">Prénom :</label>
                                    <input name="nombre" type="text" id="nombre" />
                                </div>

                                <div>
                                    <label for="email" accesskey="E">Email: <span>*</span></label>
                                    <input name="email" type="email" id="email" />
                                </div>

                                <div>
                                    <label for="comentarios" accesskey="C">Message: <span>*</span></label>
                                    <textarea name="comentarios" cols="40" rows="3" id="comentarios" spellcheck="true"></textarea>
                                </div>

                            </fieldset>

                            <input type="submit" class="submit" id="submit" value="Envoyer" />
                            <div class="clearfix"></div>

                        </form>

                    </section>
                    <!-- Contact Form / End -->


                </section>

            </div>
            <!-- Page Content / End -->

        </div>
        <!-- 960 Container / End -->

    </div>
    <!-- Content / End -->

</div>
<!-- Wrapper / End -->
<?php include('modules/footer.php'); ?>


</body>
</html>