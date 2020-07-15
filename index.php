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
        <div id=" article" class="wrapper">
                    <div id="guts" class="contactus">
                                    
                        
                                        <!--    <nav class="navbar-nav navbar-expand-sm fixed-navbar">
                                                <ul class="navbar-nav mr-auto">
                                                    <li class="nav-item ni"><a class="nav-link nvr" href="video.php">VIDEOS</a></li>
                                                    <li class="nav-item blank"></li>
                                                    <li class="nav-item ni"><a class="nav-link nvr" href="worksheet.php">WORKSHEET</a></li>
                                                    <li class="nav-item blank"></li>
                                                    <li class="nav-item ni"><a class="nav-link nvr" href="article.php">ARTICLES</a></li>
                                                </ul>
                                            </nav>
                                            <!--<div class="col cs4gr"><a class="nav-link disabled" style="color:white;">VIDEOS</a></div>
                                            <div class="blank"></div>
                                            <div class="col cs4at"><a class="nav-link nlrat" href="worksheet.php">WORKSHEET</a></div>
                                            <div class="blank"></div>
                                            <div class="col cs4at"><a class="nav-link nlrat" href="article.php">ARTICLES</a></div>-->
        
                                        <div>
                                            <div  style="color:white;">Module - 1</div>
                                        </div><br>
                                        <div class="horizontal-scroll ml-1 mt-2">
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                        </div><br>
                                        <div>
                                            <div class="col" style="color:white;">Module - 2</div>
                                        </div><br>
                                        <div class="horizontal-scroll ml-1 mt-3">
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                        </div><br>
                                        <div>
                                            <div class="col" style="color:white;">Module - 3</div>
                                        </div><br>
                                        <div class="horizontal-scroll ml-1 mt-3">
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                                <video width="320" height="240" controls>
                                                  <source src="movie.mp4" type="video/mp4">
                                                  <source src="movie.ogg" type="video/ogg">
                                                Your browser does not support the video tag.
                                                </video>
                                        </div>
                                    </div>
                    </div>

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