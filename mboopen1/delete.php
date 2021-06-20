<!--  begin delete functie school -->
<?php
ob_start();
session_start();

include "Config/dbconnect.php";
  ?>

  <?php
    require 'Config/database.php';
    $idSchool = 0;
 

    if ( !empty($_GET['idSchool'])) {
        $idSchool = $_REQUEST['idSchool'];
    }

    if ( !empty($_POST)) {
        // keep track post values
        $idSchool = $_POST['idSchool'];

        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM school WHERE idSchool = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($idSchool));
        Database::disconnect();
        header("Location: Pages/Scholen.php");
        }
       

?>

<html>
<div class="container">

                <div class="span10 offset1">
                    <div class="row">
                        <h3>Verwijder een school</h3>
                    </div>

                    <form class="form-horizontal" action="delete.php" method="post">
                      <input type="hidden" name="idSchool" value="<?php echo $idSchool;?>"/>
                      <p class="alert alert-error">Weet je het zeker</p>
                      <div class="form-actions">
                          <button type="submit" class="btn-danger">Yes</button>
                          <a class="no-btn" href="Pages/Scholen.php">No</a>
                        </div>
                    </form>
                </div>

    </div> <!-- /container -->
    </html>

    <!-- einde delete functie school -->