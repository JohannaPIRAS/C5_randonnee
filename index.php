<?php

// Create connection
$connect = mysqli_connect("localhost", "root", "Gaelle", "reunion_island");
$connect->query("SET NAMES UTF8");

// Check connection
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());

    
}


?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Theme Made By www.w3schools.com - No Copyright -->
    <title>Randonnées</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div id="logo"> <a class="navbar-brand " href="#"><img src="images/rando.png" style="width:100px"></a> </div>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <a>
                        <button type="button" id="rando1" class="btn btn-sm" data-toggle="modal" data-target="#myModal1"> <img src="images/rando1.png" style="width: 40px"></button>
                    </a>
                    <a>
                        <button type="button" id="rando2" class="btn btn-sm" data-toggle="modal" data-target="#myModal2"> <img src="images/rando1.png" style="width: 40px"></button>
                    </a>
                    <a>
                        <button type="button" id="rando3" class="btn btn-sm" data-toggle="modal" data-target="#myModal3"> <img src="images/rando1.png" style="width: 40px"></button>
                    </a>
                    <a>
                        <button type="button" id="rando4" class="btn btn-sm" data-toggle="modal" data-target="#myModal4"> <img src="images/rando1.png" style="width: 40px"></button>
                    </a>
                    <a>
                        <button type="button" id="rando5" class="btn btn-sm" data-toggle="modal" data-target="#myModal5"> <img src="images/rando1.png" style="width: 40px"></button>
                    </a>
                </ul>
            </div>
        </div>
    </nav>
    <!-- First Container -->
    <div class="container-fluid bg-1 text-center">
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a id="tous" data-toggle="tab" href="#home">Liste de toutes les randonnées</a></li>
                <li><a data-toggle="tab" href="#menu1"></a></li>
                <li><a data-toggle="tab" href="#menu2"></a></li>
            </ul>
            <div id="tous" class="tab-content">
                  <?php
        $requête1 = mysqli_query($connect, "SELECT * FROM hiking");
        while ($requête1_resultat = mysqli_fetch_array($requête1))
        {

          echo$requête1_resultat ["id"];
          echo "\n";
          echo$requête1_resultat ["name"];
          echo "\n";
          echo$requête1_resultat ["difficulty"];
          echo "\n";
          echo$requête1_resultat ["distance"];
          echo "\n";
          echo$requête1_resultat ["duration"];
          echo "\n";
          echo$requête1_resultat ["height_difference"];
          echo "\n";
          echo$requête1_resultat ["available"];
          echo "</br>";
        };
        ?>    
              </div>
        <div class="modal fade" id="myModal1" role="dialog">
            <div class="modal-dialog">
            </div>
            <!-- Modal content-->
            <div class="modal-content">
                <h3> Nouvelle Randonnée </h3>
                <div class="modal-header ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Nom </br>
                                    <input type="text" name="nom" placeholder= "Le tour du Morne Langevin">
                                </th>
                                    </input>
                                <tr>
                                <th> Difficulté </br>    
                                    <input type="text" name="difficulte" placeholder= "facile">
                                </th>
                                    </input>
                            <tr>
                                <th> Distance </br>
                                    <input type="number" name="distance" placeholder="1" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                                <th> Durée </br>
                                     <input type="text" name="duree" placeholder="02:09.00" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                            <th> Dénivelé </br>
                                     <input type="text" name="denivele" placeholder="200" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                            <th> Praticable </br>
                                     <input type="text" name="praticable" placeholder="1" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                        </thead>
                    </table>
                    <button class="btn btn-success" data-dismiss="modal"> Créer </button>
                    <button class="btn btn-danger" data-dismiss="modal"> Annuler </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal2" role="dialog">
            <div class="modal-dialog">
            </div>
            <!-- Modal content-->
            <div class="modal-content">
                <h3></h3>
                <div class="modal-header ">
                    <table class="table table-striped">
                      <thead>
                            <tr>
                                <th> Nom </br>
                                    <input type="text" name="nom" placeholder= "Le tour du Morne Langevin">
                                </th>
                                    </input>
                                <tr>
                                <th> Difficulté </br>    
                                    <input type="text" name="difficulte" placeholder= "facile">
                                </th>
                                    </input>
                            <tr>
                                <th> Distance </br>
                                    <input type="number" name="distance" placeholder="1" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                                <th> Durée </br>
                                     <input type="text" name="duree" placeholder="02:09.00" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                            <th> Dénivelé </br>
                                     <input type="text" name="denivele" placeholder="200" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                            <th> Praticable </br>
                                     <input type="text" name="praticable" placeholder="1" style="width: 25%">
                                </th>
                                    </input>
                            </tr>
                        </thead>
                    </table>
                    <button class="btn btn-success" data-dismiss="modal"> Créer </button>
                    <button class="btn btn-danger" data-dismiss="modal"> Annuler </button>
                </div>
            </div>

        </div>                    
        </div>
        <div class="modal fade" id="myModal3" role="dialog">
            <div class="modal-dialog">
            </div>
            <!-- Modal content-->
            <div class="modal-content modal-lg">
                <h3> Quantité perdue/jetée </h3>
                <div class="modal-header ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th> Quantité </br>
                                    <input type="text" name="quantite" placeholder="100" style="width: 20%">
                                </th>
                                </input>
                                <th> Fruit/Légume </br>
                                    <form>
                                            <div class="form-group">
                                                <select class="form-control" id="sel1">
                                                    <option>Patates</option>
                                                    <option>Tomates</option>
                                                    <option>Salade</option>
                                                </select>
                                            </div>
                                </th>
                            </tr>
                            <tr>
                                <th>
                                    </br>
                                </th>
                            </tr>
                        </thead>
                    </table>
                    <button type="button" class="btn btn-danger"> Annuler </button>
                    <button type="button" class="btn btn-success"> Valider la suppression </button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal4" role="dialog">
            <div class="modal-dialog">
            </div>
            <!-- Modal content-->
            <div class="modal-content modal-lg">
                <div id="impression"> impression </div>
                <p> Information sur les 7 derniers jours</p>
                <button type="button" class="btn btn-success"> Imprimer </button>
                <div class="modal-header ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Légume</th>
                                <th>Cat.</th>
                                <th>Stock</th>
                                <th>Perdue</th>
                                <th>Vendue</th>
                            </tr>
                            <tr>
                                <td>Banane</td>
                                <td>F</td>
                                <td>23</td>
                                <td>3</td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td>Poire</td>
                                <td>F</td>
                                <td>13</td>
                                <td>1</td>
                                <td>22,4</td>
                            </tr>
                            <tr>
                                <td>Pomme</td>
                                <td>F</td>
                                <td>15,3</td>
                                <td>5</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Ail</td>
                                <td>L</td>
                                <td>30</td>
                                <td>4,3</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>Brocoli</td>
                                <td>L</td>
                                <td>20</td>
                                <td>6</td>
                                <td>32</td>
                            </tr>
                            <tr>
                                <td>Chou de Bruxelle</td>
                                <td>L</td>
                                <td>12</td>
                                <td>20</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Concombre</td>
                                <td>L</td>
                                <td>6,2</td>
                                <td>2</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Cornichon</td>
                                <td>L</td>
                                <td>10,6</td>
                                <td>3</td>
                                <td>43</td>
                            </tr>
                            <tr>
                                <td>Epinard</td>
                                <td>L</td>
                                <td>5,2</td>
                                <td>1</td>
                                <td>10</td>
                            </tr>
                    </table>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="modal fade" id="myModal5" role="dialog">
            <div class="modal-dialog">
            </div>
            <!-- Modal content-->
            <div class="modal-content modal-lg">
                <div id="impression"> Géomarketing </div>
                <p> 5 communes les plus consommatrices</p>
                <div class="modal-header ">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Ordre</th>
                                <th>Ville</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Pamiers City</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Foix</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Saverdun</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Toulouse</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>St-Girons</td>
                            </tr>
                        </thead>
                    </table>
                    <button type="button" class="btn btn-danger"> Annuler </button>
                </div>
            </div>
        </div>
