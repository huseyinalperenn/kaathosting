    @include('includes.header')
    <!-- ***** SLIDER ***** -->
    <div class="top-header item5 overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="wrapper">
                        <h1 class="heading">Shared Hosting</h1>
                        <h3 class="subheading col-sm-8">Blazing fast & stable hosting infrastructure</h3>
                        <div id="run-switch" class="run-switch">
                            <div class="mo">Monthly Price</div>
                            <div class="switch"></div>
                            <div class="an active">Anually Price</div>
                        </div>
                        <div class="included">
                            <h4 class="mb-3">All plans include</h4>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> c-Panel or Plesk</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Unlimited email</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Free SSL certificate</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Redundant DNS</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Powerful SSD</li>
                            </ul>
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Support 24/7/365</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** FEATURES DIVISION ***** -->
    <a class="gocontent godown gocheck" href="#scroll" >
        <img class="svg" src="./assets/fonts/svg/arrowdown.svg" height="80" alt="features">
        <span>Features</span>
    </a>
    <!-- ***** PRICING TABLES ***** -->
    <section class="pricing special sec-uping pb-5 bg-colorstyle specialposition">
        <div class="container">
            <div class="randomline">
                <div class="bigline"></div>
                <div class="smallline"></div>
            </div>
            <div class="row justify-content-end scrollme">
                @foreach($products as $product)
                <div class="col-sm-12 col-md-6 col-lg-4 animateme" data-when="enter" data-from="0" data-to="1" data-opacity="1" data-translatey="-20">
                    <div class="wrapper price-container text-start wow animated fadeInUp fast noshadow">
                        <div class="plans badge feat bg-pink">30% Discount</div>
                        <div class="top-content bg-seccolorstyle topradius">
                            <img class="svg mb-3" src="./assets/fonts/svg/cloudlinux.svg" alt="">
                            <div class="title">{{ $product["name"] }}</div>
                            <div class="fromer seccolor">annually get (30% discount)</div>
                            <div class="price-content">
                                <div class="price seccolor">
                                    <del class="c-grey seccolor"><small><sup class="coin seccolor">$</sup> <span class="value seccolor">88.24</span></small></del>
                                </div>
                                <div class="price">
                                    <sup class="coin mergecolor">$</sup>
                                    <span class="discount mergecolor">62.00</span>
                                    <small class="mergecolor">/</small><span class="period annually mergecolor">year</span>
                                </div>
                            </div>
                            <a href="{{ $product["url"] }}" class="btn btn-default-yellow-fill">Satın Al</a>
                        </div>
                        <ul class="list-info">
                            @foreach($product["description"] as $description)
                                <li>{!! $description !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach
                {{--<div class="col-sm-12 col-md-6 col-lg-4 animateme" data-when="span" data-from="0" data-to="1" data-opacity="1" data-translatey="50">
                    <div class="wrapper price-container text-start wow animated fadeInUp noshadow">
                        <div class="plans badge feat bg-grey">best value</div>
                        <div class="top-content bg-seccolorstyle topradius">
                            <img class="svg mb-3" src="./assets/fonts/svg/cloudlinux.svg" alt="">
                            <div class="title">Pro SSD</div>
                            <div class="fromer seccolor">annually get (20% discount)</div>
                            <div class="price-content">
                                <div class="price">
                                    <del class="c-grey seccolor"><small><sup class="coin seccolor">$</sup> <span class="value seccolor">112.99</span></small></del>
                                </div>
                                <div class="price">
                                    <sup class="coin mergecolor">$</sup>
                                    <span class="discount mergecolor">90.00</span>
                                    <small class="mergecolor">/</small><span class="period annually mergecolor">year</span>
                                </div>
                            </div>
                            <a href="http://inebur.com/whmcs/cart.php?a=add&pid=10&carttpl=antler" class="btn btn-default-yellow-fill">Order now</a>
                        </div>
                        <ul class="list-info bg-purple">
                            <li><i class="icon-servers"></i> <span>Web Alanı</span><br> <span>Limitsiz Web Alanı</span></li>
                            <li><i class="icon-speed"></i> <span>Trafik</span><br> <span>Limitsiz Aylık Trafik</span></li>
                            <li><i class="icon-emailopen"></i> <span>Eposta</span><br> <span>Limitsiz Eposta Hesabı</span></li>
                            <li><i class="icon-database"></i> <span>Veritabanı</span><br> <span>Limitsiz Veritabanı</span></li>
                            <li><i class="icon-domains"></i> <span>Alan Adı</span><br> <span>3 Alan Adı Barındırma</span></li>
                        </ul>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>
    <!-- ***** FEATURES ***** -->
    <section id="scroll" class="history-section feat01 sec-normal bg-colorstyle">
        <div class="container">
            <div class="randomline">
                <div class="bigline"></div>
                <div class="smallline"></div>
            </div>
            <div class="sec-main sec-bg1 bg-colorstyle noshadow nopadding">
                <div class="row">
                    <div class="col-md-12 col-lg-5 wow animated fadeInUp fast">
                        <img class="svg first" src="assets/patterns/dns.svg" alt="dns redundant">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                        <div class="info-content">
                            <h1 class="fw-bold mb-3 mergecolor">Redundant DNS</h1>
                            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
                        </div>
                        <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="info-content">
                            <h1 class="fw-bold mb-3 mergecolor">Remote Daily Backups</h1>
                            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
                        </div>
                        <a href="" class="btn btn-default-yellow-fill mt-3">Backup now</a>
                    </div>
                    <div class="col-md-12 col-lg-5 offset-lg-1 wow animated fadeInUp fast">
                        <img class="svg second" src="assets/patterns/backups.svg" alt="backups">
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-12 col-lg-5 wow animated fadeInUp fast">
                        <img class="svg third" src="assets/patterns/monitoring.svg" alt="monitoring 24/7/365">
                    </div>
                    <div class="col-md-12 col-lg-6 offset-lg-1">
                        <div class="info-content">
                            <h1 class="fw-bold mb-3 mergecolor">24/7/365 Monitoring</h1>
                            <p class="seccolor">But I must explain to you how all this mistaken idea of <a href="#" class="golink">denouncing pleasure</a> and praising pain was born and I will.</p>
                        </div>
                        <a href="" class="btn btn-default-yellow-fill mt-3">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <svg class="division-ontop bg-white d-none" viewBox="0 0 1440 150">
        <path fill="#F6F6F6" fill-opacity="1" d="M0,96L120,85.3C240,75,480,53,720,53.3C960,53,1200,75,1320,85.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
        </path>
    </svg>

    <!-- ***** WHY CHOOSE ANTLER ***** -->
    <section class="services sec-normal motpath sec-bg4 scrollme">
        <div class="container">
            <div class="service-wrap">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading">Why choose Antler for your hosting?</h2>
                        <p class="section-subheading">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="-100" data-easeinout="0">
                        <div class="service-section bg-colorstyle">
                            <div class="plans badge feat bg-pink">Softaculous</div>
                            <img class="svg" src="./assets/fonts/svg/select.svg" height="60" alt="">
                            <div class="title mergecolor">Easy 1-click-installer</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="100" data-easeinout="0">
                        <div class="service-section bg-colorstyle">
                            <img class="svg" src="./assets/fonts/svg/speed.svg" height="60" alt="">
                            <div class="title mergecolor">Superfast Websites</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident dolor. Lorem ipsum dolor sit amet, consectetur.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 animateme" data-when="enter" data-from="1" data-to="0" data-opacity="1" data-translatey="-100" data-easeinout="0">
                        <div class="service-section bg-colorstyle">
                            <div class="plans badge feat bg-pink">Free</div>
                            <img class="svg" src="./assets/fonts/svg/inverse.svg" height="60" alt="">
                            <div class="title mergecolor">Website Migrations</div>
                            <p class="subtitle seccolor">
                                Excepteur sint occaecat cupidatat non proident voluptate. Lorem ipsum dolor sit amet, consectetur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** SPECIFICATIONS ***** -->
    <section class="sec-normal sec-bg1 bg-colorstyle  nobottompadding">
        <div class="best-plans pricing">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="section-heading mergecolor">Hosting Technical Specifications</h2>
                        <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="table-responsive-lg">
                            <table class="table sample mt-5">
                                <thead>
                                <tr><td><span class="title">Software </span> <span class="badge bg-pink">PLUS</span></td><td><div class="title">Databases</div></td><td><div class="title">Additional Software</div></td></tr>
                                </thead>
                                <tbody>
                                <tr><td><div class="title-table" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="fas fa-check-circle me-2"></span> PHP 5.5/5.6/7.0/7.1</div></td><td><span class="fas fa-check-circle me-2"></span> MySQL 5.6</td><td><span class="fas fa-check-circle me-2"></span> Zend Engine</td></tr>
                                <tr><td><div class="title-table" data-bs-toggle="popover" data-bs-trigger="hover" data-bs-placement="top" data-bs-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus."><span class="fas fa-check-circle me-2"></span> Perl</div></td><td><span class="fas fa-check-circle me-2"></span> phpMyAdmin 4.6.6</td><td><span class="fas fa-check-circle me-2"></span> Zend Optimizer</td></tr>
                                <tr><td class="title-table"><span class="fas fa-check-circle me-2"></span> Python 2.6.6</td><td><span class="fas fa-check-circle me-2"></span> FTPES Supported</td><td><span class="fas fa-check-circle me-2"></span> Zend Guard Loader</td></tr>
                                <tr><td class="title-table"><span class="fas fa-check-circle me-3"></span> PostgreSQL</td><td><span class="fas fa-check-circle me-2"></span> MSSQL Stored Procedures</td><td><span class="fas fa-check-circle me-2"></span> ionCube Loader </td></tr>
                                <tr><td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td><td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td><td class="border-0"><a href="" class="btn btn-default-pink-fill">All Specs</a></td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <img class="blobright svg d-none" src="./assets/img/background/blob.svg" alt="Blob Background">
    <!-- ***** FAQ ***** -->
    <section class="sec-normal sec-bg2 bg-colorstyle">
        <div class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center">
                        <h2 class="section-heading mergecolor">Frequently Asked Questions Hosting</h2>
                        <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    </div>
                    <div class="col-sm-12">
                        <div class="accordion faq pt-5">
                            <div class="panel-wrap">
                                <div class="panel-title seccolor active">
                                    <span>What is Cloud Hosting?</span>
                                    <div class="float-end">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus c-pink"></i>
                                    </div>
                                </div>
                                <div class="panel-collapse" style="display: block;">
                                    <div class="wrapper-collapse">
                                        <div class="info">
                                            <ul class="list seccolor"><li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-wrap">
                                <div class="panel-title seccolor">
                                    <span>Does Shared Web Hosting include Email Hosting as well?</span>
                                    <div class="float-end">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus c-pink"></i>
                                    </div>
                                </div>
                                <div class="panel-collapse">
                                    <div class="wrapper-collapse">
                                        <div class="info">
                                            <ul class="list seccolor">
                                                <li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-wrap">
                                <div class="panel-title seccolor">
                                    <span>Is an upgrade possible from my current Linux Shared Hosting Plan?</span>
                                    <div class="float-end">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus c-pink"></i>
                                    </div>
                                </div>
                                <div class="panel-collapse">
                                    <div class="wrapper-collapse">
                                        <div class="info">
                                            <ul class="list seccolor"><li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-wrap">
                                <div class="panel-title seccolor">
                                    <span>Is there any money back guarantee with the Linux Web Hosting services?</span>
                                    <div class="float-end">
                                        <i class="fa fa-plus"></i>
                                        <i class="fa fa-minus c-pink"></i>
                                    </div>
                                </div>
                                <div class="panel-collapse">
                                    <div class="wrapper-collapse">
                                        <div class="info">
                                            <ul class="list seccolor"><li><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></li></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** STATISTICS ***** -->
    <section class="circle-section sec-normal sec-bg1 bg-seccolorstyle bottomhalfpadding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center">
                    <h2 class="section-heading mergecolor">Our Statistics</h2>
                    <p class="section-subheading mergecolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt consectetur adipiscing.</p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12 text-center pt-5">
                    <div class="col-sm-12 col-md-4 col-lg-4 float-start">
                        <div class="skill-section">
                            <div class="circle-wrapper">
                                <div class="circle-entry clearfix">
                                    <div class="circle center-block color-dark-2" data-startdegree="0" data-dimension="180" data-text="<strong class='number seccolor'>19.322</strong><div class='title-round'>Clients</div>" data-width="5" data-fontsize="17" data-percent="90" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="1"></div>
                                </div>
                                <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 float-start">
                        <div class="skill-section">
                            <div class="circle-wrapper">
                                <div class="circle-entry clearfix">
                                    <div class="circle center-block color-dark-2 seccolor" data-startdegree="0" data-dimension="180" data-text="<strong class='number seccolor'>9.510</strong><div class='title-round'>Equipment</div>" data-width="5" data-fontsize="17" data-percent="65" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="1"></div>
                                </div>
                                <p class="seccolor">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-4 float-start">
                        <div class="skill-section">
                            <div class="circle-wrapper">
                                <div class="circle-entry clearfix">
                                    <div class="circle center-block color-dark-2 seccolor" data-startdegree="0" data-dimension="180" data-text="<strong class='number seccolor'>1231</strong><div class='title-round'>Projects</div>" data-width="5" data-fontsize="17" data-percent="45" data-fgcolor="#808080" data-bgcolor="transparent" data-bordersize="1"></div>
                                </div>
                                <p class="seccolor">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('includes.footer')
