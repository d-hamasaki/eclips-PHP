<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>サンプル</title>
</head>

<body>

<p>こんにちは。</p>

<p>
<?php

/*
 作成日 2016/09/29
 作成者 Dis
 開発環境 PHP5.x
 参考：http://www.phpbook.jp/tutorial/
 */

    $message = "Hello Eclipse World!";
    echo "<h1>$message</h1>";
?>

</p>

<p>PHPのテストです。</p>

<p>

<?php
//ヒアドキュメント sample
print "こんにちは。<br />";
print <<< EOS
お元気ですか？<br />
いいお天気ですね。<br />
ではさようなら。
EOS;
?>
</p>

<p>
<?php
//文字の連結sample
$name = '田中';
print $name.'さん。こんにちは。';

//echoのsample
echo '2008年', '10月', '7日', '<br />';
//printのsample
print "月曜日<br />";
print "火曜日<br />";
//エスケープシーケンスの仕様確認
//これはうまくいかない
print "私の名前は\'山田\'です<br />";
print '私の名前は\"山田\"です<br />';
//これだけうまくいく
print "私の名前は\"山田\"です<br />";
print '私の名前は\'山田\'です<br />';

// シングルクォートで文字列を扱い、HTMLタグの属性もシングルクォート
// エスケープ処理が必要
echo '<a href=\'http://www.php.net/manual/ja/\'>PHP日本語マニュアル</a><br />';

// シングルクォートで文字列を扱い、HTMLタグの属性はダブルクォート
// エスケープ処理の必要なし
echo '<a href="http://www.php.net/manual/ja/">PHP日本語マニュアル</a><br />';

print "ダブルクォートで特殊文字の「\\n」を出力します。<br />\n";

print "<br />";

print 'シングルクォートの場合は「\n」はそのまま出力されます。';

print "<br />";
print "お会計は\\1253になります。";
print "<br />";
print "「\$」記号もエスケープ処理が必要です。\n";
print "<br />";


//文字列の中の変数展開
$name = '山田';
print "私の名前は${name}です<br />";
print "<br />";
print '私の名前は${name}です<br />';
print "<br />";

/*
¥n    改行
¥r    キャリッジリターン
¥t    タブ
¥¥    ¥文字
¥$    $文字
¥(    左括弧
¥)    右括弧
¥[    左括弧
¥]    右括弧
¥'    シングルクオーテーション
¥"    ダブルクオーテーション
¥nnn  8 進数表記
¥xnn  16 進数表記 */

?>
</p>




</body>
</html>

