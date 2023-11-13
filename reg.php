<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>會員註冊</title>
</head>

<body>
    <div id="app">
        <h2>會員註冊</h2>
        <form action="./add_user.php" method="post">
            <div class="input-group">
                <label class="col-4 input-group-text">帳號:</label>
                <input class="form-control" type="acc" name="acc" id="acc">
            </div>
            <div class="input-group">
                <label class="col-4 input-group-text">密碼:</label>
                <input class="form-control" type="password" name="pw" id="pw">
            </div>
            <div class="input-group">
                <label class="col-4 input-group-text">姓名:</label>
                <input class="form-control" type="name" name="name" id="name">
            </div>
            <div class="input-group">
                <label class="col-4 input-group-text">信箱:</label>
                <input class="form-control" type="text" name="email" id="email">
            </div>
            <div class="input-group">
                <label class="col-4 input-group-text">居住地:</label>
                <input class="form-control" type="text" name="address" id="address">
            </div>
            <div class="input-group">
                <input class="col-4 input-group-text" type="submit" value="送出">
                <input class="form-control" type="reset" value="重置">
            </div>
        </classm>
    </div>

</body>

</html>