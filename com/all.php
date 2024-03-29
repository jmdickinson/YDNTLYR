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

    <title>All Images &mdash; YOU&bull;DONT&bull;NEED&bull;TO&bull;LEAVE&bull;YOUR&bull;ROOM</title>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            background: #1e1e23;
        }

        .hgroup {
            margin: 0;
            padding: 20px;
            background: #3e3e43;
            border-bottom: 1px solid #0e0e13;
            text-align: center;
        }

        h1 {
            margin: 0;
            padding: 0;
            font: 16px normal 'Helvetica', sans-serif;
            text-transform: uppercase;
            color: #fff;
        }

        h5 {
            margin: 18px 0;
            padding: 0;
            font: 36px normal 'Helvetica', sans-serif;
            color: #8e8e8e;
        }

        h3 {
            margin: 0;
            padding: 0;
            font: 16px normal 'Helvetica', sans-serif;
            text-transform: uppercase;
            color: #8e8e8e;
        }

        h3 a {
            text-decoration: none;
            color: #fff;
        }

        span.bookmarklet {
            display: inline-block;
            margin: 20px auto 0;
        }

        span.bookmarklet a {
            display: inline-block;
            padding: 5px 12px;
            background: rgba(0,0,0,0.4);
            border: 1px solid #000;
            -webkit-border-radius: 5px;
            -moz-border-radius: 5px;
            border-radius: 5px;
            font: 14px normal 'Helvetica', sans-serif;
            text-decoration: none;
            color: #fff;

            -moz-transition: all 0.2s linear;
            -ms-transition: all 0.2s linear;
            -o-transition: all 0.2s linear;
            -webkit-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        span.bookmarklet a:hover {
            background: rgba(0,0,0,0.8);
        }

        .item {
          width: 19.5%;
          margin: 0.24%;
          float: left;
        }

        img {
            display: block;
            width: 100%;
            border-width: 0;
        }
    </style>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="assets/scripts/jquery.masonry.min.js"></script>
    <script src="assets/scripts/jquery.imagesloaded.min.js"></script>

    <script>
        $(document).ready(function(){
            var $container = $('#container');
            $container.imagesLoaded(function(){
                $container.masonry({
                    itemSelector : '.item'
                });
            });
        });

        function(){
            var b = window.location;
            window.location = 'http://youdontneedtoleaveyourroom.com/?b=' + b;
        }
    </script>

</head>

<body>
    <?
        $perpage = isset($_GET['show'])?$_GET['show']:10;
        $json_data = file_get_contents('imgs.php');
        $data = json_decode($json_data, true);
        $imgs = array_reverse($data["images"]);
    ?>
    <div class="hgroup">
        <h1>All Images</h1>
        <h5><?= count($imgs) ?> Total &bull; Latest <?= $perpage ?></h5>
        <h3>
            Show:
            <a href="/all.php?show=100">100</a> |
            <a href="/all.php?show=75">75</a> |
            <a href="/all.php?show=50">50</a> |
            <a href="/all.php?show=25">25</a> |
            <a href="/all.php?show=10">10</a> |
            <a href="/all.php?show=5">5</a> |
        </h3>
        <span class="bookmarklet" title="Drag to bookmark bar. Only us on an image URL."><a href="javascript:(function(){var%20u=window.location.host+window.location.pathname;window.location='http://youdontneedtoleaveyourroom.com/?b='+u;})();">YDNTLYR</a></span>
    </div>
    <div id="container">
        <?
            foreach($imgs as $c => $img){
                if($c < $perpage){
                    $url = count($imgs) - ($c+1);
                    echo '<div class="item"><a href="/?i='.$url.'"><img src="http://'.$img.'" alt=""></a></div>';
                }
            }
        ?>
    </div>
</body>
</html>