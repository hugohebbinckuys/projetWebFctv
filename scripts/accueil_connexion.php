<?php
session_start();
require("header.php");
?> 

<body>
    <header>
        <nav class="navbar-accueil"> 
            <ul> 
                <li> <a href=""> <img src="../images/logo_fctv_b&w.png" alt="petit logo fctv" class="petit_logo-navbar"> </a> </li> 
                <li> <a href=""> <img src="../images/logo_fctv.png" alt="logo fctv" class="logo-navbar"> </a> </li> 
                <li> <a href=""> à propos </a> </li>
                <li> <a href=""> se connecter </a> </li>
                <li> / </li> 
                <li> <a href=""> s'inscrire </a> </ li>  
            </ul> 
        </nav> 
    </header> 

    <div class="img_fond"> 
        <img src="" alt="image de l'équipe">
    </div>

    <div class="bienvenu">
        <h2> Bienvenu au Football Club Templemars Vendeville </h2>   
    </div> 
    <div class="intro"> 
        <h4> Retrouvez toute l'actualité du Fctv </h4> <br> 
    </div> 
    <div class="form-connexion"> 
        <form method="POST" enctype="multipart/form-data"> 
            <fieldset> 
                <legend> Connectez-vous ! </legend> 
                    <div>
                        <label for=""> mail </label>
                        <input type="text" name="mail">
                    </div>
                    <div>
                        <label for=""> mot de passe </label> 
                        <input type="password">
                    </div>
                    <div> 
                        <input type="submit" value="s'inscrire">
                    </div>
                    <div>
                        <a href="accueil_connexion.php"> Deja un compte ? Connectez-vous </a> 
                    </div>
                </legend> 
            </fieldset> 
        </form> 
    </div> 

    <br>

<?php
require("footer.php");
?> 