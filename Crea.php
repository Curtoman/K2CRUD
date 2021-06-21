<?php
ob_start();
session_start();

include "includes/dbconnect.php";



/*Dit is eeen functie waarbij er rollen zijn voor de users*/
//if (isset($_SESSION['usertype']) && $_SESSION['usertype'] == 'beheerder') {



//}else{

  //  header('Location: index.php');

//}


  ?>

                


<form method="post" action ="account-register.php" class="form-horizontal">


          
           <input type="text" name="username" placeholder="Gebruikersnaam" class="form-control has-feedback-left" required><br>
 <input type="password" name="password" placeholder="Wachtwoord" class="form-control has-feedback-left" required><br>
 <select id="usertype" name="usertype" class="form-control">
  <option value="medewerker">Medewerker</option>
  <option value="beheerder">Beheerder</option>
  
</select><br>
                


          <input type="submit" name="register" value="register" class="btn btn-success">

              <a class="btn" href="accounts.php">Back</a>





</form>
<!--ENDTable-->

  </body>
</html>
