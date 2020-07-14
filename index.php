<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cerebro Kids</title>
    <link rel="stylesheet" type=text/css href="./stylesheets/style.css">
    <link rel="stylesheet" type="text/css" href="./stylesheets/main.css">
    <link rel="stylesheet" type="text/css" href="./stylesheets/assign.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./js/index.js"></script>

</head>

<body>
    <div class="header">
        <img id="ckLogo" src="./ck_logo.png" alt="cerebro kids">
        <div class="verticalBar"></div>
        <div id="contactInfo">
            <span>hello@cerebrokids.com</span>
            <span>+91 99717 12678</span>
        </div>
        <p id="headerTitle">TITAN</p>
        <div id="userInfo">
            <!-- <span>Hello User</span> -->
            <img src="./icon.jpeg" alt="user">
        </div>
    </div>
    <button class="openBtn">OPEN MENU</button>
    <button class="closeBtn">CLOSE MENU</button>
    <div class="sideNavbar">
        <!-- <div>User name</div> -->
        <div class="searchBar">
            <p>Advanced</p>
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
            <a href="#videos" id="topBtn-videos"class="topNavbar-btn">VIDEOS</a>
            <div class="whiteBar"></div>
            <a id="topBtn-worksheets" href="#workesheets" class="topNavbar-btn">WORKSHEETS</a>
            <div class="whiteBar"></div>
            <a  id="topBtn-articles" href="#articles"  class="topNavbar-btn">ARTICLES</a>
        </div>

    <div id="mainContent">
        

    </div>
    <footer>
        
            FOOTER
        
    </footer>



</body>
<script>
    const sidebar = document.querySelector('.sideNavbar');
    const btns = document.querySelectorAll('.sideNavbar-btn');

    sidebar.addEventListener('click', e => {

        btns.forEach(btn => {

            if (btn.getAttribute('id') === e.target.getAttribute('id'))
                btn.classList.add('active');
            else
                btn.classList.remove('active');
        });
    });
        //PAGE LOAD
</script>

</html>