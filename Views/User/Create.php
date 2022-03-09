<a href="<?php echo BASE_URL; ?>/User/LoggedIn"> 
    Retour
</a>

<div class="title">
            <h1 class="text-center mt-4">Formulaire d'enregistrement d'une organisation</h1>
    </div>

    <div class="org-form container wrapper" style="background-color: white">

        <form action="<?php echo BASE_URL ?>/User/ProcessLogin" method="POST" >
        
            <div class="form-group">
                <label>Nom de l'organisation</label>
                <input type="text" name="orgname" value="" required="required" />
            </div>
            
            <div class="form-group">
                <label>Nom complet du répondant</label>
                <input type="text" name="repname" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Adresse e-mail du répondant</label>
                <input type="email" name="emailrep" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Numéro de téléphone du répondant</label>
                <input type="tel" name="telrep" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Siége social de l'organisation</label>
                <input type="text" name="siege" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Date de création de l'organisation</label>
                <input type="date" name="date" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Numéro de l'organisation sur le registre de commerce</label>
                <input type="text" name="numreg" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Ninea</label>
                <input type="text" name="ninea" value="" required="required" />
            </div>

            <div class="form-group">
                <label>secteur d'activité de l'organisation</label>
                <input type="text" name="secteur" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Page web de l'organisation</label>
                <input type="text" name="page" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Nombre d'employés de l'organisation</label>
                <input type="text" name="nombre" value="" required="required" />
            </div>

            <div class="form-group">
                <label>Les employés de l'organisation sont-ils soumis a des contrats formels ?</label>
                <select name="reponse" id="reponse">
                    <option value="1">oui</option>
                    <option value="0">non</option>
                </select>
            </div>

            <div class="form-group">
                <label>L'organisation, prend-elle en compte les cotisations sociales et patronales ?</label>
                <select name="reponse" id="reponse">
                    <option value="1">oui</option>
                    <option value="0">non</option>
                </select>
            </div>

            <div class="form-group">
                <label>Existe-t-il un organigramme clair et respecté au sein de l'organisation ?</label>
                <select name="reponse" id="reponse">
                    <option value="1">oui</option>
                    <option value="0">non</option>
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

            

            <div class="btn-group">
                <input type="submit" name="inserer" class="btn-primary" value="Valider" />
                <input type="reset" name="reset" value="Annuler" />
            </div>
            
            
        </form>