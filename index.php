<?php
session_start();
?>
<html lang="he" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <title>NOYA</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.rtl.min.css" integrity="sha384-trxYGD5BY4TyBTvU5H23FalSCYwpLA0vWEvXXGm5eytyztxb+97WzzY+IWDOSbav" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css?v=4" crossorigin="anonymous">
</head>
<body>
    <div id="logos" class="cont">
        <div class="logos_cont">
            <div>
                <img src="./assets/svg/top_logo_right.svg" alt="" width="auto" height="70" class="align-text-top d-inline-block">
            </div>
            <div>
                <img src="./assets/svg/top_logo_left.svg" alt="" width="auto" height="70" class="align-text-top d-inline-block">
            </div>
        </div>
    </div>
    <div class="cont_fluid">
        <div id="main_video">
            <video id="video_player" autoplay muted loop>
                <source src="./assets/video/cover.mp4"  type="video/mp4">
            </video>
        </div>
    </div>
    <div class="cont_fluid main_text">
        <div class="birds_right"></div>
        <div class="cont">
            <div class="text_logo_outer">
                <h1 class="text">ברוכים הבאים למתחם נויה</h1>
                <div class="green">
                    <div class="green_block">
                        <span>השכונה</span>
                        <span>הצעירה</span>
                    </div>
                </div>
            </div>
            <div class="text_logo_text">
                <span>בשכונה החדשה של חברת אסיה סיירוס במערב גן יבנה תמצאו שפע של יתרונות: השכונה סמוכה לפארק גדול וירוק. המתפרס על פני שטח של 80 דונם.</span><br>
                <span>תושבי השכונה וילדיהם ייהנו מבני חינוך חדשים וחדשניים וממבני ציבור ותרבות יוקרתיים ומזמיניםץ אזור התעשייה הקיים, שיורחב ב- 300 דונמים נוספים, יספק מגוון רחב של אפשרויות תעסוקה אטרקטיביות. אזור תעשייה ומסחר נוסף לגן יבנה מתוכנן בהמשך.</span><br>
                <span>עבודות הפיתוח כבר בעיצומן - כביש חדש מהשכונה ואליה עתיד לאפשר גישה מהירה אל השכונה וממנה.</span>
            </div>
        </div>
        <div class="birds_left"></div>
    </div>
    <div class="cont_fluid main_carousel">
        <div class="cont">
            <div id="example_carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#example_carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#example_carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#example_carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="./assets/img/slide_1.jpg?v=2" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/slide_2.jpg?v=2" class="d-block w-100" alt="">
                  </div>
                  <div class="carousel-item">
                    <img src="./assets/img/slide_3.jpg?v=2" class="d-block w-100" alt="">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#example_carousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#example_carousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <div class="cont_fluid icons_list">
        <div class="cont">
            <div class="container-fluid icons_title">
                <h2 class="what_download">אילו חומרים תרצו להוריד?</h2>
            </div>
            <div class="container-fluid">
                <div class="icons" style="direction: rtl !important;">
                    <div class="icon_div">
                        <a href="javascript:void(0);" class="open_plans" data-bs-toggle="modal" data-bs-target="#plans_modal">
                            <img src="./assets/svg/ico_1.svg">
                            <span>תכניות</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#marketing_modal">
                            <img src="./assets/svg/ico_2.svg">
                            <span>חומר שיווקי</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="javascript:void(0);" class="open_plans_2" data-bs-toggle="modal" data-bs-target="#pics_modal">
                        <img src="./assets/svg/ico_3.svg">
                            <span>תמונות מהשטח</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/sale_contract.pdf" target="_blank">
                            <img src="./assets/svg/ico_4.svg">
                            <span>חוזה מכר</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/sales_specification.pdf" target="_blank">
                            <img src="./assets/svg/ico_5.svg">
                            <span>מפרט מכר</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/form4.pdf" target="_blank">
                            <img src="./assets/svg/ico_6.svg">
                            <span>היתר בניה + <br>טופס 4</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/tabo.pdf" target="_blank">
                            <img src="./assets/svg/ico_7.svg">
                            <span>נסח טאבו</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/ykoh.pdf" target="_blank">
                            <img src="./assets/svg/ico_8.svg">
                            <span>ייפוי כוח</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/chooseapr.pdf" target="_blank">
                            <img src="./assets/svg/ico_9.svg">
                            <span>תהליך בחירת <br> דירה</span>
                        </a>
                    </div>
                    <div class="icon_div">
                        <a href="./files/pricedira.pdf" target="_blank">
                            <img src="./assets/svg/ico_10.svg">
                            <span>מלאי דירות</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cont_fluid form_cont">
        <div class="cont">
            <div class="form_outer">
                <div class="form_title">
                    <span class="title">צרו קשר עכשיו</span>
                    <span>&nbsp;&nbsp;</span>
                    <span class="number">08-9359900</span>
                </div>
                <div class="form_form">
                    <div class="form_form_inner">
                        <input name="email" type="text" class="email_input" placeholder='דוא"ל' id="form_email">
                        <input name="phone" type="tel" class="phone_input" placeholder="טלפון" id="form_number">
                        <a href="javascript:void(0);" class="form_submit send_form" >שלח</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="cont_fluid bottom_logo">
        <div class="cont">
            <div class="bottom_logo_inner">
                <img src="./assets/svg/bottom_logo.svg" alt="">
            </div>
            <div></div>
        </div>
    </div>
    <div class="cont_fluid footer">
        <div class="cont">
            <div class="footer_inner">
                <div class="footer_logo_middle">
                    <img src="./assets/svg/footer_logo_middle.svg" alt="">
                </div>
                <div class="footer_logos">
                    <div class="footer_logo_left">
                        <span class="number">08-9359900</span>
                        <span class="email">info@asia-cyrus.co.il</span>
                        <span class="social">
                            <a href="https://www.facebook.com/AsiaCyrusIsrael/" target="_blank"><span class="iconify" data-icon="mdi-facebook" data-inline="false"></span></a>
                            <a href="https://www.instagram.com/asia.cyrus/" target="_blank"><span class="iconify" data-icon="mdi-instagram" data-inline="false"></span></a>
                        </span>
                    </div>
                    <div class="footer_logo_right">
                        <img src="./assets/svg/footer_logo_right.svg" alt="">
                    </div>
                </div>
                <div></div>
            </div>
            <div class="credits">
                <a href="http://baysbergteam.com/say/">DESIGNED & POWERED: SAY By BAYSBERGTEAM</a>
            </div>
        </div>
    </div>
    <div class="modal" id="plans_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">תכניות</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="list-group">
                <a href="./files/plans/plans.zip" target="_blank" class="list-group-item list-group-item-action">הורד הכל</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-346.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 1 – מגרש 346</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-347.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 2 – מגרש 347</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-348.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 3 – מגרש 348</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-349.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 4 – מגרש 349</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-350.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 5 – מגרש 350</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-351.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 6 – מגרש 351</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-352.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 7 – מגרש 352</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-353.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 8 – מגרש 353</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-354.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 9 – מגרש 354</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-355.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 10 – מגרש 355</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-356.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 11 – מגרש 356</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-357.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 12 – מגרש 357</a>
				<a href="./files/plans/17_16_Gan-Yavne-plans-358.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 13 – מגרש 358</a>
				<a href="./files/plans/7_50.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 14 – מגרשים 374-380 1:50</a>
				<a href="./files/plans/7_100.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 15 – מגרשים 374-380 1:100</a>
				<a href="./files/plans/7_250.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 16 – מגרשים 374-380 1:250</a>
				<a href="./files/plans/3_50.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 17 – מגרשים 371-373 1:50</a>
				<a href="./files/plans/3_100.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 18 – מגרשים 371-373 1:100</a>
				<a href="./files/plans/3_250.pdf" target="_blank" class="list-group-item list-group-item-action">קובץ 19 – מגרשים 371-373 1:250</a>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">סגור</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal" id="marketing_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">חומר שיווקי</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="list-group">
                <a href="./assets/img/new_img/all_pics.zip" download class="list-group-item list-group-item-action">הורד הכל</a>
				<a href="./assets/img/new_img/a1.jpg" download class="list-group-item list-group-item-action">תמונה 1</a>
				<a href="./assets/img/new_img/a2.jpg" download class="list-group-item list-group-item-action">תמונה 2</a>
				<a href="./assets/img/new_img/b1.jpg" download class="list-group-item list-group-item-action">תמונה 3</a>
				<a href="./assets/img/new_img/b2.jpg" download class="list-group-item list-group-item-action">תמונה 4</a>
				<a href="./assets/img/new_img/laha1.jpg" download class="list-group-item list-group-item-action">תמונה 5</a>
				<a href="./assets/img/new_img/laha2.jpg" download class="list-group-item list-group-item-action">תמונה 6</a>
				<a href="./assets/img/new_img/laha3.jpg" download class="list-group-item list-group-item-action">תמונה 7</a>
				<a href="./assets/img/new_img/doron1.jpg" download class="list-group-item list-group-item-action">תמונה 8</a>
				<a href="./assets/img/new_img/doron2.jpg" download class="list-group-item list-group-item-action">תמונה 9</a>
				<a href="./assets/img/new_img/02.jpg" download class="list-group-item list-group-item-action">תמונה 10</a>
				<a href="./assets/img/new_img/yvna1.jpg" download class="list-group-item list-group-item-action">תמונה 11</a>
				<a href="./assets/img/new_img/yvna2.jpg" download class="list-group-item list-group-item-action">תמונה 12</a>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">סגור</button>
            </div>
            </div>
        </div>
    </div>
    <div class="modal" id="pics_modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">תמונות מהשטח</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <div class="list-group">
                <a href="./assets/img/new_img/all_pics.zip" download class="list-group-item list-group-item-action">הורד הכל</a>
				<a href="./assets/img/new_img/097.jpg" download class="list-group-item list-group-item-action">תמונה 1</a>
				<a href="./assets/img/new_img/098.jpg" download class="list-group-item list-group-item-action">תמונה 2</a>
				<a href="./assets/img/new_img/DJI_0304.jpg" download class="list-group-item list-group-item-action">תמונה 3</a>
				<a href="./assets/img/new_img/DJI_0305.jpg" download class="list-group-item list-group-item-action">תמונה 4</a>
				<a href="./assets/img/new_img/DJI_0306.jpg" download class="list-group-item list-group-item-action">תמונה 5</a>
				<a href="./assets/img/new_img/DJI_0307.jpg" download class="list-group-item list-group-item-action">תמונה 6</a>
				<a href="./assets/img/new_img/DJI_0308.jpg" download class="list-group-item list-group-item-action">תמונה 7</a>
				<a href="./assets/img/new_img/DJI_0319.jpg" download class="list-group-item list-group-item-action">תמונה 8</a>
				<a href="./assets/img/new_img/DJI_0320.jpg" download class="list-group-item list-group-item-action">תמונה 9</a>
				<a href="./assets/img/new_img/DJI_0321.jpg" download class="list-group-item list-group-item-action">תמונה 10</a>
				<a href="./assets/img/new_img/DJI_0324.jpg" download class="list-group-item list-group-item-action">תמונה 11</a>
				<a href="./assets/img/new_img/DJI_0325.jpg" download class="list-group-item list-group-item-action">תמונה 12</a>
				<a href="./assets/img/new_img/DJI_0326.jpg" download class="list-group-item list-group-item-action">תמונה 13</a>
				<a href="./assets/img/new_img/DJI_0327.jpg" download class="list-group-item list-group-item-action">תמונה 14</a>
				<a href="./assets/img/new_img/DJI_0328.jpg" download class="list-group-item list-group-item-action">תמונה 15</a>
				<a href="./assets/img/new_img/DJI_0329.jpg" download class="list-group-item list-group-item-action">תמונה 16</a>
				<a href="./assets/img/new_img/yvna3.jpeg" download class="list-group-item list-group-item-action">תמונה 17</a>
				<a href="./assets/img/new_img/yvna4.jpeg" download class="list-group-item list-group-item-action">תמונה 18</a>
				<a href="./assets/img/new_img/yvna5.jpeg" download class="list-group-item list-group-item-action">תמונה 19</a>
				<a href="./assets/img/new_img/yvna6.jpeg" download class="list-group-item list-group-item-action">תמונה 20</a>
            </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">סגור</button>
            </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script>
		nl_pos = "bl";
		nl_dir = "./nl/";
		nl_contact = "n:ספי קייסי|p:0507393230|u:info+d:asia-cyrus.co.il‏";
        $(function() {
            var video = document.getElementById('video_player');
            video.play();

            $('#video_player').on('click', function() {
                video.muted = !video.muted;
            });

            $('.send_form').on('click', function(){
                var email = $('.email_input').val();
                var phone = $('.phone_input').val();

                if(email.length == 0) {
                    alert('יש להזין אימייל תקני');
                    return;
                }
                if(phone.length == 0) {
                    alert('יש להזין טלפון נייד או קווי');
                    return;
                }

                $.ajax({
                    url: "./send.php",
                    method: 'POST',
                    data: {
                        email: email,
                        phone: phone
                    },
                    cache: false,
                    success: function(response){
                        window.location.href = "./thankyou.php";
                    },
                    error: function(error){
                        console.log('error');
                    }
                });
            });
        });
    </script>
	<script src="./nagishli.js?v=2.3" charset="utf-8" defer></script>

</body>
</html>