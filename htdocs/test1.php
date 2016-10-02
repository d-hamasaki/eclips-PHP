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

<p>PHPの数値と四則演算のテストです。</p>


<p>
<?php
print 18;
print '<br />';
echo -3.14E-2;
print '<br />';
echo 3.14E-2;
print '<br />';
echo 0.0314;
?>
</p>

<p>
<?php
echo "8 + 3 = ", 8 + 3, '<br />';
echo "6 - 2 = ", 6 - 2, '<br />';
echo "4 * 7 = ", 4 * 7, '<br />';
echo "12 / 4 = ", 12 / 4, '<br />';
echo "5 % 3 = ", 5 % 3;
?>
</p>

<p>
<?php
echo "5 + 3 * 4 = ", 5 + 3 * 4, '<br />';
echo "(5 + 3) * 4 = ", (5 + 3) * 4;
?>
</p>

<p>
<?php
/*
こういう機能いらんよな
*/
echo "5 + 2.4 = ", 5 + 2.4, '<br />';
echo "5 + '8year' = ", 5 + '8year', '<br />';
echo "5 + '東京' = ", 5 + '東京';
?>
</p>


</body>
</html>

