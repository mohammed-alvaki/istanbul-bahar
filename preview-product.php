<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>معاينة المنتج</title>

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

        #bread-section .breadcrumb>.breadcrumb-item a {
            color: var(--orange-color);
        }

        #bread-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #prev-section .img-container {
            max-width: 100%;
            overflow: hidden;
        }

        #prev-section .img-container img {
            width: 100%;
            cursor: zoom-in;
        }

        #prev-section .zoom-icon {
            position: absolute;
            top: 30px;
            left: 30px;
            width: 40px;
            height: 40px;
        }

        #prev-section .demo {
            font-size: 0.9rem;
            border: 0;
            box-shadow: rgba(0, 0, 0, 0.3);
            border: 1px solid;
            border-radius: 20px;
        }

        #prev-section .tab-pane {
            border-radius: 5px;
        }

        #prev-section .tab-pane :where(p, strong, span) {
            font-size: 0.85rem;
        }


        #prev-section .img-cont span {
            background-color: white;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        a {
            text-decoration: none !important;
        }

        #prev-section .dis {
            background-color: #eee;
        }

        #prev-section .add {
            color: var(--orange-color);
            background-color: white;
            width: fit-content;
            font-size: 0.9rem;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        #prev-section .dis h5 {
            font-size: 1rem;
        }

        #prev-section .nav-tabs .nav-link:not(.active) {
            background-color: #eee;
        }

        #prev-section .nav-tabs .nav-link {
            border-radius: 0;
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
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="store.php">المنتجات</a>
                            </li>
                            <li class="breadcrumb-item  text-white"><a class="text-decoration-none"
                                    href="store.php">Uncategorized</a>
                            </li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Calrybelle
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="prev-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="img-container position-relative mb-3 mb-md-0">
                                <img class="w-100" src="./imgs/calrybelle.jpeg" alt="imgs">
                                <span>
                                    <i class="fa-solid fa-magnifying-glass fa-flip-horizontal fa-xl zoom-icon"
                                        style="color: #ffffff;"></i>
                                </span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <h2 class="sub-title fs-1 mb-md-3">Calrybelle</h2>
                            <p class="demo myRow p-3">
                                حافظي على بشرتك من اشعة الشمس الحارقة وحافظي على مظهر طبيعي وبشرة نقية وخالية من المشاكل
                                والتصبغات بفعل كريم calrybelle لحماية الجلد من اشعة الشمس ومنع تشكيل صبغة الميلانين مع
                                الحرارة.اهلا ببشرة كلها نضارة وحيوية</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-11">
                    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark active" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane"
                                aria-selected="true">الوصف</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link text-dark" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false"> مراجعات (0)</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show p-2 active" id="home-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <h4 class="mt-4 fw-bold">الوصف</h4>
                            <p>حافظي على بشرتك من اشعة الشمس الحارقة وحافظي على مظهر طبيعي وبشرة نقية وخالية من المشاكل
                                والتصبغات بفعل كريم calrybelle لحماية الجلد من اشعة الشمس ومنع تشكيل صبغة الميلانين مع
                                الحرارة.اهلا ببشرة كلها نضارة وحيوية .</p>
                        </div>
                        <div class="tab-pane bg-white fade p-2" id="profile-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">
                            <h4 class="mt-4 fw-bold"> مراجعات</h4>
                            <p>لا توجد مراجعات بعد.</p>
                            <p>كن أول من يقيم “Calrybelle”
                                <br> لن يتم نشر عنوان بريدك الإلكتروني. الحقول الإلزامية مشار إليها بـ *

                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-11">
                    <h3 class="mt-4">منتجات ذات صلة</h3>
                </div>

                <div class="col-12 col-lg-11">
                    <div class="row gx-xl-5">
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="preview-product.php">
                                    <div class="img-cont"><img src="./imgs/s1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis py-3 px-2 text-center">
                                    <h5 class="mb-3">شامبو الثوم </h5>
                                    <a href="preview-product.php"
                                        class="add rounded-pill fw-bold d-block mx-auto py-1 px-2 mt-2">
                                        قراءة المزيد</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="preview-product.php">
                                    <div class="img-cont"><img src="./imgs/s2.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis py-3 px-2 text-center">
                                    <h5 class="mb-3">Clavora White</h5>
                                    <a href="preview-product.php"
                                        class="add rounded-pill py-1 px-2 fw-bold d-block mx-auto p-1 mt-2">
                                        قراءة المزيد</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="preview-product.php">
                                    <div class="img-cont"><img src="./imgs/s3.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis py-3 px-2 text-center">
                                    <h5 class="mb-3"> مجموعة العناية بالشعر الطبيعية</h5>
                                    <a href="preview-product.php"
                                        class="add py-1 px-2 fw-bold rounded-pill d-block mx-auto p-1 mt-2">
                                        قراءة المزيد</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="preview-product.php">
                                    <div class="img-cont"><img src="./imgs/s4.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis py-3 px-2 text-center">
                                    <h5 class="mb-3"> كريم شد الشفاه و محيط العين</h5>
                                    <a href="preview-product.php"
                                        class="add  py-1 px-2 rounded-pill fw-bold d-block mx-auto p-1 mt-2">
                                        قراءة المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>


    <script>
        const image = document.querySelector('#prev-section .img-container img');
        const imgContainer = document.querySelector('#prev-section .img-container');

        imgContainer.addEventListener('mousemove', (e) => {
            const rect = imgContainer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            image.style.transformOrigin = `${x}px ${y}px`;
            image.style.transform = 'scale(1.3)';
        });

        imgContainer.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
        });
    </script>
</body>

</html>