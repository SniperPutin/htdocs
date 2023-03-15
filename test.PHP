<?php
    $value = $_REQUEST["v"];
    $datafile = fopen("SuperHTML.csv", "r");
    $data = array();
    while (!feof($datafile)){
        $row = fgetcsv($datafile);
        if (!$row) {
            continue;
        }
        $row[] = strtolower(str_replace(' ', '-', $row[0]));
       $data[] = $row;
    }
?>
My value = '<?= $value ?>' <br>
<pre><?php print_r($data[$value])  ?> </pre> 




