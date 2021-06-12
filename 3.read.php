<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table border="1"> 

<?php
$fp = fopen("data/data.txt","r");        
$ct=0;
while(!feof($fp) and 4>$ct){
    $line = fgets($fp);
    if (trim($line) != null){
        $myarray = explode("\t",$line);
        print "<tr>\n";
        foreach($myarray as $substr) {
            print "<td>$substr</td>";
         }
        print "<tr>\n";
     }
}
fclose($fp);
?>
</table>

</body>
</html>

