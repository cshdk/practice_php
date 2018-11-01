<?php


  function write_review($a_posts) {
    $post = array();
    echo "映画のタイトルを入力してください",PHP_EOL;
    $post['title'] = trim(fgets(STDIN));
    echo "映画のジャンルを入力してください",PHP_EOL;
    $post['genre'] = trim(fgets(STDIN));
    echo "映画の感想を入力してください",PHP_EOL;
    $post['review'] = trim(fgets(STDIN));

    echo $post['title'];
    $a_posts[] = $post;



    return $a_posts;
  }



  function read_review($show_posts){
   $count = 0;
   $line = "-------------------------";
   echo "見たいレビュー番号を選択してください";
    foreach ($show_posts as $post) {
      echo "{$count}：{$post['title']}のレビュー",PHP_EOL;
      $count += 1;
    }

    $input = intval(trim(fgets(STDIN)));
    $post = $show_posts[$input];
    echo $line,PHP_EOL;
    echo "タイトルは{$post['title']}です",PHP_EOL;
    echo "ジャンルは{$post['genre']}です",PHP_EOL;
    echo "感想は{$post['review']}です",PHP_EOL;
    echo $line,PHP_EOL;
  }




 $posts = array();

while (true) {
  echo "これは映画ランキングアプリです",PHP_EOL;
  echo "番号を選択してください",PHP_EOL;
  echo "[0]レビューを書き込む",PHP_EOL;
  echo "[1]レビューを読む",PHP_EOL;
  echo "[2]アプリを終了させる",PHP_EOL;

  $input = intval(trim(fgets(STDIN)));

  if ($input === 0) {
     $posts = write_review($posts);
  } elseif ($input === 1) {
      read_review($posts);
  } elseif ($input === 2) {
     exit;
  } else {
     echo "{$input}番は無効な値です",PHP_EOL;
  }

}



?>

