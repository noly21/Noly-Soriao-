<?php
$file = fopen("hello_there.php","w");
echo fwrite($file,"
<?php
// This is a comment
echo 'This is a test page!';
echo 'Exam number two!';
// This is the end of a comment
?>
");
fclose($file);
?>