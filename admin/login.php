
<?php
       session_start();
        $adminName=$_POST['adminName'];
       
        $password=$_POST['password'];       
        $password1=md5($password);
        // print_r($password1);
        
        $admin='admin';
        $pass=md5('123');
        // print_r($pass.'<br>');
        // print_r($password1);
       
        if ( ($admin == $adminName) && ($pass == $password1) ) {
            $_SESSION['adminName']=$admin;
            $_SESSION['password']=$pass;
            print_r($_SESSION['adminName'].'<br>');
            print_r($_SESSION['password']);
            file_put_contents('index1.php',$_SESSION['name']);// 函数把一个字符串写入文件中。
            header("Location:../car/garage.php");
            
        }else if($admin!=$adminName && $pass==md5($password)){
            header("Location:index.html");            
            echo "用户名错误!!!";
            // exit();
        }else if($admin==$adminName && $pass!=md5($password)){
            header("Location:index.html");
            echo "密码错误!!!";
            // exit();
        }else{
            header("Location:index.html");
            echo "用户名和密码错误!!!";
            // exit();
        }