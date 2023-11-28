<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">購物商城</a>
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
                            echo "<a href='./api/logout.php' class='nav-link'>登出</a>";
                            echo "</li>";
                            echo "<li class='nav-item'>";
                            echo "<a href='member.php' class='nav-link'>會員中心</a>";
                            echo "</li>";
                            echo "<li class='nav-item mt-2 text-end'>";
                            echo " 歡迎光臨 " . $_SESSION['user'];
                            echo "</li>";
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

</body>

</html>