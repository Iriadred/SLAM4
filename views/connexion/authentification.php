<div class="container mt-5">
    <div class="row">
        <div class="card">
            <div class="card-body">
            <form action="/authentification/lol" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label><br>
                <input type="text" placeholder="Entrer votre identifiant" name="nom"  required><br><br>

                <label><b>Mot de passe</b></label><br>
                <input type="password" placeholder="Entrer le mot de passe" name="mdp" required><br><br>

                <input type="submit" id='submit' value='Connexion' >

            </form>

            </div>
            <div class="card-body">
            <?php
            if(!isset($_SESSION["verifAut"])){
                $_SESSION["verifAut"]=true;
            }
            if($_SESSION["verifAut"] == false){
                echo "<h2>Mot de passe ou d'authentification, non correct</h2>"; 
            }
            ?>
            </div>

        </div>
    </div>
</div>