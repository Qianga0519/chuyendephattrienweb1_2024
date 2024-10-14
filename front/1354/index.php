<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/style.less', 'css/index.css');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="<?php echo $url_path ?>/css/index.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="products col-12 col-sm-12 col-md-6">
                <h3>Works Before & After</h3>
                <div class="row gy-3 grid-product">
                    <div class="col-6 col-sm-6 col-md-3 single-product">
                        <div class="item after">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="item before">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 single-product">
                        <div class="item after">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="item  before ">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6  col-md-3 single-product">
                        <div class="item after">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="item before">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-3 single-product">
                        <div class="item after">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                        <div class="item before">
                            <img src="images/image.png" alt="">
                            <div class="overlay"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact col-12  col-sm-12 col-md-6">
                <h3>Quick Contact</h3>
                <form class="form-contact">
                    <div class="col">
                        <div class="row ">
                            <div class="input-name col">
                                <input class="" type="text" placeholder="Name">
                            </div>
                            <div class="input-email col ">
                                <input class="" type="text" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="row">
                            <div class="input-phone col ">
                                <input class="" type="text" placeholder="+84 11111111111">
                            </div>
                            <div class="input-phone-repair col">

                                <select name="" id="">
                                    <option value="1">Phone repair</option>
                                    <option value="1">Change broken display</option>
                                    <option value="1">Repair charger</option>
                                    <option value="1">Iphone repair</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="input-message col">
                        <textarea class="input-message" rows="5" name="" id="" placeholder="Messages"></textarea>
                    </div>
                    <div class="col btn-send-contact">
                        <button>
                            <i class="fa" aria-hidden="true"></i>
                            send message
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>