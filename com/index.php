<?php
    //require_once "imgs.php";

    if (isset($_GET['b'])) {
        $bg = $_GET['b'];
        $alt = '#';
        $url = 'http://youdontneedtoleaveyourroom.com/?b='. $_GET['b'];
    } elseif (isset($_GET['i'])) {
        $bg = $imgs[$_GET['i']];
        $alt = $_GET['i'];
        $url = 'http://youdontneedtoleaveyourroom.com/?i='. $_GET['i'];
    } else {
        $r = rand(0,count($imgs) - 1);
        $bg = $imgs[$r];
        $alt = $r;
        $url = 'http://youdontneedtoleaveyourroom.com/?i='. $r;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="title" content="YOU•DONT•NEED•TO•LEAVE•YOUR•ROOM" />
    <meta name="description" content="You don’t need to leave your room.
                                            Remain sitting at your table and listen.
                                        Don’t even listen, simply wait.
                                    Don’t even wait.
                                                Be quite still and solitary.
                                The world will freely offer itself to you.
                                            To be unmasked, it has no choice.
                                                It will roll in ecstasy at your feet." />

    <title>YOU&bull;DONT&bull;NEED&bull;TO&bull;LEAVE&bull;YOUR&bull;ROOM</title>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style type="text/css">
        h1 {
            position: absolute;
            top: 20px;
            right: 20px;
        }

        footer {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }

        h1 a,
        footer a {
            display: block;
            padding: 10px;
            background: #000;
            opacity: 0.1;
            font-family: sans-serif;
            text-decoration: none;
            -moz-transition: opacity 0.1s linear;
            -ms-transition: opacity 0.1s linear;
            -o-transition: opacity 0.1s linear;
            -webkit-transition: opacity 0.1s linear;
            transition: opacity 0.1s linear;
            color: #fff;
        }

        h1 a {
            font-size: 48px;
        }

        footer a {
            font-size: 16px;
        }

        h1 a:hover,
        footer a:hover {
            opacity: 0.3;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        function getRandomInt (min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }

        $(document).ready(function(){
            $.getJSON('imgs.php', function(data){
                var i = getRandomInt(1,65);
                $('body').css('background-image', 'url(http://'+data.images[i-1]+')');
            });
        });
    </script>
</head>

<body>
    <h1><a href="<?= $url ?>"><?= $alt ?></a></h1>
    <footer><a href="http://twitter.com/jmdickinson" target="_blank">@jmdickinson</a></footer>
</body>
</html>