<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
	<title>Register Form</title>
    <link type="text/css" href="<?php echo BASE_URL ?>/Views/Assets/style.css" rel="stylesheet" />
</head>

<body>
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
                <a class="register-btn" href="<?php echo BASE_URL ?>/User/Login">Se connecter ici </a>
            </div>
            
        </form>
    </div>
</body>
</html>