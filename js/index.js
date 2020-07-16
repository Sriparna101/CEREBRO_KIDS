
//  SECTION 4 LOADING

$(document).ready(function () {
    $("#assign").click(function () {
        $(".sideNavbar-btn").removeClass('active');
        $(".topNavbar-btn").removeClass("activeTopbarBtn");

        $(this).addClass('active');
        $('#mainContent').empty();
        $("#mainContent").load('components/assignments.php');
    });
    $("#profile").click(function () {
        $(".sideNavbar-btn").removeClass('active');
        $(".topNavbar-btn").removeClass("activeTopbarBtn");

        $(this).addClass('active');
        $('#mainContent').empty();
        $("#mainContent").load('components/profilepage.php');
    });
    $("#ffk").click(function () {
        $(".sideNavbar-btn").removeClass('active');
        $(".topNavbar-btn").removeClass("activeTopbarBtn");

        $(this).addClass('active');
        $('#mainContent').empty();
        $("#mainContent").load('components/financeforkids.php');
    });
    $("#backup").click(function () {
        $(".sideNavbar-btn").removeClass('active');
        $(".topNavbar-btn").removeClass("activeTopbarBtn");

        $(this).addClass('active');
        $('#mainContent').empty();
        $("#mainContent").load('components/backupclasses.php');
    });
    $("#contact").click(function () {
        $(".sideNavbar-btn").removeClass('active');
        $(".topNavbar-btn").removeClass("activeTopbarBtn");

        $(this).addClass('active');
        $('#mainContent').empty();
        $("#mainContent").load('components/contactus.php');
    });
});

// TOP NAV BAR ACTION
$(document).ready(function () {
    $("#mainContent").load('components/videos.php');
    $("#topBtn-videos").addClass("activeTopbarBtn");

    $("#topBtn-videos").click(function () {
        $(".topNavbar-btn").removeClass("activeTopbarBtn");
        $(".sideNavbar-btn").removeClass('active');

        $(this).addClass("activeTopbarBtn");
        $('#mainContent').empty();
        $("#mainContent").load('components/videos.php');

    });
    $("#topBtn-worksheets").click(function () {
        $(".topNavbar-btn").removeClass("activeTopbarBtn");
        $(".sideNavbar-btn").removeClass('active');

        $(this).addClass("activeTopbarBtn");
        $('#mainContent').empty();
        $("#mainContent").load('components/worksheets.php');

    });
    $("#topBtn-articles").click(function () {
        $(".topNavbar-btn").removeClass("activeTopbarBtn");
        $(".sideNavbar-btn").removeClass('active');

        $(this).addClass("activeTopbarBtn");
        $('#mainContent').empty();
        $("#mainContent").load('components/articles.php');
    });
});
// SIDE-NAVBAR COLLAPSIBLE BUTTON FOR MOBILE VIEW


$(document).ready(function () {
    $('.openBtn').click(function () {
        $(this).css({ "display": "none" });
        $('.closeBtn').css({ "display": "inline-block" });
        $('.sideNavbar').css({
            "height": "auto",
        });
    });
});

$(document).ready(function () {
    $('.closeBtn').click(function () {
        $(this).css({ "display": "none" });
        $('.openBtn').css({ "display": "inline-block" });
        $('.sideNavbar').css({
            "height": "0",
        });
    });
});
