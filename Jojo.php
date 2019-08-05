<?php
// 親クラスを作成する
class StandUser{
    public $character_name; 
    public $stand_name;
    

// コンストラクタ
    public function __construct($character_name, $stand_name)
    {
        $this->character_name = $character_name;
        $this->stand_name= $stand_name;
        
    }

    // キャラ名を取得
    public function getName()
    {
        return $this->character_name;
    }    

    // スタンド名を取得
    public function getStandName()
    {
        return $this->stand_name;
    }
}

$dio = new StandUser('DIO', 'ザ・ワールド!!');
$jotaro = new StandUser('承太郎', 'スタープラチナ!!');
$kakyouin = new StandUser('花京院', 'ハイエロファントグリーン!!');

$dioName = $dio->getName();
$dioStand = $dio->getStandName();

$jotaroName = $jotaro->getName();
$jotaroStand = $jotaro->getStandName();

$kakyouinName = $kakyouin->getName();
$kakyouinStand = $kakyouin->getStandName();

echo $dioName.'のスタンド名は'.$dioStand.'です';
echo '<br>';
echo '<br>';
echo '<br>';

echo $jotaroName.'のスタンド名は'.$jotaroStand.'です';

echo '<br>';
echo '<br>';
echo '<br>';
echo $kakyouinName.'のスタンド名は'.$kakyouinStand.'です';

?>