@extends('layouts.web.web')
  
@section('content')
    <!-- Hero Section
    ================================================== -->

    <header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
      <div class="container">
        <h2 class="display-3">Dr. Fernando Silva Chacón.</h1>
        <h3 class="m-b-3"><em>Otorrinolaringologo</em></h2>
        <h3 class="m-b-3"><em>Past-Presidente de la Asociación Latinoamericana</em> de Rinologia <a href="ui-elements.html" class="jumbolink"></a>.</h2>
        <a class="btn btn-secondary-outline m-b-1" href="http://tympanus.net/codrops/?p=25217" role="button"><span class="icon-sketch"></span>Pide tu cita</a>
        <ul class="nav nav-inline social-share">
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="icon-linkedin"></span> 356</a></li>
        </ul>
      </div>
    </header>

    <!-- Intro
    ================================================== -->

    <!-- <section class="section-intro bg-faded text-xs-center">
      <div class="container">
        <h3 class="wp wp-1">Build your beautiful UI, the way you want it, with Land.io</h3>
        <p class="lead wp wp-2">Craft memorable, emotive experiences with our range of beautiful UI elements.</p>
        <img src="web/img/mock.png" alt="iPad mock" class="img-fluid wp wp-3">
      </div>
    </section> -->

    <!-- Features
    ================================================== -->

    <!-- <section class="section-features text-xs-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-pen display-1"></span>
                <h4 class="card-title">250</h4>
                <h6 class="card-subtitle text-muted">UI Elements</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <div class="card-block">
                <span class="icon-thunderbolt display-1"></span>
                <h4 class="card-title">Ultra</h4>
                <h6 class="card-subtitle text-muted">Modern design</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card m-b-0">
              <div class="card-block">
                <span class="icon-heart display-1"></span>
                <h4 class="card-title">Free</h4>
                <h6 class="card-subtitle text-muted">Forever and ever</h6>
                <p class="card-text">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras eu adipiscing ac cras at sem cras per senectus eu parturient quam.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Video
    ================================================== -->

    <!-- <section class="section-video bg-inverse text-xs-center wp wp-4">
      <h3 class="sr-only">Video</h3>
      <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="web/img/video-poster.jpg" data-setup='{}'>
        <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
        <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
      </video>
    </section> -->

    <!-- Pricing
    ================================================== -->

    <!-- <section class="section-pricing bg-faded text-xs-center">
      <div class="container">
        <h3>Manage your subscriptions</h3>
        <div class="row p-y-3">
          <div class="col-md-4 p-t-md wp wp-5">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Personal
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">19</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
              <a href="#" class="btn btn-primary-outline">Get Started</a>
            </div>
          </div>
          <div class="col-md-4 stacking-top">
            <div class="card pricing-box pricing-best p-x-0">
              <div class="card-header text-uppercase">
                Professional
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">49</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
                <li class="list-group-item">Sed risus feugiat</li>
              </ul>
              <a href="#" class="btn btn-primary">Get Started</a>
            </div>
          </div>
          <div class="col-md-4 p-t-md wp wp-6">
            <div class="card pricing-box">
              <div class="card-header text-uppercase">
                Enterprise
              </div>
              <div class="card-block">
                <p class="card-title">Sed risus feugiat fusce eu sit conubia venenatis aliquet nisl cras.</p>
                <h4 class="card-text">
                  <sup class="pricing-box-currency">$</sup>
                  <span class="pricing-box-price">99</span>
                  <small class="text-muted text-uppercase">/month</small>
                </h4>
              </div>
              <ul class="list-group list-group-flush p-x">
                <li class="list-group-item">Sed risus feugiat</li>
                <li class="list-group-item">Sed risus feugiat fusce eu sit</li>
                <li class="list-group-item">Sed risus feugiat fusce</li>
              </ul>
              <a href="#" class="btn btn-primary-outline">Get Started</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Testimonials
    ================================================== -->

    <!-- <section class="section-testimonials text-xs-center bg-inverse">
      <div class="container">
        <h3 class="sr-only">Testimonials</h3>
        <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <blockquote class="blockquote">
                <img src="web/img/face1.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Good design at the front-end suggests that everything is in order at the back-end, whether or not that is the case.</p>
                <footer>Dmitry Fadeyev</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="web/img/face2.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">It’s not about knowing all the gimmicks and photo tricks. If you haven’t got the eye, no program will give it to you.</p>
                <footer>David Carson</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="web/img/face3.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">There’s a point when you’re done simplifying. Otherwise, things get really complicated.</p>
                <footer>Frank Chimero</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="web/img/face4.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Designing for clients that don’t appreciate the value of design is like buying new tires for a rental car.</p>
                <footer>Joel Fisher</footer>
              </blockquote>
            </div>
            <div class="carousel-item">
              <blockquote class="blockquote">
                <img src="web/img/face5.jpg" height="80" width="80" alt="Avatar" class="img-circle">
                <p class="h3">Every picture owes more to other pictures painted before than it owes to nature.</p>
                <footer>E.H. Gombrich</footer>
              </blockquote>
            </div>
          </div>
          <ol class="carousel-indicators">
            <li class="active"><img src="web/img/face1.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
            <li><img src="web/img/face2.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
            <li><img src="web/img/face3.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
            <li><img src="web/img/face4.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
            <li><img src="web/img/face5.jpg" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="4" class="img-fluid img-circle"></li>
          </ol>
        </div>
      </div>
    </section> -->

    <!-- Text Content
    ================================================== -->

    <!-- <section class="section-text">
      <div class="container">
        <h3 class="text-xs-center">Make your mark on the product industry</h3>
        <div class="row p-y-3">
          <div class="col-md-5">
            <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
          <div class="col-md-5 col-md-offset-2 separator-x">
            <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- News
    ================================================== -->

    <!-- <section class="section-news">
      <div class="container">
        <h3 class="sr-only">News</h3>
        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-md-push-6 p-l-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1434394673726-e8232a5903b4?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 col-md-pull-6 p-r-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">How bold, emotive imagery can connect with your audience <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Sign Up
    ================================================== -->

    <!-- <section class="section-signup bg-faded">
      <div class="container">
        <h3 class="text-xs-center m-b-3">Sign up to receive free updates as soon as they hit!</h3>
        <form>
          <div class="row">
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-name">
                <label class="sr-only" for="inputName">Your name</label>
                <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-email">
                <label class="sr-only" for="inputEmail">Email address</label>
                <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group has-icon-left form-control-password">
                <label class="sr-only" for="inputPassword">Enter a password</label>
                <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
              </div>
            </div>
            <div class="col-md-6 col-xl-3">
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
              </div>
            </div>
          </div>
          <label class="c-input c-checkbox">
            <input type="checkbox" checked>
            <span class="c-indicator"></span> I agree to Land.io’s <a href="#">terms of service</a>
          </label>
        </form>
      </div>
    </section> -->

    <!-- Footer
    ================================================== -->

    <!-- <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
	</footer> -->
