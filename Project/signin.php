<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         h6{
        text-align: end;
    }
    h1{
        text-align: center;
    }
    h3{
        text-align: center;
    }
    div{
        text-align: center;
    }
    button{
        background-color: rgb(238, 30, 30);
        border-color: rgb(164, 42, 42);
        border-radius: 15%;
    }
    button:hover{
        background-color: aliceblue;
    }
    a{
        text-decoration: none;
    }
    </style>
</head>
<body>
    <h6><img src="backgrawond.png.jpg"width="100"></h6>
    <h1>متجر سيارتي</h1>
    <h3>لتأجير السيارات</h3>
    <div style="background-color: red;">
        <h1 style="text-align: center;">sign in</h1>
    </div>
    <div  style="background-color: red;">
        <form action="" method="POST"> 
                <li>Email
                    <br>
                    <br>
                    <input type="email" name="email">
                    <br>
                    <br>
                    <li>phone number
                        <br>
                        <br>
                        <input type="number" name="pnumber">
                    <br>
                    <br>
                    <li>user name
                        <br>
                        <br>
                        <input type="text" name="user">
                    <br>
                    <br>
                    <li>password
                        <br>
                        <br>
                        <input type="password" name="pass">
                        <br>
                        <br>
                        <li>are you an admin ?
                        <br>
                        <br>
                        <input type="checkbox" name="admin">
                        <br>
                        <br>
                        <button><input type ="submit" name="sub" value="sign in"></button>
                    </form>
                    <br>
                    <br>
            <?php
//هذا الجزء يتحقق مما إذا كان النموذج قد تم إرساله عبر الطريقة POST
                if(isset($_POST['sub'])){
//يستخرج اسم المستخدم الذي تم إدخاله في النموذج ويخزنه في متغير $user   
                $user = $_POST['user'];
//يأخذ كلمة المرور التي تم إدخالها في النموذج ويقوم بتشفيرها  
                $pass = sha1($_POST['pass']);
//يستخرج البريد الإلكتروني الذي تم إدخاله في النموذج ويخزنه في متغير $email
                $email = $_POST['email'];
                $admin = isset($_POST['admin'])?1:0;
//اتصال بقاعدة البيانات 
                $link = mysqli_connect('localhost','root','','my_db') OR
                        die('لا يمكن الاتصال بقاعدة البيانات');
//يقوم باعداد استعلام اس كيو ال لاسترجاع البيانات من جدول المستخدمين حيث يكون اسم المستخدم مساويا للقيمة التي تم تقديمها في النموذج
                $sql = "SELECT * FROM users WHERE username='$user';";
//يقوم بتنفيذ الاستعلام على قاعدة البيانات ويخزن النتيجة في متغير ريسولت اذا فشل التنفيذ سيتم عرض رسالة خطأ 
                $result = mysqli_query($link, $sql) OR 
                        die('لا يمكن تنفيذ الاستعلام');
//يتحقق إذا كان هناك أي نتائج رجعها الاستعلام ذا كان هناك مستخدم بنفس الاسم المستخدم في قاعدة البيانات فأنه يعرض رسالة تفيد بأن المستخدم موجود 
               if(mysqli_num_rows($result)>0){
                    echo "<h3 style='color:pink';>اسم المستخدم موجود مسبقا</h3>";
                    mysqli_close($link);                    
                }else{
//في حالة عدم وجود اسم مستخدم مكرر يقوم الكود بأستعلام اس كيو ال لادراج سجل جديد في جدول المستخدمين 
                    $sql = "INSERT INTO users ( username, password, email, admin)"
                        . " VALUES ('$user', '$pass', '$email', '$admin')";
//يقوم بتنفيذ استعلام الإدراج وفي حالة فشل التنفيذ سيتم عرض رسالة خطأ
                    $result = mysqli_query($link, $sql) OR 
                            die('لا يمكن إضافة المستخدم');
                    mysqli_close($link);
// في حالة نجاح عملية الإدراج يتم توجيه المستخدم إلى صفحة الصفحة الرئيسية
                    header("Location:home_page.php");
                }
                }
               ?>     
                    <a name="close" style="color: black;" href="index.php">close</a>
                </li>    
                </li>
                </li>
            </li>  
        </li>
    </div>
</body>
</html>