<?php

$sql = "SELECT * FROM rep".$liver." WHERE number = ".$data_array[$i][0]."";
$result = $conn->query($sql);
$data_array_rep=array();
if ($result->rowCount()) {
    foreach ($result as $r) {
        $data_array_rep[] = [$r[1], $r[2]];
    }
    $data_count_rep = count($data_array_rep);
}
?>