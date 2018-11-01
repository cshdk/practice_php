<?php


  function write_review() {
    post = array();

  }



  function read_review(){
    echo "こんにちは２"
  }








$posts = array();

while (true) {
  echo "これは映画ランキングアプリです",PHP_EOL;
  echo "番号を選択してください",PHP_EOL;
  echo "[0]レビューを書き込む",PHP_EOL;
  echo "[1]レビューを読む",PHP_EOL;
  echo "[2]アプリを終了させる",PHP_EOL;

  $input = intval(trim(fgets(STDIN)));
  echo "入力された番号は{$input}です",PHP_EOL;


  if ($input === 0){
    echo "{$input}番です",PHP_EOL;
　　      write_review();
  }elseif ($input === 1) {
    echo "{$input}番です",PHP_EOL;
    read_review();
  }elseif ($input === 2){
     echo "{$input}番です",PHP_EOL;
     exit;
  }else{
     echo "{$input}番は無効な値です",PHP_EOL;
  }

}



?>

