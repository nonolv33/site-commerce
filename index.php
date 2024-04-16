<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style1.css">
    <title>A propos</title>
</head>
<body>

    <div class="container">
       
        <nav class="navbar">

            <img src="images/logo.jpg" alt="logo" class="logo">
            <h1 class="titrePrincipal">Boucherie L.V Patrick</h1>
            
            <a class="aPropos">A propos</a>

            <a class="oùNousTrouver" href="ouNousTrouver.php">Où nous trouver</a>

            <a class="nousContacter" href="nousContacter.php">Commander</a>

            
           
        </nav>

        <div class = "parallax"> 
            <h1 class="titre">Boucherie de Captieux</h1>
        </div>

        <div class = "contenu">

            <div class="intro">
                <h1>A propos <br></h1>

                <span>  
                    Bienvenue sur le site web de la boucherie du Palais. 
                    Vous trouverez ici plusieurs informations telles que l'origine de nos viandes, notre histoire, notre localisation et nos coordonnées. 
                    Nous espérons vous convaincre de l'excellence de nos viandes et produits et vous attendons avec impatience dans notre boucherie. <br> 
                </span>
                <span>
                    <img src="images/le patron.jpg" alt="image de la boucherie de Captieux"width="30%">
                </span>
                
            </div>


            <div class="origine">
                <h1> <br> <br> <br> Origine de nos viandes et produits <br></h1>
                <span>
                    La boucherie du Palais vous propose des viandes et produits d'exception en circuit court quand possible. 
                    Nous prêtons une attention particulière à l'éco-responsabilité de nos viandes et favorisons le commerce avec les petits producteurs. 
                    Ainsi les viandes et produits que vous achetez dans notre boucherie protègent l'environnement et soutiennent les producteurs locaux.
                </span>
                <span class="img_origine_container">
                    <img src="images/montage.png" alt="Origine des différentes viandes">
                </span>  
            </div>

            <div class="histoire">
                <h1> <br> <br> Notre histoire <br></h1>
                <span>
                    Bonjour, je me présente, je m'appelle Christophe Gillard et suis l'heureux responsable de la boucherie du Palais. 
                    Suivant la vocation de mon ascendance, je suis Artisan Boucher de 3ème génération. Petit-fils d'éleveur et fils de boucher, 
                    je considère mon métier comme un art qui me représente et me définit. Naturellement, j'essaie de retranscrire cette passion
                    dans la qualité, les choix et la provenance des viandes et produits que nous vous proposons, afin de vous offrir une expérience inoubliable marquée par l'amour inépuisable 
                    que j'éprouve pour mon métier. 
                </span>
            </div>

            <div class="selectionProduits">
                <h1> <br> <br>Notre sélection de produits <br></h1>
                <span>
                    Notre boucherie vous propose une large sélection de viandes et produits afin de vous permettre de varier les plaisirs. 
                </span>
                <span class="img_origine_container1">
                    <img src="images/selectionProduit.png" alt="Sélection de produits proposés par la boucherie">
                </span> 
            </div>


        </div>
    </div>
       
    <script type="text/javascript">
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {

        var currentScrollPos = window.pageYOffset
        if (prevScrollpos > currentScrollPos){
            document.getElementById("navbar").style.top = "0";
        }else{
            document.getElementById("navbar").style.top = "-100px";
        }

        prevScrollpos = currentScrollPos;
    }

    </script>
    
</body>
</html>