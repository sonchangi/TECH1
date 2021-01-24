<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>mission4-03</title>
    </head>
    <body>
        <?php
            echo "www<br>";
        	$dsn = 'データベース名';
        	$user = 'ユーザー名';
        	$password = 'ユーザー名パスワード';
        	$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
            
            echo "aaa<br>";
            
            $sql = "CREATE TABLE IF NOT EXISTS tbtest222(
        	id INT AUTO_INCREMENT PRIMARY KEY,
        	name char(32),
        	comment TEXT);";
        	$stmt = $pdo->query($sql);
        	
        	
        	$sql ='SHOW TABLES';
        	//SHOW TABLES [FROM データベース名] [LIKE 'パターン'];でテーブルを見る
        	//SHOW TABLESだけならすべてのファイルを見る
        	$result = $pdo -> query($sql);
        	//pdoで実行してるだけ
        	foreach ($result as $row){
        		echo $row[0];
        		echo '<br>';
        	}
        	echo "<hr>";
        	
        	echo "eee";
        ?>
    </body>
</html>