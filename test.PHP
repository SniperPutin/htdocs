<?php
    $value = $_REQUEST["v"];
    $datafile = fopen("SuperHTML.csv", "r");
    $data = array();
    while (!feof($datafile)){
       $data[] = fgetcsv($datafile); 
    }
?>
My value = '<?= $value ?>' <br>
<pre><?php print_r($data[$value])  ?> </pre> 
