<div class="banner">
    <div class="container">
        <div class="wmuSlider example1">
            <div class="wmuSliderWrapper">
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="#/article/ba.png" name='art'>
                                <div class="banner-top-in">
                                    <img src="../images/ba.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add" ><span class="item_price" ng-click="addItem('../images/ba.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="#/article/ba2.png">
                                <div class="banner-top-in at">
                                    <img src="../images/ba2.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" ng-click="addItem('../images/ba2.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>

                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="#/article/ba11.png">
                                <div class="banner-top-in">
                                    <img src="../images/ba11.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" ng-click="addItem('../images/ba11.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="#/article/ba21">
                                <div class="banner-top-in at">
                                    <img src="../images/ba21.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" ng-click="addItem('../images/ba21.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>

                        <div class="clearfix"> </div>

                    </div>
                </article>
                <article style="position: absolute; width: 100%; opacity: 0;">
                    <div class="banner-wrap">

                        <div class="banner-top">
                            <a href="#/article/ba12.png">
                                <div class="banner-top-in">
                                    <img src="../images/ba12.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" ng-click="addItem('../images/ba12.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>


                        <div class="banner-top banner-bottom">
                            <a href="#/article/ba22.png">
                                <div class="banner-top-in at">
                                    <img src="../images/ba22.png" class="img-responsive" alt="" />
                                </div></a>
                            <div class="cart-at grid_1 simpleCart_shelfItem">
                                <div class="item_add"><span class="item_price" ng-click="addItem('../images/ba22.png')">123 $ <i> </i> </span></div>
                                <div class="off">
                                    <label>35% off !</label>
                                    <p>White Blended Cotton "still fresh" t-shirt</p>
                                </div>
                            </div>
                            <div class="clearfix"> </div>

                        </div>
                        <div class="clearfix"> </div>

                    </div>
                </article>
            </div>
            <ul class="wmuSliderPagination">
                <li><a href="#" class="">0</a></li>
                <li><a href="#" class="">1</a></li>
                <li><a href="#" class="wmuActive">2</a></li>
            </ul>
        </div>
        <!---->
        <script src="../js/jquery.wmuSlider.js"></script>
        <script src="../js/slider.js"></script>

    </div>
</div>
<div class="content">
    <div class="container">
        <div class="content-top">
            <h2 class="new">ARRIVAGES</h2>
            <div class="pink">
                <!-- requried-jsfiles-for owl -->
                <link href="../css/owl.carousel.css" rel="stylesheet">
                <script src="../js/owl.carousel.js"></script>
                <script>
                    $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                            items : 4,
                            lazyLoad : true,
                            autoPlay : true,
                            pagination : true,
                        });
                    });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <div id="owl-demo" class="owl-carousel text-center">
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi.jpg" > <img src="../images/pi.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi11.jpg" > <img src="../images/pi11.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi11.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                            <!---
                        <a class="cup" href="#/article">123 $<i> </i> </a>
                        -->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi12.jpg" > <img src="../images/pi12.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi12.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi13.jpg" > <img src="../images/pi13.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>

                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi13.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi11.jpg" > <img src="../images/pi11.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi11.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>

                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi13.jpg" > <img src="../images/pi13.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi13.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi.jpg" > <img src="../images/pi.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi12.jpg" > <img src="../images/pi12.jpg" class="img-responsive" alt="" />
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi12.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="item">
                        <div class=" box-in">
                            <div class=" grid_box">
                                <a href="#/article/pi11.jpg" > <img src="../images/pi11.jpg" class="img-responsive" alt="">
                                    <div class="zoom-icon">

                                        <ul class="in-by">
                                            <li><h5>sizes:</h5></li>
                                            <li ng-repeat="size in sizes"><span>{{size}}</span></li>

                                        </ul>


                                        <ul class="in-by-color">
                                            <li><h5>colors:</h5></li>
                                            <li><span > </span></li>
                                            <li ng-repeat="color in colors"><span class={{color}}> </span></li>


                                        </ul>

                                    </div> </a>
                            </div>
                            <!---->
                            <div class="grid_1 simpleCart_shelfItem">
                                <a href="#" class="cup item_add"><span class=" item_price" ng-click="addItem('../images/pi11.jpg')">123 $ <i> </i> </span></a>
                            </div>
                            <!---->
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>

            </div>

        </div>

        <!---->
        <div class="content-middle">
            <h2 class="middle">MEILLEURS VENTES</h2>
            <div class="col-best">
                <div class="col-md-4">
                    <a href="#/article/ni.jpg"><div class="col-in">
                        <div class="col-in-left">
                            <img src="../images/ni.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                    <div class="col-in-right grid_1 simpleCart_shelfItem">
                        <h5>fuel t-shirt  mod : 9509</h5>
                        <ul class="star">
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><a href="#"><i> </i> </a> </li>
                            <li><i class="in-star"> </i>  </li>
                        </ul>
                        <!---->
                        <a href="#" class="item_add"><span class="white item_price" ng-click="addItem('../images/ni.jpg')">123 $ <i> </i> </span></a>
                        <!---->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="#/article/ni1.jpg"><div class="col-in">
                    <div class="col-in-left">
                        <img src="../images/ni1.jpg" class="img-responsive" alt="">
                    </div>
                </a>
                <div class="col-in-right grid_1 simpleCart_shelfItem">
                    <h5>fuel t-shirt  mod : 9509</h5>
                    <ul class="star">
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i> </i>  </li>
                        <li><i class="in-star"> </i>  </li>
                    </ul>
                    <!---->
                    <a href="#" class="item_add"><span class="white item_price" ng-click="addItem('../images/ni1.jpg')">123 $ <i> </i> </span></a>
                    <!---->
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="col-md-4">
            <a href="#/article/ni.jpg"><div class="col-in">
                <div class="col-in-left">
                    <img src="../images/ni.jpg" class="img-responsive art" alt="" />
                </div>
            </a>
            <div class="col-in-right grid_1 simpleCart_shelfItem">
                <h5>fuel t-shirt  mod : 9509</h5>
                <ul class="star">
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i> </i>  </li>
                    <li><i class="in-star"> </i>  </li>
                </ul>
                <!---->
                <a href="#" class="item_add"><span class="white item_price" ng-click="addItem('../images/ni.jpg')">123 $ <i> </i> </span></a>
                <!---->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
</div>
<!---->

<div class="content-bottom">
    <div class="col-md-8 latter">
        <h6 id="new_letter">NEWSLETTER</h6>
        <p id="sign_newsletter">Inscrivez-vous à la newsletter pour obtenir le rabais</p>

        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 latter-right">

        <form>
            <div class="join">
                <input type="text" id="mail" value="entrez votre email" />
                <i> </i>
            </div>
            <input type="submit" value="OK" id="submit_newsletter">
        </form>

    </div>
    <div class="clearfix"> </div>
</div>

<!---->
<div class="bottom-content">

    <!--div class="col-md-4">
        <img src="../images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
        <img src="../images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="col-md-4">
        <img src="../images/ad1.png" class="img-responsive" alt="">
    </div>
    <div class="clearfix"> </div-->
</div>

</div>
</div>
<script type="text/javascript" src="../js/script.js"></script>