<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/css/materialize.min.css'>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!--<a class="waves-effect waves-light btn-large">Petit Dej Jeudi</a>-->
    <a href="log.php?id_event=7" class="waves-effect waves-light btn-large">Petit Dej Jeudi</a>
    <a href="log.php?id_event=1" class="waves-effect waves-light btn-large">Ford Boyard</a>

    <?php
    $id_event = $_GET['id_event'];
    if($id_event == 7 ){
      $requestUrl = "http://liste-helios.com/api/apiSE.php?action=getReservations&id_event=" . $id_event;
      $reponse  = file_get_contents($requestUrl);
      $json_obj  = json_decode($reponse);

      $requestUrl = "http://liste-helios.com/api/apiSE.php?action=getReservations&id_event=" . $id_event;
      $reponse  = file_get_contents($requestUrl);
      $visu_obj  = json_decode($reponse);

      for($i = 3; $i<count($json_obj); $i = $i+4){

        $nom = urldecode($json_obj[$i-3][0]->nom);
        $prenom = urldecode($json_obj[$i-3][1]->prenom);
        $mail = urldecode($json_obj[$i-3][2]->mail);
        $phone = urldecode($json_obj[$i-3][3]->phone);
        $commande = explode("//",urldecode($json_obj[$i-3][4]->commande));
        $valide = urldecode($json_obj[$i-3][5]->valide);
        $requete = "?action=setValide&id_event=".urlencode($id_event)."&nom=".urlencode($nom)."&prenom=".urlencode($prenom)."&commande=";

        $nom2 = urldecode($json_obj[$i-2][0]->nom);
        $prenom2 = urldecode($json_obj[$i-2][1]->prenom);
        $mail2 = urldecode($json_obj[$i-2][2]->mail);
        $phone2 = urldecode($json_obj[$i-2][3]->phone);
        $commande2 = explode("//",urldecode($json_obj[$i-2][4]->commande));
        $valide2 = urldecode($json_obj[$i-2][5]->valide);
        $requete2 = "?action=setValide&id_event=".urlencode($id_event)."&nom=".urlencode($nom2)."&prenom=".urlencode($prenom2)."&commande=";

        $nom3 = urldecode($json_obj[$i-1][0]->nom);
        $prenom3 = urldecode($json_obj[$i-1][1]->prenom);
        $mail3 = urldecode($json_obj[$i-1][2]->mail);
        $phone3 = urldecode($json_obj[$i-1][3]->phone);
        $commande3 = explode("//",urldecode($json_obj[$i-1][4]->commande));
        $valide3 = urldecode($json_obj[$i-1][5]->valide);
        $requete3 = "?action=setValide&id_event=".urlencode($id_event)."&nom=".urlencode($nom3)."&prenom=".urlencode($prenom3)."&commande=";

        $nom4 = urldecode($json_obj[$i][0]->nom);
        $prenom4 = urldecode($json_obj[$i][1]->prenom);
        $mail4 = urldecode($json_obj[$i][2]->mail);
        $phone4 = urldecode($json_obj[$i][3]->phone);
        $commande4 = explode("//",urldecode($json_obj[$i][4]->commande));
        $valide4 = urldecode($json_obj[$i][5]->valide);
        $requete4 = "?action=setValide&id_event=".urlencode($id_event)."&nom=".urlencode($nom4)."&prenom=".urlencode($prenom4)."&commande=";

      ?>
        <div class="row">
            <div class="col s12 m3">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "Nom : ".$nom;
                  echo "<br/>";
                  echo "Prénom : ".$prenom;
                  echo "<br/>";
                  echo "Mail : ".$mail;
                  echo "<br/>";
                  echo "Téléphone : ".$phone;
                  echo "<br/>";
                  echo $commande[0];
                  echo "<br/>";
                  echo $commande[1];
                  echo "<br/>";
                  echo $commande[2];
                  echo "<br/>";
                  echo $commande[3];
                  echo $valide;
                  if($valide == 2){
                  ?>
                  <a onClick="javascript: loadUrl('<?php echo $requete;?>1');" class="waves-effect waves-light btn-large right green"><i class="material-icons">done</i></a>
                  <?php
                  }
                  else {?>
                  <a onClick="javascript: loadUrl('<?php echo $requete;?>2');" class="waves-effect waves-light btn-large right red"><i class="material-icons">done</i></a>
                  <?php
                } ?>
              </span>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "Nom : ".$nom2;
                  echo "<br/>";
                  echo "Prénom : ".$prenom2;
                  echo "<br/>";
                  echo "Mail : ".$mail2;
                  echo "<br/>";
                  echo "Téléphone : ".$phone2;
                  echo "<br/>";
                  echo $commande2[0];
                  echo "<br/>";
                  echo $commande2[1];
                  echo "<br/>";
                  echo $commande2[2];
                  echo "<br/>";
                  echo $commande2[3];
                  if($valide2 == 2){
                  ?>
                  <a onClick="javascript: loadUrl('<?php echo $requete2;?>1');" class="waves-effect waves-light btn-large right green"><i class="material-icons">done</i></a>
                  <?php
                  }
                  else {?>
                  <a onClick="javascript: loadUrl('<?php echo $requete2;?>2');" class="waves-effect waves-light btn-large right red"><i class="material-icons">done</i></a>
                  <?php
                } ?>
              </span>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "Nom : ".$nom3;
                  echo "<br/>";
                  echo "Prénom : ".$prenom3;
                  echo "<br/>";
                  echo "Mail : ".$mail3;
                  echo "<br/>";
                  echo "Téléphone : ".$phone3;
                  echo "<br/>";
                  echo $commande3[0];
                  echo "<br/>";
                  echo $commande3[1];
                  echo "<br/>";
                  echo $commande3[2];
                  echo "<br/>";
                  echo $commande3[3];
                  if($valide3 == 2){
                  ?>
                  <a onClick="javascript: loadUrl('<?php echo $requete3;?>1');" class="waves-effect waves-light btn-large right green"><i class="material-icons">done</i></a>
                  <?php
                  }
                  else {?>
                  <a onClick="javascript: loadUrl('<?php echo $requete3;?>2');" class="waves-effect waves-light btn-large right red"><i class="material-icons">done</i></a>
                  <?php
                } ?>
              </span>
              </div>
            </div>
            <div class="col s12 m3">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "Nom : ".$nom4;
                  echo "<br/>";
                  echo "Prénom : ".$prenom4;
                  echo "<br/>";
                  echo "Mail : ".$mail4;
                  echo "<br/>";
                  echo "Téléphone : ".$phone4;
                  echo "<br/>";
                  echo $commande4[0];
                  echo "<br/>";
                  echo $commande4[1];
                  echo "<br/>";
                  echo $commande4[2];
                  echo "<br/>";
                  echo $commande4[3];
                  if($valide4 == 2){
                  ?>
                  <a onClick="javascript: loadUrl('<?php echo $requete4;?>1');" class="waves-effect waves-light btn-large right green"><i class="material-icons">done</i></a>
                  <?php
                  }
                  else {?>
                  <a onClick="javascript: loadUrl('<?php echo $requete4;?>2');" class="waves-effect waves-light btn-large right red"><i class="material-icons">done</i></a>
                  <?php
                } ?>
              </span>
              </div>
            </div>
          </div>
      <?php
    }
  }
  elseif ($id_event == 1) {

    $requestUrl = "http://liste-helios.com/api/apiSE.php?action=getMembreGroupe&id_event=" . $id_event;
    $reponse  = file_get_contents($requestUrl);
    $json_obj  = json_decode($reponse, true);

    for($a = 0; $a<count($json_obj); $a++){

          $nom0 = urldecode($json_obj[$a][0][0]["nom"]);
          $prenom0 = urldecode($json_obj[$a][0][1]["prenom"]);
          $mail0 = urldecode($json_obj[$a][0][2]["mail"]);
          $phone0 = urldecode($json_obj[$a][0][3]["phone"]);
          $commande0 = explode("//",urldecode($json_obj[$a][0][4]["commande"]));

          $nom = urldecode($json_obj[$a][1][0]["nom"]);
          $prenom = urldecode($json_obj[$a][1][1]["prenom"]);
          $mail = urldecode($json_obj[$a][1][2]["mail"]);
          $phone = urldecode($json_obj[$a][1][3]["phone"]);
          $commande = explode("//",urldecode($json_obj[$a][1][4]["commande"]));

          $nom2 = urldecode($json_obj[$a][2][0]["nom"]);
          $prenom2 = urldecode($json_obj[$a][2][1]["prenom"]);
          $mail2 = urldecode($json_obj[$a][2][2]["mail"]);
          $phone2 = urldecode($json_obj[$a][2][3]["phone"]);
          $commande2 = explode("//",urldecode($json_obj[$a][2][4]["commande"]));

          $nom3 = urldecode($json_obj[$a][3][0]["nom"]);
          $prenom3 = urldecode($json_obj[$a][3][1]["prenom"]);
          $mail3 = urldecode($json_obj[$a][3][2]["mail"]);
          $phone3 = urldecode($json_obj[$a][3][3]["phone"]);
          $commande3 = explode("//",urldecode($json_obj[$a][3][4]["commande"]));

          $nom4 = urldecode($json_obj[$a][4][0]["nom"]);
          $prenom4 = urldecode($json_obj[$a][4][1]["prenom"]);
          $mail4 = urldecode($json_obj[$a][4][2]["mail"]);
          $phone4 = urldecode($json_obj[$a][4][3]["phone"]);
          $commande4 = explode("//",urldecode($json_obj[$a][4][4]["commande"]));

        ?>
          <div class="row">
            <div class="col s12 m2">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "<h4>".$phone."</h4>";
                  ?>
              </span>
              </div>
            </div>
            <div class="col s12 m2">
              <div class="card-panel teal">
                <span class="white-text">
                  <?php
                  echo "Nom : ".$nom0;
                  echo "<br/>";
                  echo "Prénom : ".$prenom0;
                  echo "<br/>";
                  echo "Mail : ".$mail0;
                  echo "<br/>";
                  echo "Équipe : ".$phone;
                  echo "<br/>";
                  echo "Téléphone : ".$phone0;
                  ?>
              </span>
              </div>
            </div>
            <div class="col s12 m2">
                <div class="card-panel teal">
                  <span class="white-text">
                    <?php
                    echo "Nom : ".$nom;
                    echo "<br/>";
                    echo "Prénom : ".$prenom;
                    echo "<br/>";
                    echo "Mail : ".$mail;
                    echo "<br/>";
                    echo "Équipe : ".$phone;
                    echo "<br/>"
                    ?>
                </span>
                </div>
              </div>
              <div class="col s12 m2">
                <div class="card-panel teal">
                  <span class="white-text">
                    <?php
                    echo "Nom : ".$nom2;
                    echo "<br/>";
                    echo "Prénom : ".$prenom2;
                    echo "<br/>";
                    echo "Mail : ".$mail2;
                    echo "<br/>";
                    echo "Équipe : ".$phone2;
                    echo "<br/>";
                    echo $commande2[0];
                    ?>
                </span>
                </div>
              </div>
              <div class="col s12 m2">
                <div class="card-panel teal">
                  <span class="white-text">
                    <?php
                    echo "Nom : ".$nom3;
                    echo "<br/>";
                    echo "Prénom : ".$prenom3;
                    echo "<br/>";
                    echo "Mail : ".$mail3;
                    echo "<br/>";
                    echo "Équipe : ".$phone3;
                    echo "<br/>";
                    echo $commande3[0];
                    ?>
                </span>
                </div>
              </div>
              <div class="col s12 m2">
                <div class="card-panel teal">
                  <span class="white-text">
                    <?php
                    echo "Nom : ".$nom4;
                    echo "<br/>";
                    echo "Prénom : ".$prenom4;
                    echo "<br/>";
                    echo "Mail : ".$mail4;
                    echo "<br/>";
                    echo "Équipe : ".$phone4;
                    echo "<br/>";
                    echo $commande4[0];
                    ?>
                </span>
                </div>
              </div>
            </div>
        <?php
      //}
    }
  }
    ?>

    <script type="text/javascript">

    function loadUrl(url) {
      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          //document.getElementById("demo").innerHTML = xhttp.responseText;
        }
      };
      //alert(url);
      xhttp.open("GET", "./apiSE.php"+url, true);
      xhttp.send();
      window.location.reload();
      }

    </script>

    <script src="/js/index.js"/>

    <!--Import jQuery before materialize.js-->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.95.3/js/materialize.min.js'></script>


  </body>
</html>
