<?php
    require 'includes/database.php';
 
    $loginid = null;
    if ( !empty($_GET['loginid'])) {
        $loginid = $_REQUEST['loginid'];
    }
     
    if ( null == $loginid ) {
        header("Location: account-bijwerken.php");
    }


     if ( !empty($_POST)) {
        // keep track validation errors
       
        $usernameError = null;
        $passwordError = null;
    
        
         



        // keep track post values
 
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['usertype'];
       


        /*$password = md5($_POST['password']);*/
  

        // validate input
        $valid = true;
        
        // update data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE loginsysteem set username = ?, password = ?, usertype = ?  WHERE loginid = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($username,$password,$usertype,$loginid));
            Database::disconnect();
            header("Location: accounts.php");
        }
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM loginsysteem WHERE loginid = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($loginid));
        $data = $q->fetch(PDO::FETCH_ASSOC);
     
        $username = $data['username'];
        $password = $data['password'];
        $usertype = $data['usertype'];
 
        
      
       
        Database::disconnect();
    }
  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

    <title>Account bijwerken</title>

  </head>

 
      

                
<h1>Agent Bijwerken</h1>
<form class="form-horizontal" action="account-bijwerken.php?loginid=<?php echo $loginid?>" method="post">

        <input type="text" name="username" placeholder="username" class="form-control has-feedback-left" value="<?php echo $username;   ?>" required><br>
        <input type="text" name="password" placeholder="password" class="form-control has-feedback-left" value="<?php echo $password;   ?>" required><br>

        <input type="text" name="usertype" placeholder="usertype" class="form-control has-feedback-left" value="<?php echo $usertype;   ?>" required><br>

       

       
                


          <button type="submit" class="btn btn-success">Update</button>

              <a class="btn" href="accounts.php">Back</a>





</form>
<!--ENDTable-->

   

  </body>
</html>
