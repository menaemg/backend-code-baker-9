<?php

//  ---------  File Haneling ------------

$myfile = fopen("train.txt","r"); // open file to read only

var_dump(fread($myfile, filesize('train.txt') + 1 )); //read all file 

var_dump( feof($myfile));  // return if we get the End - Of - File [eof]

rewind($myfile); // Rewind the position of a file pointer in first file

var_dump( fgets($myfile));  // to read first line only

var_dump( feof($myfile));  // return if we get the End - Of - File [eof]
// It's a good programming practice to close all files 
// after you have finished with them. 
// You don't want an open file running around 
// on your server taking up resources!

fclose($myfile); // close file
echo "<br>"."<br>"."<br>";

//-----------------------------------
// to read file line by line
//-----------------------------------

$myfile = fopen("train.txt" , 'r');
while(!feof($myfile)){
    echo fgets($myfile)."<br>"."<br>";
}
fclose($myfile);
echo "<br>"."<br>"."<br>";

//-----------------------------------
// to read file char by char
//-----------------------------------

$myfile = fopen("train.txt" , "r");

while(!feof($myfile)){
    echo fgetc($myfile)."<br>";
}
fclose($myfile);
echo "<br>"."<br>"."<br>";

//-----------------------------------
// to create file if not exist
//-----------------------------------

$myfile = fopen("second.txt","w");
$txt = "Hello , I'am Fareeda \n";
fwrite($myfile,$txt);
fwrite($myfile, $txt);
fclose($myfile);


//-----------------------------------
// ####Overwriting##### files
// if we open existed file and write on it , all old data will eraced
//-----------------------------------

// $myfile = fopen("second.txt","w");
// $txt = "Amr Abbas\n";
// fwrite($myfile,$txt);
// fwrite($myfile,$txt);
// fwrite($myfile,$txt);
// fclose($myfile);

//-----------------------------------
// ####Delete##### files
// if we open existed file and write on it , all old data will eraced
//-----------------------------------

unlink('second.txt'); // delete file 




$newfile = fopen("newfile.txt", "w"); // create file if not existed

?>


