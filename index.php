<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسية</title>

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://mah.htmcssjs.com/html5/components/swiper/">

    <!-- fancybox -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css?ver=5.0.0">


    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #hero-section .carousel-inner {
            border-top-left-radius: 30px;
            border-top-right-radius: 30px;
            border-top: 2px solid var(--orange-color);
        }

        #hero-section :where(.carousel-control-prev,
            .carousel-control-next) {
            opacity: 1 !important;
            filter: none !important;
            width: fit-content;
        }

        #hero-section .carousel-caption {
            width: 130px;
            height: fit-content;
            top: 50%;
            transform: translateY(-50%);
            margin: 0 auto 0 0;
        }

        #hero-section .carousel-caption :where(h1, h2, p) {
            text-shadow: 0 0 1px black;
            line-height: 25px;
        }

        #hero-section .carousel-caption :where(h1, h2) {
            font-size: 1.5rem;
            line-height: 30px;
            color: var(--dark-color);
        }

        .carousel-item img {
            transition: all 0.5s linear;
            animation-name: scaling;
            animation-duration: 5s;
            animation-timing-function: linear;
            animation-delay: 0.5s;
            transform: scale(1.4);
            animation-fill-mode: both;
        }

        @keyframes scaling {
            to {
                transform: scale(1);
            }
        }

        @media(min-width:768px) {
            #hero-section .carousel-caption {
                width: 330px;
            }
        }

        @media(min-width:1200px) {
            #hero-section .carousel-caption :where(h1, h2) {
                font-size: 2.2rem;
            }
        }

        /* -------------------------------- */
        #services-section {
            padding: 90px 0 50px;
            background-color: var(--dark-color);
        }

        #services-section .content {
            background-color: var(--orange-color);
            border-radius: 10px;
            height: 180px;
        }

        #services-section .img-cont {
            position: absolute;
            left: 0;
            bottom: 0;
        }

        #services-section .img-cont img {
            width: 160px;
            aspect-ratio: 5/7;
            transition: all 0.5s linear;
        }

        #services-section .content:hover {
            background-color: white;
        }

        #services-section .content:hover img {
            width: 180px;
        }

        #services-section .content:hover h3,
        #services-section .content:hover a.det {
            color: var(--orange-color) !important;
            border-color: var(--orange-color) !important;
        }

        #services-section .text {
            position: relative;
            z-index: 5;
        }

        #services-section a.det {
            background-color: white;
            width: fit-content;
            font-size: 0.8rem;
            border: 2px solid white;
        }

        /* --------------------------------- */

        #products-section {
            padding: 70px 0;
            background-color: #eeeeee;
        }

        #products-section h3 {
            color: var(--dark-color);
        }

        #products-section h3::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 40px;
            width: 80px;
            height: 3px;
            background-color: var(--dark-color);
        }

        #products-section h3::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 35px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            border: 3px solid white;
            background-color: var(--orange-color);
        }

        #products-section .pw-box {
            max-width: 340px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.05);
            height: 100%;
            margin: auto;
        }

        #products-section .pw-box img {
            width: 100%;
        }

        #products-section .service-info {
            background-color: white;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
        }

        #products-section .service-price a.addBtn {
            background-color: var(--dark-color);
            padding: 5px 20px;
            width: fit-content;
            border-radius: 5px;
            color: white !important;
            text-decoration: none;
            font-size: 0.9rem;
        }

        #products-section .service-info h4 {
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 70px;
        }

        #products-section :where(.pw-new-prev i,
            .pw-new-next i) {
            color: var(--orange-color);
        }

        #products-section .swiper-slide {
            position: relative;
            padding: 5px;
        }

        #products-section .swiper-slide .b-logo {
            padding: 5px;
            width: 40px;
            background-color: #eeeeee;
            box-shadow: 0 0 3px 3px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            position: absolute;
            transform: translateX(-50%);
            left: 50%;
            top: -20px;
            transition: all 0.4s linear;
        }

        #products-section .swiper-slide:hover .b-logo {
            transform-origin: 0% -50% !important;
            transform: translateY(5px) translateX(-50%) scale(1.1);
        }

        #products-section .btnMore {
            background-color: var(--dark-color);
            border-radius: 5px;
            transition: all 0.3s linear;
        }

        #products-section .btnMore:hover {
            background-color: black;
        }

        /* ----------------------------- */
        #video-section .ipad-frame {
            background-image: url('./imgs/video-wall.png');
            background-position: center;
            background-repeat: no-repeat;
            background-size: contain;
            overflow: hidden;
            width: 100%;
            aspect-ratio: 3/2;
        }

        #video-section i {
            font-size: 50px;
            aspect-ratio: 1/1;
            opacity: 0.8;
            transition: all 0.4s;
            border-radius: 50%;
        }

        #video-section i:hover {
            color: var(--dark-color) !important;
        }

        #video-section .hr {
            height: 2px;
            width: 100%;
            background-image: linear-gradient(to right, transparent, black, transparent);
        }

        #video-section .btnMore {
            background-color: var(--dark-color);
            border-radius: 5px;
        }

        #video-section .ipad-frame i {
            animation-name: fade;
            animation-duration: 2s;
            animation-timing-function: ease-in;
            animation-iteration-count: infinite;
            animation-fill-mode: forwards;
            animation-delay: 0.5s;
        }

        @keyframes fade {
            0% {
                box-shadow: 0 0 0 25px rgba(229, 39, 16, 0.6);
            }

            50% {
                box-shadow: 0 0 0 0 rgba(229, 39, 16, 0.3);
            }

            100% {
                box-shadow: 0 0 0px 25px rgba(229, 39, 16, 0.6);
            }
        }

        /* ---------------------------- */

        #plogs-section {
            padding: 70px 0;
        }

        #plogs-section h3 {
            color: var(--dark-color);
        }

        #plogs-section h3::before {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 40px;
            width: 80px;
            height: 3px;
            background-color: var(--dark-color);
        }

        #plogs-section h3::after {
            content: '';
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            top: 35px;
            width: 13px;
            height: 13px;
            border-radius: 50%;
            border: 3px solid white;
            background-color: var(--orange-color);
        }

        #plogs-section .pw-box {
            max-width: 340px;
            border-radius: 25px;
            overflow: hidden;
            box-shadow: 0 0 4px 4px rgba(0, 0, 0, 0.05);
            height: 100%;
            margin: auto;
        }

        #plogs-section .pw-box img {
            width: 100%;
        }

        #plogs-section .service-info {
            background-color: white;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 100%;
        }

        #plogs-section a.btnMore {
            background-color: var(--orange-color);
            padding: 5px 20px;
            width: fit-content;
            color: white !important;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.2s linear;
        }

        #plogs-section a.btnMore:hover {
            background-color: black;
        }

        #plogs-section .service-info h4 {
            font-size: 15px;
            letter-spacing: 1px;
            font-weight: 600;
        }

        #plogs-section hr {
            color: rgb(202, 199, 199);
            margin: 10px 0;
        }

        #plogs-section :where(.pw-new-prev1 i,
            .pw-new-next1 i) {
            color: var(--orange-color);
        }

        #plogs-section .swiper-slide {
            position: relative;
            padding: 5px;
        }

        #plogs-section p {
            text-align: justify;
            font-size: 0.8rem;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
            line-height: 1.2rem;
            height: 5rem;
        }


        #plogs-section .morePlugin {
            background-color: var(--dark-color);
            border-radius: 5px;
            transition: all 0.3s linear;
        }

        #plogs-section .morePlugin:hover {
            background-color: black;
        }
    </style>