@endsection()

    {{-- 
    
    <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Land.io UI Kit | Codrops</title>
    <meta name="description" content="A free HTML template and UI Kit built on Bootstrap" />
    <meta name="keywords" content="free html template, bootstrap, ui kit, sass" />
    <meta name="author" content="Peter Finlan and Taty Grassini Codrops" />
    <link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon/android-chrome-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="img/favicon/manifest.json">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#663fb5">
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#663fb5">
    <!-- Only needed Bootstrap bits + custom CSS in one file -->
    <link rel="stylesheet" href="css/landio.css">
  </head>

  <body class="bg-faded p-t-2">
    <div class="container">
      <h3 class="p-y-1 text-xs-center">Land.io <strong>UI Elements</strong></h3>
    </div>

    <!-- WHITE navigation
    ================================================== -->

    <nav class="navbar bg-white">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <span class="icon-logo"></span>
          <span class="sr-only">Land.io</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbar" aria-expanded="false" aria-controls="collapsingNavbar">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUser" aria-expanded="false" aria-controls="collapsingMobileUser">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbar" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbar">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="http://tympanus.net/codrops/?p=25217" target="_blank">Codrops</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="./index.html">Land.io</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="./index-carousel.html">Slides</a>
            </li>
            <li class="nav-item nav-item-toggable active">
              <a class="nav-link" href="ui-elements.html">UI Kit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-md-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-md-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenu1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenu2">
                <div class="media">
                  <div class="media-left">
                    <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">Joel Fisher</h5>
                    <h6>hey@joelfisher.com</h6>
                  </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">View posts</a>
                <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUser" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUser">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">Joel Fisher</h5>
              <h6>hey@joelfisher.com</h6>
            </div>
          </div>
          <a href="#" class="dropdown-item text-uppercase">View posts</a>
          <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
          <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
          <a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
            <span class="sr-only">Edit</span>
            <span class="icon-edit"></span>
          </a>
        </div>
      </div>
    </nav>

    <hr class="invisible">

    <!-- DARK navigation
    ================================================== -->

    <nav class="navbar navbar-dark bg-inverse">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <span class="icon-logo"></span>
          <span class="sr-only">Land.io</span>
        </a>
        <a class="navbar-toggler hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingNavbarInverse" aria-expanded="false" aria-controls="collapsingNavbarInverse">
        &#9776;
      </a>
        <a class="navbar-toggler navbar-toggler-custom hidden-md-up pull-xs-right" data-toggle="collapse" href="#collapsingMobileUserInverse" aria-expanded="false" aria-controls="collapsingMobileUserInverse">
          <span class="icon-user"></span>
        </a>
        <div id="collapsingNavbarInverse" class="collapse navbar-toggleable-custom" role="tabpanel" aria-labelledby="collapsingNavbarInverse">
          <ul class="nav navbar-nav pull-xs-right">
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="http://tympanus.net/codrops/?p=25217" target="_blank">Codrops</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="./index.html">Land.io</a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="./index-carousel.html">Slides</a>
            </li>
            <li class="nav-item nav-item-toggable active">
              <a class="nav-link" href="ui-elements.html">UI Kit <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item nav-item-toggable">
              <a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a>
            </li>
            <li class="nav-item nav-item-toggable hidden-sm-up">
              <form class="navbar-form">
                <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
              </form>
            </li>
            <li class="navbar-divider hidden-sm-down"></li>
            <li class="nav-item dropdown nav-dropdown-search hidden-sm-down">
              <a class="nav-link dropdown-toggle" id="dropdownMenuInverse1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="icon-search"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-search" aria-labelledby="dropdownMenuInverse1">
                <form class="navbar-form">
                  <input class="form-control navbar-search-input" type="text" placeholder="Type your search &amp; hit Enter&hellip;">
                </form>
              </div>
            </li>
            <li class="nav-item dropdown hidden-sm-down">
              <a class="nav-link dropdown-toggle nav-dropdown-user" id="dropdownMenuInverse2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="img/face5.jpg" height="40" width="40" alt="Avatar" class="img-circle"> <span class="icon-caret-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-user dropdown-menu-animated" aria-labelledby="dropdownMenuInverse2">
                <div class="media">
                  <div class="media-left">
                    <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
                  </div>
                  <div class="media-body media-middle">
                    <h5 class="media-heading">Joel Fisher</h5>
                    <h6>hey@joelfisher.com</h6>
                  </div>
                </div>
                <a href="#" class="dropdown-item text-uppercase">View posts</a>
                <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
                <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
                <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
                <a href="#" class="btn-circle has-gradient pull-xs-right">
                  <span class="sr-only">Edit</span>
                  <span class="icon-edit"></span>
                </a>
              </div>
            </li>
          </ul>
        </div>
        <div id="collapsingMobileUserInverse" class="collapse navbar-toggleable-custom dropdown-menu-custom p-x-1 hidden-md-up" role="tabpanel" aria-labelledby="collapsingMobileUserInverse">
          <div class="media m-t-1">
            <div class="media-left">
              <img src="img/face5.jpg" height="60" width="60" alt="Avatar" class="img-circle">
            </div>
            <div class="media-body media-middle">
              <h5 class="media-heading">Joel Fisher</h5>
              <h6>hey@joelfisher.com</h6>
            </div>
          </div>
          <a href="#" class="dropdown-item text-uppercase">View posts</a>
          <a href="#" class="dropdown-item text-uppercase">Manage groups</a>
          <a href="#" class="dropdown-item text-uppercase">Subscription &amp; billing</a>
          <a href="#" class="dropdown-item text-uppercase text-muted">Log out</a>
          <a href="#" class="btn-circle has-gradient pull-xs-right m-b-1">
            <span class="sr-only">Edit</span>
            <span class="icon-edit"></span>
          </a>
        </div>
      </div>
    </nav>

    <hr class="invisible">

    <div class="container">
      <div class="row">
        <div class="col-md-6 col-xl-4">

          <!-- Forms
          ================================================== -->

          <div class="form-group has-icon-left form-control-name">
            <label class="sr-only" for="inputName">Your name</label>
            <input type="text" class="form-control form-control-lg" id="inputName" placeholder="Your name">
          </div>
          <div class="form-group has-icon-left form-control-email">
            <label class="sr-only" for="inputEmail">Email address</label>
            <input type="email" class="form-control form-control-lg" id="inputEmail" placeholder="Email address" autocomplete="off">
          </div>
          <div class="form-group has-icon-left form-control-password">
            <label class="sr-only" for="inputPassword">Enter a password</label>
            <input type="password" class="form-control form-control-lg" id="inputPassword" placeholder="Enter a password" autocomplete="off">
          </div>

          <!-- Buttons
          ================================================== -->

          <button type="submit" class="btn btn-primary btn-block">Sign up for free!</button>
          <hr class="invisible">
          <button type="submit" class="btn btn-primary-outline btn-block">Sign up for free!</button>
          <hr class="invisible">
          <button type="submit" class="btn btn-primary has-gradient btn-block">Sign up for free!</button>

          <hr class="invisible">
        </div>
        <div class="col-md-6 col-xl-4">

          <!-- SOCIAL buttons
          ================================================== -->

          <a href="#" class="btn btn-social btn-block bg-facebook">
            <span class="icon-facebook"></span> Login with Facebook
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-twitter">
            <span class="icon-twitter"></span> Login with Twitter
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-google">
            <span class="icon-google"></span> Login with Google
          </a>
          <hr class="invisible">
          <a href="#" class="btn btn-social btn-block bg-linkedin">
            <span class="icon-linkedin"></span> Login with LinkedIn
          </a>

          <hr class="invisible">

          <div class="text-xs-center">

            <!-- SOCIAL icon buttons
            ================================================== -->

            <a href="#" class="btn btn-social btn-social-icon btn-social-facebook">
              <span class="icon-facebook"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-twitter">
              <span class="icon-twitter"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-google">
              <span class="icon-google"></span>
            </a>
            <a href="#" class="btn btn-social btn-social-icon btn-social-linkedin">
              <span class="icon-linkedin"></span>
            </a>
          </div>

          <hr class="invisible">

        </div>

        <div class="clearfix hidden-xl-up"></div>

        <div class="col-md-4">

          <!-- Chart
          ================================================== -->

          <div class="card card-chart">
            <div id="chart-holder" class="center-block" data-active="90%">
              <canvas id="chart-area" class="center-block" width="200" height="200"></canvas>
            </div>
            <ul class="list-group">
              <li class="list-group-item complete">
                <span class="label pull-xs-right">324</span>
                <span class="icon-status status-completed"></span> Completed
              </li>
              <li class="list-group-item">
                <span class="label pull-xs-right">34</span>
                <span class="icon-status status-backlog"></span> In backlog
              </li>
              <li class="list-group-item">
                <span class="label pull-xs-right">20</span>
                <span class="icon-status status-noticket"></span> Without ticket
              </li>
            </ul>
          </div>

          <hr class="invisible">

        </div>

        <div class="clearfix hidden-md-up"></div>

        <div class="col-md-8 col-xl-6 col-xl-offset-3">

          <!-- User Card
          ================================================== -->

          <div class="card card-inverse card-social text-xs-center">
            <div class="card-block has-gradient">
              <img src="img/face5.jpg" height="90" width="90" alt="Avatar" class="img-circle">
              <h5 class="card-title">Joel Fisher</h5>
              <h6 class="card-subtitle">hey@joelfisher.com</h6>
              <button type="submit" class="btn btn-secondary-outline btn-sm">Follow</button>
            </div>
            <div class="card-block container">
              <div class="row">
                <div class="col-md-4 card-stat">
                  <h4>149 <small class="text-uppercase">Shots</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>1,763 <small class="text-uppercase">Follows</small></h4>
                </div>
                <div class="col-md-4 card-stat">
                  <h4>324 <small>D/Ls</small></h4>
                </div>
              </div>
            </div>
          </div>

          <hr class="invisible">

        </div>
      </div>
    </div>

    <section class="section-news" style="padding-bottom:2rem;">
      <div class="container">
        <h3 class="sr-only">News</h3>

        <!-- News
        ================================================== -->

        <div class="bg-inverse">
          <div class="row">
            <div class="col-md-6 p-r-0">
              <figure class="has-light-mask m-b-0 image-effect">
                <img src="https://images.unsplash.com/photo-1442328166075-47fe7153c128?q=80&fm=jpg&w=1080&fit=max" alt="Article thumbnail" class="img-fluid">
              </figure>
            </div>
            <div class="col-md-6 p-l-0">
              <article class="center-block">
                <span class="label label-info">Featured article</span>
                <br>
                <h5><a href="#">Design studio with product designer Peter Finlan <span class="icon-arrow-right"></span></a></h5>
                <p class="m-b-0">
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-tag"></span> Design Studio</span></a>
                  <a href="#"><span class="label label-default text-uppercase"><span class="icon-time"></span> 1 Hour Ago</span></a>
                </p>
              </article>
            </div>
          </div>
        </div>
      </div>
    </section>

    <h4 class="m-y-2 text-xs-center">Video JS</h4>

    <!-- Video JS
    ================================================== -->

    <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="img/video-poster.jpg" data-setup='{}'>
      <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
      <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
    </video>

    <hr class="invisible">

    <h4 class="m-y-2 text-xs-center">Vimeo (Bootstrap modal)</h4>

    <!-- VIMEO video
    ================================================== -->

    <figure class="has-light-mask">
      <a class="icon-play-button" href="#videoModal" data-toggle="modal" data-target="#videoModal">
        <span class="icon-play"></span>
      </a>
      <img class="img-fluid img-fluid-custom" src="img/video-poster.jpg" alt="Video poster">
    </figure>

    <hr class="invisible">

    <h4 class="m-y-2 text-xs-center">YouTube (Bootstrap modal)</h4>

    <!-- YOUTUBE video
    ================================================== -->

    <figure class="has-light-mask">
      <a id="youtube-trigger" class="icon-play-button" href="#" data-toggle="modal" data-target="#youtubeModal" data-video="http://www.youtube.com/embed/loFtozxZG0s">
        <span class="icon-play"></span>
      </a>
      <img class="img-fluid img-fluid-custom" src="img/video-poster.jpg" alt="Video poster">
    </figure>

    <hr class="invisible">

    <!-- WHITE Footer
    ================================================== -->

    <footer class="section-footer bg-white" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <hr class="invisible">

    <!-- DARK footer
    ================================================== -->

    <footer class="section-footer bg-inverse" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-5">
            <div class="media">
              <div class="media-left">
                <span class="media-object icon-logo display-1"></span>
              </div>
              <small class="media-body media-bottom">
                &copy; Land.io 2015. <br>
                Designed by Peter Finlan, developed by Taty Grassini, exclusively for Codrops.
              </small>
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <ul class="nav nav-inline">
              <li class="nav-item">
                <a class="nav-link" href="./index-carousel.html"><small>NEW</small> Slides<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active"><a class="nav-link" href="ui-elements.html">UI Kit</a></li>
              <li class="nav-item"><a class="nav-link" href="https://github.com/tatygrassini/landio-html" target="_blank">GitHub</a></li>
              <li class="nav-item"><a class="nav-link scroll-top" href="#totop">Back to top <span class="icon-caret-up"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- video modal -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="vimeo-play" src="https://player.vimeo.com/video/98330466?color=6c59b4&byline=0&portrait=0&badge=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <!-- video modal -->
    <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="youtubeModal" aria-hidden="true">
      <div class="modal-dialog modal-video" role="document">
        <div class="modal-content">
          <!-- 16:9 aspect ratio -->
          <div class="embed-responsive embed-responsive-16by9">
            <iframe id="youtube-play" class="embed-responsive-item" src="" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/landio.min.js"></script>
  </body>
</html>

    
     --}}