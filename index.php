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
?>
<h1>------------------------------------5.--------------------------------------</h1>
<?php
$stringSentence = "An American in Paris";
$newStringSentence = str_ireplace('a', '*', $stringSentence);
echo $newStringSentence;
?>
<h1>------------------------------------6.--------------------------------------</h1>
<?php
$stringSentence = "An American in Paris";
$aNumberInSentence = substr_count(strtolower($stringSentence), 'a');
echo "Total count of letter A: $aNumberInSentence";
?>
<h1>------------------------------------7.--------------------------------------</h1>
<?php
$stringSentence1 = "An American in Paris";
$stringSentence2 = "Breakfast at Tiffany's";
$stringSentence3 = "A Space Odyssey";
$stringSentence4 = "It's a wonderful life";
$vowels = ['a', 'e', 'i', 'y', 'o', 'u'];
$stringSentence1WithoutVowels = str_ireplace($vowels, '', $stringSentence1);
$stringSentence2WithoutVowels = str_ireplace($vowels, '', $stringSentence2);
$stringSentence3WithoutVowels = str_ireplace($vowels, '', $stringSentence3);
$stringSentence4WithoutVowels = str_ireplace($vowels, '', $stringSentence4);
echo $stringSentence1WithoutVowels . '<br>';
echo $stringSentence2WithoutVowels . '<br>';
echo $stringSentence3WithoutVowels . '<br>';
echo $stringSentence4WithoutVowels . '<br>';
?>
<h1>------------------------------------8.--------------------------------------</h1>
<?php
$stringSentence = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo $stringSentence;
$splitSentence = explode(' ', $stringSentence);
foreach ($splitSentence as $split) {
    if (is_numeric($split)) {
        echo " <br> Star vars episode number: $split";
    }
}
?>
<h1>------------------------------------9.--------------------------------------</h1>
<?php
$stringSentence = "Don't be a Menace to South Central While Drinking Your Juice in the Hood";
$stringSentenceSplit = explode(' ', $stringSentence);
$stringSentenceCount = 0;
$stringSentence2 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$stringSentence2Split = explode(' ', $stringSentence2);
$stringSentence2Count = 0;

foreach ($stringSentenceSplit as $split) {
    if (strlen($split) <= 5) {
        $stringSentenceCount++;
    }
}
foreach ($stringSentence2Split as $split) {
    if (strlen($split) <= 5) {
        $stringSentence2Count++;
    }
}
echo "Movie: $stringSentence <br>";
echo "Threa are $stringSentenceCount words in this title with less than or equal to 5 characters. <br>";
echo "Movie: $stringSentence2 <br>";
echo "Threa are $stringSentence2Count words in this title with less than or equal to 5 characters.";
?>
<h1>------------------------------------10.--------------------------------------</h1>
<?php
$stringLength = 3;
while ($stringLength !==0) {
    echo chr(rand(97, 122));
    $stringLength--;
}
?>
<h1>------------------------------------11.--------------------------------------</h1>
<?php
$mergeSentence = array_merge($stringSentenceSplit, $stringSentence2Split);
$randomString = null;
$randomStringCount = 10;
while ($randomStringCount !== 0) {
    $randomWord = $mergeSentence[rand(0, count($mergeSentence) - 1)];
    if ($randomString === null || !str_contains($randomString, $randomWord)) {
        $randomString .= $randomWord . ' ';
        $randomStringCount--;
    }
}
echo "Random string: $randomString <br>";
?>


