<?php
//هذا الكود يقوم بإنهاء جلسة المستخدم الحالية ثم يوجه المستخدم الى صفحة تسجيل الدخول 
session_start();
session_destroy();
header("Location:index.php");
