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

        .setumei {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .kosu {
            text-align: center;
        }

        .kosu1 {
            width: 500px;
            height: 300px;
        }

        .kosu2 {
            width: 500px;
            height: 300px;
        }

        .erabu {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        .text1 {
            text-align: center;
        }

        .text2 {
            text-align: center;
        }

        .textarea {
            resize: both;
        }

        .title {
            text-align: center;
            font-size: 30px;
        }
    </style>
</head>

<body>

    <header>

        <h1>

            <a href="menu.php"><img class="img" src="img/thumb.jpg" alt=""></a>

        </h1>

        <div>

            <div>
                <nav>
                    <ul>
                        <li>
                            <a href="ログイン"></a>
                        </li>
                        <li>
                            <a href="新規登録"></a>
                        </li>
                        <li>
                            <a href="初めての方へ"></a>
                        </li>
                        <li>
                            <a href="注文する"></a>
                        </li>
                        <li>
                            <a href="●●の特徴"></a>
                        </li>
                        <li>
                            <a href="●●について"></a>
                        </li>
                        <li>
                            <a href="お知らせ"></a>
                        </li>
                        <li>
                            <a href="お問い合わせ"></a>
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
                <img src="img/6292bd3a9738cf5ec7dd869a8448376d_f785.jpg" alt="" class="slider__item slider__item1">
                <img src="img/1724166031.jpg" alt="" class="slider__item slider__item1">
                <img src="img/shutterstock_468372527-w640.jpg" alt="" class="slider__item slider__item1">
                <img src="img/town20190829160911.jpg" alt="" class="slider__item slider__item1">
            </ul>
        </div>
    </div>

    <h1 class="title">●●について</h1>

    <!-- <div>

        <div>
            <img src="" alt="">
        </div>

        <div>
            <h2>●●は何々をサポートします。</h2>
            <p>こうやって</p>
        </div>

    </div> -->

    <div class="setumei">

        <div class="setumei1">
            <a href="menu.php"><img class="gazou" src="img/top.png" alt=""></a>
        </div>

        <div class="setumei2">
        <h1>〇〇について</h1>
        <p>こうやってつかいます</p>
        </div>

    </div>

        <h1 class="kosu">コースを選択する</h1>

        <div class="erabu">

            <div class="erabu1">
                <a href="menu.php"><img class="kosu1" src="img/top.png" alt=""></a>
                <p class="text1">●●コース</p>
            </div>

            <div class="erabu2">
                <a href="menu.php"><img class="kosu2" src="img/S1554965473430_1.jpg" alt=""></a>
                <p class="text2">●●コース</ｐ>
            </div>

        </div>

        <!-- <h1>●●の特徴</h1>

        <div>

            <div>
                <img src="" alt="">
            </div>

            <div>
                <img src="" alt="">
            </div>

        </div> -->

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