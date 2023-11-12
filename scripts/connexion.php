<?php 
require("header.php");
?> 
<body>
    <nav class="navbar-accueil"> 
        <ul> 
            <li> <a href=""> <img src="" alt="fctv" class="logo-navbar"> </a> </li> 
            <li> <a href=""> a propos du fctv </a> </li> 
            <li> <a href=""> Se connecter / S'inscrire </a> </li> 
        </ul> 
    </nav> 

    <div class="bienvenu">
        <h2> Bienvenu au Football Club Templemars Vendeville </h2>   
    </div> 
    <div class="intro"> 
        <h4> Retrouvez toute l'actualité du Fctv </h4> <br> 
    </div> 
    <div class="from-connexion"> 
        <form method="POST" enctype="multipart/form-data"> 
            <fieldset> 
                <legend> Connectez-vous ! </legend> 
                    <input type="text" name="pseudo" placeholder="pseudo"> <br> 
                    <input type="password" name="mdp" placeholder="password"> <br> <br>  
                    <input type="button" value="se connecter" style="cursor: pointer"> <br> <!-- mettre dans feuille de style -->  
                    <a href="inscription.php"> inscrivez-vous </a> 
                </legend> 
            </fieldset> 
        </form> 
    </div> 


</body>
</html>