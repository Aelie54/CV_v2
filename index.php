<!DOCTYPE html>
<html>

<!--head-->
<?php include './head.php' ?>

<body class="bg1" id="body">

    <!--header-->
    <?php include './header.php' ?>


    <div class="flex-body" >
        <div class="article-contain gradient-border" >
    
            <div class="flex-contain" id="introAK">

                <br>

                <div>
                    <h1>En route pour une reconversion vers le développement Web</h1>
                </div>

                <p> 
                    <span class= "italique">30 ans déjà • Habite à Vandoeuvre-lès-Nancy • Permis B et véhiculée</span>
                </p>

                <div style="align-text:justify">

                    <p> J'ai commencé par me former seule à la maison aux langages HTML, CSS et JS via Openclassrooms pour des débuts purement front-end. <br><br> Depuis le 25 octobre 2021, j'ai eu la chance d'intégrer une formation d'Alaji pour devenir développeur web full stack.<br>
                        <br> Nous avons ainsi entammé le programme sur plusieurs thèmes : </p>

                    <ul style="list-style-image:square;"> 
                        <li> la découvertes des outils les plus importants : Git Hub et Visual Studio Code</li>
                        <li> la création d'une base de donnée via SQL (MySQL et PhpMyAdmin) et l'écriture et la compréhension des diagrammes UML, </li>
                        <li> le langage PHP orienté objet ( Doctrine/ORM et Symfony) pour le fonctionnement back-end et la gestion de la base de données, </li>
                        <li> les routes pour clarifier les chemins avec la methode GET et POST pour gérer les éléménets affichés,</li>
                        <li> le respect dumodèle MVC dans l'organisation du code, </li>
                        <li> pour l'aspect visuel, les langages CSS, SCSS, ainsi que l'utilisation de Bootstrap et de Figma, </li>
                        <li> une approche également de Javascript, de la bibliotheque JQuerry et de la méthode Ajax pour modifier le DOM, </li>
                        <li> l'utilisation d'API pour générer du contenu (outil indisensable : Postman)<br></li>
                    </ul>
                <p>

                    Je suis d'ailleurs à la recherche d'un stage, pour plus d'informations 
                    <a style="text-decoration:underline; font-weight: bold; color:orange;" onclick="run4()">cliquez ici</a> 
                    <br><br>
                    Vous pouvez naviguer à travers ce petit site internet que j'ai réalisé pour découvrir mon parcour avant de commencer cette formation ! 
                    <br><br>
                    Pour changer de background (vider le cache pour éviter les répétitions de fonds avec ctrl+r+shift) :
                    
                    <button class="change" type="button" id="change" value="1" onclick="changeClass()" style="border:none; background-color:transparent; pointer-events: auto; display: block;margin: auto;"> 
                        <img style="height:100px" src="https://pic1.mangapicgallery.com/r/essay/d3/raw_/1989135_13410212.gif">
                    </button> 

                </p>
                <br>
            </div>
            <br>
        </div>
    </div>
</div>

<!--Footer-->
<?php include './footer.php' ?>

</html>