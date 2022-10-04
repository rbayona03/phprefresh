<h1>File Handling</h1>

<?php
$file = 'extras/users.txt';

if(file_exists($file)){
    //echo readfile($file);

    $handle = fopen($file, 'r'); //point to file
    $contents = fread($handle, filesize($file)); //collect content
    fclose($handle); //close file pointer
    echo $contents; //handle content
}else{
    //write file
    $handle = fopen($file, 'w'); //create pointer with 'w'riting permissions;
    $contents = 'rob' . PHP_EOL . 'brad' . PHP_EOL . 'mike'; //create content w/ phpEOL line breaks
    fwrite($handle, $contents); //writes contents to handled file
    fclose($handle); //close file
}
?>