<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتج</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #bread-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #bread-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #bread-section .breadcrumb>.breadcrumb-item:nth-child(2) a {
            color: var(--orange-color);
        }

        #bread-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #content-section .img-cont img {
            border-radius: 15px;
        }

        #content-section .sub-title {
            border-radius: 20px;
            border: 1px solid #ccc;
        }

        #content-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #content-section .social-media i {
            font-size: 15px;
        }

        #content-section .whatsapp {
            background-color: #25D366;
        }

        #content-section .linkedin {
            background-color: #0077B5;
        }

        #content-section .twitter {
            background: black;
        }

        #content-section .facebook {
            background-color: #1877F2;
        }

        #content-section .pinterest {
            background-color: #E60023;
        }

        #content-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #content-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #content-section .social-media i {
                font-size: 16px;
            }

            #content-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }

        #content-section .myRow {
            background-color: #eee;
            border-radius: 20px;
            border: 1px solid #ccc;

        }

        #content-section .views span:first-child {
            border: 1px solid;
            padding: 3px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
        }

        #content-section.views-num {
            font-size: 0.8rem;
        }

        #content-section .demo {
            font-size: 0.9rem;
            border: 0;
            box-shadow: rgba(0, 0, 0, 0.3);
        }

        #content-section .text p {
            font-size: 0.9rem;
            line-height: 22px;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="bread-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 d-none d-md-block">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="plog.php">المدونة</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">جونفيار فيدرو-Jonviar
                                fedro
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="img-cont mb-3 mb-md-0">
                                <img class="w-100" src="./imgs/plogs.jpg" alt="imgs">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="sub-title p-3 text-center fs-3 mb-md-3">جونفيار فيدرو-Jonviar fedro</h2>
                            <p class="demo myRow p-3 d-none d-md-block">
                                جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق الغضروفي الاول. هو
                                تركيبة غنية بمادة (الجلوكزامين) التي تعمل على …</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="myRow d-flex justify-content-between align-items-center mt-4 p-3">
                                <div class="views d-flex align-items-center gap-2">
                                    <span class="d-none d-md-flex justify-content-center align-items-center"><i
                                            class="fas fa-eye fa-lg"></i></span>
                                    <span class="views-num">13 مشاهدات</span>
                                </div>
                                <div class="social-media d-flex align-items-center gap-1">
                                    <a class="share d-none d-md-flex me-2">
                                        <i class="fa-solid fa-share-nodes"></i>
                                    </a>
                                    <a href="https://www.facebook.com" class="facebook">
                                        <i class="fa-brands fa-facebook"></i>
                                    </a>
                                    <a href="https://www.x.com" class="twitter">
                                        <i class="fa-brands fa-x-twitter"></i>
                                    </a>
                                    <a href="https://www.linkedin.com" class="linkedin">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </a>
                                    <a href="https://www.pinterest.com" class="pinterest">
                                        <i class="fa-brands fa-pinterest"></i>
                                    </a>
                                    <a href="https://www.whatsapp.com" class="whatsapp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="text mt-3
                    p-3 myRow">
                                <h5 class="mb-3">جونفيار فيدرو-Jonviar fedro معالج ومخفف الام الخشونه والديسك والام الانزلاق
                                    الغضروفي الاول.
                                </h5>
                                <p>هو تركيبة غنية بمادة (الجلوكزامين) التي تعمل على التسكين الفوري لكل الام المفاصل
                                    والعظام
                                    كمحطة اولى في رحلة العلاج ثم تدخل مادة (الكوندرويتين) في نفس التركيبة حيث تقوم بعلاج الخشونة
                                    بين المفاصل وتوقف عملية الاحتكاك التي تسبب الالام القاسيه لدي الشخص المصاب وذلك لانها تساعد
                                    في زيادة تصنيع مادة حمض الهيالورونيك الموجوده في السائل الزلالي داخل العظام.</p>
                                <strong>اما عن طريقة استخدامه فهي كالآتي:
                                </strong>
                                <p>– غسل المنطقة المراد استخدام العلاج عليها ومن ثم تجفيفها بمنشفة جافة ونظيفة ووضع كمية بسيطة
                                    من الكريم وتدليكه لمدة دقيقتين بشكل دائري ،وتركه اقل شيء مدة ساعة حتى يعطي نتيجة فعالة.
                                    <br>كريم جونفيار فيدرو يغنيك عن الحاجه لاجراء العمليات الجراحيه وتجعلها خيارا اخيرا مستبعدا
                                    .

                                    <br><br> كريم جونفيار فيدرو هومعجزة طبيه احدثت صرحا قويا في مجال علاج الم العظام والمفاصل
                                    وجعلتك تترك ايام الوجع والتعب خلف ظهرك وتبدأ عمرا جديدا نشيطا لتشعر بالراحه اثناء العمل
                                    واوقات الرياضه والنوم. فعلا كريم جونفيار فيدرو يستحق ان يكون علامة التميز بين المركبات في
                                    العالم.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>