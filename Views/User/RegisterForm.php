<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Register Form</title>
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
                <a class="nav-link" href="<?php echo BASE_URL ?>/User/Login">Se connecter</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper">
        <?php if( isset( $_SESSION['__errors'] ) && is_array( $_SESSION['__errors'] ) && !empty( $_SESSION['__errors'] ) ) :  ?>
            <div class="message_box">
                <?php 
                    echo implode( '<br/>', $_SESSION['__errors'] ); 
                    unset( $_SESSION['__errors'] );
                ?>
            </div>
        <?php endif; ?>
        <form method="post" action="<?php echo BASE_URL ?>/User/ProcessRegister">
        
            <div class="form-group">
                <label>Nom complet</label>
                <input type="text" name="fullname" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Confirmez le mot de passe</label>
                <input type="password" name="re-password" value="" required="required" />
            </div>
            
            <div class="btn-group">
                <input type="submit" name="submit" class="btn-primary" value="S'inscrire" />
                <input type="reset" name="reset" value="Annuler" />
            </div>
            
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>