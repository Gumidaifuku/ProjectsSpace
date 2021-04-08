<?php

$sql = "SELECT * FROM ".$liver;
$result = $conn->query($sql);
$data_array;
if ($result->rowCount()) {
    foreach ($result as $r) {
        $data_array[] = [$r[0], $r[1], $r[2], $r[3],$r[4]];
    }
    $data_count = count($data_array);
    if(empty($data_array)){
        $data_count=0;
    }
}
?>