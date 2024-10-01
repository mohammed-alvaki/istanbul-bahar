<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic&display=swap" rel="stylesheet">


    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        header .top-bar {
            background-color: var(--orange-color);
            border-bottom-left-radius: 45px;
            border-bottom-right-radius: 45px;
        }

        .top-bar .icon-container {
            background-color: white;
            width: 50px;
            height: 35px;
            border-radius: 30px;
        }

        .top-bar .icon-container:hover i,
        .top-bar .icon-container:hover .pro-numb {
            color: var(--orange-color) !important;
        }


        .top-bar .phone-num {
            font-size: 1.3rem !important;
        }

        .top-bar .pro-numb {
            position: absolute;
            top: 0px;
            left: 5px;
        }

        .modal .search-inp {
            border-radius: 30px;
            z-index: 10000 !important;
        }

        .modal .search-inp:focus {
            outline: 0 !important;
        }

        .modal .modal-content {
            background-color: transparent;
            border: 0;
        }

        .logo {
            width: 180px;
        }

        header .nav-item {
            transition: all 0.3s linear;
            border-radius: 30px;
        }

        header .nav-item a {
            font-size: 0.8rem;
            color: gray;
            font-weight: bold;
            letter-spacing: 1px;
        }

        header .icons a {
            background-color: var(--dark-color);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s linear;
        }

        .offcanvas-start {
            width: 270px !important;
        }

        .btnToggler {
            background-color: transparent;

        }

        @media(min-width:992px) {
            header .nav-item a {
                font-size: 0.9rem;
            }
        }

        @media(min-width:1200px) {
            header .nav-item a {
                font-size: 0.8rem;
            }
        }

        @media(min-width:1400px) {
            header .nav-item a {
                font-size: 1rem;
            }
        }

        .offcanvas .nav-link {
            font-size: 0.8rem !important;
        }

        .offcanvas h2 {
            font-size: 1.3rem !important;
        }

        .offcanvas .btnClose {
            position: absolute;
            top: -5px;
            left: -15px;
            font-weight: bold;
            border: none;
            background-color: transparent;
        }

        .offcanvas .hr {
            height: 2px;
            width: 100%;
            background-image: linear-gradient(to right, transparent, black, transparent);
        }

        .offcanvas .nav-item:hover {
            background-color: #eee;
        }

        .offcanvas .tags a {
            background-color: var(--orange-color);
            font-size: 0.7rem;
        }

        .social-media span {
            background-color: var(--dark-color);
            border-radius: 50%;
            width: 35px;
            height: 35px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

</head>

<body>

    <header>
        <div class="container-fluid top-bar px-5 py-1 fixed-top">
            <div class="row">
                <div class="col-6 col-lg-2">
                    <div class="d-flex align-items-center h-100">
                        <a href="index.php"><i class="fa-solid fa-house-chimney fa-xl me-3" style="color: white;"></i></a>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn"><i
                                class="fa-solid fa-magnifying-glass fa-xl" style="color: white;"></i></button>
                    </div>
                </div>
                <div class="col-7 d-none d-lg-block">
                    <div class="d-flex align-items-center h-100"><span dir="ltr" class="text-white"><i
                                class="fa-brands fa-whatsapp fa-2xl" style="color: white;"></i> <span
                                class="phone-num">+90552 358 74
                                36</span></span>
                    </div>
                </div>
                <div class="col-6 col-lg-3 text-end">
                    <div class="d-flex align-items-center justify-content-end h-100">
                        <a href="my-account.php" class="icon-container text-decoration-none d-flex justify-content-center align-items-center"><i
                                class="fa-solid fa-user fa-lg" style="color: black;"></i></a>
                        <a href="forgot-password.php"
                            class="icon-container text-decoration-none d-flex justify-content-center align-items-center ms-3 position-relative">
                            <i class="fa-solid fa-cart-shopping fa-lg me-2" style="color: black;"></i> <span
                                class="pro-numb text-dark">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body text-center">
                        <input class="search-inp p-1 border-0 text-center" type="search" placeholder="بحث">
                    </div>
                </div>
            </div>
        </div>

        <div class="container py-2 mt-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-2 col-lg-1">
                            <div class="h-100 d-flex align-items-center">
                                <button class="btnToggler border-0 me-lg-5" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
                                    aria-label="Toggle navigation">
                                    <span><i class="fa-solid fa-bars-staggered fa-flip-both fa-2xl"
                                            style="color: var(--orange-color);"></i></span>
                                </button>
                            </div>
                        </div>

                        <div class="col-10 col-lg-2 text-center text-lg-start">
                            <a class="navbar-brand text-center mx-auto mx-lg-start" href="index.php"><img src="./imgs/logo.png"
                                    alt="logo"></a>
                        </div>
                        <div class="col-9 text-start d-none d-lg-block">
                            <nav class="navbar navbar-expand-lg d-none d-lg-block">
                                <ul class="navbar-nav  gap-1 gap-xl-3 flex-grow-1 ms-lg-3">
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="index.php">الرئيسية</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="store.php">المتجر</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="complete-order.php">إتمام الطلب
                                        </a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" aria-current="page" href="track-order.php">تتبع الطلب

                                        </a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="plog.php">
                                            المدونة</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="about-us.php">
                                            من نحن</a>
                                    </li>
                                    <li class="nav-item px-xl-2">
                                        <a class="nav-link" href="contact-us.php">
                                            اتصل بنا
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-md-none">
                    <div class="icons d-flex gap-2 mb-4 mt-3 d-md-none justify-content-center">
                        <a class="mobile" href="tel:+90552 358 74 36" target="_blank"><i
                                class="fa-solid fa-mobile-button fa-lg"></i></a>
                        <a class="mail" href="mailto:info@istbahar.com" target="_blank"><i
                                class="fa-solid fa-envelope fa-lg"></i></a>
                        <a class="messenger" href="https://m.me/" target="_blank"><i
                                class="fa-brands fa-facebook-messenger fa-lg"></i></a>
                        <a class="location" href="https://goo.gl/maps/xTvPydmes447dQ3e7" target="_blank"><i
                                class="fa-solid fa-location-dot fa-lg"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- offcanvas -->
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

        <div class="offcanvas-body">
            <div class="d-flex position-relative mb-3">
                <div class="img-cont mx-auto mt-2">
                    <img class="" src="./imgs/logo.png" alt="logo" style="width: 180px;">
                </div>
                <button type="button" class="btnClose" data-bs-dismiss="offcanvas" aria-label="Close"><i
                        class="fa-regular fa-circle-xmark fa-xl"></i></button>
            </div>
            <div class="hr"></div>

            <ul class="navbar-nav justify-content-center flex-grow-1 d-lg-none my-3">
                <li class="nav-item ps-2">
                    <a class="nav-link " aria-current="page" href="index.php">الرئيسية</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="store.php">المتجر</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" aria-current="page" href="complete-order.php">إتمام الطلب
                    </a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="plog.php">
                        المدونة</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="about-us.php">
                        من نحن</a>
                </li>
                <li class="nav-item ps-2">
                    <a class="nav-link" href="contact-us.php">
                        اتصل بنا
                    </a>
                </li>
            </ul>
            <h2 class="mb-4 mt-lg-4 ps-2">منتجاتنا</h2>
            <div dir="ltr" class="text-start mb-4 p-2 nav-item">
                <a class="nav-link text-decoration-none text-dark" href="store.php"><span>(11)</span> Uncategorized</a>
            </div>
            <div class="mb-4 p-2 nav-item"><a class="nav-link text-decoration-none text-dark"
                    href="plog.php">المدونة</a>
            </div>
            <h2 class="mb-4 ps-2">وسوم</h2>
            <div class="tags mb-5 ps-2">
                <a class="text-white text-decoration-none py-1 px-2" href="">الام المفاصل والعظام</a>
                <a class="text-white text-decoration-none py-1 px-2" href="">كريم فيدرو</a>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>