<body>

    <?php include "header.php"; ?>

    <section id="hero-section">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="4500">
                    <img src="./imgs/slide1.jpg" class="d-block w-100" alt="image">
                    <div class="carousel-caption">
                        <h2 class="fw-bold mb-md-3">منتجات طبيعية عالية الجودة</h2>
                        <p class="d-none d-md-block text-secondary">الجودة في الإنتاج والعمل المنظم والخدمة المرتفعة
                            القيمة
                            والتسليم في
                            الموعد مع الأسعار المناسبة
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4500">
                    <img src="./imgs/slide2.jpg" class="d-block w-100" alt="image">
                    <div class="carousel-caption">
                        <h1 class="fw-bold mb-md-3">مدونة اسطنبول باهار</h1>
                        <p class="d-none d-md-block text-secondary">الجودة في الإنتاج والعمل المنظم والخدمة المرتفعة
                            القيمة
                            والتسليم في
                            الموعد مع الأسعار المناسبة
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev ms-2 ms-lg-5 d-none d-md-block" type="button"
                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span aria-hidden="true"><img src="./imgs/right-arrow.png" alt="" style="width: 50px; width:50px;"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next me-2 me-lg-5 d-none d-md-block" type="button"
                data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span aria-hidden="true"><img src="./imgs/left-arrow.png" alt="" style="width: 50px; width:50px;"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="services-section" class="px-2 px-lg-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative mb-4">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white">
                                العناية بالوجه</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative mb-4">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white"> العناية بالجسم</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s2.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="content d-flex justify-content-between position-relative">
                        <div class="text d-flex flex-column justify-content-between p-3">
                            <h3 class="text-white">
                                العناية بالشعر</h3>
                            <a class="det rounded-pill  text-center py-1 px-3 text-decoration-none text-dark"
                                href="">التفاصيل</a>
                        </div>
                        <div class="img-cont">
                            <img class="img-fluid" src="./imgs/s3.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="products-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center fw-bold position-relative mb-5">منتجاتنا</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-8 col-md-10">
                    <div class="swiper newSwiper pt-4">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/hair-300x300.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم شد الشفاه ومحيط العين</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/tajaiid.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم محاربة التجاعيد</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/pousse-growing.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>بوسي السيروم</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/black-castro-oil.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>زيت تكثيف الرموش</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/kozmagil.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كوزماجيل</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/collagen.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>الكولاجين الذهبي</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/hab-shabab.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم ازالة حب الشباب</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <img class="b-logo" src="./imgs/logo-icon.png" alt="logo">
                                <div class="pw-box">
                                    <img src="./imgs/clavora-white.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>Clavora White</h4>
                                        </div>

                                        <div class="service-price mx-auto">
                                            <a href="index.php" class="addBtn">Add to Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-3 d-flex align-items-center justify-content-center gap-1">
                    <div class="pw-new-prev">
                        <i class="fa-regular fa-circle-right fa-2xl"></i>
                    </div>
                    <div class="pw-new-next"><i class="fa-regular fa-circle-left fa-2xl"></i></div>
                </div>
                <div class="mt-5 text-center">
                    <a href="product.php" class="btnMore text-white text-decoration-none py-2 px-4">المزيد</a>
                </div>
            </div>
        </div>
        </div>

    </section>

    <section id="video-section" class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div
                                class="ipad-frame mb-lg-0 d-flex justify-content-center align-items-center mb-4 mb-md-0">
                                <a href="https://www.youtube.com/embed/lnADK3oG900?si=xE-I9KBjIer_N661"
                                    data-fancybox="gallery-video"><i class="fa-solid fa-circle-play"
                                        style="color: #e52710;"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="text-center">
                                <img class="mb-3" src="./imgs/logo.png" alt="" style="width: 200px;">
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد
                                    النص
                                    العربى،
                                    حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف
                                    التى
                                    يولدها
                                    التطبيق. إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد
                                    الفقرات
                                    كما
                                    تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع
                                    على وجه
                                    الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                                </p>
                                <div class="hr mb-4"></div>
                                <a href="product.php" class="btnMore text-decoration-none text-white py-1 px-2">المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="plogs-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center fw-bold position-relative mb-5">المدونة</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-11 col-sm-8 col-md-10">
                    <div class="swiper newSwiper1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو Jonviar Fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو Jonviar Fedro -معالج ومخفف الام المفاصل والعظام الم المفاصل
                                            والعظام قد يصعب شرحه خاصة اذا توزع بين الرقبه &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو-Jonviar fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق
                                            الغضروفي الاول. هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على &#8230;
                                        </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>كريم كلافورا- Clavora white</h4>
                                        </div>
                                        <hr>
                                        <p>كريم كلافورا- Clavora white-كريم تفتيح وتبييض البشرة والمناطق الحساسة كريم
                                            التبييض والتفتيح الاول كريم كلافورا تفتيح البشره اليوم هو احد &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو Jonviar Fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو Jonviar Fedro -معالج ومخفف الام المفاصل والعظام الم المفاصل
                                            والعظام قد يصعب شرحه خاصة اذا توزع بين الرقبه &#8230; </p>

                                        <div>
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="pw-box">
                                    <img src="./imgs/plogs.jpg" alt="image">
                                    <div class="service-info">
                                        <div class="title">
                                            <h4>جونفيار فيدرو-Jonviar fedro</h4>
                                        </div>
                                        <hr>
                                        <p>جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق
                                            الغضروفي الاول. هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على &#8230;
                                        </p>

                                        <div class="service-price">
                                            <a href="product.php" class="btnMore rounded-pill">المزيد</a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-3 d-flex align-items-center justify-content-center gap-1">
                    <div class="pw-new-prev1">
                        <i class="fa-regular fa-circle-right fa-2xl"></i>
                    </div>
                    <div class="pw-new-next1"><i class="fa-regular fa-circle-left fa-2xl"></i></div>
                </div>
                <div class="mt-5 text-center">
                    <a href="plog.php" class="morePlugin text-white text-decoration-none py-2 px-4">المزيد من الاضافات</a>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

    <!-- fancybox -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js?ver=5.0.0"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {});
    </script>


    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".newSwiper", {
            loop: true,
            centeredSlides: false,
            slidesPerView: 1,
            spaceBetween: 5,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: ".pw-new-next",
                prevEl: ".pw-new-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                    centeredSlides: false,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 70,
                    centeredSlides: false,
                },
            },
        });
    </script>

    <script>
        var swiper1 = new Swiper(".newSwiper1", {
            loop: true,
            centeredSlides: false,
            slidesPerView: 1,
            spaceBetween: 5,

            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },

            navigation: {
                nextEl: ".pw-new-next1",
                prevEl: ".pw-new-prev1",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                    centeredSlides: false,
                },
                1200: {
                    slidesPerView: 3,
                    spaceBetween: 70,
                    centeredSlides: false,
                },
            },
        });
    </script>


</body>

</html>