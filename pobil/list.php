


    <?php
require_once 'config/config.php';
require_once 'players.php';

    $players = $player->getAll(); 
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>" . $player['JoueureName'] . "</td>";
        echo "<td><a href='index.php?edit=" . $player['JoueurID'] . "'>Edit</a></td>";
        echo "</tr>";
    }
    ?>
    <table>
    <tr>
        <th>Name</th>
        <th>Actions</th>
    </tr>
</table>