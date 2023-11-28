<?php include_once "./include/connect.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員中心</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <!-- include 可在php程式執行過程中來引入檔案 -->
    <!-- navbar -->
    <?php include "./include/header.php"; ?>

    <!-- content -->
    <div class="container">
        <h1>使用者資料</h1>
        <?php
        if (isset($_SESSION['msg'])) {
            echo "<div class='alert alert-warning text-center col-6 m-auto'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
        }

        // $dsn="mysql:host=localhost;charset=utf8;dbname=member";
        // $pdo=new PDO($dsn,'root','');
        // $sql = "select * from users where `acc`='{$_SESSION['user']}'";
        // $user = $pdo->query($sql)->fetch();
        $user = find('users', ['acc' => "{$_SESSION['user']}"]);

        ?>
        <form action="./api/update.php" method="post" class="col-4 m-auto">
            <div class="input-group my-1">
                <label class="col-4 input-group-text">帳號:</label>
                <input class="form-control" type="acc" name="acc" id="acc" value="<?= $user['acc']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">密碼:</label>
                <input class="form-control" type="password" name="pw" id="pw" value="<?= $user['pw']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">姓名:</label>
                <input class="form-control" type="name" name="name" id="name" value="<?= $user['name']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">信箱:</label>
                <input class="form-control" type="text" name="email" id="email" value="<?= $user['email']; ?>">
            </div>
            <div class="input-group my-1">
                <label class="col-4 input-group-text">居住地:</label>
                <input class="form-control" type="text" name="address" id="address" value="<?= $user['address']; ?>">
            </div>
            <div>
                <input class="btn-primary mx-2" type="submit" value="更新">
                <input class="btn btn-warning mx-2" type="reset" value="重置">
                <input class="btn btn-danger mx-2" type="button" value="讓我消失吧" onclick="location.href='./api/del_user.php?id=<?= $user['id']; ?>'">
            </div>
        </form>
    </div>

    <!-- footer -->
    <?php include "./include/footer.php"; ?>
</body>

</html>