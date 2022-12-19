<?php
    $mode=$_GET["size"];
    if (!$size){
        echo "선택없음";
    }
    else{
        echo $mode;
    }
?>

<ul>
    <li><a href="default.php">오리지널</a></li>
    <li><a href="default.php?mode=1">모드1</a></li>
    <li><a href="default.php?mode=2">모드2</a></li>
</ul>
