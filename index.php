<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="static/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>
        Nike
    </title>
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-YHEWNHQMPX"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-YHEWNHQMPX');
    </script>

</head>

<body>
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
                <form action="/" method="post" class="login-form">
                    <div class="modal-header">
                        <h4 class="modal-title">Login</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" required="required" name="email">
                        </div>
                        <div class="form-group">
                            <div class="clearfix">
                                <label>Password</label>
                                <a href="#" class="pull-right text-muted"><small>Forgot?</small></a>
                            </div>

                            <input type="password" class="form-control" required="required" name="password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <label class="checkbox-inline pull-left"><input type="checkbox"> Remember me</label>
                        <input type="submit" class="btn btn-secondary pull-right" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container1">
        <div class="header">
            <div class="section1">
                <div class="section1-head">
                    <div class="logo">
                        <a href="/"><img id="img-logo" src="static/logo.png" alt=""></a>
                    </div>
                    <div class="navbar">
                        <a href="">Help</a>
                        <p>|</p>
                        <a href="/register">Join Us</a>
                        <p>|</p>
                        <a href="#myModal" class="trigger-btn" data-toggle="modal">Sign In</a>
                    </div>
                </div>
            </div>
            <div class="section2">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <img src="static/logo2.png" alt="">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item" id="newReleases">
                                <p class="nav-link">New Releases</p>
                            </li>
                            <li class="nav-item" id="men">
                                <p class="nav-link"><<a href="items.html">Men</a>/p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link"><a href="items.html">Women</a></p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link"><a href="items.html">Kids</a></p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link"><a href="items.html">Gifts</a></p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link">Sale</p>
                            </li>
                            <li class="nav-item">
                                <p class="nav-link">Collections</p>
                            </li>
                        </ul>
                        <div class="ml-auto d-flex flex-row justify-content-center align-items-center mr-5 ">
                            <form class="form-inline my-2 my-lg-0">
                                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                            </form>
                            <svg width="24px" height="24px" fill="#111" viewBox="0 0 24 24">
                                <path
                                    d="M21.11 4a6.6 6.6 0 0 0-4.79-1.92A6.27 6.27 0 0 0 12 3.84 6.57 6.57 0 0 0 2.89 4c-2.8 2.68-2.45 7.3.88 10.76l6.84 6.63A2 2 0 0 0 12 22a2 2 0 0 0 1.37-.54l.2-.19.61-.57c.6-.57 1.42-1.37 2.49-2.41l2.44-2.39 1.09-1.07c3.38-3.55 3.8-8.1.91-10.83zm-2.35 9.4l-.25.24-.8.79-2.44 2.39c-1 1-1.84 1.79-2.44 2.36L12 20l-6.83-6.68c-2.56-2.66-2.86-6-.88-7.92a4.52 4.52 0 0 1 6.4 0l.09.08a2.12 2.12 0 0 1 .32.3l.9.94.9-.94.28-.27.11-.09a4.52 4.52 0 0 1 6.43 0c1.97 1.9 1.67 5.25-.96 7.98z">
                                </path>
                            </svg>
                            <svg width="24px" height="24px" fill="#111" viewBox="0 0 24 24">
                                <path
                                    d="M16 7a1 1 0 0 1-1-1V3H9v3a1 1 0 0 1-2 0V3a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v3a1 1 0 0 1-1 1z">
                                </path>
                                <path
                                    d="M20 5H4a2 2 0 0 0-2 2v13a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3V7a2 2 0 0 0-2-2zm0 15a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V7h16z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </nav>
                <div class="drop-list-new-releases">
                    <div class="drop-item">
                        <h1>Featured</h1>
                        <h4>Bestsellers</h4>
                        <h4>Shop All new Arrivals</h4>
                        <h4>National Team Collection</h4>
                    </div>
                    <div class="drop-item">
                        <h1>New for Men</h1>
                        <h4>Shoes</h4>
                        <h4>Clothing</h4>
                        <h4>Equipments</h4>
                    </div>
                    <div class="drop-item">
                        <h1>New for Women</h1>
                        <h4>Shoes</h4>
                        <h4>Clothing</h4>
                        <h4>Equipments</h4>
                    </div>
                    <div class="drop-item">
                        <h1>New for Kids</h1>
                        <h4>Boy's Shoes</h4>
                        <h4>Girl's Shoes</h4>
                        <h4>Boy's Clothing</h4>
                        <h4>Girl's Clothing</h4>
                    </div>
                </div>
                <div class="drop-list-men">
                    <div class="drop-item">
                        <h1>Featured</h1>
                        <h4>Bestsellers</h4>
                        <h4>New Releases</h4>
                        <h4>On your Radar</h4>
                    </div>
                    <div class="drop-item">
                        <h1>Shoes</h1>
                        <h4>All Shoes</h4>
                        <h4>Lifestyle</h4>
                        <h4>Football</h4>
                        <h4>Jordan</h4>
                        <h4>GYM</h4>
                        <h4>Golf</h4>
                    </div>
                    <div class="drop-item">
                        <h1>Clothing</h1>
                        <h4>All Clothing</h4>
                        <h4>Hoodies</h4>
                        <h4>Shorts</h4>
                        <h4>Polos</h4>
                    </div>
                </div>
            </div>

            <div class="container2">
                <div class="section3">/it
                    <img src="static/logo3.png" alt="logo3">
                </div>
                <div class="section4 pt-2 pb-4">
                    <img src="static/logo3.png" alt="logo3" class="img-logo3">
                    <div class="list">
                        <li style="padding-left: 0px;"><a href="">New Releases</a></li>
                        <li><a href="">Top Gifts</a></li>
                        <li><a href="">Men</a></li>
                        <li><a href="">Women</a></li>
                        <li><a href="">Kids</a></li>
                        <li><a href="">Jordan Sport</a></li>
                        <li><a href="">Social and Community Impact</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contents1">
        <div class="img1">
            <h1>Run Through it</h1>
            <p>Enjoy the life and let your star shine</p>
        </div>
    </div>
    <div class="trending">
        <h3>Trending Now</h3>
        <div class="trending-items-list">
        </div>
    </div>
    <div class="gear">
        <h3>Running Gear</h3>
        <div class="gear-items-list"></div>
    </div>

    <div class="footer">
        <div class="foo1">
            <div class="group1">
                <h4>find a store</h4>
                <h4>sign up for email</h4>
                <h4>become a member</h4>
                <h4>send us feedback</h4>
            </div>
            <div class="group2">
                <h4>get help</h4>
                <h5>Order Status</h5>
                <h5>Shipping and Delivery</h5>
                <h5>Returns</h5>
                <h5>Payment Options</h5>
                <h5>Contact Us</h5>
            </div>
            <div class="group3">
                <h4>about nike</h4>
                <h5>News</h5>
                <h5>Careers</h5>
                <h5>Investores</h5>
                <h5>Sustainability</h5>
            </div>
        </div>
        <div class="foo2">
            <h5>All Rights Reserved 2020</h5>
        </div>
    </div>
    <script src="static/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>