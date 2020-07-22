<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cerebro Kids</title>
    <link rel="stylesheet" type=text/css href="./stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="./stylesheets/assign.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/index.js"></script>
    
</head>

<body>
    <div class="header">
    <div class="headerSection1">
        <img id="ckLogo" src="./ck_logo.png" alt="cerebro kids">
        <div class="verticalBar"></div>
        <div id="contactInfo">
            <div>hello@cerebrokids.com</div>
            <div>+91 99717 12678</div>
        </div>
    </div>
    <div class="headerSection2">
        TITAN
    </div>
    <div id="userInfo" class="headerSection3">
            <span >Hello User<? php
            $_SESSION['name']
            ?></span>
            <img src="./icon.jpeg" alt="user">
    </div>
        
        
    </div>
    <button class="openBtn">OPEN MENU</button>
    <button class="closeBtn">CLOSE MENU</button>
    <div class="sideNavbar">
        <div class="sideNavbarUsername">User name</div>
        <div class="searchBar">
            <button>Advanced</button>
            <input type="text" placeholder="search concept">
        </div>

        <a id="profile" class=" sideNavbar-btn">Profile</a>
        <a id="ffk" class=" sideNavbar-btn">Finance for Kids</a>
        <a id="backup" class=" sideNavbar-btn">Back-up Classes</a>
        <a id="assign" class=" sideNavbar-btn">Assignments</a>
        <a id="faq" class=" sideNavbar-btn">FAQs</a>
        <a id="contact" class=" sideNavbar-btn">Contact us</a>

    </div>
    <div class="topNavbar">
            <a id="topBtn-videos" href="#videos" class="topNavbar-btn">VIDEOS</a>
            <div class="whiteBar"></div>
            <a id="topBtn-worksheets" href="#workesheets" class="topNavbar-btn">WORKSHEETS</a>
            <div class="whiteBar"></div>
            <a  id="topBtn-articles" href="#articles"  class="topNavbar-btn">ARTICLES</a>
            <div class="whiteBar"></div>
            <div class="whiteBar"></div>
        </div>

    <div id="mainContent">
        

    </div>
    <footer>
        
            FOOTER
        
    </footer>



</body>
</html>