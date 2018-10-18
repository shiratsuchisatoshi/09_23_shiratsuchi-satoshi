
--******* 課題ＳＱＬ*******--
-- id「1,3,5」を抽出する
SELECT * FROM gs_an_table WHERE id = 1 OR id = 2 OR id = 3
-- id「4～8」を抽出する
SELECT * FROM gs_an_table WHERE id >= 4 AND id<=8
-- email「test1」を抽出するあいまい検索
SELECT * FROM gs_an_table WHERE email LIKE '%test1%'
-- あたらしい日付順にソートする
SELECT * FROM gs_an_table ORDER BY indate DESC 
-- age「20」、indate「2017-05-26％」のデータ抽出する
SELECT * FROM gs_an_table WHERE age=20 AND indate LIKE '2017-05-26%'
-- あたらしい日付順で5個だけ取得する
SELECT * FROM gs_an_table ORDER BY indate DESC LIMIT 5
