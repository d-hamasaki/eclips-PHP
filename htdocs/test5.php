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

<p>PHPの配列のテストです。</p>

<p>
<?php
$result[0] = 85;
$result[1] = 92;
$result[2] = 68;

for ($i = 0; $i < 3; $i++){
  print $result[$i].'<br />';
}
?>
</p>


<pre>
<?php
$result[0] = 85;
$result[1] = 92;
$result[2] = 68;

print_r($result);
?>
</pre>

<pre>
<?php
$key = 'peach';
$var["price_$key"] = 120;

define("ORANGE", 'price_orange');
$var[ORANGE] = 86;

print_r($var);
?>
</pre>


<pre>
<?php
for ($i = 10; $i < 13; $i++){
  $var[] = $i * 100 ;
}
print_r($var);
?>
</pre>

<pre>
<?php
$var = array('Yamada' => 82,
             'Endou' => 76,
             'Takahashi' => 64);

$var['Yoshida'] = 91;
print_r($var);
?>
</pre>

<pre>
<?php
$maker = array('富士通', 'NEC', 'Sony', 'Sharp');
$type = array('Note', 'Desktop');
$pc = array($maker, $type);

print_r($pc);

print '$pc[0][0] = '.$pc[0][0].'<br />';
print '$pc[0][1] = '.$pc[0][1].'<br />';
print '$pc[0][2] = '.$pc[0][2].'<br />';
print '$pc[0][3] = '.$pc[0][3].'<br />';
print '$pc[1][0] = '.$pc[1][0].'<br />';
print '$pc[1][1] = '.$pc[1][1];
?>
</pre>


</body>
</html>
