

<?php
$handle =fopen('/home/mohamed/Desktop/htdocs/input.txt','w+');  
fwrite($handle, $_POST["text"]);    
fclose($handle);
?>

<?php
echo "hello ";

//exec("whoami", $output);
 $result=exec("java -jar nlp.jar 2>&1",$output);
// /home/mohamed/Desktop/dd/nlp.jar   /usr/bin/java
print_r($output);

/*
if ($result) {           
print_r($output);
}
else {
    echo "Failed";
}
*/

//$mystring = system('python pyt', $retval);

?> 

