

<?php
        session_start();
        require_once('config/config.php');
        // echo(222);
        $adminName=$_POST['adminName'];
          //var_dump($adminName); 
        $password=$_POST['password'];
          //print_r($password);
        
        $admin = 'admin'; 
        $pass = md5('123456'); 
         // var_dump($admin);
        if ($admin == $adminName && $pass == md5($password)) {
            $_SESSION['name'] = $admin;
            $_SESSION['pass'] = $pass;           
            file_put_contents('index1.php',$_SESSION['name']); // 函数把一个字符串写入文件中。
            header("Location:garage.php");
            
        }else if($admin!=$adminName&&$pass==md5($password)){
            header("Location:login.html");            
            echo "用户名错误!!!";
            // exit();
        }else if($admin==$adminName&&$pass!=md5($password)){
            header("Location:login.html");
            echo "密码错误!!!";
            // exit();
        }else{
            header("Location:login.html");
            echo "用户名和密码错误!!!";
            // exit();
        }   