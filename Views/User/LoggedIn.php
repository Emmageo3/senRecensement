<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Logged In</title>
    <link type="text/css" href="<?php echo BASE_URL ?>/Views/Assets/style.css" rel="stylesheet" />
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">senRecensement</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Voir les organisations</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/Org/Create">Ajouter une organisation</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/User/Logout">Se déconnecter!</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <p class="message_box">Bienvenue <b><?php echo $_SESSION['username']; ?></b>, </p>

    <div class="org-form wrapper">
        <div class="title">
            <h1 class="text-center mt-4">Formulaire d'enregistrement d'une organisation</h1>
        </div>

        <form action="<?php echo BASE_URL ?>/User/ProcessLogin" method="POST" >
        
            <div class="form-group">
                <label>Nom de l'organisation</label>
                <input type="text" name="username" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Nom complet du répondant</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Adresse e-mail du répondant</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Numéro de téléphone du répondant</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Siége social de l'organisation</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Date de création de l'organisation</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Numéro de l'organisation sur le registre de commerce</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Ninea</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>secteur d'activité de l'organisation</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Page web de l'organisation</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Nombre d'employés de l'organisation</label>
                <input type="password" name="password" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Les employés de l'organisation sont-ils soumis a des contrats formels ?</label>
                <select name="reponse" id="reponse">
                    <option>oui</option>
                    <option>non</option>
                </select>
            </div>

            <div class="form-group">
                <label>L'organisation, prend-elle en compte les cotisations sociales et patronales ?</label>
                <select name="reponse" id="reponse">
                    <option>oui</option>
                    <option>non</option>
                </select>
            </div>

            <div class="form-group">
                <label>Existe-t-il un organigramme clair et respecté au sein de l'organisation ?</label>
                <select name="reponse" id="reponse">
                    <option>oui</option>
                    <option>non</option>
                </select>
            </div>
            
            

            <div class="form-group">
                <label>Quartier</label>
                <?php 

                    $mysqli = new MySQLi('localhost', 'root', '', 'mvc');

                    $resultSet = $mysqli->query("SELECT libelle FROM  quartier");

                ?>

                <select name="quartier">

                    <?php

                        while ($rows = $resultSet->fetch_assoc())
                        {
                            $libelle = $rows['libelle'];
                            echo "<option value='$libelle'>$libelle</option>";
                        }

                    ?>

                </select>
            </div>

            <div class="form-group">
                <label>Statut juridique</label>
                <?php 

                    $mysqli = new MySQLi('localhost', 'root', '', 'mvc');

                    $resultSet = $mysqli->query("SELECT libelle FROM  statut_juridique");

                ?>

                <select name="statut_juridique">

                    <?php

                        while ($rows = $resultSet->fetch_assoc())
                        {
                            $libelle = $rows['libelle'];
                            echo "<option value='$libelle'>$libelle</option>";
                        }

                    ?>

                </select>
            </div>

            <div class="form-group">
                <label>Statut juridique</label>
                <?php 

                    $mysqli = new MySQLi('localhost', 'root', '', 'mvc');

                    $resultSet = $mysqli->query("SELECT libelle FROM  statut_juridique");

                ?>

                <select name="statut_juridique">

                    <?php

                        while ($rows = $resultSet->fetch_assoc())
                        {
                            $libelle = $rows['libelle'];
                            echo "<option value='$libelle'>$libelle</option>";
                        }

                    ?>

                </select>
            </div>  

            <div class="btn-group">
                <input type="submit" name="submit" class="btn-primary" value="Se connecter" />
                <input type="reset" name="reset" value="Annuler" />
            </div>
            
            
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>