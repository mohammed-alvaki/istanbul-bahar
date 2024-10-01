<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        footer {
            background-color: var(--dark-color);
        }

        footer .social-media {
            border-radius: 15px;
        }

        footer .socail-media img {
            width: 200px;
        }

        footer .hr {
            height: 1px;
            width: 100%;
            background-image: linear-gradient(to right, transparent, black, transparent);
        }

        footer .icons a {
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

        footer .facebook:hover {
            transform: scale(1.1);
            background-color: #1877F2;
        }

        footer .twitter:hover {
            transform: scale(1.1);
            background-color: black;
        }

        footer .youtube:hover {
            transform: scale(1.1);
            background-color: #FF0000;
        }

        footer .instagram:hover {
            transform: scale(1.1);
            background-color: #bebcbc;
        }

        footer .related a {
            font-size: 0.9rem;
            transition: all 0.3s linear;
            text-decoration: none;
        }

        footer .contact p {
            font-size: 0.9rem;
        }

        footer .related a:hover {
            color: var(--orange-color) !important;
            margin-right: 7px;
            cursor: pointer;
        }

        footer h4 {
            letter-spacing: 1px;
        }

        footer h4::before {
            content: '';
            height: 4px;
            width: 55px;
            position: absolute;
            top: 35px;
            left: 50%;
            transform: translateX(-50%);
            background-color: var(--orange-color);
            border-radius: 5px;
        }

        footer .links a {
            background-color: white;
            color: var(--orange-color);
            font-size: 0.8rem;
            border-radius: 3px;
            text-decoration: none;
            padding: 3px 8px;
        }

        footer .rights {
            background-color: var(--orange-color);
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            font-size: 0.9rem;
        }

        .contact-whatsapp {
            position: fixed;
            right: 20px;
            bottom: 20px;
            z-index: 100000;
            border-radius: 50%;
            animation-name: fade-whats;
            animation-duration: 2.5s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }

        @keyframes fade-whats {
            0% {
                outline: 2px dashed rgba(124, 230, 21, 1);
                outline-offset: 0px;
            }

            80% {
                outline: 2px dashed rgba(124, 230, 21, 1);
            }

            100% {
                outline: 2px dashed rgba(124, 230, 21, 0);
                outline-offset: 20px;

            }
        }
    </style>
</head>

<body>

    <footer class="position-relative mt-5 pt-5">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="text-center mb-4 mb-lg-0">
                                <div class="social-media bg-white p-2 pb-5">
                                    <img class="mb-3" src="./imgs/logo.png" alt="">
                                    <div class="hr mb-4"></div>
                                    <div class="icons d-flex gap-2 justify-content-center">
                                        <a class="facebook" href="https://www.facebook.com"><i
                                                class="fa-brands fa-facebook-f fa-xl"></i></a>
                                        <a class="twitter" href="https:///www.x.com"><i
                                                class="fa-brands fa-x-twitter fa-xl"></i></a>
                                        <a class="youtube" href="https://www.youtube.com"><i
                                                class="fa-brands fa-youtube"></i></a>
                                        <a class="instagram" href="https://www.instagram.com"><i
                                                class="fa-brands fa-instagram fa-xl"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 d-none d-md-block mb-3">
                            <div class="related text-center text-white">
                                <h4 class="position-relative mb-4">وصلات مهمة</h4>
                                <div class="d-flex flex-column gap-2">
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3 d-none d-md-block mb-3">
                            <div class="related text-center text-white">
                                <h4 class="position-relative mb-4">وصلات مهمة</h4>
                                <div class="d-flex flex-column gap-2">
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                    <a class="text-secondary" href="plog.php">احدث الاخبار</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-3">
                            <div class="contact text-center text-white">
                                <h4 class="position-relative mb-4">تواصل معنا</h4>
                                <p class="opacity-75">اتصل بنا:</p>
                                <p dir="ltr">+90552 358 74 36</p>
                                <p class="opacity-75">البريد الالكتروني:</p>
                                <p class="text-white">info@istbahar.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-md-block">
                    <div class="col-12">
                        <div class="hr my-4 opacity-25 d-none d-md-block"></div>
                        <div class="links  text-center">
                            <a href="index.php">الرئيسية</a>
                            <a href="about-us.php">
                                من نحن</a>
                            <a href="contact-us.php">اتصل بنا</a>
                            <a href="privacy.php">سياسة الخصوصية</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="rights text-center mt-5 mt-md-3">
            <p class="text-white p-3 mb-0">&copy; جميع الحقوق محفوظة <a><span>pwww132</span></a> | برمجة و تصميم
                <a><span>Planet
                        WWW</span></a>
            </p>
        </div>
    </footer>

    <div class="contact-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=905523587436&text=https://planet-www.com/themes/pwww132%0A%0A %0A" target="_blank"><img src="./imgs/whatsapp.png" alt="whatsapp image" style="width: 50px; height:50px;"></a>
    </div>
</body>

</html>