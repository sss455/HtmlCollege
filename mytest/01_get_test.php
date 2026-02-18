<?php
    $name = $_GET['name'];
    $age  = $_GET['age'];

    echo "名前：". $name . "<br>";
    echo "年齢：". $age  . "<br>";


/*
    echo "<br><br>";
    echo "テキストエリア　：". $_GET['txt_area'] . "<br>";
    echo "ラジオボタン　　：". $_GET['rdo_servant'] . "<br>";
    echo "チェックボックス：". implode("、", $_GET['chk_servant']). "<br>";
    echo "ドロップダウン　：". $_GET['select_servant'] . "<br>";
    echo "複数選択メニュー：". $_GET['multi_menu'];
*/