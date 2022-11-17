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
    <nav class="sticky-top myNav dir navbar px-3 pt-2" id="123">
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

        <div class="form-check form-switch">
            <input class="form-check-input bg-light" type="checkbox" id="nightModeSwitch">
            <label class="form-check-label" for="nightModeSwitch"></label>
        </div>


        <div class="d-flex dir1 top-left">
            
            <div class="profile">
                <i class="fa fa-user mb0"></i>
            </div>
            <p class="text m-2">rasaco rasaco</p>
        </div>

    </nav>



    <div class="row dir">
        <div class="sidebar1">
            <div id="side" class="sidebar col row">

                <ul class="ul-sidebar">
                    <li class="side-item side-item1">
                        <a href="#">
                            <img class="sideimg" src="image/index.png">
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
                                <input type="text" class="form-control" placeholder="جستجو...">
                                <div class="input-group-prepend input-nav">
                                    <span class="input-group-text btn-inp" id="basic-addon1">
                                        <button class="input-btn" onclick="myfun()">
                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M14.3764 12.4769C16.0464 10.1337 15.8302 6.85958 13.728 4.75736C11.3848 2.41421 7.58586 2.41421 5.24271 4.75736C2.89957 7.10051 2.89957 10.8995 5.24271 13.2426C7.34494 15.3449 10.619 15.561 12.9622 13.8911L18.6777 19.6066L20.092 18.1924L14.3764 12.4769ZM12.3138 6.17157C13.8759 7.73367 13.8759 10.2663 12.3138 11.8284C10.7517 13.3905 8.21902 13.3905 6.65692 11.8284C5.09483 10.2663 5.09483 7.73367 6.65692 6.17157C8.21902 4.60948 10.7517 4.60948 12.3138 6.17157Z" fill="rgb(184, 183, 183)" />
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
                                        <input type="text" class="mod-input mbidadfar" placeholder="search..." name="input-1" value="my-input">
                                        <button class="btn input-btn1 bg-info" name="button-1" type="submit">send</button>
                                    </div>
                                </div>

                                <p class="head-text text-grey">واگذاری خودرو</p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart  p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/Group-143.png">
                                <p class="head-text text-grey mt-2">فیش حقوقی ایثارگران </p>
                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <button id="ajax-btn" class="mod"><img class="head-bt" src="image/users3.png"></button>
                                <p class="head-text text-grey mt-2">سامانه دیدار - نسخه سازمانی </p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/meeting2.png">
                                <p class="head-text text-grey mt-2">سامانه دیدار - جامعه هدف </p>

                            </div>
                        </div>
                        <div class="box">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/destination2.png">

                                <p class="head-text text-grey mt-2">سفرهای استانی </p>

                            </div>
                        </div>
                        <div class="box box-6">
                            <i class="fa fa-heart p-1 heart"></i>
                            <div class="box-align">
                                <img class="head-bt" src="image/0.png">

                                <p class="head-text text-grey mt-2">درخواست بازنشستگی جانبازان </p>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="row row-card" id="j_card">

                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2">خدمات عمومی ایثارگران</p>
                        </div>


                        <div class="card-body">
                            <a href="#" class="box-inner">

                                <i class="fa fa-heart heart heart-display"></i>
                                <div class="d-flex dir icon-place">
                                    <img class="display  display1" src="image/29.png">
                                    <p class="box-text text-grey "> ارتباط با بنیاد</p>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir">
                                        <img class="display  display1" src="image/4.png">
                                        <p class="box-text text-grey">صدور کارت</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/1.png">
                                        <p class="box-text text-grey "> پیگیری درخواست</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/5.png">
                                        <p class="box-text text-grey ">اشتغال</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/2.png">
                                        <p class="box-text text-grey"> ثبت و پیگیری شکایت </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/6.png">
                                        <p class="box-text text-grey ">پیگیری مشکلات</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/3.png">
                                        <p class="box-text text-grey"> درخواست حج و اردو </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/7.png">
                                        <p class="box-text text-grey"> خلاصه پرونده</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>



                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2"> خدمات رفاعی و معیشتی</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir">
                                        <img class="display display1" src="image/35.png">
                                        <p class="box-text text-grey mb-0 mtt"> فیش حقوقی ایثارگران </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir">
                                        <img class="display display1" src="image/12.png">
                                        <p class="box-text text-grey mb-0 mtt"> ثبت و ویرایش شماره حساب</p>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/9.png">
                                        <p class="box-text text-grey "> مسکن </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/group-27.png">
                                        <p class="box-text text-grey "> درخواست هدیه ازدواج</p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/10.png">
                                        <p class="box-text text-grey"> درخواست کمک معیشت </p>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <div class="inner">
                                    <i class="fa fa-heart heart heart-display"></i>
                                    <div class="d-flex dir icon-place">
                                        <img class="display display1" src="image/14.png">
                                        <p class="box-text text-grey "> درخواست ماده38</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <div class="card">
                        <div class="nav-icon1">
                            <button class="btn card-btn">مشاهده همه</button>
                            <p class="box-text text0 mt-2">خدمات درمانی </p>
                        </div>

                        <div class="card-body">
                            <a href="#" class="box-inner">

                                <i class="fa fa-heart heart heart-display"></i>
                                <div class="d-flex dir icon-place">
                                    <img class="display display1" src="image/15.png">
                                    <p class="box-text text-grey sm-tx"> آرتروز و پروتز </p>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <i class="fa fa-heart heart heart-display"></i>
                                <div class="d-flex dir icon-place">
                                    <img class="display display1" src="image/17.png">
                                    <p class="box-text text-grey sm-tx"> خدمات بالینی در منزل</p>
                                </div>
                            </a>


                            <a href="#" class="box-inner">
                                <i class="fa fa-heart heart heart-display"></i>
                                <div class="d-flex dir icon-place">
                                    <img class="display display1" src="image/16.png">
                                    <p class="box-text text-grey sm-tx"> معرفی نامه های درمانی </p>
                                </div>
                            </a>

                            <a href="#" class="box-inner">
                                <i class="fa fa-heart heart heart-display"></i>
                                <div class="d-flex dir icon-place">
                                    <img class="display display1" src="image/18.png">
                                    <p class="box-text text-grey sm-tx"> تجهیزات پزشکی</p>
                                </div>
                            </a>
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
        var nightModeSwitch = document.getElementById("nightModeSwitch");
        var isNightModeEnabled = false;
        nightModeSwitch.addEventListener("click", function() {
            isNightModeEnabled = nightModeSwitch.checked;

            const myNav = document.querySelector('.myNav');
            myNav.classList.toggle('dark-mode');

            const texte = document.querySelectorAll(".text");
            for (let i = 0; i < texte.length; i++) {
                texte[i].classList.toggle('dark-mode');
            }

            const profile = document.querySelector('.profile');
            profile.classList.toggle('dark-mode');

            const sidecollapse = document.querySelector('.side-collapse');
            sidecollapse.classList.toggle('dark-mode');

            const sidetext = document.querySelector('.side-text');
            sidetext.classList.toggle('dark-mode');

            const sidebar1 = document.querySelector('.sidebar1');
            sidebar1.classList.toggle('dark-mode');

            const sideitem1 = document.querySelector('.side-item1');
            sideitem1.classList.toggle('dark-mode');

            const main = document.querySelector('.main');
            main.classList.toggle('dark-mode');

            const nav1 = document.querySelector('.nav1');
            nav1.classList.toggle('dark-mode');

            const text1 = document.querySelector('.text1');
            text1.classList.toggle('dark-mode');

            const formcontrol = document.querySelector('.form-control');
            formcontrol.classList.toggle('dark-mode');

            const boxs = document.querySelectorAll(".box");
            for (let i = 0; i < boxs.length; i++) {
                boxs[i].classList.toggle('dark-mode');
            }

            const texts = document.querySelectorAll(".text0");
            for (let i = 0; i < texts.length; i++) {
                texts[i].classList.toggle('dark-mode');
            }

            const cardbtn = document.querySelectorAll(".card-btn");
            for (let i = 0; i < cardbtn.length; i++) {
                cardbtn[i].classList.toggle('dark-mode');
            }

            const card = document.querySelectorAll(".card");
            for (let i = 0; i < card.length; i++) {
                card[i].classList.toggle('dark-mode');
            }

            const boxinner = document.querySelectorAll(".box-inner");
            for (let i = 0; i < boxinner.length; i++) {
                boxinner[i].classList.toggle('dark-mode');
            }

            const textgrey = document.querySelectorAll(".text-grey");
            for (let i = 0; i < textgrey.length; i++) {
                textgrey[i].classList.toggle('dark-mode');
            }

            const heart = document.querySelectorAll(".heart");
            for (let i = 0; i < heart.length; i++) {
                heart[i].classList.toggle('dark-mode');
            }

            const mod = document.querySelectorAll(".mod");
            for (let i = 0; i < mod.length; i++) {
                mod[i].classList.toggle('dark-mode');
            }
        });

        var item = document.getElementById("ajax-btn");

        item.addEventListener('click', printDetails);

        function printDetails() {
            $.ajax({
                type: 'GET',
                url: 'getservice.php',
                dataType: "json",
                success: function(result) {
                    const j_div1 = document.createElement("div");
                    document.getElementById("j_card").appendChild(j_div1);
                    console.log(isNightModeEnabled);
                    if (isNightModeEnabled) {
                        j_div1.classList.add("dark-mode");
                    }
                    j_div1.classList.add("card");
                    j_div1.id = "j_div1";

                    const j_div1_2 = document.createElement("div");
                    j_div1.appendChild(j_div1_2);
                    if (isNightModeEnabled) {
                        j_div1_2.classList.add("dark-mode");
                    }
                    j_div1_2.classList.add("nav-icon1");
                    j_div1_2.classList.add("dir");
                    j_div1_2.id = "j_div1_2";

                    const para = document.createElement("p");
                    para.innerHTML = result.title;
                    j_div1_2.appendChild(para);
                    if (isNightModeEnabled) {
                        para.classList.add("dark-mode");
                    }
                    para.classList.add("box-text");
                    para.classList.add("text0");
                    para.classList.add("mt-2");
                    para.id = "para";

                    const btn1_2 = document.createElement("button");
                    btn1_2.innerHTML = "مشاهده همه";
                    j_div1_2.appendChild(btn1_2);
                    btn1_2.classList.add("btn");
                    if (isNightModeEnabled) {
                        btn1_2.classList.add("dark-mode");
                    }
                    btn1_2.classList.add("card-btn");

                    const cardbody = document.createElement("div");
                    j_div1.appendChild(cardbody);
                    cardbody.classList.add("card-body");
                    cardbody.id = "cardbody";

                    for (let i = 0; i < result['lists'].length; i++) {
                        const j_div = document.createElement("div");
                        cardbody.appendChild(j_div);
                        if (isNightModeEnabled) {
                            j_div.classList.add("dark-mode");
                        }
                        j_div.classList.add("box-inner");

                        const a_tag = document.createElement("a");
                        a_tag.href = result['lists'][i]['link'];
                        a_tag.classList.add("d-flex");
                        a_tag.classList.add("dir");
                        a_tag.classList.add("place-j-icon");
                        j_div.appendChild(a_tag);

                        const img = document.createElement("img");
                        img.classList.add("display");
                        img.src = result['lists'][i]['icon'];
                        a_tag.appendChild(img);

                        const item_name = result['lists'][i]['title'];
                        const tx = document.createElement("p");
                        tx.innerHTML = item_name;
                        tx.classList.add("box-text");
                        if (isNightModeEnabled) {
                            tx.classList.add("dark-mode");
                        }
                        tx.classList.add("text-grey");
                        a_tag.appendChild(tx);
                    }
                }
            })
        };
    </script>
    <script>
        $(document).ready(function() {
            $(".input-btn1").on('click', function() {
                //console.log($('.mbidadfar').val());
                $.ajax({
                    type: 'POST',
                    url: 'test.php',
                    data: {
                        'my-input': $('.mbidadfar').val()
                    },
                    success: function(result) {
                        alert(result);
                    }
                });
            });
        });
    </script>

</body>

</html>