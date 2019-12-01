<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vcard產生器</title>
    <style>
        body {
            font-family: "微軟正黑體";
        }

        .box {
            width: 400px;
            height: 400px;
            margin: auto;
            border: 3px solid black;
            padding: 10px;
            line-height: 30px;
        }
    </style>
</head>

<body>
    <div class="box">
        <form method="post" action="api.php" enctype="multipart/form-data">
            <h2 style="text-align:center">Vcard產生器</h2>
            <hr>
            姓名 : <input type="text" name="name" placeholder="Please in put your name" size="35" required="required" /><br>
            職稱 : <input type="text" name="position" placeholder="Please in put your position" size="35" required="required" /><br>
            技能 : <textarea style="vertical-align:middle" name="skill" placeholder="Please in put your skill" cols="35" rows="5"></textarea><br>
            E-mail : <input type="text" name="mail" size="35" placeholder="Please in put your E-mail" required="required" /><br>
            手機號碼 : <input type="text" name="mobile" size="35" placeholder=" Please in put your number" required="required" /><br>
            <hr>
            照片 : <input type="file" name="photo" /><br>
            版型 : <select name="module">
                <option value="module1">大地綠</option>
                <option value="module2">暗沉橘</option>
                <option value="module3">天空藍</option>
                <option value="module4">閃耀黃</option>
            </select><br>
            <input style="align:middle" type="submit" value="送出預覽" />
        </form>
    </div>
</body>

</html>