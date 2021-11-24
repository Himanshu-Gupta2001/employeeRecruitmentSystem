<?php
$name=$_GET['t1'];
$pass=$_GET['t2'];
$email=$_GET['t3'];
$language=$_GET['t4'];

$file = fopen("details.txt", 'a+');
$s=fread($file, filesize("details.txt"));
$pos = strpos($s, $email);

if(!$pos){
$f=fopen("jobAppNumber.txt", "r");
$j_a_n=fread($f, filesize("jobAppNumber.txt"));
fclose($f);

$text=$name."::".$pass."::".$email."::".$language."::".$j_a_n."::\r\n";

$f=fopen("jobAppNumber.txt", "w");
$j_a_n = $j_a_n + 1;
fwrite($f,$j_a_n);

fwrite($file, $text);
fclose($file);
fclose($f);

echo "Your data has been submitted successfully<br>";
echo "<a href = resume.php> Click here to upload your resume</a>";
}

else
{
    echo "You are already registered<br>";
    echo "<a href = login.html> Click Here to login</a>";
}
?>