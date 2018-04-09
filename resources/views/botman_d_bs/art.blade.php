<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>{{ $bot->webname }}</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/template/Art_files/w3.css">
    <link href="/template/Art_files/css" rel="stylesheet" type="text/css">
    <style>
        body {
            font-family: "Raleway", Arial, sans-serif
        }

        .w3-row img {
            margin-bottom: -8px
        }

    </style>
</head>

<body>

    <!-- !PAGE CONTENT! -->
    <div class="w3-content" style="max-width:1500px">

        <!-- Header -->
        <header class="w3-container w3-xlarge w3-padding-24">
            <a href="#" class="w3-left w3-button w3-white">{{$bot->name}}'s ART</a>
            <a href="#about" class="w3-right w3-button w3-white">About</a>
        </header>

        <!-- Photo Grid -->
        <div class="w3-row">
            <div class="w3-half">
                <img src="/template/Art_files/streetart.jpg" style="width:100%">
                <img src="/template/Art_files/streetart2.jpg" style="width:100%">
                <img src="/template/Art_files/streetart5.jpg" style="width:100%">
            </div>

            <div class="w3-half">
                <img src="/template/Art_files/streetart3.jpg" style="width:100%">
                <img src="/template/Art_files/streetart4.jpg" style="width:100%">
            </div>
        </div>

        <!-- End Page Content -->
    </div>

    <!-- Footer / About Section -->
    <footer class="w3-light-grey w3-padding-64 w3-center" id="about">
        <h2>About</h2>
        <img src="/template/Art_files/boy.jpg" class="w3-image w3-padding-32" width="300" height="300">
        <form style="margin:auto;width:60%" action="https://www.w3schools.com/action_page.php" target="_blank">
            <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
            <p class="w3-large w3-text-pink">Do not hesitate to contact me!</p>
            <div class="w3-section">
                <label><b>Name</b></label>
                <input class="w3-input w3-border" type="text" required="" name="Name">
            </div>
            <div class="w3-section">
                <label><b>Email</b></label>
                <input class="w3-input w3-border" type="text" required="" name="Email">
            </div>
            <div class="w3-section">
                <label><b>Message</b></label>
                <input class="w3-input w3-border" required="" name="Message">
            </div>
            <button type="submit" class="w3-button w3-block w3-dark-grey">Send</button>
        </form>
        <br>
        <p>Copyright &copy; 2018 by {{$bot->name}}</a>
        </p>
    </footer>
</body>

</html>
