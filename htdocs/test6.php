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

<p>PHPの関数のテストです。</p>

<p>
<?php
function check($kamoku, $tensuu){
  print $kamoku.'の結果:';
  if ($tensuu > 75){
    print '合格です';
  }else{
    print '不合格です';
  }
  print '(点数:'.$tensuu.')';
  print '<br />';
}

$sugaku = 84;
$eigo = 62;
$kokugo = 78;

check('数学', $sugaku);
check('英語', $eigo);
check('国語', $kokugo);
?>
</p>

<p>
<?php
function test(){
  print '関数内に処理が移りました<br />';
  print 'GHI<br />';
  print '関数内の処理が終了します<br />';
}

print 'ABC<br />';
print 'DEF<br />';

test();

print 'JKL<br />';
print 'MNO<br />';
?>
</p>

<p>
<?php
function heikin($num1, $num2){
  $result = ($num1 + $num2) / 2;
  print $num1.'と'.$num2.'の平均は'.$result.'です<br />';
}

heikin(10, 8);
heikin(3, 23);
?>
</p>

<p>
<?php
function plus($num1, $num2){
  $sum = $num1 + $num2;
  return $sum;
}

$sum = plus(10, 8);
print '10 + 8の結果は'.$sum.'です<br />';

print '7 + 14の結果は'.plus(7, 14).'です';
?>
</p>


</body>
</html>