<?php
    // データベース接続
    $dbh = new PDO(
        // ホスト名、ポート番号、データベース名
        'pgsql:host=localhost port=5432 dbname=mvcdb',
        'mvcuser',  // DBユーザー名
        'mvcuser',  // パスワード
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );

    // SQLを実行
    $sth = $dbh->query(
        'SELECT id, name, age '
          .'FROM person '
          .'ORDER BY id'
    );

    // 結果を2次元配列に格納
    $rows = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Index</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <a href="02_insert_test.html">登録画面へ</a><br><br>
            
            <?php if(!$rows): ?>
                <div>データがが見つかりませんでした。</div>

            <?php else: ?>
                <table class="table w-50">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>名前</th>
                            <th>年齢</th>
                        <tr>
                    </thead>
                    <tbody>
                    <?php foreach($rows as $r): ?>
                        <tr>
                            <td><?php echo htmlspecialchars( $r['id'] ); ?></td>
                            <td><?php echo htmlspecialchars( $r['name'] ); ?></td>
                            <td><?php echo htmlspecialchars( $r['age'] ); ?></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>

            <?php endif; ?>
        </div>
    </body>
</html>