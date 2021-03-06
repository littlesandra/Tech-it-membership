<?php require_once 'db.inc.php' ?>
<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Public Version - Header & Footer</title>


    <!-- bootstrap 4 link -------------------------------->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


    <!-- jquery link -------------------------------------->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>


    <!-- google font link ------------------------------->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <!-- CSS link ---------------------------->
    <link rel="stylesheet" href="CSS/0.body.css">
    <link rel="stylesheet" href="CSS/1.header.css">
    <link rel="stylesheet" href="CSS/2.footer.css">
    <link rel="stylesheet" href="CSS/3.btn_to_top.css">
    <link rel="stylesheet" href="./CSS/member_info1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS link ----------------------------------->
    <script src="JS/1.header.js"></script>
    <script src="JS/custom.js"></script>


    <style>
        * {
            /* outline: 1px solid red; */
        }
    </style>


</head>

<body class="bg-light">

    <!-- HD : Header (Navbar) ----------------------------------------------->

    <header>
        <nav class="navbar fixed-top hd_navbar">
            <!-- logo ------------------------>
            <a href="#" class="d-none d-lg-block">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- nav-link d-none d-lg-block-------------------------->
            <div class="hd_nav-link">

                <!-- title-link ---------------------->
                <div class="hd_title">

                    <!-- ???????????? -->
                    <div class="hd_title_link t1">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t2">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t3">
                        <a href="#">????????????</a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_title_link t4">
                        <a href="#">????????????</a>
                    </div>

                </div>

                <!-- icon-link --------------------->
                <div class="hd_icon">

                    <!-- ???????????? -->
                    <div class="hd_icon_link i1">
                        <a href="#">
                            <!-- <img src="./img/icon_compare-list.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 37.51 37.51">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <line class="cls-1" y1="17.85" x2="37.51" y2="17.85" />
                                        <line class="cls-1" x1="18.83" x2="18.83" y2="37.51" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- ???????????? -->
                    <div class="hd_icon_link i2">
                        <a href="#">
                            <!-- <img src="./img/icon_saved.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 38.14 35.05">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <path class="cls-1" d="M34,3.69c-4.13-4.13-10.83-3.25-15,.89-4.13-4.14-10.84-5-15-.89a10.59,10.59,0,0,0,0,15l15,15,15-15A10.57,10.57,0,0,0,34,3.69Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- ????????? -->
                    <div class="hd_icon_link i3">
                        <a href="#">
                            <!-- <img src="./img/icon_shopping-cart.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.28 39.27">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-linejoin: round;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <path class="cls-1" d="M0,1H8.08A1.51,1.51,0,0,1,9.55,2.16L15.38,27a1.5,1.5,0,0,0,1.47,1.16h24A1.51,1.51,0,0,0,42.31,27L46.24,8.12A1.51,1.51,0,0,0,44.77,6.3H14.92" />
                                        <line class="cls-1" x1="24.81" y1="12.44" x2="41.63" y2="12.44" />
                                        <line class="cls-1" x1="21.04" y1="16.79" x2="41.63" y2="16.79" />
                                        <line class="cls-1" x1="31.35" y1="22.07" x2="41.57" y2="22.07" />
                                        <circle class="cls-1" cx="19.29" cy="35.18" r="3.1" />
                                        <circle class="cls-1" cx="38.6" cy="35.18" r="3.1" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                    <!-- ???????????? / ?????? -->
                    <div class="hd_icon_link i4">
                        <a href="#">
                            <!-- <img src="./img/icon_member.svg" alt=""> -->
                            <svg class="svg_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 42.76 45.4">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: none;
                                            stroke: #2d2d2d;
                                            stroke-miterlimit: 10;
                                            stroke-width: 2px;
                                        }
                                    </style>
                                </defs>
                                <g id="??????_2" data-name="?????? 2">
                                    <g id="??????_2-2" data-name="?????? 2">
                                        <circle class="cls-1" cx="21.38" cy="9.67" r="8.67" />
                                        <path class="cls-1" d="M1.06,44.4H41.7C40.12,16.83,2.63,16.83,1.06,44.4Z" />
                                    </g>
                                </g>
                            </svg>
                        </a>
                    </div>

                </div>

                <!-- ???????????? / ???????????? ------------------------->
                <div class="hd_member_state">
                    <?php if (isset($_SESSION['user_name'])) { ?>
                        <?php echo $_SESSION['user_name'] ?>???<a href="./logout.php" id="logout" class="btn btn-link">??????</a>
                    <?php } else { ?>
                        <a href="./login.php">??????</a>???<a href="./signup.php">??????</a>
                    <?php } ?>
                </div>

            </div>

            <!-- mobile_nav d-lg-none------------------------------>
            <!-- ??????????????? -->
            <div class="hd_icon_link d-lg-none btn_toggler">
                <img src="./img/icon_menu2_black_24dp.svg" alt="">
            </div>

            <!-- LOGO -->
            <a href="#" class="d-lg-none">
                <div class="hd_logo">
                    <img src="./img/logo-png.png" alt="">
                </div>
            </a>

            <!-- ????????? -->
            <div class="hd_icon_link i4 d-lg-none">
                <a href="#"><img src="./img/icon_shopping-cart.svg" alt=""></a>
            </div>
        </nav>
    </header>

    <!-- ??????????????? -------------------------------------->

    <div class="hd_toggler d-lg-none d-none">
        <div class="toggler_box">

            <!-- icon-link -->
            <div class="tog_icon_box">
                <!-- ?????? / ?????? -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_member.svg" alt="">

                    <?php if (isset($_SESSION['user_name'])) { ?>
                        <?php echo $_SESSION['user_name'] ?>???<a href="./logout.php" id="logout" class="btn btn-link">??????</a>
                    <?php } else { ?>
                        <a href="./login.php">??????</a>???<a href="./signup.php">??????</a>
                    <?php } ?>

                </div>
                </a>

                <!-- ???????????? -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_saved.svg" alt="">
                    ????????????
                </div>
                </a>

                <!-- ???????????? -->
                <a href="#"></a>
                <div class="tog_icon_link">
                    <img class="tog_icon" src="./img/icon_compare-list.svg" alt="">
                    ????????????
                </div>
                </a>

            </div>

            <!-- title-link ---------------------->
            <div class="hd_title">

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

                <!-- ????????????_level_0 -->
                <div class="hd_title_link tog_lv_0">
                    <a href="#">????????????</a>
                </div>

                <!-- ??????????????????_level_1 ---------------->
                <div class="tog_lv_1 d-none">

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-1">
                        <p>????????????</p>

                        <!-- ????????????(????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-1">
                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">?????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">????????????/?????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">??????</a>
                            </div>
                        </div>

                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-2">
                        <p>????????????</p>

                        <!-- ????????????(????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-2">
                            <div class="tog_lv_4">
                                <a href="#">????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>
                        </div>

                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-3">
                        <p>????????????</p>

                        <!-- ????????????(????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-3">
                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">?????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">??????</a>
                            </div>
                        </div>

                    </div>

                    <!-- ???????????????_level_2 -->
                    <div class="tog_lv_2 lv2-4">
                        <p>???????????????</p>

                        <!-- ????????????(????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-4">
                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">???????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">??????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">????????????</a>
                            </div>
                        </div>
                    </div>

                    <!-- ????????????_level_2 -->
                    <div class="tog_lv_2 lv2-5">
                        <p>????????????</p>

                        <!-- ????????????(????????????)_level_3 -->
                        <div class="tog_lv_3 d-none lv3-5">
                            <div class="tog_lv_4">
                                <a href="#">????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">????????????</a>
                            </div>

                            <div class="tog_lv_4">
                                <a href="#">????????????</a>
                            </div>
                        </div>

                    </div>

                </div>

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

                <!-- ???????????? -->
                <div class="hd_title_link">
                    <a href="#">????????????</a>
                </div>

            </div>

        </div>

        <div class="toggler_box_right"></div>
    </div>



    <!-- ????????????????????????????????? ------------------->
    <!-- WP : wrap -->
    <!-- ????????? ???????????????wrap?????????(in 0.body.css) -->
    <div class="wrap">

        <!-- ????????? ???????????? ????????? -->

        <div class="page row">
            <!-- ????????? ??????????????? -->
            <div class="col-lg-4 col-12">
                <div class="personal ">
                    <div class="photo">
                        <img src="./img/messageImage_1628074308759.jpeg" alt="">
                    </div>
                    <a class="d-sm-block d-md-none" href="">???????????????</a>
                    <h4 class="d-none d-lg-block">Sophia</h4>
                    <div class="member_level d-none d-lg-block">????????????</div>
                </div>
            </div>
            <!-- ??????????????? -->
            <div class="col-lg-8 col-12">
                <div class="main">
                    <div class="bar">
                        <a class="col-3" href="./member_info1.php">
                            <i class="far fa-user-circle d-none d-lg-block"></i>
                            <br>
                            ????????????</a>
                        <a class="col-3" href="./member_info2.php">???????????????</a>
                        <a class="col-3" href="./member_info3.php">????????????</a>
                        <a class="col-3" href="./member_info4.php">????????????</a>
                    </div>
                    <hr>
                    <!-- ?????? -->
                    <br>

                    <h5 class="d-none d-lg-block">??????</h5>

                    <div class="m_personal">
                        <div class="d-sm-block d-md-none row justify-content-start">
                            <h5>Sophia</h5>
                            <div class="m_member_level">????????????</div>
                        </div>
                    </div>

                    <hr>
                    <!-- ??????input -->
                    <div class="member_input">
                        <form>
                            <fieldset disabled>
                                <div class="form-group row">
                                    <label for="inputUser" class="col-form-label">??????</label>
                                    <div class="col-lg-5 col-12">
                                        <input type="text" class="form-control" id="inputUser" placeholder="??????" value="Sophia">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationServer01" class="col-form-label">??????</label>
                                    <div class="col-lg-5 col-12">
                                        <input type="text" class="form-control is-valid" id="validationServer01" placeholder="aaa@gmail.com" value="sophialin@gmail.com" required>
                                        <div class="valid-feedback">
                                            ????????????
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputbday" class="col-form-label">??????</label>
                                    <div class="col-lg-5 col-12">
                                        <input type="text" class="form-control" id="inputbday" placeholder="?????????/???/???" value="1987/10/26">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="validationServer02" class=col-form-label">??????</label>
                                    <div class="col-lg-5 col-12">
                                        <input type="text" class="form-control is-valid" id="validationServer02" placeholder="????????????" value="0944-384-483" required>
                                        <div class="valid-feedback">
                                            ????????????
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <div class="form-group row">
                                <label for="inputPassword4" class="col-form-label">??????</label>
                                <div class="col-lg-5">
                                    <input type="password" class="form-control" id="inputPassword4" placeholder="???????????????" value="">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- ???????????? -->
                    <br>
                    <h5>??????????????????</h5>
                    <hr>
                    <div class="saved_address">
                        <form id="address_form" method="POST" action="save_address.php">
                            <div class="form-group">
                                <label for="exampleFormControlSelect1"></label>
                                <div class="col-lg-5">
                                    <select class="form-control" id="exampleFormControlSelect1">
                                        <option selected>Eason - ????????????????????????????????????151???</option>
                                        <option value="1">Darren - ????????????????????????????????????152???</option>
                                        <option value="2">Elaine - ????????????????????????????????????153???</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="exampleInputUser1">???????????????</label>
                                    <input type="text" class="form-control" id="exampleInputUser1" placeholder="??????" value="Sophia" name="user_name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="exampleInputphone1">???????????????</label>
                                    <input type="text" class="form-control" id="exampleInputPhone1" placeholder="????????????" value="0911123456" name="phone_number">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="exampleFormControlSelect2">??????</label>
                                    <select class="form-control" id="exampleFormControlSelect2">
                                        <option selected>??????</option>
                                        <option value="1">??????</option>
                                        <option value="2">??????</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="exampleFormControlSelect3">??????</label>
                                    <select class="form-control" id="exampleFormControlSelect3">
                                        <option selected>?????????</option>
                                        <option value="1">?????????</option>
                                        <option value="2">?????????</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="exampleInputAddress1">????????????</label>
                                    <input type="text" class="form-control" id="exampleInputAddress1" placeholder="??????" value="??????????????????390???2???" name="address">
                                </div>
                            </div>


                            <input type="button" class="address_btn" id="btn_address" value="??????">

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- ????????? ???????????? ????????? -->

    </div>
    <!-- ??????????????????????????? ----------------------->



    <!-- FT : Footer ----------------------------------------------->

    <footer class="footer d-flex">

        <!-- LOGO -------------------------------->
        <a class="ft_logo" href="#">
            <img src="img/logo-png.png" alt="">
        </a>

        <!-- ft_box_link ---------------------------->
        <div class="ft_box">

            <div class="d-flex ft_box_top">

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>

                <!-- footer_link ???????????? -->
                <p class="col ft_tt">
                    <a href="#">????????????</a>
                </p>
            </div>

            <div class="ft_box_bot">
                ?? copy right by Tech it
            </div>

        </div>

        <!-- ft_mobile_copy_right -->
        <div class="ft_mb_copy_right d-lg-none">
            <p>?? copy right by Tech it</p>
        </div>

    </footer>


    <!-- btn_toTop --------------------------------------------->

    <button class="btn_toTop btn">
        <p>TOP</p>
    </button>


    <!-- JQ ----------------------------------->
    <script>
        // btn_toTop ----------------------------------
        $(".btn_toTop").click(function() {
            $("html, body").animate({
                scrollTop: 0
            }, "slow");
            return false;
        });


        // PC : click & hover ----------------------------
        // mouseenter ------------------------------
        $('.t1').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t1').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t1>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t2').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t2').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t2>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t3').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t3').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t3>a').css('color', 'rgb(11, 141, 173)')
        });

        $('.t4').mouseenter(function() {
            console.log('navbar mouseenter');
            // pc
            $('.t4').css('border-bottom', '1px solid rgb(11, 141, 173)');
            $('.t4>a').css('color', 'rgb(11, 141, 173)')
        });


        // mouseleave --------------------------------
        $('.t1').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t1').css('border-bottom', '1px solid #707070');
            $('.t1>a').css('color', 'black')
        });

        $('.t2').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t2').css('border-bottom', '1px solid #707070');
            $('.t2>a').css('color', 'black')
        });

        $('.t3').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t3').css('border-bottom', '1px solid #707070');
            $('.t3>a').css('color', 'black')
        });

        $('.t4').mouseleave(function() {
            console.log('navbar mouseleave');
            // pc
            $('.t4').css('border-bottom', '1px solid #707070');
            $('.t4>a').css('color', 'black')
        });


        // toggler ???????????? ---------------------------------

        // open/close toggler
        $('.btn_toggler').click(function() {
            console.log('btn_toggler click');
            $('.hd_toggler').removeClass('d-none');
        });

        $('.toggler_box_right').click(function() {
            console.log('.toggler_box_right click');
            $('.hd_toggler').addClass('d-none');
        });

        // tog_lv_0 ????????????
        $('.tog_lv_0').click(function() {
            console.log('???????????? click');
            if ($('.tog_lv_1').hasClass('d-none')) {
                $('.tog_lv_1').removeClass('d-none');
            } else {
                $('.tog_lv_1').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1,.lv3-2,.lv3-3,.lv3-4,.lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
            // $('.tog_lv_0').css('color', 'white').css('background-color', 'wheat');
        });

        // tog_lv_2
        // tog_lv2-1 ????????????
        $('.lv2-1').click(function() {
            console.log('???????????? click');
            if ($('.lv3-1').hasClass('d-none')) {
                $('.lv3-1').removeClass('d-none');
                $('.lv2-1>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-1').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-2, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-2>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-2, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-1').addClass('d-none');
            $('.lv2-1>p').css('color', '#5a5a5a');
        });

        // tog_lv2-2 ????????????
        $('.lv2-2').click(function() {
            console.log('???????????? click');
            if ($('.lv3-2').hasClass('d-none')) {
                $('.lv3-2').removeClass('d-none');
                $('.lv2-2>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-2').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-3, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-3>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-3, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-2').addClass('d-none');
            $('.lv2-2>p').css('color', '#5a5a5a');
        });

        // tog_lv2-3 ????????????
        $('.lv2-3').click(function() {
            console.log('???????????? click');
            if ($('.lv3-3').hasClass('d-none')) {
                $('.lv3-3').removeClass('d-none');
                $('.lv2-3>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-3').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-4, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-4>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-4, .lv2-5').click(function() {
            console.log('?????????????????? click');
            $('.lv3-3').addClass('d-none');
            $('.lv2-3>p').css('color', '#5a5a5a');
        });

        // tog_lv2-4 ???????????????
        $('.lv2-4').click(function() {
            console.log('???????????? click');
            if ($('.lv3-4').hasClass('d-none')) {
                $('.lv3-4').removeClass('d-none');
                $('.lv2-4>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-4').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-5').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-5>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-5').click(function() {
            console.log('????????????????????? click');
            $('.lv3-4').addClass('d-none');
            $('.lv2-4>p').css('color', '#5a5a5a');
        });

        // tog_lv2-5 ????????????
        $('.lv2-5').click(function() {
            console.log('???????????? click');
            if ($('.lv3-5').hasClass('d-none')) {
                $('.lv3-5').removeClass('d-none');
                $('.lv2-5>p').css('color', 'rgb(11, 141, 173)');
            } else {
                $('.lv3-5').addClass('d-none');
            }

            // ????????????????????????
            $('.lv3-1, .lv3-2, .lv3-3, .lv3-4').addClass('d-none');
            $('.lv2-1>p, .lv2-2>p, .lv2-3>p, .lv2-4>p').css('color', '#5a5a5a');
        });

        $('.lv2-1, .lv2-2, .lv2-3, .lv2-4').click(function() {
            console.log('???????????? click');
            $('.lv3-5').addClass('d-none');
            $('.lv2-5>p').css('color', '#5a5a5a');
        });
    </script>

</body>

</html>