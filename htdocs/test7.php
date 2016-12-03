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
 作成日 2016/12/03
 作成者 Dis
 開発環境 PHP5.x
 参考：http://www.phpbook.jp/tutorial/
 */

    $message = "Hello Eclipse World!";
    echo "<h1>$message</h1>";
?>

</p>

<p>PHPのClassのテストです。</p>

<p>
<?php
$tv = new Television();
$tv->channelNo = 8;
$tv->dispChannel();

class Television{
  public $channelNo;

  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }
}

?>
</p>

<?php

$tv2 = new Television2();
$tv2->setChannel(5);
/*引数があるメンバメソッド*/
class Television2{
  public $channelNo;

  function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }

  function setChannel($channel){
    $this->channelNo = $channel;
    $this->dispChannel();
  }
}
?>
<P>
<?php
/*アクセス修飾子*/
$tv3 = new Television3();
$tv3->setChannel(5);

class Television3{
  private $channelNo;

  private function dispChannel(){
    print('現在のチャンネルは'.$this->channelNo);
  }

  public function setChannel($channel){
    $this->channelNo = $channel;
    $this->dispChannel();
  }
}
?>
</P>

</body>
</html>