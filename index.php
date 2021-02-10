<h1>------------------------------------1.--------------------------------------</h1>
<?php
$actorName = "Nicolas";
$actorSurname = "Cage";
echo "Actor: $actorName $actorSurname <br>";
if (strlen($actorName) < strlen($actorSurname)) {
    echo "Name: $actorName";
} else {
    echo "Surname: $actorSurname";
}
?>
<h1>------------------------------------2.--------------------------------------</h1>
<?php
echo strtoupper($actorName) . " " . strtolower($actorSurname);
?>
<h1>------------------------------------3.--------------------------------------</h1>
<?php
$newString = substr("$actorName", 0, 1) . substr("$actorSurname", 0, 1);
echo "$newString";
?>
<h1>------------------------------------4.--------------------------------------</h1>
<?php
$newString2 = substr("$actorName", -3, 3) . substr("$actorSurname", -3, 3);
echo "$newString2";

