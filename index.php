
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


<!--自分で入力してＳＱＬへ登録する欄 -->
    <form method="post" action="insert.php">
        <div id="box">
            <fieldset>
                <legend>自分で入力</legend>
                <label>書籍名&emsp;&emsp;&emsp;：<input type="text" name="name"></label><br>
                <label>書籍URL&emsp;&emsp;：<input type="text" name="url"></label><br>
                <label>書籍コメント：<input type="text" name="cm"></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>

<!--グーグルブックスＡＰＩを呼び出す欄 -->
    <form method="post" action="g_book.php">          
        <div id="box">
            <fieldset>
                <legend>グーグル検索</legend>
                <label>著者検索：<input type="text" name="author"></label><br>
                <input type="submit" value="検索">
            </fieldset>
        </div>
    </form>

</body>
</html>