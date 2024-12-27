<?php
class Player {
    private $conn;
    private $table = 'joueur';

    public function __construct($db) {
        $this->conn = $db;
    }

    // Create
    public function create($data) {
        $query = "INSERT INTO " . $this->table . " 
                  (JoueureName, Photo, Position, Rating, Pace, Shooting, Passing, Dribbling, Defending, Physical, CountryID, ClubID) 
                  VALUES 
                  (:name, :photo, :position, :rating, :pace, :shooting, :passing, :dribbling, :defending, :physical, :country_id, :club_id)";
        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $data['name']);
        $stmt->bindParam(':photo', $data['photo']);
        $stmt->bindParam(':position', $data['position']);
        $stmt->bindParam(':rating', $data['rating']);
        $stmt->bindParam(':pace', $data['pace']);
        $stmt->bindParam(':shooting', $data['shooting']);
        $stmt->bindParam(':passing', $data['passing']);
        $stmt->bindParam(':dribbling', $data['dribbling']);
        $stmt->bindParam(':defending', $data['defending']);
        $stmt->bindParam(':physical', $data['physical']);
        $stmt->bindParam(':country_id', $data['country_id']);
        $stmt->bindParam(':club_id', $data['club_id']);

        return $stmt->execute();
    }

   

}
?>