</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <title>Randonnées</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<!-- <div class="container">
  <h1>ACCUEIL</h1>
  <ul class="nav nav-pills center">
    <li><a data-toggle="pill" href="#home">Home</a></li>
  </ul>
  
  <div class="tab-content center">
    <div id="home" class="tab-pane fade">
      <h2>Home</h2>
      <h3> Liste de toutes les randonnées </h3>
     <div>
        <?php
        $requête1 = mysqli_query($connect, "SELECT * FROM hiking");
        while ($requête1_resultat = mysqli_fetch_array($requête1))
        {

          echo$requête1_resultat ["id"];
          echo "\n";
          echo$requête1_resultat ["name"];
          echo "\n";
          echo$requête1_resultat ["difficulty"];
          echo "\n";
          echo$requête1_resultat ["distance"];
          echo "\n";
          echo$requête1_resultat ["duration"];
          echo "\n";
          echo$requête1_resultat ["height_difference"];
          echo "\n";
          echo$requête1_resultat ["available"];
          echo "</br>";
        };
        ?>
     </div>
    </div>
    <div id="requete2" class="tab-pane fade">
      <h2>Requête 2</h2>
      <h3>Afficher tous les types de spectacles possibles.</h3>
      <p>
        <?php
        $requête2 = mysqli_query($connect, "SELECT * FROM showTypes");
        while ($requête2_resultat = mysqli_fetch_array($requête2))
        {
          echo$requête2_resultat ["id"];
          echo "\n";
          echo$requête2_resultat ["type"];
          echo "</br>";
        };
        ?>
      </p>
    </div>
    <div id="requete3" class="tab-pane fade">
      <h2>Requête 3</h2>
      <h3>Afficher les 20 premiers clients selon leur identifiant</h3>
      <p>
        <?php
        $requête3 = mysqli_query($connect, "SELECT lastName, firstName FROM colyseum.clients WHERE id BETWEEN '1' AND '20'");
        while ($requête3_resultat = mysqli_fetch_array($requête3))
        {
          echo$requête3_resultat ["id"];
          echo "\n";
          echo$requête3_resultat ["lastName"];
          echo "\n";
          echo$requête3_resultat ["firstName"];
          echo "</br>";
        };
        ?>
      </p>
    </div>
    <div id="requete4" class="tab-pane fade">
      <h2>Requête 4</h2>
      <h3>N’afficher que les clients possédant une carte de fidélité.</h3>
      <p>
         <?php
        $requête4 = mysqli_query($connect, "SELECT lastName, firstName 
        FROM cards
        INNER JOIN cardTypes ON cards.cardTypesId = cardTypes.id
        INNER JOIN clients ON cards.cardNumber = clients.cardNumber
        WHERE clients.cardNumber is not null and type = 'Fidelité'");
        while ($requête4_resultat = mysqli_fetch_array($requête4))
        {
          echo$requête4_resultat ["lastName"];
          echo "\n";
          echo$requête4_resultat ["firstName"];
          echo "</br>";
        };
        ?>
      </p>
    </div>
    <div id="requete5" class="tab-pane fade">
      <h2>Requête 5</h2>
      <h3>Afficher uniquement le nom et le prénom de tous les clients dont le nom commence par la lettre "M".</h3>
      <p>
        <?php
        $requête5 = mysqli_query($connect, "SELECT lastName FROM colyseum.clients WHERE lastName LIKE 'M%' order by lastName");
        while ($requête5_resultat = mysqli_fetch_array($requête5))
        {
          echo$requête5_resultat ["lastName"];
          echo "\n";
          echo$requête5_resultat ["firstName"];
          echo "</br>";
        };
        ?>
      </p>
    </div>
    <div id="requete6" class="tab-pane fade">
      <h2>Requête 6</h2>
      <h3>Afficher le titre de tous les spectacles ainsi que l'artiste, la date et l'heure</h3>
      <p>
         <?php
        $requête6 = mysqli_query($connect, "SELECT title, performer, date, startTime FROM colyseum.shows ORDER BY title");
        while ($requête6_resultat = mysqli_fetch_array($requête6))
        {
          echo$requête6_resultat ["title"];
          echo "\n";
          echo$requête6_resultat ["performer"];
          echo "\n";
          echo$requête6_resultat ["date"];
          echo "\n";
          echo$requête6_resultat ["startTime"];
          echo "</br>";
        };
        ?>
      </p>
    </div>
    <div id="requete7" class="tab-pane fade">
      <h2>Requête 7</h2>
      <h3>Afficher tous les clients</h3>
      <p>
       <?php
        $requête7 = mysqli_query($connect, "SELECT lastName, firstName, birthDate, 'Oui' AS cards, clients.cardNumber FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId = 1 UNION SELECT lastName, firstName, birthDate, 'Non' AS cards, ' ' AS cardNumber FROM clients INNER JOIN cards ON clients.cardNumber = cards.cardNumber WHERE cardTypesId > 1 UNION SELECT lastName, firstName, birthDate, 'Non' AS cards, ' ' AS cardNumber FROM clients WHERE card = 0" );
          while ($requête7_resultat = mysqli_fetch_array($requête7))
        { 
          echo$requête7_resultat ["firstName"];
          echo "\n";
          echo$requête7_resultat ["lastName"];
          echo "\n";
          echo$requête7_resultat ["birthDate"];
          echo "\n";
          echo$requête7_resultat ["card"];
          echo "\n";
          echo$requête7_resultat ["cardNumber"];
          echo "</br>";
        };
        ?> 
      </p>
    </div>
  </div>
</div> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>