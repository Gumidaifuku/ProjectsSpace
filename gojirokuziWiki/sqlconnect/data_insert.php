<?php

if (isset($_POST["content"])) {
    $content = isset($_POST["content"]) ? $_POST["content"] : "";
    
    $userID = "toko";
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO inuitoko VALUES(NULL, '" . $userID . "', '" . $date . "', '" . $content . "',NULL);";
    $conn->exec($sql);
    header('Location: wikiKeijibanAll.php');
    exit();
}

?>