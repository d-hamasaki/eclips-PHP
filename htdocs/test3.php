<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title>サンプル</title>
</head>

<body>

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

<p>PHPの条件分岐のテストです。</p>

<p>
<?php
$old = 25;

if ($old >= 20){
  print '年齢は20歳以上です';
}
?>
</p>

<p>
<?php
/*
 FALSE
整数の0と浮動小数点数の0.0
空文字""
文字列の"0"
要素の数が0の配列
NULL
メンバ変数の数がゼロであるオブジェクト

上記以外はTrueが返却されるらしい。
 */

if (TRUE){
  print '条件式にTRUEが記述されているので常に実行されます';
}
?>
</p>

<p>
<?php
$var1 = 208;
if ($var1 == 208){
  print "変数の値は208と等しい<br />";
}

$var1 = 12;
$var2 = '12';
if ($var1 == $var2){
  print "12 == '12'はTRUEです<br />";
}

$var1 = 'Tokyo';
if ($var1 == 'Tokyo'){
  print "変数の値はTokyoと等しい";
}
?>
</p>

<p>
<?php
$var1 = 208;
if ($var1 === 208){
  print "変数の値は208と同一です<br />";
}

$var1 = 12;
$var2 = '12';
if ($var1 === $var2){
  print "12 === '12'はTRUEです<br />";
}else{
  print "12 === '12'はFALSEです<br />";
}

$var1 = 'Tokyo';
if ($var1 === 'Tokyo'){
  print "変数の値はTokyoと同一です";
}
?>
</p>


<p>
<?php
$var1 = 21;
if ($var1 < 30){
  print "変数の値は30より小さい<br />";
}

$var1 = 'Tokyo';
$var2 = 'Osaka';
//文字列の値の大小を比較した場合は先頭の文字から辞書順で比較します。
if ($var1 > $var2){
  print "TokyoはOsakaより大きい";
}else{
  print "TokyoはOsakaより小さい";
}
?>
</p>

<p>
<?php
$old = 18;

print '年齢:'.$old.'<br />';
if ($old >= 20){
  print '年齢は20才以上です<br />';
}else{
  print '年齢は20才未満です<br />';
}

$old = 45;

print '年齢:'.$old.'<br />';
if ($old >= 20){
  print '年齢は20才以上です';
}else{
  print '年齢は20才未満です';
}
?>
</p>

<p>
<?php
$domain = 'jp';

print 'ドメイン:'.$domain.'<br />';
if ($domain == 'in'){
  print 'インドのトップレベルドメイン';
}elseif ($domain == 'cn'){
  print '中国のトップレベルドメイン';
}elseif ($domain == 'jp'){
  print '日本のトップレベルドメイン';
}else{
  print '不明です';
}
?>
</p>

<p>
<?php
$domain = 'cn';

print 'ドメイン:'.$domain.'<br />';

//breakの省略はやらない方がいい。

switch ($domain){
case 'in':
  print 'インドのトップレベルドメイン';
  break;
case 'cn':
  print '中国のトップレベルドメイン';
  break;
case 'jp':
  print '日本のトップレベルドメイン';
  break;
default:
  print '不明です';
}
?>
</p>

<p>
<?php
$lang = 'En';

$msg = $lang == 'Jp'  ? 'こんにちは' : 'Hello';
print $msg.'<br />';

$lang = 'Jp';

print $lang == 'Jp'  ? 'こんにちは' : 'Hello';
?>
</p>


</body>
</html>