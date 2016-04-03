<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
     <title>HELIOS</title>
     <link rel="icon" href="img/logo_small.png" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/main.css">
     <link rel="stylesheet" href="css/responsive.css">
     <link rel="stylesheet" href="css/popup_responsive.css">
     <link rel="stylesheet" href="css/loadstyle.css">
     <link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
</head>

<body>

<?php
define("_Inclusion_autorisee_", true);
include_once('form/controleur_form.php');
if(isset($_GET['message'],$_GET['reussi'])){
?>
     <script type="text/javascript">
           alert("<?php echo $_GET['message']?>")
           document.location.href="http://liste-helios.com/"
           //document.location.href="http://www.liste-helios.com/test-helios/"
     </script>
<?php } ?>

<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<!-- Indication Scroll Pourcentage :
     0p :           Page d'accueil
     230p-300p:     Slide 2 (Programme SE avec div apparue)
     400p-450p:     Slide 3 (Video)
     550p-950p:     Slide 4 (Membres)
     1050p-1100p:   Slide 5 (Programme)
     1150p:         Slide 6 (Reservation)
 -->

<!-- LOADING PAGE -->


<div class="load">
     <div class="dot"></div>
     <div class="outline">
     <span></span>
     </div>
     <img src="img/min_logo.png" width="100px" style="position:absolute;z-index:1000;top:50%;left:50%;margin-left:-50px;margin-top:-50px;" />

      <!-- Lien page francais -->

     <a href="index.php">
          <div class="trad" id="trad_francais" title="Retourner sur la version française"></div>
     </a>

     <div id="rmq">
     <br>
     <strong>Comment :</strong> 
     It is highly recomand to use <Strong style="font-size: 3vmin;">Firefox</Strong> in order to make this website work fluidly (smooth scroll on).
     </div>
</div>

<div id="pop_up_mobile">
     <div id="pop_up_mobile_inside">
          <p>Go to the mobile version ?</p>
          <div class="btn yes" onclick='document.location.href="mobile/index.php";'>Yes</div>
          <div class="btn no" onclick='$("#pop_up_mobile").hide();'>No</div>
     </div>
</div>

<nav class="menu" data-0="top:100%;" data-150p="top:0%;" >
     <div class="hsContent" data-100p="opacity: 0;" data-140p="opacity: 1;">
          <span>
               <div id="haut" class="nav_indicator">
                    <div class="barre_nav"></div>
               </div>
               <div id="bas" class="nav_indicator">
                    <div class="barre_nav"></div>
               </div>
               <div id="Semaine_election" class="menu_element">
                    <h2 onclick="ScrollTo(300,0);" >Election week</h2>
               </div>
               <div id="Video_de_presentation" class="menu_element">
                    <h2 onclick="ScrollTo(450,0);" >Presentation video</h2>
               </div>
               <div id="Membres" class="menu_element">
                    <h2 onclick="ScrollTo(550,0);" >Members</h2>
               </div>
               <div id="Programme" class="menu_element">
                    <h2 onclick="ScrollTo(1100,0);" >Program</h2>
               </div>
               <div id="Reservation" class="menu_element">
                    <h2 onclick="ScrollTo(1150,0);" >Reservation</h2>
               </div>
          </span>
     </div>
</nav>


