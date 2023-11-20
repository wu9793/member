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
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['user'])) {
                            echo "<li class='nav-item'>";
                            echo "<a href='logout.php' class='nav-link'>登出</a>";
                            echo "</li>";
                            echo "<li class='nav-item'>";
                            echo "<a href='member.php' class='nav-link'>會員中心</a>";
                            echo "</li>";
                            echo "歡迎光臨 " . $_SESSION['user'];
                        } else {
                        ?>
                    <li class="nav-item">
                        <a href="reg.php" class="nav-link">註冊</a>
                    </li>
                    <li class="nav-item">
                        <a href="login_form.php" class="nav-link">登入</a>
                    </li>
                <?php
                        }
                ?>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <h1>使用者資料</h1>
        <?php
        if(isset($_SESSION['msg'])){
            echo "<div class='alert alert-warning text-center col-6 m-auto'>";
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
            echo "</div>";
        }

        // $dsn="mysql:host=localhost;charset=utf8;dbname=member";
        // $pdo=new PDO($dsn,'root','');
        $sql = "select * from users where `acc`='{$_SESSION['user']}'";
        $user = $pdo->query($sql)->fetch();
        ?>
        <form action="update.php" method="post" class="col-4 m-auto">
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
                <input class="btn btn-danger mx-2" type="button" value="讓我消失吧" onclick="location.href='del_user.php?id=<?=$user['id'];?>'">
            </div>
        </form>
    </div>
</body>

</html>