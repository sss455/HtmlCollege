<?php
    // データベース接続
    $dbh = new PDO(
        // ホスト名、ポート番号、データベース名
        'pgsql:host=localhost port=5432 dbname=mvcdb',
        'mvcuser',  // DBユーザー名
        'mvcpass',  // パスワード
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // SQL定義
    $sth = $dbh->prepare(
        'INSERT INTO person (name, age) VALUES (:name, :age)'
    );

    // POSTパラメータを渡して、INSERT文を実行
    $ret = $sth->execute([
        'name' => $_POST['name'],
        'age'  => $_POST['age']
    ]);

    // 元画面へリダイレクト
    header('Location: http://localhost:8080/03_insert_test.html');