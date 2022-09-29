<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="/inscription/new" method="POST">
                <h1>Inscription</h1>
                
                <label><b>Nom d'utilisateur</b></label><br>
                <input type="text" placeholder="Entrer votre identifiant" name="nom"  required><br><br>

                <label><b>Mot de passe</b></label><br>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required><br><br>

                <input type="submit" id='submit' value='Inscription' >

            </form>
            </div>
            <div class="card-body">
            <?php
            if(!isset($_SESSION["verif"])){
                $_SESSION["verif"]=true;
            }
            if($_SESSION["verif"] == false){
                echo "<h2>Mot de passe ou d'authentification, déja pris</h2>"; 
            }
            ?>
            </div>
        </div>
    </div>
</div>