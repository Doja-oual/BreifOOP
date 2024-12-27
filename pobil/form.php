
<?php
//Inclure le fichier de la classe Database
require_once 'config/config.php';
require_once 'players.php';


// Créer une instance de la classe Database
$database = new Database();

// Obtenir la connexion
$db = $database->getConnection();
$player= new Player($db);

// Vérifier si la connexion est établie
// if ($db) {
//     echo "Connexion réussie!";
// } else {
//     echo "Erreur de connexion.";
// }
$playerData =null;
if (isset($_GET['edit'])) {
  $playerData = $player->getById($_GET['edit']);
}

if(isset($_POST['submit'])){
  if($player->create($_POST)){
    echo "Player added successfully!";

  }
}elseif (isset($_POST['update'])) {
    if ($player->update($_POST['JoueurID'], $_POST)) {
        echo "Player updated successfully!";
    }
}


// if(isset($_POST['delete'])){
//   $player->update($_POST['id']);
// }


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="src/style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
  <section class="form-content">
  <form id="form-content" method="POST">
            <div class="input-groups">
                <div class="input-groups-flex1">
                    <!-- Name -->
                    <div class="input-box">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="<?= isset($playerData) ? $playerData['JoueureName'] : ''; ?>" required />
                    </div>

                    <!-- Football Club -->
                    <div class="input-box">
                        <label for="football-club">Football Club</label>
                        <select name="football-club" id="football-club">
                            <option value="1" <?= isset($playerData) && $playerData['ClubID'] == 1 ? 'selected' : ''; ?>>Club 1</option>
                            <option value="2" <?= isset($playerData) && $playerData['ClubID'] == 2 ? 'selected' : ''; ?>>Club 2</option>
                        </select>
                    </div>
                </div>

                <!-- Player Stats -->
                <div id="player-input">
                    <div class="input-groub-box">
                        <div class="input-box">
                            <label for="rating">Rating</label>
                            <input type="number" name="rating" id="rating" value="<?= isset($playerData) ? $playerData['Rating'] : ''; ?>" required />
                        </div>
                        <div class="input-box">
                            <label for="pace">Pace</label>
                            <input type="number" name="pace" id="pace" value="<?= isset($playerData) ? $playerData['Pace'] : ''; ?>" required />
                        </div>
                    </div>
                    <div class="input-groub-box">
                        <div class="input-box">
                            <label for="shooting">Shooting</label>
                            <input type="number" name="shooting" id="shooting" value="<?= isset($playerData) ? $playerData['Shooting'] : ''; ?>" required />
                        </div>
                        <div class="input-box">
                            <label for="passing">Passing</label>
                            <input type="number" name="passing" id="passing" value="<?= isset($playerData) ? $playerData['Passing'] : ''; ?>" required />
                        </div>
                    </div>
                    <div class="input-groub-box">
                        <div class="input-box">
                            <label for="dribbling">Dribbling</label>
                            <input type="number" name="dribbling" id="dribbling" value="<?= isset($playerData) ? $playerData['Dribbling'] : ''; ?>" required />
                        </div>
                        <div class="input-box">
                            <label for="defending">Defending</label>
                            <input type="number" name="defending" id="defending" value="<?= isset($playerData) ? $playerData['Defending'] : ''; ?>" required />
                        </div>
                        <div class="input-box">
                            <label for="physical">Physical</label>
                            <input type="number" name="physical" id="physical" value="<?= isset($playerData) ? $playerData['Physical'] : ''; ?>" required />
                        </div>
                    </div>
                </div>

                <!-- Position -->
                <div class="input-box">
                    <label for="position">Position</label>
                    <select name="position" id="position">
                        <option value="chang" <?= (isset($playerData) && $playerData['Position'] == 'chang') ? 'selected' : ''; ?>>Chang</option>
                        <option value="ST1" <?= (isset($playerData) && $playerData['Position'] == 'ST1') ? 'selected' : ''; ?>>ST1</option>
                        <!-- Ajouter les autres options -->
                    </select>
                </div>

                <!-- Nationality -->
                <div class="input-box">
                    <label for="nationality">Nationality</label>
                    <select name="nationality" id="nationality">
                        <!-- Ajouter les nationalités -->
                    </select>
                </div>

                <!-- Boutons -->
                <?php if (isset($playerData)): ?>
                    <input type="submit" name="update" value="Update Player" class="btn" />
                    <input type="hidden" name="JoueurID" value="<?= $playerData['JoueurID'] ?>" />
                <?php else: ?>
                    <input type="submit" name="submit" value="Add Player" class="btn" />
                <?php endif; ?>
            </div>
        </form>

  </section>
</body>
</html>
