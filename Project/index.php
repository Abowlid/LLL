<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <style>
    
    button:hover{
        background-color: aliceblue;
    }
    h6{
        text-align: end;
    }
    h1{text-align: center;}
    h3{
        text-align: center;
    }
    div{
        text-align: center;
    }
    a:hover{
        text-decoration: none;
    }
    body{
        transition: 0.3;
    }
    nav{
        width: 80%;
        min-width: 600px;
        height: 10vh;
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: auto;
    }
    nav a{
        position: relative;
        text-decoration: none;
        font-size: 15px;
        font-family: sans-serif;
        text-transform: capitalize;
        transition: 0.3s;
        padding: 0 10px;
    }
    a::before{
        content: '';
        position: absolute;
        width: 0%;
        right: 0;
        height: 3px;
        background-color:rgb(245, 241, 241);
        bottom:-7px;
        transition: 0.3s;
        
    }
    a:hover{
        color:gray;
        background-color:aliceblue;
    }
    a{
        color: black;
    }
    </style>
</head>
<body>
    
    <h6><img src="backgrawond.png.jpg"width="100"></h6>
    
    <h1>متجر سيارتي</h1>
    <h3>لتأجير السيارات</h3>
    <div style="background-color: red;">
        <h1 style="text-align: center;">login</h1>
    </div>
    <div style="background-color: red;">
        
        <form action="" method="POST">
        <li>user name
            <br>
            <br>
            <input style="border-radius: 15%;" type="text" name="user">
            <br>
            <br>
            <li>password
                <br>
                <br>
                <input style="border-radius: 15%;" type="password" name="pass">
            <br>
            <br>
            <input type="submit" name="sub" value="log in">
            </form>
<!--كود بي اتش بي عبارة عن اتصال بقاعدة البيانات وتسجيل الدخول-->
        <?php
 //هذا الجزء يتحقق مما إذا كان النموذج قد تم إرساله عبر الطريقة POST
        if(isset($_POST['sub'])){
//يستخرج اسم المستخدم الذي تم إدخاله في النموذج ويخزنه في متغير $user
                $user = $_POST['user'];
//يأخذ كلمة المرور التي تم إدخالها في النموذج ويقوم بتشفيرها
                $pass = sha1($_POST['pass']);
//يقوم بالاتصال بقاعدة البيانات
                $link = mysqli_connect('localhost','root','','my_db') OR
                        die('لا يمكن الاتصال بقاعدة البيانات');
//يقوم باعداد استعلام اس كيو ال لاسترجاع البيانات من جدول المستخدمين حيث يكون اسم المستخدم مساويا للقيمة التي تم تقديمها في النموذج 
                $sql = "SELECT * FROM users WHERE username='$user' AND password='$pass';";
//يقوم بتنفيذ الاستعلام على قاعدة البيانات ويخزن النتيجة في متغير ريسولت اذا فشل التنفيذ سيتم عرض رسالة خطأ
                $result = mysqli_query($link, $sql) OR 
                        die('لا يمكن تنفيذ الاستعلام');
//يقوم بإغلاق اتصال قاعدة البيانات بعد الانتهاء من العمليات 
                mysqli_close($link);
//يتحقق إذا كان هناك نتيجة للاستعلام أي أن هناك مستخدم بالاسم وكلمة المرور المقدمين
                if(mysqli_num_rows($result) > 0){ 
                    session_start();
// يقوم بجلب البيانات المسترجعة من قاعدة البيانات وتخزينها في متغير
                    $row = mysqli_fetch_assoc($result);
// يخزن اسم المستخدم في متغير الجلسة
                    $_SESSION['username'] = $user;
//يخزن حالة الصلاحيات مسؤول أم لا في متغير الجلسة 
                    $_SESSION['admin'] = $row['admin'];
// في حالة نجاح تحقق اسم المستخدم وكلمة المرور يتم توجيه المستخدم الى صفحة الرئيسية
                    header("Location:home_page.php");
                }else{
                    echo "<h3 style='color:black';>اسم المستخدم أو كلمة المرور خاطئة</h3>";
                }
            }   
        ?> 
            <p>Did you forget the <a style="color: black;" href="password.php">password</a></p>
            <p>you don't have an account,<a style="color: black;" href="signin.php">register new</a></p>
        </li>
        </li>
    </div> 
</body>
</html>