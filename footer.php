
<!--///////////////////////////////////////////////////////////////////////////////////
//  FOOTER FRONT                                                                 //
///////////////////////////////////////////////////////////////////////////////////-->


<div class="bas fondtransparent">
    <div style="z-index:53">
        <div><h3> <span class = "gras">Mes "petites" réalisations :</h3></span></div>

        <div>
            <a href="/halloween/page1.html" target="_blank"> Jeu Spécial Halloween (à jouer sur ordinateur) </a> <br>
            <a href="/sport/entrainement.php" target="_blank"> Projet sur le sport (en cours) </a><br>
            <a href="/noel/arbre.html" target="blank">Faites danser votre sapin de Noël sur "Jingle bell rock" </a> 
        <div>
    
    </div>
</div>

</body>


<script>
    

///////////////////////////////////////////////////////////////////////////////////
//  FONCTION POUR GENERER LE CONTENU DE CONTAINER CENTRAL EN FONCTION DUN CLIC  // 
//  ET POUR DONNER UN EFFET LUMINEUX SUR DERNIER BOUTON CLIQUE                  //
//////////////////////////////////////////////////////////////////////////////////


    function run1() {
 
        $.ajax({
            url: "./b1.php", 
            dataType: "html", 
            
            success: function(response){
                document.getElementById("introAK").innerHTML = response;

                 document.getElementById("bouton1").style.border = "#FFBE40 3px solid"
                 document.getElementById("bouton2").style.border = ""
                 document.getElementById("bouton3").style.border = ""
                 document.getElementById("bouton4").style.border = ""

            },

            error:function(error){
                console.log(error);
            }
        });
    }

    function run2() {
        
        $.ajax({
            url: "./b2.php", 
            dataType: "html", 
            
            success: function(response){
                document.getElementById("introAK").innerHTML = response;

                document.getElementById("bouton2").style.border = "#FFBE40 3px solid"
                 document.getElementById("bouton1").style.border = ""
                 document.getElementById("bouton3").style.border = ""
                 document.getElementById("bouton4").style.border = ""
            },

            error:function(error){
                console.log(error);
            }
        });
    }

    function run3() {
        $.ajax({
            url: "./b3.php", 
            dataType: "html", 
            
            success: function(response){
                //alert("success !");
                document.getElementById("introAK").innerHTML = response;

                document.getElementById("bouton3").style.border = "#FFBE40 3px solid"
                 document.getElementById("bouton1").style.border = ""
                 document.getElementById("bouton2").style.border = ""
                 document.getElementById("bouton4").style.border = ""
            },

            error:function(error){
                console.log(error);
            }
        });
    }

    function run4() {
        $.ajax({
            url: "./b4.php", 
            dataType: "html", 
            
            success: function(response){
                //alert("success !");
                document.getElementById("introAK").innerHTML = response;

                document.getElementById("bouton4").style.border = "#FFBE40 3px solid"
                 document.getElementById("bouton1").style.border = ""
                 document.getElementById("bouton3").style.border = ""
                 document.getElementById("bouton2").style.border = ""
            },

            error:function(error){
                console.log(error);
            }
        });
    }

    function run5() {   
        $.ajax({
            url: "./intro.php", 
            dataType: "html", 
            
            success: function(response){
                //alert("success !");
                document.getElementById("introAK").innerHTML = response;
            },

            error:function(error){
                console.log(error);
            }
        });
    }


//////////////////////////////////////////////////////////////////////
// API POUR GENERER UN BACKGROUND ALEATOIRE EN FONCTION DUN MOT CLE //
//////////////////////////////////////////////////////////////////////


  function changeClass(){
  let mybutton = document.getElementById("change");
  let body = document.getElementById('body')

    if (mybutton.value=="0"){
      body.className = "bg2";
      mybutton.value= "1";
      return false ;
    } ;

    if (mybutton.value=="1"){
      body.className = "bg3";
      mybutton.value= "2";
      return false ;
    } ;
  
      if (mybutton.value=="2"){
      body.className = "bg4";
      mybutton.value= "3";
      return false ;
    } ;

    if (mybutton.value=="3"){
      body.className = "bg5";
      mybutton.value= "4";
      return false ;
    } ;

    if (mybutton.value=="4"){
      body.className = "bg6";
      mybutton.value= "5";
      return false ;
    } ;

    if (mybutton.value=="5"){
      body.className = "bg7";
      mybutton.value= "6";
      return false ;
    } ;

    if (mybutton.value=="6"){
      body.className = "bg8";
      mybutton.value= "7";
      return false ;
    } ;

    if (mybutton.value=="7"){
      body.className = "bg9";
      mybutton.value= "8";
      return false ;
    } ;
    if (mybutton.value=="8"){
      body.className = "bg10";
      mybutton.value= "9";
      return false ;
    } ;    
    
    if (mybutton.value=="9"){
      body.className = "bg11";
      mybutton.value= "10";
      return false ;
    } ;

    if (mybutton.value=="10"){
      body.className = "bg12";
      mybutton.value= "11";
      return false ;
    } ;

    if (mybutton.value=="11"){
      body.className = "bg13";
      mybutton.value= "12";
      return false ;
    } ;

    if (mybutton.value=="12"){
      body.className = "bg14";
      mybutton.value= "13";
      return false ;
    } ;

    if (mybutton.value=="13"){
      body.className = "bg15";
      mybutton.value= "0";
      return false ;
    } ;

} ;

</script>

</html>