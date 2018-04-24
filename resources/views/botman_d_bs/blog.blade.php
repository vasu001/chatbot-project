<!DOCTYPE html>
<!-- saved from url=(0059)https://www.w3schools.com/w3css/tryw3css_templates_blog.htm -->
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $bot->webTitle }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/template/Blog_files/w3.css">
    <link rel="stylesheet" href="/template/Blog_files/css">
    
</head>

<body class="w3-light-grey">

    <!-- w3-content defines a container for fixed size centered content, 
                        and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <!-- Header -->
        <header class="w3-container w3-center w3-padding-32">
        <h1><b>{{ $bot->welcomeHeading }}</b></h1>
        <p>{{ $bot->welcomeTextPara }}</p>
        </header>

        <!-- Grid -->
        <div class="w3-row">

            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/template/Blog_files/woods.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b>Post One</b></h3>
                        <h5>Written on, <span class="w3-opacity"><?php echo $mytime->toDateTimeString(); ?></span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-tag">0</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="/template/Blog_files/bridge.jpg" alt="Norway" style="width:100%">
                    <div class="w3-container">
                        <h3><b>Post Two</b></h3>
                        <h5>Written on, <span class="w3-opacity"><?php echo $mytime->toDateTimeString(); ?></span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments &nbsp;</b> <span class="w3-badge">2</span></span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="/template/SocialMedia_files/avatar2.png" style="width:100%">
                    <div class="w3-container w3-white w3-center">
                        <h4><b> {{ $bot->userName }} </b></h4>
                        <p>{{ $bot->aboutTextPara }}</p>
                    </div>
                </div>
                <hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="/template/Blog_files/workshop.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/template/Blog_files/gondol.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="/template/Blog_files/skies.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="/template/Blog_files/rock.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                        </p>
                    </div>
                </div>

                <!-- END Introduction Menu -->
            </div>

            <!-- END GRID -->
        </div><br>

        <!-- END w3-content -->
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
        <p>Powered by Chatbot &copy; 2018</p>
    </footer>


</body>

</html>
