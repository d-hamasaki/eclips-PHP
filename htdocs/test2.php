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

<p>PHPの変数のテストです。</p>

<p>
<?php
$name = '加藤';
print $name.'<br />';

$num = 20;
print $num * 9;
?>
</p>

<p>
<?php
//この場合、先のPHPの中で設定されている変数の値が出力されるスコープ範囲わからねーな
print $name.'さん<br />';
?>
</p>

<p>
<?php
$var = '高橋';
print '[値]'.$var.',';
print '[型]'.gettype($var).'<br />';

$var = 180;
print '[値]'.$var.',';
print '[型]'.gettype($var)
?>
</p>

<p>
<?php
$num1 = 320;
$num2 = $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num1 = 18;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2;
?>
</p>


<p>
<?php
$num1 = 320;
$num2 =& $num1;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num1 = 18;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2.'<br />';

$num2 = 75;

print '$num1 ='.$num1.'<br />';
print '$num2 ='.$num2;

print '<br />';
/*
 * Cのポインタみたいなものだけど、方は数値型にみえるのね。
 * これ、わかりづらくなるな
 * */
print '[値]'.$num1.',';
print '[型]'.gettype($num1);

print '<br />';

print '[値]'.$num2.',';
print '[型]'.gettype($num2)

?>
</p>


<p>
<?php
$num = 40;
print '$num = '.$num.'<br />';

$num += 25;
print '$num = '.$num.'<br />';

$str = '福岡';
print '$str = '.$str.'<br />';

$str .= '支店';
print '$str = '.$str;

print '<br />';

/*
 * ここではまだデファインされていないらしい。。。
 * */
print PAI;
?>
</p>

<p>
<?php
define("PAI", 3.14159);

print '<br />';

print PAI.'<br />';


$r = 7;
$menseki = PAI * $r * $r;
print '半径='.$r.'の面積は'.$menseki.'<br />';

$r = 14;
$menseki = PAI * $r * $r;
print '半径='.$r.'の面積は'.$menseki;
?>
</p>

</body>
</html>
