<?php
    require '../bootstrap.php';     // require는 실행이 된다는 뜻
    require  '../BlogApp.php';

    $app = new BlogApp(false);
    // error출력 여부 (true-표시, false-미표시)
    $app->run();

?>
