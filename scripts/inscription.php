<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fctv</title> <!-- ajouter image du fctv dans le titre comme j'avais vu sur youtube --> 
    <link rel="icon" type="image/jpg" href="logoFctv.jpg"> <!-- marche pas --> 
</head>
<body>
    <nav class="navbar-accueil"> 
        <ul> 
            <li> 1963 </li> 
            <li> <img src="" alt="fctv" class="logo-navbar"> </a> </li> 
            <li> <a> se connecter </a> </li> 
        </ul> 
    </nav> 

    <div class="bienvenu">
        <h2> Bienvenu au Football Club Templemars Vendeville </h2>   
    </div> 
    <div class="intro"> 
        <h4> Retrouvez toute l'actualité du Fctv </h4> <br> 
    </div> 
    <div class="form-inscription"> 
        <form method="POST" enctype="multipart/form-data"> 
            <fieldset> 
                <legend> Inscrivez-vous ! </legend> 
                <div> 
                    <label for=""> nom </label> 
                    <input type="text" name="nom"> 
                </div>
                <div>
                    <label for=""> prenom </label>
                    <input type="text" name="prenom">
                </div>
                <div>
                    <label for=""> pseudo </label>
                    <input type="text" name="pseudo">
                </div>
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
                </legend> 
            </fieldset> 
        </form> 
    </div> 


</body>
</html>