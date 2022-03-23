<?php

$db = new mysqli("localhost", "root", "", "med");
$appointmentId = $_REQUEST['id'];
$q = $db->prepare("SELECT * FROM appointment WHERE ID = ?");
$Q->bind_param("i", $appointmentId);
if(&q && $q->execute()) {
    $appointment = $q->get_result()->fetch_assoc();
    $appointmentData = $appointment['data'];
    $appointmentTimestamp = strtotime($appointmentData);
    echo "zapis na wizyte w terminie".data("j.m H:i", $appointmentTimestamp)

}
if(isset($_REQUEST['firstName']) && isset($_REQUEST['lastName'])
        && $_REQUEST['phone']) {

    $q->prepare("INSERT INTO patient VALUES (NULL")
        }

?>

<form action="appointment.php">
Imię: <input type="text" name="firstName">
Nazwisko: <input type="text" name="lastName">
Telefon: <input type="text" name="phone">
<input type="submit" 