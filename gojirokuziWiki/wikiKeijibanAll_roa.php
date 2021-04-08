<?php
require("sqlconnect/connect.php");

$liver = "roa";

if (isset($_POST["content"])) {
    $content = isset($_POST["content"]) ? $_POST["content"] : "";
    $userID = "roa";
    $date = date('Y-m-d H:i:s');
    if (isset($_POST["check"])) {
        $number = $_POST["check"];
        $upsql = "UPDATE " . $liver . " SET rip = 'Yes' WHERE number = " . $number . "";
        $conn->exec($upsql);
        $reliver = "rep" . $liver;
        $sql = "INSERT INTO " . $reliver . " VALUES($number, '" . $date . "', '" . $content . "');";
    } else {
        $sql = "INSERT INTO " . $liver . " VALUES(NULL, '" . $userID . "', '" . $date . "', '" . $content . "',NULL);";
    }
    $conn->exec($sql);
    header('Location: wikiKeijibanAll_roa.php');
    exit();
}


require("sqlconnect/data_search.php");

?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="new_style.css">
  <!-- <link rel="stylesheet" href="wiki.css"> -->
  <script type="text/javascript" src="js/jquery-2.1.3.js"></script>
  <title>にじさんじ非公式wiki</title>
  <link rel="stylesheet" href="layoutKeiji.css" type="text/css">
  <script type="text/javascript" src="js/lazeemenu/lazeemenu.css"></script>
  <script type="text/javascript" src="js/lazeemenu/lazeemenu-jquery.js"></script>
  <script>
    $(function() {
      $("a.re").click(function() {
        var reNum = $(this).parent().find("a").eq(0).text();
        $(".reply").text(reNum);
        $("input[name=check]").val(reNum);
        $("input").prop("checked", true);
      });
    });
    $(function() {
      $(document).ready(function() {
        $('#menu-1').lazeemenu();
      });

      $(document).ready(function() {
        $(".icon li h3 span").addClass("close");
      })

      $(".icon li h3 span").click(function() {
        $(this).toggleClass("close");
        $(this).toggleClass("open");
      })
    });
  </script>

  <div class="logo">
    <a href="new_wikitop.html"><img src="img/5464_3.jpg" alt="ロゴ"></a>
  </div>

  <div class="menu">
    <!-- <ul>
        <li>ホーム</li>
        <li>新規登録</li>
        <li>ログイン</li>
      </ul> -->

  </div>
</head>

