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

<p>PHPの繰り返し処理のテストです。</p>

<p>
<?php
$num = 0;

while ($num < 3){
  print 'num = '.$num.'<br />';
  $num += 1;
}
?>
</p>

<p>
<?php
$i = 0;

while ($i < 3){
  $j = 0;

  while ($j < 3){
    print '(i, j)=('.$i.','.$j.')<br />';
    $j += 1;
  }
  $i += 1;
}
?>
</p>

<p>
<?php
$count = 1;
$sum = 0;

while ($count <= 100){
  $sum += $count;

  if ($sum > 1000){
    print '1000を越えたので count = '.$count.' で終了します<br />';
    //breakは階層指定で脱出も可能らしい
    break;
  }

  $count += 1;
}
print 'sum = '.$sum;
?>
</p>

<p>
<?php
$count1 = 0;
$sum = 0;

while ($count1 < 10){    // continueが実行された時に処理が移る位置
  $count1 += 1;

  $count2 = 0;
  while ($count2 < 10){
    $count2 += 1;
    if ($count1 * $count2 > 30){
    //continueについても階層指定可能
      continue 2;
    }

    $sum += $count1 * $count2;
  }
}
print 'sum = '.$sum;
?>
</p>

<p>
<?php
$num = 0;

do{
  print 'num = '.$num.'<br />';
  $num += 1;
}while ($num < 3);
?>
</p>

<p>
<?php
for ($num = 0; $num < 2; $num++){
  print 'num = '.$num.'<br />';
}
?>
</p>


<p>
<?php
//初期化式1, 初期化式2, ..; 条件式; 変化式1, 変化式2, ..
for ($i = 0, $j = 3; $i < 3; $i++, $j--){
  print 'i = '.$i.',j = '.$j.'<br />';
}
?>
</p>

<p>
<?php
$preflist = array('東京', '大阪', '名古屋');

//配列の要素を取り出すときに使う
foreach ($preflist as $pref){
  print $pref.'<br />';
}
?>
</p>

<p>
<?php
//配列の使い方がわからないと意味わからん
$preflist = array('Tokyo' => '東京', 'Osaka' => '大阪');

foreach ($preflist as $key => $value){
  print 'KEY='.$key.'<br />';
  print 'VALUE='.$value.'<br />';
  print $key.'=>'.$value.'<br />';
}
?>
</p>

<p>
<?php
$pricelist = array(80, 100, 120);

//pointerの設定
foreach ($pricelist as &$value){
  $value *= 1.05;
}
//初期化関数らしい。
unset($value);

//Valueの参照設定は解除したのはわかるけど、こっちのはなんで動作しないの？listがEOFのままってこと？
//ちがうなvalueが無効な変数になっているのか
foreach ($pricelist as $value){
  print 'VAKUE='.$value.'<br />';
}

foreach ($pricelist as $value２){
  print 'VAKUE2='.$value２.'<br />';
}
  ?>
</p>


</body>
</html>
