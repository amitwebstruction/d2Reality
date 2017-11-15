<!--main container -->
<main id="main" class="site-main">
    <!-- Modal SignIn -->
    <div class="modal fade " id="userlogin" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content modal-new-2">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="sign-in">
                                <h2>Sign In</h2>
                                <form class="form-signin">
                                    <input type="text" class="form-control" placeholder="Email" >
                                    <input type="password" class="form-control" placeholder="Password">
                                    <button class="btn  btn-new pull-left" type="submit">Login</button>
                                    <label class="checkbox pull-left">
                                        <input type="checkbox" value="remember-me">Remember</label>
                                    <a href="#" data-toggle="modal" id="forget-btn" data-target="#forget_pass" class="pull-right need-help">Forgot Password? </a>
                                    <span class="clearfix"></span>
                                </form>
                                <div class="login-option">
                                    <div class="row">
                                        <div class="col-md-6 login-with">
                                            Or login with
                                        </div>    
                                        <div class="col-md-6">
                                            <a href="" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>    
                                    </div>
                                </div>
                                <a href="#" id="create-account" data-toggle="modal" data-target="#usersignup" class="text-center new-account">Create an account </a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal SignIn -->


    <!-- Modal Signup -->
    <div class="modal fade " id="usersignup" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content modal-new-2">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="sign-up">
                                <h2>Sign Up</h2>

                                <form class="form-signup">
                                    <p>Enter your personal details below:</p>
                                    <input type="text" class="form-control" placeholder="Full Name" >
                                    <input type="text" class="form-control" placeholder="Email" >
                                    <input type="text" class="form-control" placeholder="Number" >
                                    <input type="password" class="form-control" placeholder="Password" >
                                    <input type="password" class="form-control" placeholder="Re-type Your Password" >

                                    <button id="btn-submit-s" class="btn  btn-new pull-right" type="submit">Submit</button>
                                    <button class="btn  btn-back pull-left" type="submit">Back</button>
                                    <span class="clearfix"></span>
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal SignUp -->

    <!-- Modal Forgot  -->
    <div class="modal fade " id="forget_pass" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-md">
            <!-- Modal content-->
            <div class="modal-content modal-new-2">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 ">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="forgot-password">
                                <h2>Forgot Password ?</h2>
                                <form class="form-signup">
                                    <p>Enter your e-mail address below to reset your password.</p>
                                    <input type="text" class="form-control" placeholder="Email" >


                                    <button id="btn-submit-f" class="btn  btn-new pull-right" type="submit">Submit</button>
                                    <button class="btn  btn-back pull-left" type="submit">Back</button>
                                    <span class="clearfix"></span>
                                </form>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Modal forget -->


    <div class="sideshow">


        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!-- Item 1 -->
                <div class="carousel-item active slide1">
                    <img src="<?php echo getImageUrl(); ?>slide/slide1.jpg" alt="slide 1">

                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInUp">Bring new ideas to life, anywhere.</h1>
                        <div class="sideshow-description wow fadeInUp">Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu teus.</div>

                        <div class="button wow fadeInUp" >
                            <a href="#" class="btn-secondary">See Campaign</a>
                        </div>
                    </div>
                </div> 
                <!-- Item 2 -->
                <div class="carousel-item slide2">
                    <img src="<?php echo getImageUrl(); ?>slide/slide2.jpg" alt="slide 2">

                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInUp">Translate your dream to reality.</h1>
                        <div class="sideshow-description wow fadeInUp">Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu teus.</div>

                        <div class="button wow fadeInUp" >
                            <a href="#" class="btn-secondary">See Campaign</a>
                        </div>
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="carousel-item slide3">
                    <img src="<?php echo getImageUrl(); ?>slide/slide3.jpg" alt="slide 3">

                    <div class="carousel-caption d-md-block">
                        <h1 class="wow fadeInUp">Bring new ideas to life, anywhere</h1>
                        <div class="sideshow-description wow fadeInUp">Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu teus.</div>

                        <div class="button wow fadeInUp" >
                            <a href="#" class="btn-secondary">See Campaign</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Wrapper for slides-->
            <a class="carousel-control-prev" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
            </a>
        </div>


    </div><!-- .sideshow -->
    <div class="how-it-work">
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay=".1s">See How It Work</h2>
            <div class="description wow fadeInUp" data-wow-delay=".1s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="item-work wow fadeInUp" data-wow-delay=".1s">
                            <div class="item-icon"><span>01</span><!-- <i class="fa fa-h-square" aria-hidden="true"></i> --><img src="<?php echo getImageUrl(); ?>assets/sun.png" alt=""></div>
                        <div class="item-content">
                            <h3 class="item-title">How it works</h3>
                            <div class="item-desc"><p>A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-work wow fadeInUp" data-wow-delay=".1s">
                            <div class="item-icon"><span>02</span><!-- <i class="fa fa-play-circle-o" aria-hidden="true"></i> --><img src="<?php echo getImageUrl(); ?>assets/sun.png" alt=""></div>
                        <div class="item-content">
                            <h3 class="item-title">Explore</h3>
                            <div class="item-desc"><p>A un Angleso it va semblar un simplificat Angles, quam un skeptic Cambridge amico dit me que Occidental es.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-work wow fadeInUp" data-wow-delay=".1s">
                            <div class="item-icon"><span>03</span><!-- <i class="fa fa-rocket" aria-hidden="true"></i> --><img src="<?php echo getImageUrl(); ?>assets/sun.png" alt=""></div>
                        <div class="item-content">
                            <h3 class="item-title">Launch</h3>
                            <div class="item-desc"><p>Ma quande lingues coalesce, li grammatica del resultant lingue es plu simplic e regulari quam ti del coalescent lingues.</p></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="item-work wow fadeInUp" data-wow-delay=".1s">
                            <div class="item-icon"><span>04</span><!-- <i class="fa fa-users" aria-hidden="true"></i> --><img src="<?php echo getImageUrl(); ?>assets/sun.png" alt=""></div>
                        <div class="item-content">
                            <h3 class="item-title">About Us</h3>
                            <div class="item-desc"><p>Li lingues differe solmen in li grammatica, li pronunciation e li plu commun vocabules.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .how-it-work -->
    <div class="latest campaign">
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay=".1s">Discover Project</h2>
            <div class="campaign-tabs filter-theme wow fadeInUp" data-wow-delay=".1s">
                <button class="button is-checked" data-filter=".filterpopular">Popular/Most likes</button>
                <button class="button" data-filter=".filtersupported">Most Supported</button>
                <button class="button" data-filter=".filternearlyfunded">Nearly Funded</button>
                <button class="button" data-filter=".filterendingsoon">Ending Soon</button>
                <button class="button" data-filter=".filtermostdiscussed">Most Discussed</button>
                <button class="button" data-filter=".filterneverending">Never Ending</button>
                <a href="#" class="btn btn-sm btn-danger">See All</a>
            </div>
            <div class="campaign-content grid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filternearlyfunded filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/craft.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong> Crafts</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>55%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 55%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>55%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filterpopular filternearlyfunded filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/games.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong> Games</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>35%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 35%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>35%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filtersupported filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/techno.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong>  Technology</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>60%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 60%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>60%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filterpopular filterendingsoon filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/lifestyle.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong>  Lifestyle</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>70%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 70%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>70%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filterpopular filtermostdiscussed filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/food.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong>  Foods</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>80%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 80%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>80%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-6 filterpopular filterneverending filterseeall">
                        <div class="campaign-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="overlay" href="campaign_detail.html">
                                <img src="<?php echo getImageUrl(); ?>projects/publication.png" alt="">
                                <span class="ion-ios-search-strong"></span>
                            </a>
                            <div class="campaign-box">
                                <div class="campaign-description">A watch designed to be an heirloom to be passed down to the next generation.</div>
                                <div class="campaign-description"><strong>Category:</strong>  Publications</div>
                                <h3><a href="campaign_detail.html">Amount $: 10,000</a></h3>
                                <div class="campaign-author"><strong>Amount % :</strong> <span>26%</span> funded</div>
                                <div class="process">
                                    <div class="raised"><span style="width: 26%;"></span></div>
                                    <div class="process-info">
                                        <div class="process-funded"><span>26%</span>funded</div>
                                        <div class="process-time"><span>9</span>days left</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="latest-button"><a href="#" class="btn-primary">View all Campaigns</a></div>
        </div>
    </div><!-- .latest -->
    <div class="explore">
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay=".1s">Categories </h2>
            <div class="campaign-tabs filter-theme wow fadeInUp" data-wow-delay=".1s">
                <a href="#" class="btn btn-sm btn-danger">See All</a>
            </div>
            <div class="description wow fadeInUp" data-wow-delay=".1s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>

            <div class="explore-content">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/technology.png" alt="">
                                <span>Technology</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/lifestyle.png" alt="">
                                <span>Lifestyle</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/music.png" alt="">
                                <span>Arts &amp; Music</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/publication.png" alt="">
                                <span>Publications</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/games.png" alt="">
                                <span>Games</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/events.png" alt="">
                                <span>Events</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/foods.png" alt="">
                                <span>Food</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="explore-item wow fadeInUp" data-wow-delay=".1s">
                            <a class="explore-overlay" href="#">
                                <img src="<?php echo getImageUrl(); ?>category/documentary.png" alt="">
                                <span>Documentary</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .explore -->
    <div class="story">
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay=".1s">Advocate</h2>
            <div class="campaign-tabs filter-theme wow fadeInUp" data-wow-delay=".1s">
                <a href="#" class="btn btn-sm btn-danger" style="float:right">See All</a>
            </div>
            <div class="description wow fadeInUp" data-wow-delay=".1s">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</div>
            <div class="story-content">
                <div class="story-slider owl-carousel">
                    <div class="story-item wow fadeInUp" data-wow-delay=".1s">
                        <div class="story-thumb">
                            <div class="thumb-image"><img src="<?php echo getImageUrl(); ?>advocate/adv1.png" alt=""></div>
                        </div>
                        <div class="story-info">
                            <a href="#" class="author-name">Samino</a>
                            <a href="#" class="read-more">Know more</a>
                        </div>
                    </div>
                    <div class="story-item wow fadeInUp" data-wow-delay=".1s">
                        <div class="story-thumb">
                            <div class="thumb-image"><img src="<?php echo getImageUrl(); ?>advocate/adv2.png" alt=""></div>
                        </div>
                        <div class="story-info">
                            <a href="#" class="author-name">Andrew</a>
                            <a href="#" class="read-more">Know more</a>
                        </div>
                    </div>
                    <div class="story-item wow fadeInUp" data-wow-delay=".1s">
                        <div class="story-thumb">
                            <div class="thumb-image"><img src="<?php echo getImageUrl(); ?>advocate/adv3.png" alt=""></div>
                        </div>
                        <div class="story-info">
                            <a href="#" class="author-name">Andy Yuri</a>
                            <a href="#" class="read-more">Know more</a>
                        </div>
                    </div>
                    <div class="story-item wow fadeInUp" data-wow-delay=".1s">
                        <div class="story-thumb">
                            <div class="thumb-image"><img src="<?php echo getImageUrl(); ?>advocate/adv4.png" alt=""></div>
                        </div>
                        <div class="story-info">
                            <a href="#" class="author-name">Andy Yuri</a>
                            <a href="#" class="read-more">Know more</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- .story -->

    <div class="story">
        <div class="container">
            <h2 class="title wow fadeInUp" data-wow-delay=".1s">D2Reality Community</h2>
            <div class="description wow fadeInUp" data-wow-delay=".1s">Engage like-minded people to share ideas and latest news</div>
            <div class="latest-button"><a href="#" class="btn-primary">Visit our community page.</a></div>
        </div>
    </div><!-- .story -->


</main><!-- .site-main -->