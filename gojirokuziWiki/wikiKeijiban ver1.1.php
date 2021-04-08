<?php
require("sqlconnect/connect.php");

if (isset($_POST["content"])) {
    $content = isset($_POST["content"]) ? $_POST["content"] : "";
    $urlliver=$_POST["liver"];
    $userID = "--";
    $date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO $urlliver VALUES(NULL, '" . $userID . "', '" . $date . "', '" . $content . "',NULL);";
    $conn->exec($sql);
    if($urlliver=="inuitoko"){
        $urlliver="toko";
    }
    $heurl="person/".$urlliver.".php";
    header('Location: '.$heurl);
    exit();
}

$url="../wikiKeijibanAll_".$liver.".php";

require("sqlconnect/data_search.php");

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../layoutKeiji.css" type="text/css">
    <title>keijiban</title>
</head>

<body>
    <div>
        <div>
            <table id="bigframe" border="1">
                <tr>
                    <td><h2>コメント欄</h2></td>
                </tr>

                <tr>
                    <td>最新10件までを表示中-<a href=<?php echo($url); ?>>全て表示する</a></td>
                </tr>

                <?php //レコードをtr・tdを使って１行ずつ表示 
                if (isset($data_count)) {


                    for ($i = $data_count - 1; $i > $data_count - 10; $i--) {
                        if ($i < 0) {
                            break;
                        }
                ?>
                        <tr>
                            <td>
                                <a><?php echo $data_array[$i][0]; ?></a>
                                <a><?php echo $data_array[$i][1]; ?></a>
                                <a><?php echo $data_array[$i][2]; ?></a>
                                <h2><?php echo $data_array[$i][3]; ?></h2>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>

                <tr>
                    <td>
                        <table id="smallframe">
                            <tr>
                                <td>
                                    <a>コメント</a>
                                </td>
                            </tr>
                            <form action="../wikiKeijiban ver1.1.php" method="POST">
                            <input type="hidden" name="liver" value=<?php echo($liver); ?>>
                                <tr>
                                    <td><textarea name="content"></textarea><input type="submit" value="投稿"></td>
                                </tr>
                            </form>
                        </table>
                    </td>
                </tr>

            </table>
        </div>
        <div>

        </div>
    </div>
</body>

</html>