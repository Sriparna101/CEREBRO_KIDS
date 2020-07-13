
//  SECTION 4 LOADING

$(document).ready(function () {
    $("#assign").click(function () {
        $('#mainContent').empty();
        $("#mainContent").load('components/assignments.php');
    });
})
$(document).ready(function () {
    $("#profile").click(function () {
        $('#mainContent').empty();
        $("#mainContent").load('components/profilepage.php');
    });
});
$(document).ready(function () {
    $("#ffk").click(function () {
        $('#mainContent').empty();
        $("#mainContent").load('components/financeforkids.php');
    });
});
$(document).ready(function () {
    $("#backup").click(function () {
        $('#mainContent').empty();
        $("#mainContent").load('components/backupclasses.php');
    });
});
$(document).ready(function () {
    $("#contact").click(function () {
        $('#mainContent').empty();
        $("#mainContent").load('components/contactus.php');
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

// (document).ready(function () {
//     if (window.matchMedia('(max-width: 700px)').matches) {
//         // $(document).ready(function () {
//         $('.openBtn').click(function () {
//             $(this).css({ "display": "none" });
//             $('.closeBtn').css({ "display": "inline-block" });
//             $('.sideNavbar').css({
//                 "height": "auto",
//             });
//         });
//         // });
//         // $(document).ready(function () {
//         $('.closeBtn').click(function () {
//             $(this).css({ "display": "none" });
//             $('.openBtn').css({ "display": "inline-block" });
//             $('.sideNavbar').css({
//                 "height": "0",
//             });
//         });
//         // });
//     } else {
//         $('.openBtn').css({ "display": "none" });
//         $('.closeBtn').css({ "display": "none" });
//     }
// })


