
<?php
//Inclure le fichier de la classe Database
require_once 'config.php';

// Créer une instance de la classe Database
$database = new Database();

// Obtenir la connexion
$db = $database->getConnection();

// Vérifier si la connexion est établie
if ($db) {
    echo "Connexion réussie!";
} else {
    echo "Erreur de connexion.";
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="../src/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

  </head>
  <body>
    <section class="form-content">
        <form id="form-content">
          <div class="input-groups">
            <div class="input-groups-flex1">
              <!--name-->
              <div class="input-box">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" />
              </div>
            

              <!--select-club-->
              <div class="input-box">
                <label for="football-club">Football Club</label>
                <select name="football-club" id="football-club">
                 
                </select>
              </div>
            </div>
          

              <!-- les inpute de player rat/pac,sho,pass,drib,def,phy-->
               <div id="player-input">
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="rating">rating</label>
                  <input type="number" name="rating" id="rating" />
                </div>
                <div class="input-box">
                  <label for="pace">pace</label>
                  <input type="number" name="pace" id="pace" />
                </div>
              </div>
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="shooting">shooting</label>
                  <input type="number" name="shooting" id="shooting" />
                </div>
                <div class="input-box">
                  <label for="passing">passing</label>
                  <input type="number" name="passing" id="passing" />
                </div>
              </div>
              <div class="input-groub-box">
                <div class="input-box">
                  <label for="dribbling">dribbling</label>
                  <input
                    type="number"
                    name="dribbling"
                    id="dribbling"
                    placeholder="dribbling"
                  />
                </div>
                <div class="input-box">
                  <label for="defending">defending</label>
                  <input
                    type="number"
                    name="defending"
                    id="defending"
                    placeholder="defending"
                  />
                </div>
                <div class="input-box">
                  <label for="physical">physical</label>
                  <input
                    type="number"
                    name="physical"
                    id="physical"
                    placeholder="defending"
                  />
                </div>
              </div>
            </div>
              <!--les inpute de gardiens  -->
              </div>
              <div class="input-groub-box">
              

                <!--select-position-->
                <div class="input-box">
                  <label for="position">position</label>
                  <select name="position" id="position">
                    <!-- <option value="GK">GK</option> -->
                    <option value="chang">chang</option>
                    <option value="CB1">CB1</option>
                    <option value="CB2">CB2</option>
                    <option value="CB3">CB3</option>
                    <option value="CM1">CM1</option>
                    <option value="CM1">CM1</option>
  
                    <option value="LM">LM</option>
                    <option value="CAM">CAM</option>
                    <option value="RM">RM</option>
                    <option value="ST1">ST1</option>
                    <option value="ST2">ST2</option>
                  
  
  
                  </select>
                </div>
                <!--select-nationality-->
                <div class="input-box">
                  <label for="nationality">Nationality</label>
                  <select name="nationality" id="nationality">
                   
                  </select>
                </div>
            
              
            </div>
            
              <!-- <input type="submit" value="add player" class="btn" /> -->
              <button class="btn" id="add__player">Add player</button>
              
          
            
          </div>
        </form>
      </section>
</body>