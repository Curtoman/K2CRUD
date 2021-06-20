<?php
ob_start();
session_start();

include "Config/dbconnect.php";



/*Dit is eeen functie waarbij er rollen zijn voor de users*/
//if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'beheerder') {



//}else{

  //  header('Location: index.php');

//}


  ?>
<html>
                
<head>
<link rel="stylesheet" href="CSS/style.css">
</head>


<form method="post" action ="register.php" class="form-horizontal">


          
           <input type="text" name="Naam" placeholder="Schoolnaam" class="form-control has-feedback-left" required><br>
 
  
</select><br>
                


          <input type="submit" name="register" value="register" class="create-btn">

              <a class="btn" href="Pages/Scholen.php">Back</a>





</form>

<!--ENDTable-->

  </body>
</html>