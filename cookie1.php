<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Thông tin khách hàng</title>
<link rel="stylesheet" href="cookies.css">
<style>
    #forml{
            padding-left: 400px;
            padding-top:30px;
            width: 400px;
    }
    .hienthi{
            background-color:Azure;
            width: 380px;
            height: 150px;
            margin-left: 400px;
            padding-top:20px;
            padding-left: 20px;
            padding-top: 20px;

    }
    .tinhtien{
        background: greenyellow ;
        position: relative;
        top:22px;
    }
    .tinhtienh1{
        font-family: 'Times New Roman', Times, serif;
    }
    .body{
        background: #FFFFCC;
        padding-left:20px  ;
        padding-bottom: 10px ;
        width: 500px;
    }
    .input{
        border-radius: 10px;
        height: 20px;
        left: 20px;
    }
    .bt1{
        border-radius:10px;
    }
</style>
</head>
<body>
    <?php 
        ini_set('display_errors',0);
        session_start();
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['add']) && !empty($_POST['phone']))
        {
            $inform =$_POST['name']. " - ". $_POST['mail']." - " .$_POST['add']." - ".$_POST['phone'];
            setcookie("khach_hang",$inform, time() +3600);
            $flag=1;
        }
    ?>

    <form id="forml" name="forml" method="post" action="cookie1.php">
        <table class = "body">
            <tr>
            <td><div class="tinhtien" ></td>
            <td><h1 class="tinhtienh1">Thông tin đăng nhập</h1></td>
        </div>
            </tr>
            <tr>
                <td>Họ và tên:</td>
                <td><input class="input"  type="text" name="name"value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>" ></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input class="input" type="text" name="mail" value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>"></td>
            </tr>
            <tr>
                <td>Số điện thoại:</td>
                <td><input class="input" type="text" name="phone" value="<?php if(isset($_POST['phone']))  echo $_POST['phone']; ?>"></td>
            </tr>
            <br>
            <tr>
                <td>  Địa chỉ:</td>
                <td><input class="input" type="text" name="add" value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>"></td>
            </tr>
            <tr>
            <td>    <button type="submit" class="bt1" >Submit</button></td>
            </tr>

        </table>
        
    </form>
     <br> <br>   
    <div >
        <?php 
            if ($flag==1) {
                echo "<div class='hienthi'>";
                echo "<p font-family: 'Times New Roman', Times, serif; >Thông tin chi tiết của khách hàng  </p></br>";
                echo $_COOKIE["khach_hang"]."<br>";
                echo "<a href='cookie2.php' >Click here! </a>";
                echo "</div>";
            }
        ?>
    </div>
</body>
</html>
</body>
</html>