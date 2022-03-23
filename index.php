<?php

$db = new mysqli("localhost", "root", "", "med");

$q = $db->prepare("SELECT * FROM staff");
if($q->execute()) {

    $result = $q->get_result();
    while($row = $result->fetch_assoc()){

        $id = $row['ID'];
        $firstName = $row['firstName'];
        $lastName = $row['lastName'];
        echo "lekarz $firstName $lastName<br>";

    }
} else {
    die("blad pobierania z bazy danych");
}
?>