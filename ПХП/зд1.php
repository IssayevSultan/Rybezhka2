<?php
$imya = $_POST['imya'];
$email = $_POST['email'];
$web = $_POST['web'];
$koment = $_POST['koment'];
$pol = $_POST['pol'];
$pattern = "/^[a-zA-Z ]*$/";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма комментариев</title>
</head>

<body>
    <h3>Форма коментариев</h3>
    <form method="post" action="">
        <p> <span>Имя: </span><input type="text" name="name" placeholder="Введите ваше имя">*
            <?php
            if ((strlen(trim($imya)) <= 5) || (preg_match($pattern, $imya))) {
                echo ' Имя не менее 5 символов, без пробелов и латиницы';
                $imya = "";
            }
            ?>
        </p>
        <p> <span>Email: </span><input type="text" name="email" placeholder="Введите ваш Email">*
            <?php
            if (filter_var($email, FILTER_VALIDATE_EMAIL) != true) {
                echo 'Email введен не верно';
                $email = "";
            }

            ?>
        </p>
        <p> <span>Сайт: </span><input type="text" name="site" placeholder="Введите адрес свой сайт">*
            <?php
            if (strlen(trim($web)) <= 5) {
                echo ' Сайт не менее 5 символов';
                $web = "";
            }
            ?>
        </p>

        <p> <span>Коментарий: </span><textarea name="coment" cols="40" rows="4" name="coment" placeholder="Введите ваш коментарий"></textarea>*
            <?php
            if (strlen(trim($koment)) <= 50) {
                echo ' Коментарий не менее 50 символов';
                $koment = "";
            }
            ?>
        </p>

        <p>
            <span>Ваш пол:</span>
            <input type="radio" name="state" id="male" value="Мужской">
            <label for="male">Мужской</label>
            <input type="radio" name="state" id="female" value="Женский">
            <label for="female">Женский</label>
            <input type="radio" name="state" id="xz" value="Еще не понял" checked>
            <label for="female">Еще не понял</label>*
            <?php
            if (trim($pol) == "") {
                echo 'Выберите пол';
                $pol = "";
            }
            ?>

        </p>

        <input type="submit" value="Отправить">
    </form>
    <div>
        <?php

        if (trim($imya) == "" || trim($email) == "" || trim($web) == "" || trim($koment) == "" || trim($pol) == "") {
        } else {
            echo ' <h3>Новый коментарий</h3>
            <div>
            <p>' . $imya . '</p>
            <p>' . $email . '</p>
            <p>' . $web . '</p>
            <p>' . $koment . '</p>
            <p>' . $pol . '</p>
            </div>';
        }
        ?>
    </div>
</body>

</html>