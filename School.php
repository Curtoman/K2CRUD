<?php
include 'db_connect.php';


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    

  </head>

 
           

        
        




<table class="table table-striped table-bordered">
                  <thead>
                    <tr class="headings">
                      <a href="account-toevoegen.php"><button type="button" class="btn btn-success">Account Toevoegen</button></a>
                      <th class="column-title" style="display: table-cell;">Login ID</th>
                      <th class="column-title" style="display: table-cell;">Gebruikersnaam</th>
                      <th class="column-title" style="display: table-cell;">Wachtwoord</th>
                      <th class="column-title" style="display: table-cell;">Type</th>
                      
                      
                       
                      <th class="column-title" style="display: table-cell;">Actie</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'includes/database.php';
                   $pdo = Database::connect();
                   $sql = "SELECT * FROM `loginsysteem`";
                   foreach ($pdo->query($sql) as $row) {

                            echo '<tr class="headings">';
                            echo '<td>'. $row['loginid'] . '</td>';
                            
                            echo '<td>'. $row['username'] . '</td>';
                            echo '<td>'. $row['password'] . '</td>';
                            echo '<td>'. $row['usertype'] . '</td>';
                            echo '<td>'. '<a class="btn btn-success" href="account-bijwerken.php?loginid='.$row['loginid'].'">Bijwerken</a><a class="btn btn-success" href="account-verwijderen.php?loginid='. $row['loginid'].'">Verwijderen</a>' . '</td>';
                            
                        
                       echo '</tr>';
                   }

                   Database::disconnect();

                  ?>

                  </tbody>



            </table>


  

  </body>
</html>
