<?php
/**
 * Created by PhpStorm.
 * User: AGT John
 * Date: 2018-10-01
 * Time: 2:01 PM
 */
?>

《--below is summer promo code on index.php (for the release version)--》
		    <div class="row">
                            <div id="promo_anchor_caption" style="margin-top: -10px"></div>
                            <div class="col-lg-1 col-centered" id="promo_btn_dn">
                                <a href="#promo_anchor_caption" title="Summer PROMO" class=""><img src="img/promo/btn_dn.png"/></a>
                                <br/><br/>
                            </div>
                        </div>

                        <div class="row" style="">
                            <div class="col-lg-2"></div>
                            <div class="col-lg-9 col-centered">
                                <h1 style="color:white;text-transform: none;">Summer is Awesome and so is Our $1000 PROMO!</h1>
                                <br/>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_1.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_2.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_3.jpg"  style="z-index: 3"/>
                            </div>
                            <div class="promo_spacer"></div>
                            <div class="col-lg-8 col-centered">
                                <img src="img/promo/promo201808_4.jpg"  style="z-index: 3"/>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 30px">
                            <div class="col-lg-1"></div>
                            <div class="col-lg-10">
                                <h4 style="color:#fff;text-transform: none;">Order a new Hobbit or Zephyr car from one of our dealers between August 1st and September 30th and receive a FREE complimentary package value at $1000.</h4>
                                <br/>
                                <p style="color:#fff;">*Promotion applies to new and pre-ordered cars only.</p>
                                <br/>
                            </div>
                            <div class="col-lg-1"></div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2 col-centered" style="margin-top: -10px">
                                <a href="dealer-directory.php" title="Find a dealer to get the promo today!" id="promo_btn_dealer" class="">Locate a Dealer</a>
                                <br/><br/>
                            </div>
                        </div>
《--above is summer promo code on index.php (for the release version)--》

《--301 redirect for divided stream of same site(www & non-www), in (.htaccess) file--》
RewriteCond %{HTTP_HOST} ^agtecars\.com$ [NC]
RewriteRule ^/?$ "http\:\/\/www\.agtecars\.com\/" [R=301,L]

