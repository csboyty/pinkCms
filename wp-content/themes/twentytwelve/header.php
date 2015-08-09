<?php

$baseUrl= home_url()."/app/";
?>

<!DOCTYPE html>
<html>
<head>
    <meta content="webkit" name="renderer">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <meta name="keywords" content="石竹运动"/>
    <meta name="description" content="石竹运动">
    <meta name="baidu-site-verification" content="7174e8c2f50fc7c6397f9dfca9751246"/>
    <title><?php wp_title("|",true,"right"); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/main.css" type="text/css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/css/frontend/src/list.css" type="text/css" rel="stylesheet">
    <script>
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?22e5261c6e0e37d63c0d2ff590371e38";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>
</head>
<body>
<div class="container">
<div class="header">
    <h1 class="logo">
        <a href="<?php echo home_url(); ?>"><?php echo get_bloginfo("name"); ?></a>
    </h1>
    <?php wp_nav_menu(); ?>
    <ul class="menu1" id="loginMenu">
        <li><a href="<?php echo $baseUrl; ?>login">登录</a></li>
        <li><a href="<?php echo $baseUrl; ?>register">注册</a></li>
    </ul>
    <div class="userInfo hidden" id="userInfo">
        <div class="info">
            <img class="profile" id="profile" src="<?php echo get_template_directory_uri(); ?>/images/frontend/default/profile.png">
            <span class="name ellipsis" id="name">Cite Tang</span>
            <!--<span class="count" id="messageCount">3</span>-->
            <span class="arrow">下三角形</span>
        </div>
        <ul class="menu2" id="userMenu">
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/">个人主页</a></li>
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/edit-info">修改资料</a></li>
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/update-password">修改密码</a></li>
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/competitions">我的赛事</a></li>
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/sites">我的场地</a></li>
            <li><a href="<?php echo $baseUrl; ?>user/${userId}/me/messages">消息</a></li>
            <li><a href="<?php echo $baseUrl; ?>logout">退出</a></li>
        </ul>
    </div>
</div>