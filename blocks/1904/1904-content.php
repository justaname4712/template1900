<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>

<div class="col-md-12">
    <div class="type-1904">
        <div class="img">
            <div class="slide-band6">
                <div class="col-md-8 img1">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple">
                            <div class="wrapper item-adv-simple">
                                <h1>
                                    Siemens
                                    <p>Magnetom Avanto</p>
                                    <button class="button">
                                        <span>Shop Now</span>
                                    </button>
                                </h1>
                                <a class="hoverimg imghover" href="#">
                                    <img width="780" height="400" src="<?php echo $url_path ?>/images/ad4-2.jpg" alt="#" class="img-responsive">
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 img2">
                    <div class="wrapper">
                        <div class="single-img item-adv-simple item1">
                            <div class="wrapper item-adv-simple">
                                <h3>
                                    <a class="hoverprd" href="#">Cupcake Corer</a>
                                    <p>Commercial Cookware</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        200.00
                                    </span>
                                </h3>
                                <a class="hoverimg imghover1" href="#">
                                    <img width="372" height="190" src="<?php echo $url_path ?>/images/ad5-1.jpg" alt="#" class="img-responsive">
                                </a>
                            </div>
                        </div>

                        <div class="single-img item-adv-simple item2">
                            <div class="wrapper item-adv-simple ">
                                <h3>
                                    <a class="hoverimg2" href="#">Piece OXO</a>
                                    <p>Holder with Tools Set</p>
                                    <span class="money">
                                        <span class="icon">$</span>
                                        80.00
                                    </span>
                                </h3>
                                <a class="hoverimg imghover1" href="#">
                                    <img width="372" height="190" src="<?php echo $url_path ?>/images/ad6.jpg" alt="#" class="img-responsive">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>