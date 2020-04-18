
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="styleMen.css" />
        <title>ropachic</title>
		 <style type = "text/css">
//client_register
/* Général ------------------------------------------------------------------------------------- */

legend, label, input {
    font: normal 10pt verdana, helvetica, sans-serif;
}

fieldset {
    padding: 20px;
    border: 2px #0568CD solid;
     position:absolute;
	 widows:500%;
	 margin-bottom:8000%;
}

legend {
    font-weight: bold;
    color: #0568CD;
}

/* Forms --------------------------------------------------------------------------------------- */

form label {
    float: left;
    width: 200px;
    margin: 3px 0px 0px 0px;
}

form input {
    margin: 3px 3px 0px 0px;
    border: 2px #999 solid;
	width:300px
	
	
}

form input.sansLabel {
    margin-left: 200px;
		width:150px
		
}

form .requis {
    color: #c00;
}
</style>
    </head>
    
    <body style="background-color: #F8F8FF; position:absolute">


            <header id="bloc_page" >
                <div id="titre_principal">
                    <div id="logo">
                        <img src="images/zozor_logo.png" alt="Logo de Zozor" />
                        <h1 >Zoropa</h1>    
                    </div>
                    &nbsp;&nbsp; &nbsp;&nbsp;<br/><h1><b><i>Milleur Shopping</i></b></h1>
                </div>
                
                <nav >
								 <div class="w3-content w3-section" >
  <img class="mySlides" src="images/1.jpg" >
  <img class="mySlides" src="images/5.jpg">
  <img class="mySlides" src="images/3.jpg" >
  
  <img class="mySlides" src="images/16.jpg" >
  <img class="mySlides" src="images/24.png">
  <img class="mySlides" src="images/17.jpg" >
</div>
                    <ul>
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="men.php">Homme</a></li>
                        <li><a href="femme.php">Femme</a></li>
                        <li><a href="contact.php">Contact</a></li>
						<li> <a href="#" style=" color: red ">Me connecter</a> </li>
                    </ul>
                </nav>
            </header>  &nbsp;&nbsp; &nbsp;&nbsp;
        
		
          
        
		  <section >
                <aside  style="width:250px;height:900px"  >
                    <h1 >Vêtements</h1>
                    <img src="images/bulle.png" alt="" id="fleche_bulle" />
                    <p id="photo_zozor">    <img src="images/zozor_logo.png" alt="Logo de Zozor" /></p>
                    <p style="line-height: 320%"><b><i>Découvrez les collections des plus grands créateurs et couturiers de mode . Robes, chemises, jupes, maillots de bain, tuniques, pantalons, débardeurs ou vestes, notre large sélection de vêtements designés, créés et fabriqués à la main en Afrique, vous séduira pour toutes vos occasions. En quelques clics, accédez à l'univers des meilleures marques du continent et à une sélection de choix sur Made-in.africa !</p>
                   
                    <p ><a href="https://www.facebook.com" target="_blank" ><img src="images/facebook.png" alt="Facebook"  /></a>
                        
                     <a href="https://twitter.com/login?lang=ar" target="_blank"><img src="images/twitter.png" alt="Twitter" /></a> 
                     <a href="https://www.flickr.com/" target="_blank">  <img src="images/flickr.png" alt="Flickr" /></a>  
                     <a href="https://rss.com/" target="_blank"><img src="images/rss.png" alt="RSS" /></a>
                     </p>
                
                </aside></section>
          <form action="client_register.php" method="post" >
            <fieldset >
                <legend>Créez votre compte</legend>
                
               <label >Nom </label>
                <input type="text" class="form-control" value="" placeholder="Votre nom" size="35px" maxlength="20" name="c_name" required data-validation-required-message="Please enter your name.">        
                <br />  <br />   <br /><br />
                
                
				<label  >Prenom</label>
                <input type="text" id="Prenom" name="c_prenom" value="" placeholder="Votre prénom" size="35px" maxlength="20" required>
                <br />                <br />  <br /><br />

				
                <label >Email</label>
                <input type="email" name="c_email" value="" size="35px" placeholder="Exemple@email.com" id="email" required data-validation-required-message="Please enter your email address.">
               <br/>                <br />  <br /><br />

			   
              <label >Mot de passe </label>
               <input type="password" class="form-control" placeholder="Mot de passe"name="c_pass" size="35px" required>
                <br /><br />  <br /><br />

          <label > Confirmer Mot de passe </label>
               <input type="password" class="form-control" placeholder=""name="conpass" size="35px" required>
                <br /><br />  <br /><br />
                 <label >Adresse</label>
                <input type="text" id="Adresse" name="c_adresse" placeholder="ville,rue,N°Appt ou maison" value="" size="35px" required>
      
                <br />  <br />  <br /><br />
                
                 <label >Numéro de téléphone</label>
                <input type="tel" name="c_phone" class="form-control" placeholder="N° télphone" size="35px"  required data-validation-required-message="Please enter your phone number.">

      
                <br />  <br /> <br /><br />

      

                <input type="submit" value="JE M'ENREGISTRE" class="sansLabel" />
                 <br /><br /> 
				 		<p><a href="login.php" >J'ai deja un compte</a></p>

            </fieldset>
        </form>
          
 <script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>



        </body>
        </html>

<?php
   
    $db = mysqli_connect('localhost','root','','cart');
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
   
      $cname = $_POST['c_name'];
    $cprenom = $_POST['c_prenom'];

    $cemail = $_POST['c_email'];
    
    $cpass = $_POST['c_pass'];
    
    $cadresse= $_POST['c_adresse'];
    $cphone = $_POST['c_phone'];
    $sql= "insert into client (cl_name,cl_prenom,cl_email,cl_pass,cl_adresse,cl_phone) values ('$cname','$cprenom','$cemail','$cpass','$cadresse','$cphone')";
      $result = mysqli_query($db,$sql);
   //   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    //  $active = $row['active'];
      
      //$count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($result == true) {
       //  session_register("myusername");
        // $_SESSION['login_user'] = $myusername;
         
        echo "<script>alert('You have been Registered Sucessfully')</script>";
		echo "<script>window.open('index.php','_self')</script>";	
      }else {
echo "Error: " . $sql . "<br>" . $connect->error;
         
      }
   }
?>
