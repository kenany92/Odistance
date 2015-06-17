<link rel="stylesheet" href="../css/etalage.css">
<script src="../js/jquery.etalage.min.js"></script>
<script>
    jQuery(document).ready(function($){

        $('#etalage').etalage({
            thumb_image_width: 300,
            thumb_image_height: 400,
            source_image_width: 900,
            source_image_height: 1200,
            show_hint: true,
            click_callback: function(image_anchor, instance_id){
                alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
            }
        });

    });
</script>
<div class="content">
    <div class="container">
        <div class="single">
            <div class="col-md-9 top-in-single">
                <div class="col-md-5 single-top">
                    <ul id="etalage">
                        <li>
                            <a href="optionallink.html">
                                <img class="etalage_thumb_image img-responsive" src={{param}} alt="" >
                                <img class="etalage_source_image img-responsive" src={{param}} alt="" >
                            </a>
                        </li>
                        <li>
                            <img class="etalage_thumb_image img-responsive" src={{param}} alt="" >
                            <img class="etalage_source_image img-responsive" src={{param}} alt="" >
                        </li>
                        <li>
                            <img class="etalage_thumb_image img-responsive" src={{param}} alt=""  >
                            <img class="etalage_source_image img-responsive" src={{param}} alt="" >
                        </li>
                        <li>
                            <img class="etalage_thumb_image img-responsive" src={{param}}  alt="" >
                            <img class="etalage_source_image img-responsive" src={{param}} alt="" >
                        </li>
                    </ul>

                </div>
                <div class="col-md-7 single-top-in">
                    <div class="single-para">
                        <!--h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p-->
                        <div class="star-on">
                            <ul>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                            <div class="review">
                                <a href="#" class='critique' name='critique1'> 3 reviews </a>/
                                <a href="#" class='critique' name='critique2'>  Write a review</a>
                            </div>
                            <div class="clearfix"> </div>
                        </div>

                        <label  class="add-to">$32.8</label>

                        <div class="available">
                            <h6>Available Options :</h6>
                            <ul>

                                <li><span id='size'>Size</span>:<select>
                                    <option ng-repeat="size in sizes">{{size}}</option>
                                    <!--option >Large</option>
                                    <option>Medium</option>
                                    <option>small</option>
                                    <option>Large</option>
                                    <option>small</option-->
                                </select></li>
                                <li><span id='cost'>Cost</span>:
                                    <select>
                                        <option>U.S.Dollar</option>
                                        <option>Euro</option>
                                    </select></li>
                            </ul>
                        </div>

                        <a href="#" class="cart " id='detail'>More details</a>

                    </div>
                </div>
                <div class="clearfix"> </div>
                <!----- tabs-box ---->
                <div class="sap_tabs">
                    <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                        <ul class="resp-tabs-list">
                            <li class="resp-tab-item " aria-controls="tab_item-0" role="tab"><span class='desc' name='desc'>Product Description</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span class='desc' name='add'>Additional Information</span></li>
                            <li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span class='desc' name='rev'>Reviews</span></li>
                            <div class="clearfix"></div>
                        </ul>
                        <!--div class="resp-tabs-container">
                            <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Product Description</h2><div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                            <div class="facts">
                                <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                                <ul>
                                    <li>Research</li>
                                    <li>Design and Development</li>
                                    <li>Porting and Optimization</li>
                                    <li>System integration</li>
                                    <li>Verification, Validation and Testing</li>
                                    <li>Maintenance and Support</li>
                                </ul>
                            </div>
                        </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-1"><span class="resp-arrow"></span>Additional Information</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
                            <div class="facts">
                                <p > Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections </p>
                                <ul >
                                    <li>Multimedia Systems</li>
                                    <li>Digital media adapters</li>
                                    <li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems and Hardware Platforms</li>
                                </ul>
                            </div>
                        </div>
                            <h2 class="resp-accordion" role="tab" aria-controls="tab_item-2"><span class="resp-arrow"></span>Reviews</h2><div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
                            <div class="facts">
                                <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                                <ul>
                                    <li>Research</li>
                                    <li>Design and Development</li>
                                    <li>Porting and Optimization</li>
                                    <li>System integration</li>
                                    <li>Verification, Validation and Testing</li>
                                    <li>Maintenance and Support</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                    </div-->
                    <script src="../js/easyResponsiveTabs.js" type="text/javascript"></script>
                    <script type="text/javascript">
                        $(document).ready(function () {
                            $('#horizontalTab').easyResponsiveTabs({
                                type: 'default', //Types: default, vertical, accordion
                                width: 'auto', //auto or any width like 600px
                                fit: true   // 100% fit in a container
                            });
                        });
                    </script>
                </div>
            </div>
            <div class="col-md-3 at-single">
                <div class="single-bottom">
                    <h4 id='br'>Brands</h4>
                    <ul>
                        <li>
                            <input type="checkbox"  id="brand" value="">
                            <label for="brand"><span></span> Contrary belief</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand1" value="">
                            <label for="brand1"><span></span> Lorem Ipsum</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand2" value="">
                            <label for="brand2"><span></span> Fusce feugiat</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand3" value="">
                            <label for="brand3"><span></span> Contrary belief</label>
                        </li>
                        <li>
                            <input type="checkbox"  id="brand4" value="">
                            <label for="brand4"><span></span>Injected humour</label>
                        </li>
                    </ul>
                </div>
                <div class="single-bottom">
                    <h4 id='colors'>Colors</h4>
                    <ul>
                        <li>
                            <input type="checkbox"  id="color" value="">
                            <label for="color"><span></span> <span class="color" name='red' >Red</span></label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color1" value="">
                            <label for="color1"><span></span> <span class="color" name='blue'>Blue</span></label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color2" value="">
                            <label for="color2"><span></span> <span class="color" name='black'>Black</span></label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color3" value="">
                            <label for="color3"><span></span> <span class="color" name='white'>White</span></label>
                        </li>
                        <li>
                            <input type="checkbox"  id="color4" value="">
                            <label for="color4"><span></span><span class="color" name='green'>Green</span></label>
                        </li>
                    </ul>
                </div>
                <div class="single-bottom">
                    <h4 id='cate'>Product Categories</h4>
                    <div class="product-go">
                        <img class="img-responsive fashion" src="../images/fa.jpg" alt="">
                        <div class="grid-product">
                            <a href="#" class="elit">Consectetuer adipiscing elit</a>
                            <span class=" price-in"><small>$500.00</small> $400.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <img class="img-responsive fashion" src="../images/fa1.jpg" alt="">
                        <div class="grid-product">
                            <a href="#" class="elit">Consectetuer adipiscing elit</a>
                            <span class=" price-in"><small>$500.00</small> $400.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="product-go">
                        <img class="img-responsive fashion" src="../images/fa2.jpg" alt="">
                        <div class="grid-product">
                            <a href="#" class="elit">Consectetuer adipiscing elit</a>
                            <span class=" price-in"><small>$500.00</small> $400.00</span>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>


    </div>
</div>
