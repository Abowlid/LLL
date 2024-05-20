<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الاسئلة المتكررة</title>
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
        top: 43%;
        left: 50%;
        transform: translate(-50%,-50%);
        font-size: 100%;
        font-family: Arial, sans-serif;
        text-align: center;
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
    .our{
        position: absolute;
        top: 70%;
        left: 50%;
        transform: translate(-50%,-50%);
        font-size: 100%;
        font-family: Arial, sans-serif;
        
    }
    h4{
        text-align: end;
    }
    </style>
</head>
<body>
    <nav>
        <a href="home_page2.php">الاسئلة المتكررة</a>
        <a href="our_service.php">خدماتنا</a>
        <a href="home_page.php">الرئيسية</a> 
    </nav>
    <h6><img src="backgrawond.png.jpg" width="100"></h6>
    <h1>متجر سيارتي</h1>
    <h3>لتأجير السيارات</h3>
    <div>
        <h5 style="text-align: center;"><img src="AAS.avif" width="100%" class="trs"></h5>
        <div class="our">
            <h4>ما هي شروط تأجير السيارات؟</h4>
            <p style="text-align: end;">أن تكون لدية رخصة سير سارية المفعول - أن تكون شهادة الفحص الفني للسيارة سارية المفعول - أن تكون وثيقة التأمين على السيارة سارية المفعول</p>
            <h4>هل هناك شروط عمرية لتأجير السيارات؟</h4>
            <p style="text-align: end;">لاستئجار المركبات في المجموعةالاقتصادية يشترط عادةً أن يكون عمرك 21 عاماًعلى الأحل وأن يكون لديك رخصة قيادة لمدة عامين يمكن للأشخاص الذين يبلغون من العمر 20 عاماً و لديهم رخصة قيادة لمدة عام واحد إستئجار سيارة من المحموعة الاقتصادية عن طريق دفع رسوم السائق الشاب لاستئجار مركبات في المجموعة المتوسطة يشترط عادةً أن يكون عمرك 24 عاماً على الأقل و3 سنوات من رخصة القيادة يمكن للأسخاص الذين تتراوح أعمارهم بين 21 و 24 عاماً و لديهم رخصة قيادة لمدة عامين استئجار سيارة من المجموعة المتوسطة عن  طريق دفع رسوم السائق الشاب لاستئجار مركبات في المجموعة العليا يشترط عادة أن يكون عمرك 27 عاماً على الاقل وان يكون لديك رخصة قيادة لمدة 4 سنوات يمكن للأشخاص الذين تتراوح اعمارهم بين 24 و 27 عاماً و لديهم و لديهم رخصة قيادة لمدة 3 سنوات استئجار سيارة من المجموعة العليا عن طريق دفع رسوم السائق الشاب</p>
            <h4>ما هي سياسةالتأجير في إعادة السيارة؟</h4>
            <p>إذا تأخر في تسليم السيارة لمدة ساعة أو أقل من الموعد المحدد فيلتزم بدفع ضعف أجرة الساعة الموضحة في العقد إذا تأخر في تسليم السيارة لمدة تزيد عن ساعة ولا تتجاوز (24) ساعة من الموعد المحدد فيلتزم بدفع قيمة التأجير اليومي للسيارة كاملة الموضحة في العقد</p>
            <h4>هل يمكنني إعادة السيارة في موقع مختلف عن مكان التسليم؟</h4>
            <p>نعم سيتم فرض رسوم إعادة تحديد الموقع على الإجار في اتجاه واحد كرسوم توصيل سيتم توفير تفاصيل الرسوم في وقت الحجزأو إذا تمت إضافتها اثناء تسجيل المغادرة تطبيقها تلقائياً اثناء تسجيل الوصول</p>
        </div>
    </div>
</body>
</html>
