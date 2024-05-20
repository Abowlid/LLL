<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
    //اتصال بقاعدة البيانات
        $link = mysqli_connect('localhost','root','') OR die("لا يمكن الاتصال بخادم قاعدة البيانات");
            echo "<h3>تم الاتصال بخادم قاعدة البيانات</h3>";
// انشاء قاعدة البيانات
            mysqli_query($link,"CREATE DATABASE my_db;")OR die("لا يمكن إنشاء قاعدة البيانات");
            echo "<h3>تم إنشاء قاعدة البيانات</h3>";
                  mysqli_select_db($link,'my_db');
//انشاء جدول بأسم يوزر لانشاء مستخدم
            $sql = "CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT ,"
                    . " username VARCHAR(30) NOT NULL ,"
                    . " password VARCHAR(40) NOT NULL ,"
                    . " email VARCHAR(30) NOT NULL ,"
                    . " admin BOOLEAN NOT NULL ,"
                    . " PRIMARY KEY (id), UNIQUE (username));";
            mysqli_query($link,$sql) OR die('لا يمكن إنشاء الجدول');
            echo "<h3>تم إنشاء الجدول</h3>";
//تشفير الباسورد
            $pass = sha1('123');
//كود اس كيو ال لانشاء يوزر المدير
            $sql="INSERT INTO users (id, username, password, email, admin)"
                    . " VALUES ('1', 'admin', '$pass', 'admin@gmail.com', '1')";
            mysqli_query($link,$sql) OR die('لا يمكن إنشاء المستخدم');
            echo "<h3>تم إنشاء المستخدم</h3>";
//انشاء جدول بأسم سيارات لانشاء سيارات للتأجير
            $sqll = "CREATE TABLE cars (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,"
                    ."kind VARCHAR(30) NOT NULL,"
                    ."model VARCHAR(30) NOT NULL,"
                    ."price_per_day DECIMAL(10, 2) NOT NULL,"
                    ."color VARCHAR(20),"
                    ."year INT(4) NOT NULL);";
            mysqli_query($link,$sqll) OR die('لا يمكن إنشاء الجدول');
            echo "<h3>تم إنشاء الجدول</h3>";
//مصفوفة لاضافة اكثر من سيارة واحدة في قاعدة البيانات
            $data = array(
                    array('1', 'SONATA', 'HYUNDAI', '120', 'WHITE', '2017'),
                    array('2', 'CAMRY', 'TOYOTA', '180', 'BLACK', '2020'),
                    array('3', 'ELANTRA', 'HYUNDAI', '130', 'GRAY', '2023'),
                    array('4', 'HONDA ACCORD', 'HONDAYA', '70', 'BLACK', '2012'),
                    array('5', 'ATTRAGE', 'MITSUBISHI', '60', 'GRAY', '2020'),
                    array('6', 'CERATO', 'KIA', '90', 'WHITE', '2016'),);
            foreach ($data as $row) {
                    $id = $row[0];
                    $kind = $row[1];
                    $model = $row[2];
                    $price_per_day = $row[3];
                    $color = $row[4];
                    $year = $row[5];
                    $sqll = "INSERT INTO cars (id, kind, model, price_per_day, color, year)"."values ('$id', '$kind', '$model', '$price_per_day', '$color', '$year')";
                    if ($link->query($sqll) === TRUE) {
             echo "New record inserted successfully<br>";
                 } else {
             echo "Error: " . $sqll . "<br>" . $$link->error;
                }
            }
                  mysqli_close($link);
        ?>
    </body>
</html>
