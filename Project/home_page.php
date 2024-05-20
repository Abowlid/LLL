<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <style>
        h6{
        text-align: end;
        font-size: 20px;
        font-family: sans-serif;
    }
    h5{
       text-align: center; 
       color:red;
    }
    h1{text-align: center;}
    h3{
        text-align: center;
    }
    ul:hover{
        background-color: gray;
    }
    a{
        text-decoration: none;
        color: black;
    }
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;

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
        font-size: 30px;
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
        background-color:red;
        bottom:-7px;
        transition: 0.3s;
    }
    a:hover{
        color:gray;
        background-color:aliceblue;
    }
    a:hover::before{
        width: 100%;
    }
    .trs{
        opacity: 0.5;
    }
    .image{
        position: relative;
        text-align: center;
        color:aliceblue;
        
    }
    .text{
        position: absolute;
        top: 65%;
        left: 50%;
        transform: translate(-50%,-50%);
        font-size: 100%;
        font-family: Arial, sans-serif;
        text-align: center;
    }
    button{
        background-color: red;
        color: whitesmoke;
        width: 30%;
    }
    .buttover{
        background-color: grey;

    }
    table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: right;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: gray;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <nav>
    <a href="home_page2.php">الاسئلة المتكررة</a>
    <a href="our_service.php">خدماتنا</a>
    <a href="home_page.php">الرئيسية</a>
    
</nav>
<h6><img src="backgrawond.png.jpg"width="100"></h6>
<h1>متجر سيارتي</h1>
<h3>لتأجير السيارات</h3>

<div class="image">
    <h5 style="text-align: center;"><img src="AAS.avif" width="100%" class="trs"></h5>
</div>

         <section class="cars">
             <center>
                 <div class="text">
        <div class="car-list">
            <?php
//اتصال بقاعدة البيانات
           $link = mysqli_connect('localhost','root','','my_db') or die("فشل الاتصال بقاعدة البيانات");
            $sqll = "SELECT * FROM cars;";
            $result = mysqli_query($link, $sqll)or die("لا يمكن تنفيذ الاستعلام");
//انشاء تايبل لوضع بيانات السيارات داخلها
            if ($result->num_rows > 0) {
                echo "<table>";
                echo "<tr><th>Car Name</th><th>Model</th><th>Price Per Day</th><th>Car Color</th><th>Year</th>></tr>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row['kind']."</td>\n"."<td>".$row['model']."</td>\n"."<td>".$row['price_per_day']."</td>\n"."<td>".$row['color']."</td>\n"."<td>".$row['year']."</td>\n";
                }
                echo "</tr>";          
            } 
            else {
                echo "No cars available.";
            }
            echo "</td>";
             echo "</table>";
//للتسجيل الخروج من الصفحة والرجوع لصفحة التسجيل
             echo '<h5><a href="signout.php">تسجيل خروج</a></h5>';
            ?>
            <h6>CarRental@gmail.com ايميل لايجار السيارة</h6>
            <h6>رقم الاتصال لايجارالسيارة 0555555555</h6>
            </div>
            </div>         
            </center>
        </div>
    </section>
    </body>
    </html>