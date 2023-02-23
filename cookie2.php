<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<title>Thông tin chi tiết của khách hàng</title>
<link rel="stylesheet" href="cookie2.css">
</head>
<style>
    .tieude{
    color:black;
    background-color: #C0C0C0;
    width: 100%;
    text-align: center;
    margin: auto;
    font-size: 24px;
    font-weight: bold;
}
.echo{
    color:red;
    display: absolute;
    width: 320px;
    float: right;
    padding-top:50px;
    margin-right: 20%;
    font-size: 20px;
    font-weight: bold;
}
.image1{
    display: absolute;
    margin-top:3%;
    margin-left:15%;
    width: 30%;
   
}
.image2 {
    margin-top:3%;
    margin-left:15%;
    width:70%;
    height: 70%;
   
}     
</style>
<body>
    <div class="tieude">  
        Kết quả sau khi nhấn <a  href="#"> click here! </a> của trang trước.
    </div>
    <?php 
        echo '<div class="echo">Xin chào '. $_COOKIE["khach_hang"].'<br>';
        echo '<a href="cookie1.php"> Hãy bấm ở đây để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="image1" src="https://i.pinimg.com/236x/99/7f/b4/997fb48ff7b904c5b96f16eb3ecf61d1.jpg">';
        echo '<img class="image2" src="https://i.pinimg.com/236x/53/18/a3/5318a36c98a83cd55b19998590dbe9b5.jpg">';
    ?>
</body>
</html>