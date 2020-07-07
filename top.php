<?php

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .img {
            width: 206px;
            height: 104px;
        }

        .kosu {
            text-align: center;
        }

        .erabu {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .erabu1 {}

        .erabu2 {}

        .textarea {
            resize: both;
        }
    </style>
</head>

<body>

    <header>

        <h1>

            <a href="menu.php"><img class="img" src="img/IMG_4715_Original.JPG" alt=""></a>

        </h1>

        <div>

            <div>
                <nav>
                    <ul>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                        <li>
                            <a href=""></a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>


    </header>

    <div class="main">
        <!--スライドを表示させる画面-->
        <div class="slider">
            <!--  横に並べた複数のスライドを格納する用コンテナ  -->
            <ul class="slider__container">
                <!--  各スライド -->
                <img src="img/IMG_4715_Original.JPG" alt="" class="slider__item slider__item1">
                <img src="img/IMG_4716_Original.JPG" alt="" class="slider__item slider__item1">
                <img src="img/IMG_0359.JPG" alt="" class="slider__item slider__item1">
                <img src="img/IMG_0360.JPG" alt="" class="slider__item slider__item1">
            </ul>
        </div>
    </div>

    <h1>●●について</h1>

    <div>

        <div>
            <img src="" alt="">
        </div>

        <div>
            <h2>●●は何々をサポートします。</h2>
            <p>こうやって</p>
        </div>

    </div>

    <h1 class="kosu">コースを選択する</h1>

    <div class="erabu">

        <div class="erabu1">
            <a href="menu.php"><img src="img/IMG_0360.JPG" alt=""></a>
        </div>

        <div class="erabu2">
            <a href="menu.php"><img src="img/IMG_0359.JPG" alt=""></a>
        </div>

    </div>

    <h1>●●の特徴</h1>

    <div>

        <div>
            <img src="" alt="">
        </div>

        <div>
            <img src="" alt="">
        </div>

    </div>

    <h1>人気メニュー</h1>

    <div>
        <img src="" alt="">
    </div>

    <form action="confirm.php" method="POST">

        <fieldset>
            <legend>お問い合わせフォーム</legend>
            <div>
                名前: <input type="text" name="todo">
            </div>
            <div>
                電話番号: <input type="date" name="deadline">
            </div>

            <label for="comment">コメント</label>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>

            <div>
                <button id="btn">送信</button>
            </div>

        </fieldset>
    </form>

    <script src="app.js"></script>

</body>

</html>