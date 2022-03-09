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
                <a class="nav-link" href="<?php echo BASE_URL; ?>/User/Create">Ajouter</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo BASE_URL; ?>/User/Logout">Se déconnecter!</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    

    <section class="banner row" style="width: 100%">
        <div class="banner-img col-md-6">
            <img src="<?php echo BASE_URL ?>/Views/Assets/banner.jpg" width="100%">
        </div>
        <div class="banner-text col-md-6" style="text-align: center">
            <h1>Bienvenue <?php echo $_SESSION['username'] ?></h1>

            <p class="mt-4">L'Agence nationale de la statistique et de la démographie est le service officiel des statistiques du Sénégal et a été créée en 2005. 
                Ses activités s'organisent dans le cadre plus général du système statistique du Sénégal.
                L'ANSD est une structure administrative placée sous l'autorité du ministre chargé de la statistique, actuellement le ministre de l'Économie et des Finances. Ses attributions et son organisation ont fait l'objet du décret no 2005-436 du 23 mai 2005 pris par le président de la République.

Très généralement, l'ANSD est chargée d'assurer la coordination technique des activités du système statistique national et de réaliser elle-même, les activités de production et de diffusion des données statistiques pour les besoins du gouvernement, des administrations publiques, du secteur privé, des partenaires au développement et du public.


Sommaire
1	Mission
2	Organisation
2.1	Conseil de surveillance
2.2	Direction générale
3	Histoire
4	Ressources
5	Voir aussi
5.1	Articles connexes
5.2	Liens externes
</p>

            <a href="#" style="padding: 10px; background-color: blue; color:white; text-decoration: none">Enregistrer une organisation</a>
        </div>

        
    </section>

    <section>
        <h1 class="text-center mt-4">Liste des organisations</h1>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>