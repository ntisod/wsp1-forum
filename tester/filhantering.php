<?php

/**
 * Filhantering
 */

//Del 1. Skriv innehållet i en hel fil
echo "<h1>Del 1</h1>";
echo readfile("webdictionary.txt");

//Del 2. Öppna en fil, gör något med innehållet och stäng den sedan
echo "<h1>Del 2</h1>";

//Öppna filen
$myFile = fopen("webdictionary.txt", "r") or die("Lyckas inte öppna filen!");

//Läs och skriv innehållet
echo fread($myFile, filesize("webdictionary.txt"));

//Stäng filen
fclose($myFile);

//Del 2b. Öppna en fil, skriv en rad och stäng  sedan filen
echo "<h1>Del 2b</h1>";

//Öppna filen
$myFile = fopen("webdictionary.txt", "r") or die("Lyckas inte öppna filen!");

//Läs och skriv en rad
echo fgets($myFile);

//Stäng filen
fclose($myFile);

//Del 2c. Öppna en fil, skriv en rad i taget och stäng  sedan filen
echo "<h1>Del 2c - Öppna en fil, skriv en rad i taget och stäng  sedan filen</h1>";

//Öppna filen
$myFile = fopen("webdictionary.txt", "r") or die("Lyckas inte öppna filen!");

//Loopa igenom alla rader i filen
while(!feof($myFile)){
    //Läs och skriv en rad
    echo fgets($myFile);
    echo "<br />";
}
//Stäng filen
fclose($myFile);

//Del 2d. Öppna en fil, skriv en tecken i taget och stäng  sedan filen
echo "<h1>Del 2d. Öppna en fil, skriv en tecken i taget och stäng  sedan filen</h1>";

//Öppna filen
$myFile = fopen("webdictionary.txt", "r") or die("Lyckas inte öppna filen!");

//Loopa igenom alla rader i filen
while(!feof($myFile)){
    //Läs och skriv en rad
    echo fgetc($myFile);
    echo "<br />";
}
//Stäng filen
fclose($myFile);

//Del 3. Öppna en fil, skriv till filen och stäng  sedan filen
echo "<h1>Del 3. Öppna en fil, skriv till filen och stäng  sedan filen</h1>";

//Öppna filen
$myFile = fopen("testfile.txt", "a") or die("Unable to open file!");

//Skriv till filen
$txt = "Mario\n";
fwrite($myFile, $txt);
$txt = "Stefan\n";
fwrite($myFile, $txt);

//Stäng filen
fclose($myFile);


?>