<div id="page-content">

     <div id="slides-container">
          <div id="slides"
          data-0="transform:translate(0%,0%);"
          data-150p="transform:translate(0%,-50%);"
          data-450p=""
          data-550p="transform:translate(0%,-100%);"
          data-950p=""
          data-1050p="transform:translate(0%,-150%);"
          data-1100p=""
          data-1150p="transform:translate(0%,-185%)";
          >

               <div id="slide-1" class="slide">
                    <div class="bcg"
                    data-0p="background-position: 0 0vh;"
                    data-150p="background-position: 0 80vh;">
                         <div class="hsContainer">
                              <div class="center_logo">
                                   <img
                                   data-0p="transform:translate(0,0px) rotate(0deg);"
                                   data-150p="transform:translate(0,600px) rotate(45deg);"
                                   id ="logo" src="img/logo.png" >
                              </div>
                              <div class="next_page no_opacity_hover" onclick="ScrollTo(300,2800);"
                              data-0p="opacity:1;transform:translateY(0px);"
                              data-50p="opacity:0;transform:translateY(-50px);">
                                   <div class="JS_clignote clignotement">
                                        <h1 >Scroll</h1>
                                        <i class="fa fa-angle-down"></i>
                                   </div>
                              </div>

                         </div>
                    </div>
               </div> <!-- Slide 1 -->

               <div id="slide-2" class="slide">

                    <div id="barres_anim" data-0p="height:10px;margin-bottom:-10px;" data-65p="" data-100p="height:85px;margin-bottom:-85px;">
                         <div class="anim_menu" data-0p="transform: translateX(-100%);" data-65p="transform: translateX(0%);"  ></div>
                         <div class="anim_menu" data-0p="transform: translateX(200%);" data-65p="transform: translateX(100%);"></div>
                    </div>

                    <div class="bcg"
                    data-0p="background-position: 0vw -60vh;"
                    data-150p="background-position: 0vw 0vh;"
                    data-210p="background-position: 0vw -10vh;"
                    data-300p=""
                    data-400p="background-position: -20vw -10vh;">
                         <div class="hsContainer">
                              <div class="hsContent">

                                   <div id="mardi" class="jour"
                                   data-110p="transform: translateY(-200%);opacity:0;"
                                   data-190p="transform: translateY(0%);opacity:1;"
                                   data-350p="opacity:1;transform: translateX(0%);"
                                   data-375p="opacity:0;transform: translateX(-100%);">
                                        <div class="arrow"></div>
                                        <div id="scale_1" class="description"
                                             data-110p="transform: scale(0.5);"
                                             data-190p=""
                                             data-191p="transform: scale(1);">
                                             <div class="Box_event">
                                                  <div id="devant" class="face" title="Click for more details">
                                                       <div class="blur">
                                                            <h2>TUESDAY <i class="fa fa-angle-double-right"></i></h2>
                                                            <span>
                                                                 <div class="contenu_front">
                                                                      <div id="BC_flecheHaut" class="fleche_SE"></div>
                                                                      <?php if( $SE_Mardi_dispo == 1){?>
                                                                           Enough of winter? 
                                                                           Come and warm you up at our stand “muy caliente” 
                                                                           which theme is Brazil! We promise our food will 
                                                                           make you travel on the beach of Copacabana. 
                                                                           There might even be some beautiful ladies around there! 
                                                                           So what are you waiting for?
                                                                           <br><br>
                                                                           Samba di Janeiro !
                                                                      <?php }else{?>
                                                                           <div class="SE_non_dispo">Program available Monday night.</div>
                                                                      <?php }?>
                                                                      <div id="BC_flecheBas" class="fleche_SE"></div>
                                                                 </div>
                                                            </span>
                                                       </div>
                                                  </div>
                                                  <div id="derriere" class="face">
                                                       <div class="blur">
                                                            <?php if( $SE_Mardi_dispo == 1){?>
                                                                 <h2>Outside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Safari Tour
                                                                      <br>
                                                                      <img src="img/tipie.gif">Challenge your list
                                                                 </div>
                                                                 <h2>Inside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Video games
                                                                      <br>
                                                                      <img src="img/tipie.gif">Photo Call
                                                                 </div>
                                                                 <h2>Night</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Hypnotist
                                                                 </div>
                                                                 <h2>lunch</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Spicy chicken with rice
                                                                 </div>
                                                            <?php }else{?>
                                                                 <div class="SE_non_dispo">Program available Monday night.</div>
                                                            <?php }?>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div id="mercredi" class="jour"
                                   data-150p="transform: translateY(-200%);opacity:0;"
                                   data-200p="transform: translateY(0%);opacity:1;"
                                   data-325p="opacity:1;transform: translateX(0%);"
                                   data-350p="opacity:0;transform: translateX(-100%);">
                                        <div class="arrow"></div>
                                        <div id="scale_2" class="description"
                                             data-150p="transform: scale(0.5);"
                                             data-200p=""
                                             data-201p="transform: scale(1);">
                                             <div class="Box_event">
                                                  <div id="devant" class="face" title="Click for more details">
                                                       <div class="blur">
                                                            <h2>WEDNESDAY <i class="fa fa-angle-double-right"></i></h2>
                                                            <span>
                                                                 <div class="contenu_front">
                                                                      <div id="BC_flecheHaut" class="fleche_SE"></div>
                                                                      <?php if( $SE_Mercredi_dispo == 1){?>
                                                                           We keep on with the sun (yes… our name is not HELIOS for no reason <i class="fa fa-smile-o"></i> !). You will this time travel in the Aztec’s country.
                                                                           <br><br>
                                                                           Maracas and sombreros will be part of it to make you live a day in the party mood!
                                                                      <?php }else{?>
                                                                           <div class="SE_non_dispo">Program available wednesday night.</div>
                                                                      <?php }?>
                                                                      <div id="BC_flecheBas" class="fleche_SE"></div>
                                                                 </div>
                                                            </span>
                                                       </div>
                                                  </div>
                                                  <div id="derriere" class="face">
                                                       <div class="blur">
                                                            <?php if( $SE_Mercredi_dispo == 1){?>
                                                                 <h2>Outside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Ride of the Croco
                                                                      <br>
                                                                      <img src="img/tipie.gif">Giant paper’s competition
                                                                      <br>
                                                                      <img src="img/tipie.gif">Food competition
                                                                 </div>

                                                                 <h2>Inside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Video games
                                                                      <br>
                                                                      <img src="img/tipie.gif">Fresh Content by Ice Tea
                                                                      <br>
                                                                      <img src="img/tipie.gif">Bowling
                                                                 </div>

                                                                 <h2>Night</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Fort Boyard
                                                                 </div>

                                                                 <h2>lunch</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Burritos and tortillas
                                                                 </div>
                                                            <?php }else{?>
                                                                 <div class="SE_non_dispo">Program available wednesday night.</div>
                                                            <?php }?>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div id="jeudi" class="jour"
                                   data-170p="transform: translateY(-200%);opacity:0;"
                                   data-210p="transform: translateY(0%);opacity:1;"
                                   data-300p="opacity:1;transform: translateX(0%);"
                                   data-325p="opacity:0;transform: translateX(-100%);" >
                                        <div class="arrow"></div>
                                        <div id="scale_3" class="description"
                                             data-170p="transform: scale(0.5);"
                                             data-210p=""
                                             data-211p="transform: scale(1);">
                                             <div class="Box_event">
                                                  <div id="devant" class="face" title="Click for more details">
                                                       <div class="blur">
                                                            <h2>THURSDAY <i class="fa fa-angle-double-right"></i></h2>
                                                            <span>
                                                                 <div class="contenu_front">
                                                                      <div id="BC_flecheHaut" class="fleche_SE"></div>
                                                                      <?php if( $SE_Jeudi_dispo == 1){?>
                                                                           We end up the week properly, with a highly desired destination: the United-States! 
                                                                           It is kind of a modern return to the roots.
                                                                           <br><br>
                                                                           Come and taste our Hot Dogs: the American Dream has never been so close to you!
                                                                      <?php }else{?>
                                                                           <div class="SE_non_dispo">Program available thursday night.</div>
                                                                      <?php }?>
                                                                      <div id="BC_flecheBas" class="fleche_SE"></div>
                                                                 </div>
                                                            </span>
                                                       </div>
                                                  </div>
                                                  <div id="derriere" class="face">
                                                       <div class="blur">
                                                            <?php if($SE_Jeudi_dispo == 1){?>
                                                                 <h2>Outside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Mower
                                                                      <br>
                                                                      <img src="img/tipie.gif">Mechanical rodeo
                                                                      <br>
                                                                      <img src="img/tipie.gif">Elastic basket
                                                                 </div>
                                                                 <h2>Inside activities</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Photo call
                                                                      <br>
                                                                      <img src="img/tipie.gif">Darts game
                                                                 </div>
                                                                 <h2>Night</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Election Party
                                                                 </div>
                                                                 <h2>lunch</h2>
                                                                 <div class="liste_activite">
                                                                      <img src="img/tipie.gif">Hot dogs and french fries
                                                                 </div>
                                                            <?php }else{?>
                                                                 <div class="SE_non_dispo">Program available thursday night.</div>
                                                            <?php }?>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   
                                   <a id="blaooos" href="img/blaooos.pdf" title="Telecharger le Mag Helios"
                                   data-150p="transform: translateY(-400%);opacity:0;"
                                   data-200p="transform: translateY(0%);opacity:1;"
                                   data-325p="opacity:1;transform: translateX(0%);"
                                   data-350p="opacity:0;transform: translateX(-50%);">
                                        <i class="fa fa-angle-double-right"></i> Helios Mag <i class="fa fa-book"></i>
                                   </a>

                              </div>
                         </div>
                    </div>
                    <div class="next_page" onclick="ScrollTo(450,2000);"
                    data-200p="opacity:0;transform:translateX(-50px) rotateZ(-90deg);"
                    data-210p="opacity:0.7;transform:translateX(0px) rotateZ(-90deg);"
                    data-300p=""
                    data-320p="opacity:0;transform:translateX(-400px) rotateZ(-90deg);"
                    >
                         <i class="fa fa-angle-down"></i>
                    </div>
               </div> <!-- Slide 2 -->

               <div id="slide-3" class="slide"
               data-300p="transform:translate(100%,100%);"
               data-400p="transform:translate(-0.1%,100%);">
                     <div class="hsContent"
                          data-300p="opacity:0;"
                          data-400p="opacity:1;"
                          data-450p=""
                          data-550p="opacity:0;">
                         <iframe width="854" height="480" src="https://www.youtube.com/embed/cxOy5aNe07Y" frameborder="0" allowfullscreen></iframe>
                    </div>
               </div><!-- Slide 3 -->

               <div id="slide-4" class="slide">
                    <div class="bcg"
                    data-450p="background-position: 0vh -80vh;"
                    data-550p="background-position: 0vh 0vh;"
                    data-950p="background-position: 0vh 0vh;"
                    data-1050p="background-position: 0vh 50vh;">
                         <div class="hsContainer">
                              <div class="hsContent">
                                   <div id="img_poles"
                                   data-1000p="transform: translateY(0px);"
                                   data-1100p="transform: translateY(-200px;);">
                                        <div id="com" class="pole"
                                        data-600p="opacity:0;transform: translateY(-30px);"
                                        data-601p="opacity:1;transform: translateY(0px);">
                                             <img src="img/poles/com.png">
                                        </div>
                                        <div id="event" class="pole"
                                        data-600p="opacity:0;transform: translateY(-30px);"
                                        data-680p=""
                                        data-681p="opacity:1;transform: translateY(0px);">
                                             <img src="img/poles/event.png">
                                        </div>
                                        <div id="ve" class="pole"
                                        data-600p="opacity:0;transform: translateY(-30px);"
                                        data-760p=""
                                        data-761p="opacity:1;transform: translateY(0px);">
                                             <img src="img/poles/ve.png">
                                        </div>
                                        <div id="log" class="pole"
                                        data-600p="opacity:0;transform: translateY(-30px);"
                                        data-840p=""
                                        data-841p="opacity:1;transform: translateY(0px);">
                                             <img src="img/poles/log.png">
                                        </div>
                                   </div>



                                   <div id="perspective"> <!-- CUBE MEMBRES -->
                                        <div class="Box"
                                        data-550p="transform: rotateX(0deg)   rotateZ(0deg)   translateY(0px)  translateZ(0px)  translateX(0px);"
                                        data-600p=""
                                        data-601p="transform: rotateX(90deg)  rotateZ(0deg)   translateY(-300px)  translateZ(300px)  translateX(0px);"
                                        data-680p=""
                                        data-681p="transform: rotateX(90deg)  rotateZ(90deg)  translateY(150px)  translateZ(300px)  translateX(-450px);"
                                        data-760p=""
                                        data-761p="transform: rotateX(90deg)  rotateZ(180deg) translateY(600px)  translateZ(300px)  translateX(0px);"
                                        data-840p=""
                                        data-841p="transform: rotateX(90deg)  rotateZ(270deg) translateY(150px)  translateZ(300px)  translateX(450px);"
                                        >


                                             <!-- Bureau  -->
                                             <div id="dessus" class="face"
                                             data-510p="opacity:0;transform:translateY(-10vh);"
                                             data-511p="opacity:1;transform:translateY(0);"
                                             data-600p="opacity:1;"
                                             data-601p="opacity:0;">

                                                  <h2>Headoffice</h2>

                                                  <div id="membres_bureau">
                                                       <div class="ligne_bureau" id="ligne_bureau_1">
                                                            <div id="bureau_1" class="membre_bureau" style="transform: scale(1.1);">
                                                                 <img src="img/membres/BUREAU/nicolasB.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Nicolas</h1>
                                                                      <h1>Bonneau</h1>
                                                                      <h1>President</h1>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="ligne_bureau" id="ligne_bureau_2">
                                                            <div id="bureau_2" class="membre_bureau" >
                                                                 <img src="img/membres/BUREAU/solene.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Solene</h1>
                                                                      <h1>Seguy</h1>
                                                                      <h1>Vice-president</h1>
                                                                 </div>
                                                            </div>
                                                            <div id="bureau_3" class="membre_bureau">
                                                                 <img src="img/membres/BUREAU/nicolasV.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Nicolas</h1>
                                                                      <h1>Velikonia</h1>
                                                                      <h1>Vice-president</h1>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="ligne_bureau" id="ligne_bureau_3">

                                                            <div id="bureau_4" class="membre_bureau">
                                                                 <img src="img/membres/BUREAU/charles.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Charles</h1>
                                                                      <h1>Therond</h1>
                                                                      <h1>Secretary</h1>
                                                                 </div>
                                                            </div>
                                                            <div id="bureau_5" class="membre_bureau">
                                                                 <img src="img/membres/BUREAU/tristan.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Tristan</h1>
                                                                      <h1>Fleury</h1>
                                                                      <h1>Treasurer</h1>
                                                                 </div>
                                                            </div>
                                                            <div id="bureau_6" class="membre_bureau">
                                                                 <img src="img/membres/BUREAU/emma.jpg">
                                                                 <div class="info_membre_bureau">
                                                                      <h1>Emma</h1>
                                                                      <h1>Cosialls</h1>
                                                                      <h1>Vice-treasurer</h1>
                                                                 </div>
                                                            </div>

                                                       </div>
                                                  </div>
                                             </div> <!-- Dessus -->

                                             <!-- Arrivé sur page : 600p/601p -->
                                             <div id="devant" class="face"
                                             data-600p="opacity:0;"
                                             data-601p="opacity:1;"
                                             data-680p=""
                                             data-681p="opacity:0.2"
                                             data-760p=""
                                             data-761p="opacity:0.1;"
                                             data-840p=""
                                             data-841p="opacity:0.1" >

                                                  <div id="pole_com" class="pole">

                                                       <h2>Com' Team</h2>

                                                       <div class="respo">
                                                            <div class="border_bottom"></div>
                                                            <div class="image_respo" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                 <img src="img/membres/COM/thibault.jpg">
                                                                 <img src="img/membres/contour.png">
                                                            </div>
                                                            <div class="info_respo" data-600p="transform: translateX(80px);" data-601p="transform:translateX(0px);">
                                                                 <h1>Thibault</h1>
                                                                 <h1>Colin</h1>
                                                            </div>
                                                       </div>

                                                       <div id="membres">
                                                            <div id="ligne_1" class="ligne"> <!-- 4 membre par ligne -->
                                                                 <!--*********** Classe Membre ********** -->
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/baptiste.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Baptiste</h1>
                                                                           <h1 style="font-size: 21px;">Bernardini</h1>
                                                                           <h1>Design</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/naoufel.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Naoufel</h1>
                                                                           <h1>Loubaris</h1>
                                                                           <h1>Design</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/pierre.jpg">
                                                                      <div class="info_membre">
                                                                           <h1 style="padding-top: 15%;">Pierre</h1>
                                                                           <h1 style="font-size: 21px;line-height: 28px;">Morvan Castelneau</h1>
                                                                           <h1>Design</h1>
                                                                      </div>
                                                                 </div>

                                                            </div>
                                                            <div id="ligne_2" class="ligne "> <!-- 4 membre par ligne -->

                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/michael.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Michael</h1>
                                                                           <h1>Lootgieter</h1>
                                                                           <h1>Web/app</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/mathieu.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Mathieu</h1>
                                                                           <h1>Legeay</h1>
                                                                           <h1 >Web/app</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/hubert.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Hubert</h1>
                                                                           <h1>Marret</h1>
                                                                           <h1>Web/app</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/wallerand.jpg">
                                                                      <div class="info_membre">
                                                                           <h1 style="font-size: 20px;">Wallerand</h1>
                                                                           <h1>Delevacq</h1>
                                                                           <h1>Web/app</h1>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                            <div id="ligne_3" class="ligne"> <!-- 4 membre par ligne -->

                                                                  <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/lucie.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Lucie</h1>
                                                                           <h1>Angebault</h1>
                                                                           <h1>Info Redac</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/Hortense.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Hortense</h1>
                                                                           <h1>Audebaud</h1>
                                                                           <h1>Info Redac</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/gauthier.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Gauthier</h1>
                                                                           <h1>Contat</h1>
                                                                           <h1>Info Redac</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/sophie.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Sophie</h1>
                                                                           <h1>Reiss</h1>
                                                                           <h1>Info Redac</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-600p="transform:scale(0);" data-601p="transform:scale(1);">
                                                                      <img src="img/membres/COM/estelle.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Estelle</h1>
                                                                           <h1>Peirrera</h1>
                                                                           <h1>Info Redac</h1>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div> <!-- Devant -->

                                             <!-- Arrivé sur page : 680p/681p-->
                                             <div id="droite" class="face"
                                             data-600p="opacity:0;"
                                             data-680p=""
                                             data-681p="opacity:1;"
                                             data-760p=""
                                             data-761p="opacity:0.2;"
                                             data-840p=""
                                             data-841p="opacity:0.1">

                                                  <div id="pole_event" class="pole">
                                                       <h2>Event Team</h2>

                                                       <div class="respo">
                                                            <div class="border_bottom"></div>
                                                            <div class="image_respo" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                 <img src="img/membres/EVENT/Rubben.jpg" >
                                                                 <img src="img/membres/contour.png">
                                                            </div>
                                                            <div class="info_respo" data-680p="transform: translateX(80px);" data-681p="transform:translateX(0px);">
                                                                 <h1>Rubben</h1>
                                                                 <h1>Sellem</h1>
                                                            </div>
                                                       </div>

                                                       <div id="membres">
                                                            <div id="ligne_1" class="ligne"> <!-- 3 membre sur cette ligne ligne -->

                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/Jordan.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Jordan</h1>
                                                                           <h1>Backenier</h1>
                                                                           <h1>Anim'</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/Quentin.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Quentin</h1>
                                                                           <h1>Fustec</h1>
                                                                           <h1>Anim'</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/Victor.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Victor</h1>
                                                                           <h1>Choisy</h1>
                                                                           <h1>Anim'</h1>
                                                                      </div>
                                                                 </div>

                                                            </div>
                                                            <div id="ligne_2" class="ligne"> <!-- 4 membre par ligne -->

                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/clara.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Clara</h1>
                                                                           <h1>Gaborit</h1>
                                                                           <h1>Sponsor</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/amandine.jpg">
                                                                      <div class="info_membre">
                                                                           <h1 style="font-size: 20px;">Amandine</h1>
                                                                           <h1>Testi</h1>
                                                                           <h1>Sponsor</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/loelia.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Loelia</h1>
                                                                           <h1>Rabergeau</h1>
                                                                           <h1>Trip</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-680p="transform:scale(0);" data-681p="transform:scale(1);">
                                                                      <img src="img/membres/EVENT/joanne.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Joanne</h1>
                                                                           <h1 style="font-size: 21px;">Sananikone</h1>
                                                                           <h1>Trip</h1>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div> <!-- Droite -->

                                             <!-- Arrivé sur page : 760p/761p-->
                                             <div id="derriere" class="face"
                                             data-600p="opacity:0;"
                                             data-760p=""
                                             data-761p="opacity:1;"
                                             data-840p=""
                                             data-841p="opacity:0.2">

                                                  <div id="pole_ve" class="pole">
                                                       <h2>Student life Team</h2>

                                                       <!--*********** Classe Respo ********** -->
                                                       <div class="respo">
                                                            <div class="border_bottom"></div>
                                                            <div class="image_respo" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                 <img src="img/membres/VE/quentinC.jpg">
                                                                 <img src="img/membres/contour.png">
                                                            </div>
                                                            <div class="info_respo" data-760p="transform: translateX(80px);" data-761p="transform:translateX(0px);">
                                                                 <h1>Quentin</h1>
                                                                 <h1>Clement</h1>
                                                            </div>
                                                       </div>
                                                       <!--*********** Fin Class Respo ********** -->

                                                       <div id="membres">
                                                            <div id="ligne_1" class="ligne"> <!-- 3 membre sur cette ligne ligne -->
                                                                 <div class="membre" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/katie.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Katie</h1>
                                                                           <h1>N'guyen</h1>
                                                                           <h1>Club</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/alice.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Alice</h1>
                                                                           <h1>Reichert</h1>
                                                                           <h1>Club</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" style ="line-height: 29px;" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/pivi.jpg">
                                                                      <div class="info_membre">
                                                                           <h1 style="padding-top: 19%;font-size: 24px" >Pierre Vincent</h1>
                                                                           <h1>Gouel</h1>
                                                                           <h1>Job</h1>
                                                                      </div>
                                                                 </div>

                                                            </div>

                                                            <div id="ligne_2" class="ligne"> <!-- 4 membre par ligne -->
                                                                 <div class="membre" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/capucine.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Capucine</h1>
                                                                           <h1>Ehkirch</h1>
                                                                           <h1>Job</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/daphnee.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Daphnée</h1>
                                                                           <h1>Grosse</h1>
                                                                           <h1 style="font-size: 15px;">International</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-760p="transform:scale(0);" data-761p="transform:scale(1);">
                                                                      <img src="img/membres/VE/romain.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Romain</h1>
                                                                           <h1>Victor</h1>
                                                                           <h1 style="font-size: 17px;">Active member</h1>
                                                                      </div>
                                                                 </div>
                                                            </div>

                                                       </div>
                                                  </div>
                                             </div> <!-- Derriere -->

                                             <!-- Arrivé sur page : 840p/841p-->
                                             <div id="gauche" class="face"
                                             data-600p="opacity:0;"
                                             data-840p=""
                                             data-841p="opacity:1">
                                                  <div id="pole_log" class="pole">

                                                       <h2>Log Team</h2>

                                                       <div class="respo">
                                                            <div class="border_bottom"></div>
                                                            <div class="image_respo" data-840p="transform:scale(0);" data-841p="transform:scale(1);">
                                                                 <img src="img/membres/LOG/juliette.jpg">
                                                                 <img src="img/membres/contour.png">
                                                            </div>
                                                            <div class="info_respo" data-840p="transform: translateX(80px);" data-841p="transform:translateX(0px);" style="left: 50%;top: -8%;">
                                                                 <h1>Juliette</h1>
                                                                 <h1 style="font-size: 24px;line-height: 27px;">Beraud Dufour</h1>
                                                            </div>
                                                       </div>

                                                       <div id="membres">
                                                            <div id="ligne_1" class="ligne"> <!-- 3 membre sur cette ligne ligne -->

                                                                 <div class="membre" data-840p="transform:scale(0);" data-841p="transform:scale(1);">
                                                                      <img src="img/membres/LOG/alexis.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Alexis</h1>
                                                                           <h1>Lemey</h1>
                                                                           <h1>Log</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-840p="transform:scale(0);" data-841p="transform:scale(1);">
                                                                      <img src="img/membres/LOG/arnaud.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Arnaud</h1>
                                                                           <h1>Cavrois</h1>
                                                                           <h1>Log</h1>
                                                                      </div>
                                                                 </div>
                                                                 <div class="membre" data-840p="transform:scale(0);" data-841p="transform:scale(1);">
                                                                      <img src="img/membres/LOG/vincent.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Vincent</h1>
                                                                           <h1>Gabu</h1>
                                                                           <h1>Log</h1>
                                                                      </div>
                                                                 </div>

                                                            </div>
                                                            <div id="ligne_2" class="ligne"> <!-- 4 membre par ligne -->
                                                               <div class="membre" data-840p="transform:scale(0);" data-841p="transform:scale(1);">
                                                                      <img src="img/membres/LOG/laila.jpg">
                                                                      <div class="info_membre">
                                                                           <h1>Laila</h1>
                                                                           <h1>Benchetto</h1>
                                                                           <h1>Log</h1>
                                                                      </div>
                                                                 </div>
                                                            </div>
                                                       </div>

                                                  </div>
                                             </div> <!-- Gauche -->

                                        </div> <!-- Box -->
                                   </div><!-- perspective -->
                              </div>
                         </div><!-- Hs container -->
                    </div><!-- Bcg -->

                    <div class="next_page" onclick="ScrollTo(1100,1500);"
                    data-500p="transform:translateY(-20vh);opacity:0;"
                    data-550p="transform:translateY(0vh);opacity:0.7;"
                    data-950p=""
                    data-1000p="opacity:0;">
                         <h1>Program</h1>
                         <i class="fa fa-angle-down"></i>
                    </div>

               </div>  <!-- Slide 4 -->

               <div id="slide-5" class="slide">
                    <div class="bcg"
                    data-950p="background-position: 0px -50vh;"
                    data-1050p="background-position: 0px 0vh;"
                    data-1100p=""
                    data-1150p="background-position: 0px 70vh;"> <!-- BCG fermer la pour le scale => passer en absolute  -->
                    </div>
                         <div class="hsContainer">
                              <div class="hsContent">

                                   <!-- Améliorer ton quotidien à l’école -->
                                   <div id="Prgm_G">
                                        <div class="titre_prgm" title="Get more details"
                                        data-1030p="transform: translateX(-50vw)"
                                        data-1031p="transform: translateX(0vw)">
                                             <div class="opacity_arrow"><i class="fa fa-angle-down"></i></div>
                                             <h2>Améliorer ton quotidien à l’école</h2>
                                             <br>
                                             <h1>( Click )</h1>
                                        </div>
                                        <div class="detail_prgm">
                                             <div class="liste_prgm">
                                                  <div class="intitule intitule_ouvert" title="Open the tab" >
                                                       <h2>Coin détente</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Des casiers dans la rue </h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Chariot Bouffe</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Service de perte d’objets</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Prêt de matériel</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Installation flipper, jeu de flèchettes</h2>
                                                  </div>
                                                   <div class="intitule" title="Open the tab" >
                                                       <h2>Site d’annales</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Proposer des jobs pendant les vacances</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Carte interactive du campus</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Communication alternant</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Application mobile</h2>
                                                  </div>
                                             </div>
                                             <div  class="sous_liste_prgm">
                                                  <div class="content_intitule content_ouvert">
                                                       <h2>Rendre plus agréable l’espace situé devant le BDE</h2>
                                                       En plus des billards et des baby-foot situés devant le BDE, il serait intéressant d’avoir
                                                       un espace dans lequel les étudiants pourraient se détendre en étant assis.<br>
                                                       Ce coin détente pourrait être constitué de canapés et/ou de poufs.
                                                  </div>
                                                  <div class="content_intitule" style="line-height: 3vmin;">
                                                       <h2>Laisser ses affaires en sécurité</h2>
                                                            Parfois, on aimerait bien déposer des affaires tel qu’un ordinateur, un sac de sport,
                                                            un vêtement devenu trop chaud entre le matin et l’après-midi.<br>
                                                            Cependant il n’y a pas de réel espace de stockage hormis les casiers pour le sport
                                                            qui sont situés dans le gymnase. Les sacs de sport sont alors souvent situés
                                                            près de l’accueil où il y a des risques de vols.<br> Les affaires sont aussi parfois
                                                            mises dans les cellules des différents clubs, auxquels tout le monde n’a pas
                                                            accès et qui conservent malgré tout un risque de vol.<br> Il serait donc intéressant
                                                            de pouvoir installer des casiers (du même type que ceux utilisés dans le gymnase)
                                                            qui utilisent un code que l’utilisateur initialise à chaque utilisation.
                                                            De plus, pour éviter l'encombrement, il serait précisé que les casiers
                                                            devront être vidés chaque semaine (ou toutes les 2 semaines).<br>
                                                            Pour faire face aux différents problèmes de type perte ou autre,
                                                            une étiquette avec un code que l’utilisateur choisi pourra être mis
                                                            dans le casier avec l’objet, l’utilisateur ayant le même code sur lui
                                                            pourra venir chercher l’objet au BDE grâce à son code.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Dépanner les étudiants/enseignants</h2>
                                                            La cafétéria fermant à 17h, beaucoup d'étudiants et enseignants finissant plus tard sont dans
                                                            l’incapacité de pouvoir prendre un café, ou un snack, sans se déplacer
                                                            longtemps et loin.<br> La charrette à bouffe laisserait à toutes ces personnes l'opportunité
                                                            de se restaurer facilement.<br>Ainsi, nous créerions un chariot qui
                                                            arpenterait la rue après les heures de fermeture de la Kfet et proposerait
                                                            aux étudiants des snacks et boissons après 17h sans les obliger à parcourir toute la rue.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Permettre aux étudiants de retrouver leurs affaires facilement</h2>
                                                            Un oubli ou une perte au sein de l’ESIEE arrive vite.<br> En général, l’intéressé poste
                                                            une annonce sur le mail général ou sur les réseaux sociaux, sans trop de succès.
                                                            Nous avons la volonté d’augmenter les chances de la personne à retrouver son objet
                                                            perdu en créant une base de données répertoriant le dit objet.<br> Cette base de données
                                                            serait accessible à la lecture sur le site du BDE. Ainsi, si une personne retrouve
                                                            cet objet, l’ayant vu répertorié sur la base de données, il pourrait le rapporter
                                                            au BDE et son propriétaire serait contacté.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Dépanner les étudiants</h2>
                                                            Le prêt de matériel est une bonne idée car il permet de dépanner les étudiants.
                                                            Cependant, de nombreux objets sont détériorés ou remplacés par des modèles défaillants.<br>
                                                            Pour pouvoir faire face à ce problème tout en maintenant cette offre, nous proposons de
                                                            renforcer le contrôle lié aux prêts d’objets (ajout d’une marque distinctive apposée
                                                            sur les objets prêtés, vérification au retour du bon fonctionnement de l’objet….).<br>
                                                            De plus, nous pourrions également prêter des feutres et des craies pour les tableaux, ce qui manque
                                                            souvent dans les salles lorsque l’on veut travailler en groupe.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Rendre plus agréable l’espace situé devant le BDE  </h2>
                                                            Une autre modification pourrait être apportée à l’espace de détente en face de la
                                                            cellule du BDE: des jeux de flèchettes.<br> Les flèchettes pourraient être basées sur le même
                                                            principe de prêt que les raquettes et les balles de tennis de table (contre carte étudiante).<br>
                                                            Ainsi qu’un jeu de flipper, dont la partie pourrait être payante, mais avec un prix très faible
                                                            qui serait surtout symbolique. Ceci diversifierait et dynamiserait davantage cet espace.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Rendre plus accessible un outil du quotidien</h2>
                                                            Élément devenu maintenant incontournable, le site d’annales est cependant difficilement
                                                            accessible depuis un mobile.<br> Ainsi nous avons implémenter les archives contenant
                                                            les annales directement sur notre application officielle (déjà existante) qui seront mises
                                                            à jour régulièrement au même titre que sur le site du BDE.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Aider les étudiants à se faire de l’argent de poche</h2>
                                                            Qui n’aimerait pas trouver un petit job facile: donner des cours de maths, faire du babysitting,
                                                            ou même aider le personnel de l’ESIEE pour se faire un peu d’argent pendant les vacances ?<br>
                                                            Le BDE pourrait proposer de publier des petites annonces à la place des élèves pour les aider à trouver des petits travaux.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Partage de bons plans</h2>
                                                            Notre campus possède beaucoup de services divers et variés (restaurants, médecins, supermarchés),
                                                            mais beaucoup d’étudiants ignorent leur existence où ne les situent pas.<br>C’est pour répondre à ce
                                                            besoin que nous avons eu l’idée de créer une carte interactive du campus Descartes accessible
                                                            directement depuis notre application et où chacun pourrait partager ses bonnes adresses.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Aider les alternants à mieux s’exprimer et s’intégrer dans l’associatif</h2>
                                                            Tu es alternant et tu as envie de t’impliquer dans l’associatif ? Hélios a pensé à toi et s’engage
                                                            à programmer la journée des clubs quand tu seras présent à l’école.<br>
                                                            De plus, on sait qu’il est difficile d’être au courant de tout, nous serons donc le plus possible
                                                            à ton écoute et c’est pourquoi nous avons un membre, lui-même alternant, dédié à cette tâche :
                                                            répondre au mieux à tes attentes.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Rassembler les essentiels de la vie étudiante dans une application !</h2>
                                                            Avec ses différents onglets (News, Agenda, Jeux, Scanner et Annales), l'application déjà existante regroupe
                                                            tout ce dont a besoin un étudiant pour profiter pleinement de sa scolarité. Elle sera mise à jour au cours de l'année.
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <!-- Organisation de nouveaux événements où tu es acteur -->
                                   <div id="Prgm_D">
                                        <div class="titre_prgm" title="Get more details"
                                        data-1030p="transform: translateX(50vw)"
                                        data-1031p="transform: translateX(0vw)">
                                             <div class="opacity_arrow"><i class="fa fa-angle-down"></i></div>
                                             <h2>Organization of news events where you’ll be actor</h2>
                                             <br>
                                             <h1>( Click )</h1>
                                        </div>
                                        <div class="detail_prgm">
                                             <div class="liste_prgm">
                                                  <div class="intitule intitule_ouvert" title="Open the tab" >
                                                       <h2>The non-integration party</h2>
                                                  </div>
                                                   <div class="intitule" title="Open the tab" >
                                                       <h2>Nightclub</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Paris trip</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Theme parties</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Kfet costume</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>One week, one club</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Arts week</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Gastronomic day</h2>
                                                  </div>
                                                  <div class="intitule" title="Open the tab" >
                                                       <h2>Summer trip</h2>
                                                  </div>
                                             </div>
                                             <div class="sous_liste_prgm">
                                                  <div class="content_intitule content_ouvert">
                                                       <h2>Say goodbye to the student in E5</h2>
                                                            This would be a party reserved for students in E5, who are going to say goodbye to their student’s life.
                                                             It could take place outside of the school or inside, just like a Kfet’ only for them.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Having nightclub trip in Paris for students</h2>
                                                            Going to a nightclub is complicated as it takes to find the time, the club, the right date…
                                                            This is why we offer you the opportunity to organize this event and make your life easier.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Give accessibility to students who want to go to Paris</h2>
                                                            To allow every students to go out in Paris without ending up with a headache, we propose to prepare their trip.
                                                            Thanks to a “group trip” system, every student will be suer to find the time and the people to go in 
                                                            different kind of trips (shows, cinema, Aqua Boulevard, Paris Games Week, etc…).
                                                  </div>

                                                  <div class="content_intitule">
                                                       <h2>Share a good moment</h2>
                                                            The idea is to go out with a group of students on restaurants such as pizzeria,
                                                             Fast-food, Japanese... In addition to this, we want to create a cheap “ride sharing” 
                                                             system to allow people who live far away to come.

                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Improve Kfet’s fun</h2>
                                                            Only a few students are dressed up during the Kfets, so we want to create a best dress competition. 
                                                            Our members will vote for the tree best and announce the result on facebook. Winners will be repaid.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Galvanize and show out clubs</h2>
                                                            The goal is to let the right to each club to express themselves. 
                                                            Each of them would have one week to show what they do,
                                                            attract more people in their club.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Improve the arts week</h2>
                                                            The arts week, which was a great success last year, will become bigger 
                                                            and welcome more people from the campus. We would like to realize this project with the AVED
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Learn to student how to eat better</h2>
                                                            Student’s meal aren’t often diversified. We wish to help them by organizing
                                                            a gastronomic day with head cook. They could learn to student how to easily cook.
                                                  </div>
                                                  <div class="content_intitule">
                                                       <h2>Give the opportunity to go on holydays for a low price</h2>
                                                            The success of Amsterdam, ski and spring trip were so important that
                                                            we want add a new trip during the summer for a low price.
                                                            As a student, it is hard to go on holydays with a few money, this is why
                                                            we decided to give you the chance to travel with your friends.
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                         </div>
                    <div class="next_page" onclick="ScrollTo(1150,0);"
                    data-1000p="transform:translateY(-20vh);opacity:0;"
                    data-1050p="transform:translateY(0vh);opacity:0.7;"
                    data-1100p=""
                    data-1150p="opacity:0;">
                         <h1>Reservation</h1>
                         <i class="fa fa-angle-down"></i>
                    </div>
               </div> <!-- Slide 5 -->

               <div id="slide-6" class="slide" >
                    <div class="bcg">
                         <div class="hsContainer">
                              <div class="hsContent" >

                                   <div id="forms">
                                        <div id="form_1" class="formulaire" data-1100p="opacity:0; transform: translateX(-50%) translateY(-50vh);" data-1150p="opacity:1; transform:translateX(-50%) translateY(0vh);">
                                             <div class="blur">
                                                  <h2>Breakfast</h2>
                                                  <?php if( $EV_DEJ_dispo == 1){?>
                                                            <h1 class="teaser_event" style="font-size: 1.4vh;">Reserve your breakfast :</h1>
                                                            <form action="form/action_petitdej.php" method="post">
                                                                 <div id="slider_1" class="slider_page">
                                                                      <div class="page_inscription">
                                                                           <div id="choix_a_puce">
                                                                                <h1>To eat:</h1>
                                                                                <input type="radio" name="manger" value="Croissant" id="croissant" checked="checked" /><label for="croissant">Croissant</label><br>
                                                                                <input type="radio" name="manger" value="Pain au chocolat" id="Pain au chocolat"/><label for="Pain au chocolat">Chocolate-filled</label>
                                                                                <h1>Cold drink:</h1>
                                                                                <input type="radio" name="B_F" value="Jus d'orange" id="Jus d'orange" checked="checked" /> <label for="Jus d'orange">Orange juice</label><br>
                                                                                <input type="radio" name="B_F" value="Jus de pomme" id="Jus de pomme" /> <label for="Jus de pomme">Apple juice</label>
                                                                                <h1>Hot drink:</h1>
                                                                                <input type="radio" name="B_C" value="The" id="The" checked="checked" /> <label for="The">Tea</label><br>
                                                                                <input type="radio" name="B_C" value="cafe" id="cafe" /> <label for="cafe">coffee</label><br>
                                                                                <input type="radio" name="B_C" value="Chocolat" id="Chocolat" /> <label for="Chocolat">Chocolate</label>
                                                                           </div>
                                                                           <center class="next_form" id="next_1">Next</center>
                                                                      </div>
                                                                      <div class="page_inscription">
                                                                           <label for="nom_1">Name :</label><input maxlength="24" type="text" name="nom" id="nom_1"/><br>
                                                                           <label for="prenom_1">First name :</label><input maxlength="24" type="text" name="prenom" id="prenom_1"/><br>
                                                                           <label for="mail_1">Mail :</label><input maxlength="55" type="text" name="mail" id="mail_1"/><br>
                                                                           <label for="phone_1">Phone :</label><input maxlength="15" type="text" name="phone" id="phone_1"/><br>
                                                                           <label for="adresse_1">Address and Time :</label><input maxlength="150" type="text" name="adresse" id="adresse_1"/><br>

                                                                           <center class="last_form" id="last_1">Previous</center>
                                                                           <input id="submite" type="submit" value="Reserver">
                                                                      </div>
                                                                 </div>
                                                            </form>
                                                  <?php }else{?>
                                                            <div class="bcg_form_ND">
                                                                 <div class="Event_non_dispo">This event is no more available for the moment.</div>
                                                            </div>
                                                  <?php }?>
                                             </div>
                                        </div>

                                        <div id="form_2" class="formulaire" data-1100p="opacity:0; transform: translateX(-50%) translateY(-50vh);" data-1150p="opacity:1; transform: translateX(-50%) translateY(0vh);">
                                             <div class="blur">
                                                  <h2>Hypnotiseur</h2>
                                                  <?php if( $EV_hypno_dispo == 1){?>
                                                            <?php if( $place_restante_H != 0){?>
                                                                      <h1 class="teaser_event">Reserve your place for the spectacle of our hypnotist.</h1>
                                                                      <form action="form/action_hypno.php" method="post">
                                                                           <label for="nom_2">Name :</label><input maxlength="24" type="text" name="nom" id="nom_2"/><br>
                                                                           <label for="prenom_2">First name :</label><input maxlength="24" type="text" name="prenom" id="prenom_2"/><br>
                                                                           <label for="mail_2">Mail :</label><input maxlength="55" type="text" name="mail" id="mail_2"/><br>
                                                                           <label for="phone_2">Phone :</label><input maxlength="15" type="text" name="phone" id="phone_2"/><br>
                                                                           <div id="place_res_hypno">
                                                                                It remains <?php echo $place_restante_H;?> place(s).
                                                                           </div>
                                                                           <input id="submite" type="submit" value="Reserver"><br>
                                                                      </form>
                                                            <?php }else{?>
                                                                      <div class="bcg_form_ND">
                                                                            <div class="Event_non_dispo">This event is no more available</div>
                                                                      </div>
                                                            <?php }?>
                                                  <?php }else{?>
                                                            <div class="bcg_form_ND">
                                                                 <div class="Event_non_dispo">This event is no more available.</div>
                                                            </div>
                                                  <?php }?>

                                             </div>
                                        </div>

                                        <div id="form_3" class="formulaire" data-1100p="opacity:0; transform: translateX(-50%) translateY(-50vh);" data-1150p="opacity:1; transform:translateX(-50%) translateY(0vh);">
                                             <div class="blur">
                                                  <h2>Fort Boyard</h2>
                                                  <?php if( $EV_fortboyard_dispo == 1){?>
                                                       <h1 class="teaser_event">Réserve ta place pour participer à notre jeu "Fort Boyard".</h1>
                                                       <form action="form/action_fortboyard.php" class="noTab" method="post">
                                                            <div id="slider_2"  class="slider_page">
                                                                 <div class="page_inscription" id="insc_membre_1">
                                                                      <h1>Leader :</h1>
                                                                      <label for="name_groupe">Group name :</label><input maxlength="24" type="text" name="name_groupe" id="name_groupe"/><br>
                                                                      <label for="nom_3">Name :</label><input maxlength="24" type="text" name="nom" id="nom_3"/><br>
                                                                      <label for="prenom_3">First name :</label><input maxlength="24" type="text" name="prenom" id="prenom_3"/><br>
                                                                      <label for="mail_3">Mail :</label><input maxlength="55" type="text" name="mail" id="mail_3"/><br>
                                                                      <label for="phone_3">Tel :</label><input maxlength="15" type="text" name="phone" id="phone_3"/><br>
                                                                      <center class="next_form" id="next_2">Next</center>
                                                                 </div>
                                                                 <div class="page_inscription" id="insc_membre_2">
                                                                      <h1>Member 2 :</h1>
                                                                      <label for="nom_4">Name :</label><input maxlength="24" type="text" name="nom2" id="nom_4"/><br>
                                                                      <label for="prenom_4">First name :</label><input maxlength="24" type="text" name="prenom2" id="prenom_4"/><br>
                                                                      <label for="mail_4">Mail :</label><input maxlength="55" type="text" name="mail2" id="mail_4"/><br>
                                                                      <center class="last_form" id="last_2">Previous</center>
                                                                      <center class="next_form" id="next_3">Next</center>
                                                                 </div>
                                                                 <div class="page_inscription" id="insc_membre_3">
                                                                      <h1>Member 3 :</h1>
                                                                      <label for="nom_5">Name :</label><input maxlength="24" type="text" name="nom3" id="nom_5"/><br>
                                                                      <label for="prenom_5">First name :</label><input maxlength="24" type="text" name="prenom3" id="prenom_5"/><br>
                                                                      <label for="mail_5">Mail :</label><input maxlength="55" type="text" name="mail3" id="mail_5"/><br>
                                                                      <center class="last_form" id="last_3">Previous</center>
                                                                      <center class="next_form" id="next_4">Next</center>
                                                                 </div>
                                                                 <div class="page_inscription" id="insc_membre_4">
                                                                      <h1>Member 4 :</h1>
                                                                      <label for="nom_6">Name :</label><input maxlength="24" type="text" name="nom4" id="nom_6"/><br>
                                                                      <label for="prenom_6">First name :</label><input maxlength="24" type="text" name="prenom4" id="prenom_6"/><br>
                                                                      <label for="mail_6">Mail :</label><input maxlength="55" type="text" name="mail4" id="mail_6"/><br>
                                                                      <center class="last_form" id="last_4">Previous</center>
                                                                      <center class="next_form" id="next_5">Next</center>
                                                                 </div>
                                                                 <div class="page_inscription" id="insc_membre_5">
                                                                      <h1>Member 5 :</h1>
                                                                      <label for="nom_7">Name :</label><input maxlength="24" type="text" name="nom5" id="nom_7"/><br>
                                                                      <label for="prenom_7">First name :</label><input maxlength="24" type="text" name="prenom5" id="prenom_7"/><br>
                                                                      <label for="mail_7">Mail :</label><input maxlength="55" type="text" name="mail5" id="mail_7"/><br>
                                                                      <center class="last_form" id="last_5">Previous</center>

                                                                      <input id="submite" type="submit" value="Reserver">
                                                                 </div>
                                                            </div>
                                                       </form>
                                                  <?php }else{?>
                                                            <div class="bcg_form_ND">
                                                                 <div class="Event_non_dispo">This event is no more available.</div>
                                                            </div>
                                                  <?php }?>

                                             </div>
                                        </div>

                                   </div>

                              </div>
                         </div>
                    </div>
               </div>

          </div> <!-- Slides -->
     </div> <!-- Slide Container -->
</div> <!-- Page Container -->


<script>window.jQuery || document.write('<script src="js/jquery-2.0.2.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<script src="js/loader.js"></script>
<script src="js/skrollr.min.js"></script>
<script type="text/javascript">
     var s = skrollr.init();
</script>
<script type="text/javascript">
     $( document ).ready(function() {
          if($(window).width() < 1080) {
               $("#pop_up_mobile").show();
          }
     });
</script>

</body>

</html>
