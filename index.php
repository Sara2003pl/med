<?php

$db = new mysqli("localhost", "root", "", "med");

$q = $db->prepare("SELECT * FROM staff");
if($q && $q->execute()) {

    $result = $q->get_result();
    while($staff = $result->fetch_assoc()){

        $staffId = $staff['ID'];
        $firstName = $staff['firstName'];
        $lastName = $staff['lastName'];
        echo "lekarz $firstName $lastName<br>";
        $q = $db->prepare("SELECT * FROM appointment WHERE staff_id = ?");
        $q->bind_param("i", $staffId);
        if($q && $q->execute()) {

            $appointments = $q->get_result();
            while($appointment = $appointments->fetch_assoc()) {
                $appointmentId = $appointment['ID'];
                $appointmentData = $appointment['data'];
                $appointmentTimestamp = strtotime($appointmentData);
                echo "<button>";
                echo date("j.m H:i", $appointmentTimestamp);
                echo "</button>";
            }

        } else {
            die("blad pobrania wizyty z bazy danych");
        }

    }
} else {
    die("blad pobierania z bazy danych");
}
?>