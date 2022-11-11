<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>isaar</title>
</head>

<body>
    <div class="sticky-top myNav dir navbar pt-2 px-2 row">
    <nav class="nav-icon container">
            <div class="d-flex logo1 dir align-items-center px-3">

                <button class="side-collapse">
                    <i class="fa fa-align-justify"></i>
                </button>

                <img class="logo navbar-brand" src="image/Bonyad_Shahid_Logo.png">
                <span class="text logo-text">
                    <b>سامانه ایثار من</b>
                    <br> (نسخه آزمایشی)
                </span>
            </div>
            <div class="d-flex dir1 top-left">
                <div class="dropdown">
                    <button class="btn btn1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-angle-down text"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">address</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">age</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">skills</a>
                        </li>
                    </ul>
                </div>
                <div class="profile">
                    <i class="fa fa-user mb0"></i>
                </div>
                <p class="text m-2">rasaco rasaco</p>
            </div>

        </nav>
    </div>



    <div class="row dir">
        <div class="sidebar1">
            <div id="side" class="sidebar col row">

                <ul>
                    <li class="side-item side-item1">
                        <a href="#">
                            <img class="sideimg" src="image/34.png">
                        </a>
                    </li>
                    <li class="side-item">
                        <a href="#">
                            <img class="sideimg" src="image/19.png">
                        </a>
                    </li>
                    <li class="side-item">
                        <a href="#">
                            <img class="sideimg" src="image/20.png">
                        </a>
                    </li>
                    <li class="side-item">
                        <a href="#">
                            <img class="sideimg" src="image/21.png">
                        </a>
                    </li>
                    <li class="side-item">
                        <a href="#">
                            <img class="sideimg" src="image/22.png">
                        </a>
                    </li>
                    <li class="side-item">
                        <a href="#">
                            <img class="sideimg" src="image/23.png">
                        </a>
                    </li>
                    <p class="side-text">خروج</p>
                </ul>


            </div>

        </div>

        <div class="page mx-0 dir1">
            <div class="main px-1 py-3">
                <nav class="navbar nav1 p-0">
                    <div class="container-fluid">
                        <p class="text1 px-5 pt-3">


                            <b> خدمات پرکاربرد</b>


                        </p>

                        <fieldset class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="search...">
                                <div class="input-group-prepend input-nav">
                                    <span class="input-group-text btn-inp" id="basic-addon1">
                                        <button class="input-btn" onclick="myfun()">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M14.3764 12.4769C16.0464 10.1337 15.8302 6.85958 13.728 4.75736C11.3848 2.41421 7.58586 2.41421 5.24271 4.75736C2.89957 7.10051 2.89957 10.8995 5.24271 13.2426C7.34494 15.3449 10.619 15.561 12.9622 13.8911L18.6777 19.6066L20.092 18.1924L14.3764 12.4769ZM12.3138 6.17157C13.8759 7.73367 13.8759 10.2663 12.3138 11.8284C10.7517 13.3905 8.21902 13.3905 6.65692 11.8284C5.09483 10.2663 5.09483 7.73367 6.65692 6.17157C8.21902 4.60948 10.7517 4.60948 12.3138 6.17157Z"
                                                    fill="rgb(184, 183, 183)" />
                                            </svg>
                                        </button>
                                    </span>

                                </div>
                            </div>
                        </fieldset>
                    </div>

                </nav>

                <div class="row row1 my-3">
                    <div class="countainer row">
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <button id="modal-1" class="mod">
                                    <svg class="svg">
                                        <path d="M10 5 L60 5 L60 70 L50 85 L10 85 Z " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M50 85 L50 70 L60 70 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M14 64 L56 64 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M14 71 L45 71 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M18 56 L52 56 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M22 14 L49 14 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M14 20 L30 20 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <path d="M34 20 L52 20 " style="fill:none; stroke-width:2.5; stroke:rgb(12, 11, 116); "></path>
                                        <!-- CAR -->
                                        <path d="M22 45 L17 45 L17 35 L24 27 L38 27 L45 35 L50 35 S50 35 54 39 L54 45 L49 45" style="fill:none; stroke-width:2.5; stroke:rgb(214, 149, 10); "></path>
                                        <circle cx="26" cy="45" r="4" stroke="rgb(214, 149, 10)" stroke-width="2" fill="none" />
                                        <circle cx="45" cy="45" r="4" stroke="rgb(214, 149, 10)" stroke-width="2" fill="none" />
                                        <path d="M30 45 L41 45 " style="fill:none; stroke-width:2.5; stroke:rgb(214, 149, 10) "></path>
                                        <path d="M24 27 L26 35 L45 35 " style="fill:none; stroke-width:2.5; stroke:rgb(214, 149, 10) "></path>

                                    </svg>
                                </button>
                                <div id="myModal1" class="modal1">

                                    <div class="modal1-content">
                                        <span class="close1">&times;</span>
                                        <label for="name">Enter your name</label>
                                        <br>
                                        <input type="text" class="mod-input" placeholder="search..." name="input-1" value="my-input">
                                        <button class="btn input-btn1" name="button-1" type="submit">send</button>
                                    </div>
                                </div>

                                <p class="head-text text-secondary">واگذاری خودرو</p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart  p-1 heart"></i>
                            <div class="box-align">
                                <button id="modal-2" class="mod">
                                    <img class="head-bt" src="image/Group-143.png">
                                </button>
                                <div id="myModal2" class="modal2">
                                    <div class="modal2-content">
                                        <span class="close2">&times;</span>
                                        <div>
                                            <label for="name">Enter your address</label>
                                            <br>
                                            <input type="text" class="mod-input" placeholder="search..." name="input-1">
                                            <button class="btn input-btn1" name="button-1" type="submit">send</button>

                                        </div>
                                    </div>
                                </div>
                                <p class="head-text text-secondary mt-2">فیش حقوقی ایثارگران </p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/users3.png">
                                <p class="head-text text-secondary mt-2">سامانه دیدار - نسخه سازمانی </p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/meeting2.png">
                                <p class="head-text text-secondary mt-2">سامانه دیدار - جامعه هدف </p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/destination2.png">

                                <p class="head-text text-secondary mt-2">سفرهای استانی </p>

                            </div>
                        </div>
                        <div class="box box-6">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/0.png">

                                <p class="head-text text-secondary mt-2">درخواست بازنشستگی جانبازان </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row row-card">

                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2">خدمات عمومی ایثارگران</p>
                        </div>


                        <div class="card-body">
                            <div class="box-inner">

                                <i class="fa fa-heart heart"></i>

                                <div class="d-flex dir">

                                    <img class="display" src="image/29.png">
                                    <p class="box-text text-secondary "> ارتباط با بنیاد</p>
                                </div>


                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/4.png">
                                        <p class="box-text text-secondary">صدور کارت</p>
                                    </div>
                                </div>

                            </div>
                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/1.png">
                                        <p class="box-text text-secondary "> پیگیری درخواست</p>
                                    </div>
                                </div>

                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/5.png">
                                        <p class="box-text text-secondary ">اشتغال</p>
                                    </div>
                                </div>

                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/2.png">
                                        <p class="box-text text-secondary"> ثبت و پیگیری شکایت </p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/6.png">
                                        <p class="box-text text-secondary ">پیگیری مشکلات</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/3.png">
                                        <p class="box-text text-secondary"> درخواست حج و اردو </p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/7.png">
                                        <p class="box-text text-secondary"> خلاصه پرونده</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2"> خدمات رفاعی و معیشتی</p>
                        </div>
                        <div class="card-body">
                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/35.png">
                                        <p class="box-text text-secondary mb-0 mtt"> فیش حقوقی ایثارگران </p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/12.png">
                                        <p class="box-text text-secondary mb-0 mtt"> ثبت و ویرایش شماره حساب</p>
                                    </div>
                                </div>
                            </div>


                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/9.png">
                                        <p class="box-text text-secondary "> مسکن </p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/13.png">
                                        <p class="box-text text-secondary "> درخواست هدیه ازدواج</p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/10.png">
                                        <p class="box-text text-secondary"> درخواست کمک معیشت </p>
                                    </div>
                                </div>
                            </div>

                            <div class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart"></i>
                                    <div class="d-flex dir">
                                        <img class="display" src="image/14.png">
                                        <p class="box-text text-secondary "> درخواست ماده38</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2">خدمات درمانی </p>
                        </div>

                        <div class="card-body">
                            <div class="box-inner">

                                <i class="fa fa-heart heart"></i>
                                <div class="d-flex dir">
                                    <img class="display" src="image/15.png">
                                    <p class="box-text text-secondary sm-tx"> آرتروز و پروتز </p>
                                </div>
                            </div>

                            <div class="box-inner">
                                <i class="fa fa-heart heart"></i>
                                <div class="d-flex dir">
                                    <img class="display" src="image/17.png">
                                    <p class="box-text text-secondary sm-tx"> خدمات بالینی در منزل</p>
                                </div>
                            </div>


                            <div class="box-inner">
                                <i class="fa fa-heart heart"></i>
                                <div class="d-flex dir">
                                    <img class="display" src="image/16.png">
                                    <p class="box-text text-secondary sm-tx"> معرفی نامه های درمانی </p>
                                </div>
                            </div>

                            <div class="box-inner">
                                <i class="fa fa-heart heart"></i>
                                <div class="d-flex dir">
                                    <img class="display" src="image/18.png">
                                    <p class="box-text text-secondary sm-tx"> تجهیزات پزشکی</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    </div>


    <script src="js/jquery-3.6.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/inner.js"></script>

    <script>
        $(document).ready(function () {
            $(".input-btn1").on('click', function () {
                $.ajax({
                    type: 'POST',
                    url: 'test.php',
                    data: 'my-input',
                    success: function () {
                        alert("save your information");
                    }
                });


            });


        });

    </script>

</body>

</html>