<body>
  <div class=nav>
    <!-- <nav>
        <ul>
          <li>top</li>
        </ul>
      </nav> -->
  </div>

  <div class="Area">
    <!-- 右のAREA -->
    <div class="leftArea">
      <ul id="menu-1" class="icon">
        <li>
          <h3><span>一期生出身</span></h3>
          <ul>
            <li><a href="./person/mito.html">月ノ美兎</a></li>
            <li><a href="./person/kaede.html">樋口楓</a></li>
            <li><a href="./person/rin.html">静凛</a></li>
            <li><a href="./person/moira.html">モイラ</a></li>
            <li><a href="./person/elu.html">える</a></li>
            <li><a href="./person/hajime.html">渋谷ハジメ</a></li>
            <li><a href="./person/chihiro.html">勇気ちひろ</a></li>
            <li><a href="./person/aki.php">鈴谷アキ</a></li>
          </ul>
        </li>
        <li>
          <h3><span>にじさんじゲーマーズ</span></h3>
          <ul>
            <li><a href="./person/kanae.html">叶</a></li>
            <li><a href="./person/yoko.html">赤羽葉子</a></li>
            <li><a href="./person/saku.html">笹木咲</a></li>
            <li><a href="./person/yuika.html">椎名唯香</a></li>
            <li><a href="./person/kuzuha.html">葛葉</a></li>
            <li><a href="./person/himawari.html">本間ひまわり</a></li>
            <li><a href="./person/ririmu.html">魔界ノりりむ</a></li>
          </ul>
        </li>
        <li>
          <h3><span>統合後組</span></h3>
          <ul>
            <li><a href="./person/toko.php">戌亥とこ</a></li>
            <li><a href="./person/roa.php">夢月ロア</a></li>
            <li><a href="./person/rituki.php">桜凛月</a></li>
            <li><a href="./person/shiba.html">黒井しば</a></li>
            <li><a href="./person/gwelu.html">グウェル・オス・ガール</a></li>
            <li><a href="./person/masiro.html">ましろ</a></li>
            <li><a href="./person/naraka.html">奈羅花</a></li>
            <li><a href="./person/natume.html">来栖夏芽</a></li>
          </ul>
        </li>
        <li>
          <h3><span>五十音順</span></h3>
          <ul>
            <li><a href="/">愛園愛美</a></li>
            <li><a href="/">相羽ういは</a></li>
            <li><a href="/">赤羽葉子</a></li>
            <li><a href="/">飛鳥ひな</a></li>
            <li><a href="/">遠北千南</a></li>
            <li><a href="/">安土桃</a></li>
            <li><a href="/">天宮こころ</a></li>
            <li><a href="/">雨森小夜</a></li>
            <li><a href="/">アルス・アルマル</a></li>
            <li><a href="/">アンジュ・カトリーナ</a></li>
            <li><a href="/">家長むぎ</a></li>
            <li><a href="/">出雲霞</a></li>
            <li><a href="/">戌亥とこ</a></li>
            <li><a href="/">宇志海いちご</a></li>
            <li><a href="/">卯月コウ</a></li>
            <li><a href="/">エクス・アルビオ</a></li>
            <li><a href="/">えま☆おうがすと</a></li>
            <li><a href="/">エリー・コニファー</a></li>
            <li><a href="/">える</a></li>
            <li><a href="/">御伽原江良</a></li>
            <li><a href="/">小野町春香</a></li>
            <li><a href="/">加賀美ハヤト</a></li>
            <li><a href="/">語部紡</a></li>
            <li><a href="/">叶</a></li>
            <li><a href="/">神田笑一</a></li>
            <li><a href="/">ギルザレン三世</a></li>
            <li><a href="/">葛葉</a></li>
            <li><a href="/">来栖夏芽</a></li>
            <li><a href="person/shiba.html">黒井しば</a></li>
            <li><a href="person/gwelu.html">グウェル・オス・ガール</a></li>
            <li><a href="/">群道美玲</a></li>
            <li><a href="/">剣持刀也</a></li>
            <li><a href="/">三枝明那</a></li>
            <li><a href="/personrituki.php">桜凛月</a></li>
            <li><a href="/">笹木咲</a></li>
            <li><a href="/">椎名唯華</a></li>
            <li><a href="/">シェリン・バーガンディ</a></li>
            <li><a href="/">シスター・クレア</a></li>
            <li><a href="/">静凛</a></li>
            <li><a href="/">渋谷ハジメ</a></li>
            <li><a href="/">白雪巴</a></li>
            <li><a href="/">ジョー・力一</a></li>
            <li><a href="/">健屋花那</a></li>
            <li><a href="/">鈴鹿詩子</a></li>
            <li><a href="/">鈴木勝</a></li>
            <li><a href="/">鈴原るる</a></li>
            <li><a href="/">鈴谷アキ</a></li>
            <li><a href="/">瀬戸美夜子</a></li>
            <li><a href="/">鷹宮リオン</a></li>
            <li><a href="/">月ノ美兎</a></li>
            <li><a href="/">でびでび・でびる</a></li>
            <li><a href="/">轟京子</a></li>
            <li><a href="/">ドーラ</a></li>
            <li><a href="person/naraka.html">奈羅花</a></li>
            <li><a href="/">成瀬鳴</a></li>
            <li><a href="/">ニュイ・ソシエール</a></li>
            <li><a href="/">葉加瀬冬雪</a></li>
            <li><a href="/">花畑チャイカ</a></li>
            <li><a href="/">早瀬走</a></li>
            <li><a href="/">葉山舞鈴</a></li>
            <li><a href="/">春崎エアル</a></li>
            <li><a href="/">樋口楓</a></li>
            <li><a href="/">伏見ガク</a></li>
            <li><a href="/">フミ</a></li>
            <li><a href="/">文野環</a></li>
            <li><a href="/">不破湊</a></li>
            <li><a href="/">ベルモンド・バンデラス</a></li>
            <li><a href="/">星川サラ</a></li>
            <li><a href="/">本間ひまわり</a></li>
            <li><a href="/">舞元啓介</a></li>
            <li><a href="/">魔界ノりりむ</a></li>
            <li><a href="/">ましろ</a></li>
            <li><a href="/">町田ちま</a></li>
            <li><a href="/">魔使マオ</a></li>
            <li><a href="/">黛灰</a></li>
            <li><a href="person/moira.html">モイラ</a></li>
            <li><a href="/">物部有栖</a></li>
            <li><a href="/">森中花咲</a></li>
            <li><a href="/">矢車りね</a></li>
            <li><a href="/">社築</a></li>
            <li><a href="/">山神カルタ</a></li>
            <li><a href="/">勇気ちひろ</a></li>
            <li><a href="/">夕陽りり</a></li>
            <li><a href="/">雪城眞尋</a></li>
            <li><a href="/">夢月ロア</a></li>
            <li><a href="/">夢追翔</a></li>
            <li><a href="/">夜見れな</a></li>
            <li><a href="/">ラトナ・プティ</a></li>
            <li><a href="/">リゼ・ヘルエスタ</a></li>
            <li><a href="/">緑仙</a></li>
            <li><a href="/">竜胆尊</a></li>
            <li><a href="/">ルイス・キャミー</a></li>
            <li><a href="/">レヴィ・エリファ</a></li>
            <li><a href="/">童田明治</a></li>

          </ul>
        </li>
      </ul>
    </div>

    <!-- MAINエリア -->
    <div class="mainArea">

      <div class="f-container">

        <div>
        <p>個人ページへ飛ぶ--<a href="person/roa.php">夢月ロア</a>--</p>
          <div>
            <table id="bigframe" border="1">

              <?php //レコードをtr・tdを使って１行ずつ表示 
               if (isset($data_count)) {
                for ($i = 0; $i < $data_count; $i++) {
                ?>
                    <tr>
                        <td>
                            <a><?php echo $data_array[$i][0]; ?></a>
                            <a><?php echo $data_array[$i][1]; ?></a>
                            <a><?php echo $data_array[$i][2]; ?></a>
                            <h2><?php echo $data_array[$i][3]; ?></h2>
                            <a class="re">返信</a><br>
                            <?php
                            if (isset($data_array[$i][4])) {
                                require("sqlconnect/data_search_rep.php");
                                for ($j = 0; $j < $data_count_rep; $j++) {
                            ?>
                            <br>
                            <a><?php echo $data_array_rep[$j][0]; ?></a>
                            <h2><?php echo $data_array_rep[$j][1]; ?></h2>
        <?php
                                }
                            }
                        }
                    }
        ?>
                  </td>
                </tr>

                <tr>
                  <td>
                    <table id="smallframe">
                      <tr>
                        <td>
                          <a>コメント</a>
                        </td>
                      </tr>
                      <form action="wikiKeijibanAll_roa.php" method="POST">
                        <tr>
                          <td> 返信先>><a class="reply"></a><input type="checkbox" name="check"></td>
                        </tr>
                        <tr>
                          <td><textarea name="content"></textarea><input type="submit" value="投稿"></td>
                        </tr>
                      </form>
                    </table>
                  </td>
                </tr>

            </table>
          </div>
        </div>
      </div>

    </div>



    <!-- 左のエリア -->
    <div class="rightArea"><table border="1" width="100%">
        <!-- Twitterの埋め込み -->
      <a class="twitter-timeline" data-width="300" data-height="1500" href="https://twitter.com/yuzuki_roa?ref_src=twsrc%5Etfw">Tweets by yuzuki_roa</a>
                  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>



</body>

</html>