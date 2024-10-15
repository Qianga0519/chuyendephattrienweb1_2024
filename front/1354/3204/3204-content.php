<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container footer">
        <div class="row contact-company">
            <div class="col-12 col-md-6 col-sm-12 col-md-12 col-lg-6 col-xl-6 info">
                <div class="row info-detail">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 company">
                        <div class="heading">
                            <h2>Company</h2>
                        </div>
                        <div class="body">
                            <p>Find a location nearest you. See <a href="">Our Stores</a></p>
                            <p><strong>+391 (0)35 2568 4593</strong>
                                hello@domain.com</p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 useful">
                        <div class="heading">
                            <h2>Useful links</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li>
                                    <a href="">Useful links </a>
                                </li>
                                <li> <a href="">Best Sellers </a></li>
                                <li><a href="">New Products </a></li>
                                <li> <a href="">Bundle & Save </a></li>
                                <li><a href="">Online Gift Card </a></li>
                            </ul>


                        </div>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4 information">
                        <div class="heading">
                            <h2>Infomation</h2>
                        </div>
                        <div class="body">
                            <ul>
                                <li> <a href=""> Start a Return</a></li>
                                <li> <a href=""> Contact Us</a></li>
                                <li> <a href=""> Shipping FAQ</a></li>
                                <li> <a href=""> Terms & Conditions</a></li>
                                <li> <a href=""> Privacy Policy</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-sm-12 col-md-12 col-lg-6 col-xl-6 subscribe">
                <div class="heading">
                    <h2>Good emails.</h2>
                    <p>Enter your email below to be the first to know about new collections and product launches.</p>
                </div>
                <div class="input-email">
                    <input type="text">
                    <button class="btn-subscribe">Subscribe</button>
                </div>
            </div>
        </div>
        <div class="row social-company">
            <div class="col-12 col-sm-6 col-lg-4 col-xl-4  social">
                <div class="heading">
                    <p>© Glowing 2021</p>
                </div>
                <div class="social-icon">
                    <ul>
                        <li><i class="fa-brands fa-facebook"></i></li>
                        <li> <i class="fa-brands fa-twitter"></i></li>
                        <li> <i class="fa-brands fa-vimeo"></i></li>
                        <li> <i class="fa-brands fa-youtube"></i></li>
                        <li> <i class="fa-brands fa-instagram"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-lg-4 col-xl-4 logo-brand">
                <div class="logo">
                    <img src="images/logo-black-179x26.png" alt="">
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4 col-xl-4 logo-pays">
                <div class="pays">
                   <img src="images/icon-pay.png" alt="">
                </div>
            </div>
        </div>
    </div>