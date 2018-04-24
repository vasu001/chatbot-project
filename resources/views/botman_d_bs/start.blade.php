<!DOCTYPE html>
<!-- saved from url=(0067)https://www.w3schools.com/w3css/tryw3css_templates_startup.htm#team -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .gm-style .gm-style-mtc label,
        .gm-style .gm-style-mtc div {
            font-weight: 400
        }

    </style>
    <link type="text/css" rel="stylesheet" href="/template/StartUp_files/css">
    <style type="text/css">
        .gm-style .gm-style-cc span,
        .gm-style .gm-style-cc a,
        .gm-style .gm-style-mtc div {
            font-size: 10px
        }

    </style>
    <style type="text/css">
        @media print {
            .gm-style .gmnoprint,
            .gmnoprint {
                display: none
            }
        }

        @media screen {
            .gm-style .gmnoscreen,
            .gmnoscreen {
                display: none
            }
        }

    </style>
    <style type="text/css">
        .gm-style-pbc {
            transition: opacity ease-in-out;
            background-color: rgba(0, 0, 0, 0.45);
            text-align: center
        }

        .gm-style-pbt {
            font-size: 22px;
            color: white;
            font-family: Roboto, Arial, sans-serif;
            position: relative;
            margin: 0;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%)
        }

    </style>
    <title>{{ $bot->webTitle }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/template/StartUp_files/w3.css">
    <link rel="stylesheet" href="/template/StartUp_files/css(1)">
    <link rel="stylesheet" href="/template/StartUp_files/font-awesome.min.css">
    <style>
      

        body,
        html {
            height: 100%;
            line-height: 1.8;
        }

        /* Full height image header */

        .bgimg-1 {
            background-position: center;
            background-size: cover;
            background-image: url("/template/StartUp_files/mac.jpg");
            min-height: 100%;
        }

        .w3-bar .w3-button {
            padding: 16px;
        }

    </style>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/common.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/map.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/util.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/marker.js.download"></script>
    <style type="text/css">
        .gm-style {
            font: 400 11px Roboto, Arial, sans-serif;
            text-decoration: none;
        }

        .gm-style img {
            max-width: none;
        }

    </style>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/onion.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/stats.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/controls.js.download"></script>
    <script type="text/javascript" charset="UTF-8" src="/template/StartUp_files/QuotaService.RecordEvent"></script>
</head>

<body>

    <!-- Navbar (sit on top) -->
    <div class="w3-top">
        <div class="w3-bar w3-white w3-card" id="myNavbar">
            <a href="#home" class="w3-bar-item w3-button w3-wide">{{$bot->webpageBrand}}</a>
            <!-- Right-sided navbar links -->
            <div class="w3-right w3-hide-small">
                <a href="#about" class="w3-bar-item w3-button">ABOUT</a>
                <a href="#team" class="w3-bar-item w3-button"><i class="fa fa-user"></i> TEAM</a>
                <a href="#work" class="w3-bar-item w3-button"><i class="fa fa-th"></i> WORK</a>
                <a href="#pricing" class="w3-bar-item w3-button"><i class="fa fa-usd"></i> PRICING</a>
                <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> CONTACT</a>
            </div>
            <!-- Hide right-floated links on small screens and replace them with a menu icon -->

            <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
                            <i class="fa fa-bars"></i>
                            </a>
        </div>
    </div>

    <!-- Sidebar on small screens when clicking the menu icon -->
    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>

    <!-- Header with full-height image -->
    <header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
        <div class="w3-display-left w3-text-white" style="padding:48px">
            <span class="w3-jumbo w3-hide-small">{{$bot->welcomeHeading}}</span><br>
            <span class="w3-xxlarge w3-hide-large w3-hide-medium">{{$bot->welcomeHeadingDesignation}}</span><br>
            <span class="w3-large">{{$bot->welcomeTextPara}}</span>
            <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">Learn more and start today</a></p>
        </div>
        <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
            <i class="fa fa-facebook w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
    </header>

    <!-- About Section -->
    <div class="w3-container" style="padding:128px 16px" id="about">
        <h3 class="w3-center">ABOUT THE COMPANY</h3>
        <p class="w3-center w3-large">Key features of our company</p>
        <div class="w3-row-padding w3-center" style="margin-top:64px">
            <div class="w3-quarter">
                <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i>
                <p class="w3-large">Responsive</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Passion</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Design</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-quarter">
                <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
                <p class="w3-large">Support</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
            </div>
        </div>
    </div>

    <!-- Promo Section - "We know design" -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>{{$bot->aboutCatchPhrase}}</h3>
                <p>{{$bot->aboutCatchPhraseSideLine}}</p>
                <p><a href="#work" class="w3-button w3-black"><i class="fa fa-th">&nbsp;</i> View Our Works</a></p>
            </div>
            <div class="w3-col m6">
                <img class="w3-image w3-round-large" src="/template/StartUp_files/phone_buildings.jpg" alt="Buildings" width="700" height="394">
            </div>
        </div>
    </div>

    <!-- Team Section -->
    <div class="w3-container" style="padding:128px 16px" id="team">
        <h3 class="w3-center">THE TEAM</h3>
        <p class="w3-center w3-large">The ones who runs this company</p>
        <div class="w3-row-padding w3-grayscale" style="margin-top:64px">
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/template/StartUp_files/team2.jpg" alt="John" style="width:100%">
                    <div class="w3-container">
                        <h3>John Doe</h3>
                        <p class="w3-opacity">CEO &amp; Founder</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/template/StartUp_files/team1.jpg" alt="Jane" style="width:100%">
                    <div class="w3-container">
                        <h3>Anja Doe</h3>
                        <p class="w3-opacity">Art Director</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/template/StartUp_files/team3.jpg" alt="Mike" style="width:100%">
                    <div class="w3-container">
                        <h3>Mike Ross</h3>
                        <p class="w3-opacity">Web Designer</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
            <div class="w3-col l3 m6 w3-margin-bottom">
                <div class="w3-card">
                    <img src="/template/StartUp_files/team4.jpg" alt="Dan" style="width:100%">
                    <div class="w3-container">
                        <h3>Dan Star</h3>
                        <p class="w3-opacity">Designer</p>
                        <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
                        <p><button class="w3-button w3-light-grey w3-block"><i class="fa fa-envelope"></i> Contact</button></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section "Statistics" -->
    <div class="w3-container w3-row w3-center w3-dark-grey w3-padding-64">
        <div class="w3-quarter">
            <span class="w3-xxlarge">14+</span>
            <br>Partners
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">55+</span>
            <br>Projects Done
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">89+</span>
            <br>Happy Clients
        </div>
        <div class="w3-quarter">
            <span class="w3-xxlarge">150+</span>
            <br>Meetings
        </div>
    </div>

    <!-- Work Section -->
    <div class="w3-container" style="padding:128px 16px" id="work">
        <h3 class="w3-center">OUR WORK</h3>
        <p class="w3-center w3-large">What we've done for people</p>

        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_mic.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_phone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_drone.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_sound.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
            </div>
        </div>

        <div class="w3-row-padding w3-section">
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
            </div>
            <div class="w3-col l3 m6">
                <img src="/template/StartUp_files/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
            </div>
        </div>
    </div>

    <!-- Modal for full size images on click-->
    <div id="modal01" class="w3-modal w3-black" onclick="this.style.display=&#39;none&#39;">
        <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
        <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
            <img id="img01" class="w3-image">
            <p id="caption" class="w3-opacity w3-large"></p>
        </div>
    </div>

    <!-- Skills Section -->
    <div class="w3-container w3-light-grey w3-padding-64">
        <div class="w3-row-padding">
            <div class="w3-col m6">
                <h3>Our Skills.</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore.</p>
            </div>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                <div class="w3-grey">
                    <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pricing Section -->
    <div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
        <h3>PRICING</h3>
        <p class="w3-large">Choose a pricing plan that fits your needs.</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
                    <li class="w3-padding-16"><b>10GB</b> Storage</li>
                    <li class="w3-padding-16"><b>10</b> Emails</li>
                    <li class="w3-padding-16"><b>10</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 10</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
                    <li class="w3-padding-16"><b>25GB</b> Storage</li>
                    <li class="w3-padding-16"><b>25</b> Emails</li>
                    <li class="w3-padding-16"><b>25</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 25</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
            <div class="w3-third w3-section">
                <ul class="w3-ul w3-white w3-hover-shadow">
                    <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
                    <li class="w3-padding-16"><b>50GB</b> Storage</li>
                    <li class="w3-padding-16"><b>50</b> Emails</li>
                    <li class="w3-padding-16"><b>50</b> Domains</li>
                    <li class="w3-padding-16"><b>Endless</b> Support</li>
                    <li class="w3-padding-16">
                        <h2 class="w3-wide">$ 50</h2>
                        <span class="w3-opacity">per month</span>
                    </li>
                    <li class="w3-light-grey w3-padding-24">
                        <button class="w3-button w3-black w3-padding-large">Sign Up</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="w3-container w3-light-grey" style="padding:128px 16px" id="contact">
        <h3 class="w3-center">CONTACT</h3>
        <p class="w3-center w3-large">Lets get in touch. Send us a message:</p>
        <div class="w3-row-padding" style="margin-top:64px">
            <div class="w3-half">
                <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> {{$bot->location}}</p>
                <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> {{$bot->phone}}</p>
                <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: {{$bot->email}}</p>
                <br>
                <form action="#" target="_blank">
                    <p><input class="w3-input w3-border" type="text" placeholder="Name" required="" name="Name"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Email" required="" name="Email"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Subject" required="" name="Subject"></p>
                    <p><input class="w3-input w3-border" type="text" placeholder="Message" required="" name="Message"></p>
                    <p>
                        <button class="w3-button w3-black" type="submit">
                                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                                </button>
                    </p>
                </form>
            </div>
            <div class="w3-half">
                <!-- Add Google Maps -->
                <div id="googleMap" class="w3-greyscale-max" style="width: 100%; height: 510px; position: relative; overflow: hidden;">
                    <div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
                        <div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
                            <div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;">
                                <div style="z-index: 1; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                            <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -248, -95);">
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 512px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: 0px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; position: absolute; left: -256px; top: -256px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
                                            <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -248, -95);">
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: -256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
                                                <div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: -256px;"></div>
                                            </div>
                                        </div>
                                        <div style="width: 27px; height: 43px; overflow: hidden; position: absolute; left: -14px; top: -43px; z-index: 0;"><img alt="" src="/template/StartUp_files/spotlight-poi2.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    </div>
                                    <div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
                                        <div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -248, -95);">
                                            <div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(1)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(2)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(3)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(4)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(5)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(6)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(7)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(8)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(9)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(10)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                            <div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><img draggable="false" alt="" src="/template/StartUp_files/vt(11)" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
                                    <p class="gm-style-pbt"></p>
                                </div>
                                <div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
                                    <div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div>
                                    <div style="z-index: 4; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
                                            <div class="gmnoprint" style="width: 27px; height: 43px; overflow: hidden; position: absolute; opacity: 0.01; left: -14px; top: -43px; z-index: 0;"><img alt="" src="/template/StartUp_files/spotlight-poi2.png" draggable="false" usemap="#gmimap0" style="position: absolute; left: 0px; top: 0px; width: 27px; height: 43px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"><map name="gmimap0" id="gmimap0"><area href="javascript:void(0)" log="miw" coords="13.5,0,4,3.75,0,13.5,13.5,43,27,13.5,23,3.75" shape="poly" title="" style="cursor: pointer; touch-action: none;"></map></div>
                                        </div>
                                        <div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div>
                                    </div>
                                </div>
                            </div><iframe frameborder="0" src="/template/StartUp_files/saved_resource.html" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
                            <div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
                                <a target="_blank" href="https://maps.google.com/maps?ll=41.878114,-87.629798&amp;z=12&amp;t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" title="Click to see this area on Google Maps" style="position: static; overflow: visible; float: none; display: inline;">
                                    <div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="/template/StartUp_files/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div>
                                </a>
                            </div>
                            <div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 306px; top: 165px;">
                                <div style="padding: 0px 0px 10px; font-size: 16px;">Map Data</div>
                                <div style="font-size: 13px;">Map data ©2018 Google</div>
                                <div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" src="/template/StartUp_files/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                            </div>
                            <div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 208px; bottom: 0px; width: 154px;">
                                <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;">
                                    <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                        <div style="width: 1px;"></div>
                                        <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                    </div>
                                    <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2018 Google</span></div>
                                </div>
                            </div>
                            <div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
                                <div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2018 Google</div>
                            </div>
                            <div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 120px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div>
                            </div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" style="background: none; border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; top: 0px; right: 0px;"><img alt="" src="/template/StartUp_files/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button>
                            <div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
                                <div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
                                    <div style="width: 1px;"></div>
                                    <div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
                                </div>
                                <div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@41.878114,-87.629798,12z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div>
                            </div>
                            <div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;">
                                <div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;">
                                    <div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><button draggable="false" title="Zoom in" aria-label="Zoom in" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="/template/StartUp_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button>
                                        <div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Zoom out" aria-label="Zoom out" type="button" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; width: 28px; height: 27px; top: 0px; left: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img alt="" src="/template/template/StartUp_files/tmapctrl.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></button></div>
                                </div>
                                <div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none; position: absolute; left: 0px; top: 0px;">
                                    <div style="position: absolute; left: 1px; top: 1px;"></div>
                                    <div style="position: absolute; left: 1px; top: 1px;">
                                        <div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img alt="" src="/template/StartUp_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                        <div aria-label="Pegman is on top of the Map" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="/template/StartUp_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                        <div aria-label="Street View Pegman Control" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img alt="" src="/template/StartUp_files/cb_scout5.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    </div>
                                </div>
                                <div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;">
                                    <div title="Rotate map 90 degrees" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; display: none;"><img alt="" src="/template/StartUp_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                    <div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; top: 0px; cursor: pointer;"><img alt="" src="/template/StartUp_files/tmapctrl4.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
                                </div>
                            </div>
                            <div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;">
                                <div class="gm-style-mtc" style="float: left; position: relative;">
                                    <div role="button" tabindex="0" title="Show street map" aria-label="Show street map" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 25px; font-weight: 500;">Map</div>
                                    <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 31px; text-align: left; display: none;">
                                        <div draggable="false" title="Show street map with terrain" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img alt="" src="/template/StartUp_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Terrain</label></div>
                                    </div>
                                </div>
                                <div class="gm-style-mtc" style="float: left; position: relative;">
                                    <div role="button" tabindex="0" title="Show satellite imagery" aria-label="Show satellite imagery" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 46px; border-left: 0px;">Satellite</div>
                                    <div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 31px; text-align: left; display: none;">
                                        <div draggable="false" title="Show imagery with street names" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img alt="" src="/template/StartUp_files/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Labels</label></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="w3-center w3-black w3-padding-64">
        <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
        <div class="w3-xlarge w3-section">
            <i class="fa fa-facebook-official w3-hover-opacity"></i>
            <i class="fa fa-instagram w3-hover-opacity"></i>
            <i class="fa fa-snapchat w3-hover-opacity"></i>
            <i class="fa fa-pinterest-p w3-hover-opacity"></i>
            <i class="fa fa-twitter w3-hover-opacity"></i>
            <i class="fa fa-linkedin w3-hover-opacity"></i>
        </div>
        <p>Powered by Chatbot &copy; 2018</p>
    </footer>

    <!-- Add Google Maps -->
    <script>
        function myMap() {
            myCenter = new google.maps.LatLng(41.878114, -87.629798);
            var mapOptions = {
                center: myCenter,
                zoom: 12,
                scrollwheel: false,
                draggable: false,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);

            var marker = new google.maps.Marker({
                position: myCenter,
            });
            marker.setMap(map);
        }

        // Modal Image Gallery
        function onClick(element) {
            document.getElementById("img01").src = element.src;
            document.getElementById("modal01").style.display = "block";
            var captionText = document.getElementById("caption");
            captionText.innerHTML = element.alt;
        }


        // Toggle between showing and hiding the sidebar when clicking the menu icon
        var mySidebar = document.getElementById("mySidebar");

        function w3_open() {
            if (mySidebar.style.display === 'block') {
                mySidebar.style.display = 'none';
            } else {
                mySidebar.style.display = 'block';
            }
        }

        // Close the sidebar with the close button
        function w3_close() {
            mySidebar.style.display = "none";
        }

    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBy-mUaONnqJWo9OOpgpRV6rfJTa1Heyo4&callback=myMap"></script>

    <!--
                        To use this code on your website, get a free API key from Google.
                        Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
                        -->


</body>

</html>
