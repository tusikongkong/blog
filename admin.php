<?php

if (empty($_COOKIE["username"])){
      header('Location: login.html');
}else{
    echo '您已登录成功,您的用户名是：' .$_COOKIE['username'] ;die;
?>




<!DOCTYPE html>
<html>
<head>  
    <link rel="icon" href="load.png" type="image/x-icon"/>
    <title>Load</title> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="https://cdn.staticfile.org/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdn.staticfile.org/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
    .form-control {
        height: 50px;
        width:350px;
        position: relative;
        margin: auto;

    }  

    </style>
</head>
<body style="background-color:rgb(245,245,245);
text-align: center;margin-top:40px">

<div class="container outer">
    <img src="top.png"><br>
    <label style="font-size:200%">Floating labels</label><br>
    <label style="font-size: 120%;font-weight: 100;width: 350px;">
        Build form controls with floating labels via the 
        <label style="color:pink">:placeholder-shown </label>pseudo-element. 
        <a href="#">Works in latest Chrome, Safari, and Firefox.</a></label><br>
    <!-- <div class="input-group input-group-lg"> -->
    <input type="text" class="form-control input-group-lg " id="nickname" placeholder="Username" style="margin-top: 20px;" ><br>
    <input type="password" class="form-control input-group-lg" id="password" placeholder="Password" value=''> <br>
    <label id="notice"></label><br>
    <label style="font-weight: 100;margin-top: 10px;
    width: 350px;margin-left: -245px;">
        <input type="checkbox">Remember me
    </label><br>
    <button class="btn-lg btn-primary" style="background-color:rgb(0,123,255);
    color:white;border-color: #007bff;width: 350px;margin-top: 20px;"
    >Sign in</button><br>
    <label style="margin-top: 40px;font-weight: 100;margin-bottom:50px;">
        <span class="glyphicon glyphicon-pencil"></span>
        2017-2020
    </label>
    <!-- </div> -->

    
</div>

<script>
    // nickname=$('#nickname').val();
    $('.btn-lg').click(function(){
        $.post(
        'login.php',
        {name:$('#nickname').val(),
         pass:$('#password').val()},
        
        function(data){
            
            // console.log(data);
            if(data==0){
                $('#notice').html('用户名不存在或密码错误');
                $('#notice').css('color','red');

            }else{
                
                $('#notice').html('登陆成功！');
                $('#notice').css('color','green');
            }
        }
    )

    })

    
    

</script>

</body>
</html>

<?php }?>