<?php
//index.php（登録フォームの画面ソースコードを全コピーして、このファイルをまるっと上書き保存）
$id = $_GET["id"];
include "funcs.php";
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmt->bindvalue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
$view = "";
if ($status == false) {
    sqlError($stmt);
} else {
    //Selectデータの数だけ自動でループしてくれる
    //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>

<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="style.css">
        <title>データ登録</title>
    </head>

<body>
    
<!--データ一覧へ-->
<header>
  <nav class="navbar navbar-default">
    <div class="box">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
    </div>
  </nav>

</header>


<!--DBを変更する画面 -->
    <form method="post" action="insert.php">
        <div id="box">
            <fieldset>
                <legend>更新</legend>
                <label>書籍名&emsp;&emsp;&emsp;：<input type="text" name="name" value="<?=$row["book_name"]?>"></label><br>
                <label>書籍URL&emsp;&emsp;：<input type="text" name="url" value="<?=$row["url"]?>"></label><br>
                <label>書籍コメント：<input type="text" name="cm" value="<?=$row["cm"]?>"></label><br>
                <input type="hidden" name="id" value="<?=$row["id"]?>">
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>


</body>
</html>
