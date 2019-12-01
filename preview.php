<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vcard產生器-Preview</title>
    <link rel=stylesheet href="css/<?= $_SESSION['module'] ?>.css">
    <!--font-awsome  -->
    <link rel="stylesheet" href="css/all.min.css" />
</head>

<body>
    <div id="container">
        <div id="left">
            <div class="photo">
                <?php echo '<img src="photo/' . $_SESSION['pname'] . '"class="photo_cir">'; ?>
                <div class="name"><?= $_SESSION['name'] ?></div>
            </div>
        </div>
        <div id="right">
            <div class="title"><i class="fas fa-map-marker"></i> 職稱 Position</div>
            <div class="itr"><?= $_SESSION['position'] ?></div>
            <div class="title"><i class="fas fa-briefcase"></i> 技能 Skill</div>
            <div class="itr"><?= $_SESSION['skill'] ?></div>
            <div class="title"><i class="fas fa-envelope"></i> 電子信箱 E-mail</div>
            <div class="itr"><?= $_SESSION['mail'] ?></div>
            <div class="title"><i class="fas fa-mobile-alt"></i> 手機 Mobile</div>
            <div class="itr"><?= $_SESSION['mobile'] ?></div>

        </div>
    </div>
    <br>
    <button onclick="window.history.go(-1)" style="display:block; margin:20px auto">回頁面</button>
</body>

</html>