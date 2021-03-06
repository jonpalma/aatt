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
                                Paris, Francia.<br><br><br>
                                <small> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3993459960243!2d2.345217214298529!3d48.86966321771378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e3d8ddf3d39%3A0x9e0efb4335750123!2s3+Rue+Saint-Fiacre%2C+75002+Paris%2C+Francia!5e0!3m2!1ses-419!2smx!4v1513964353581" width="225" height="275" frameborder="0" style="border:0" allowfullscreen></iframe><a href="https://www.google.com.mx/maps/place/3+Rue+Saint-Fiacre,+75002+Paris,+Francia/@48.8696632,2.3452172,17z/data=!4m13!1m7!3m6!1s0x47e66e3d8ddf3d39:0x9e0efb4335750123!2s3+Rue+Saint-Fiacre,+75002+Paris,+Francia!3b1!8m2!3d48.8697543!4d2.3449785!3m4!1s0x47e66e3d8ddf3d39:0x9e0efb4335750123!8m2!3d48.8697543!4d2.3449785">Agrandir la carte</a></small>
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
                    <h3 class="margin">Formulaire à remplir :
                    </h3>
                    <!-- Contact Form -->
                    <section id="contact">
                        <!-- Form -->
                        <form method="post" action="../mailer.php" name="N30" id="N30" class="contact-form">
                            <fieldset>
                                <div class="five floated">
                                    <label for="nombre" accesskey="U">Nom: <span>*</span></label>
                                    <input name="nombre" type="text" id="nombre" />
                                </div>
                                <div class="five ">
                                    <label for="email" accesskey="E">Email: <span>*</span></label>
                                    <input name="email" type="email" id="email" />
                                </div>
                                <div class="five floated">
                                    <label for="np" accesskey="U">Nombre de personnes: <span>*</span></label>
                                    <input name="np" type="text" id="np" />
                                </div>
                                <div class="five ">
                                    <label for="de" accesskey="E">Nombre de jours: <span>*</span> </label>
                                    <select name="de" type="text" id="de" />
                                    <option name="" id=""> 3 - 6 </option>
                                    <option name="" id=""> 6 - 10 </option>
                                    <option name="" id=""> 10 - 14</option>
                                    <option name="" id=""> 14 - 21</option>
                                    </select>
                                </div>
                                <div class="five floated">
                                    <label for="cv" accesskey="E">Villes à visiter: <span>*</span> </label>
                                    <input name="cv" type="text" id="cv" />
                                </div>
                                <div class="five ">
                                    <label for="de" accesskey="E">Services à inclure: <span>*</span> </label>
                                    <input name="si" type="text" id="si" />
                                </div>
                                <div class="five floated">
                                    <label for="cv" accesskey="E">Contenu: <span>*</span> </label>
                                    <input name="ct" type="text" id="ct" />
                                </div>
                                <div class="five ">
                                    <label for="money" accesskey="E">Devis : <span>*</span> </label>
                                    <select name="money" type="text" id="money" >
                                        <option name="" id=""> 500 - 1000 euros</option>
                                        <option name="" id=""> 1000 - 2000 euros</option>
                                        <option name="" id=""> 2000 - 3000 euros</option>
                                        <option name="" id=""> 3000 - 5000 euros</option>
                                    </select>
                                </div>
                                <div class="four floated">
                                    <label for="comentarios" accesskey="C">Commentaires: <span>*</span></label>
                                    <textarea name="comentarios" cols="40" rows="3" id="comentarios" spellcheck="true"></textarea>
                                </div>
                            </fieldset>
                            <input type="hidden" name="lang" value="fr">
                            <input type="hidden" name="form_type" value="quot">
                            <input type="submit" class="submit" id="submit" value="Envoyer" />
                            <div class="clearfix"></div>
                            <br>
                            <div class="form-output"></div>
                        </form>
                    </section>
                    <!-- Contact Form / End -->
                </section>
            </div>
            <!-- Page Content / End -->
            <img src="images/rosav.png" style="position:relative; z-index:1; float:right;">
        </div>
        <!-- 960 Container / End -->
    </div>
    <!-- Content / End -->
</div>
<script type="text/javascript" src="../scripts/mail.contact.js"></script>
<!-- Wrapper / End -->
<?php include('modules/footer.php'); ?>

</body>
</html>