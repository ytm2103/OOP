<?php
require_once('Jojo.php');

// 近距離パワー型クラス作成

class ShortDistance extends StandUser
{
  
  
  //オーバーライド
  //親クラスと同じメソッド名

  
  public function getStandType($c
  haracter_name, $stand_name)
  {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $character_name.'の'.$stand_name.'は、短距離パワー型スタンドです。';
  }
}

// 遠隔操作型クラス作成
class LongDistance extends StandUser
{
  
  //オーバーライド
  //親クラスと同じメソッド名

  
  public function getStandType($character_name, $stand_name)
  {
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo $character_name.'の'.$stand_name.'は、遠隔操作型スタンドです。';
  }
}





$dioStandType = new ShortDistance('DIO', 'ザ・ワールド!!');
$dioStandType->getStandType('DIO', 'ザ・ワールド!!');

echo '<br>';



$jotaroStandType = new ShortDistance('承太郎', 'スタープラチナ!!');
$jotaroStandType->getStandType('承太郎', 'スタープラチナ!!');

echo '<br>';

$kakyouinStandType = new LongDistance('花京院', 'ハイエロファントグリーン!!');
$kakyouinStandType->getStandType('花京院', 'ハイエロファントグリーン!!');
