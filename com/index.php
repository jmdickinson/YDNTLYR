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
        @font-face {font-family: 'Pictos';src: url('/assets/fonts/pictos-web.eot');src: local('☺'), url('/assets/fonts/pictos-web.woff') format('woff'), url('/assets/fonts/pictos-web.ttf') format('truetype'), url('/assets/fonts/pictos-web.svg#webfontIyfZbseF') format('svg');font-weight: normal;font-style: normal;}

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

        a.shuffle {
            position: absolute;
            top: 20px;
            left: 20px;
            display: block;
            padding: 5px 10px 0 14px;
            background: #000;
            opacity: 0.1;
            font-family: sans-serif;
            text-decoration: none;
            -moz-transition: opacity 0.1s linear;
            -ms-transition: opacity 0.1s linear;
            -o-transition: opacity 0.1s linear;
            -webkit-transition: opacity 0.1s linear;
            transition: opacity 0.1s linear;
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: center;
            font: 72px normal 'Pictos';
            color: #fff;
        }

        h1 a {
            display: block;
            width: 100px;
            height: 60px;
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
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: center;
            line-height: 60px;
            color: #fff;
        }

        footer a {
            display: block;
            width: 120px;
            height: 40px;
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
            -webkit-border-radius: 10px;
            -moz-border-radius: 10px;
            border-radius: 10px;
            text-align: center;
            line-height: 40px;
            color: #fff;
        }

        h1 a {
            font-size: 48px;
        }

        footer a {
            font-size: 16px;
        }

        h1 a:hover,
        footer a:hover,
        a.shuffle:hover {
            opacity: 0.3;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <? if (isset($_GET['b'])): ?>
        <?
            //save this one
            $new = str_replace("http://", "", $_GET['b']);
            $json_data = file_get_contents('imgs.php');
            $data = json_decode($json_data, true);
            $err = 0;

            foreach($data['images'] as $c => $img){
                if($img == $new){
                    $err = 1;
                    $i = $c;
                }
            }

            if($err != 1){
                $i = count($data["images"]);
                array_push($data["images"], $new);
                $fp = fopen('imgs.php', 'w');
                fwrite($fp, json_encode($data));
                fclose($fp);
            }
        ?>
        <script>
            $(document).ready(function(){
                var b = '<?= $_GET['b'] ?>';
                $('body').css('background-image', 'url(http://'+b+')');
                $('h1 a').text('<?= $i ?>').attr('href','/?i=<?= $i ?>');
            });
        </script>
    <? elseif (isset($_GET['i'])): ?>
        <script>
            $(document).ready(function(){
                $.getJSON('imgs.php', function(data){
                    var i = <?= urldecode($_GET['i']) ?>;
                    $('body').css('background-image', 'url(http://'+data.images[i]+')');
                    $('h1 a').text(i).attr('href','/?i='+i);
                });
            });
        </script>
    <? else: ?>
        <script>
            function getRandomInt (min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            $(document).ready(function(){
                $.getJSON('imgs.php', function(data){
                    var i = getRandomInt(1,data.images.length);
                    i--;
                    $('body').css('background-image', 'url(http://'+data.images[i]+')');
                    $('h1 a').text(i).attr('href','/?i='+i);
                });
            });
        </script>
    <? endif; ?>
</head>

<body>
    <h1><a href="/"></a></h1>
    <a href="/" class="shuffle">;</a>
    <footer><a href="http://twitter.com/jmdickinson" target="_blank">@jmdickinson</a></footer>
</body>
</html>