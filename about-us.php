<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>من نحن</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #about-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #about-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #about-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #about-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #about-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #about-section .myRow {
            background-color: #eee;
            border-radius: 25px;
        }

        #about-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #about-section .social-media i {
            font-size: 15px;
        }

        #about-section .whatsapp {
            background-color: #25D366;
        }

        #about-section .linkedin {
            background-color: #0077B5;
        }

        #about-section .twitter {
            background: black;
        }

        #about-section .facebook {
            background-color: #1877F2;
        }

        #about-section .pinterest {
            background-color: #E60023;
        }

        #about-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #about-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #about-section .social-media i {
                font-size: 16px;
            }

            #about-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="about-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">من نحن</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">من نحن</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow gx-0 p-4">
                        <p>تم تأسيس شركة اسطنبول بهار عام 2018 في مدينة أسطنبول لصناعة العلاجات الطبية
                            الطبيعية
                            المرخصة من
                            قبل وزارة الصحة التركية .. وبعد ذلك اطلقت الشركة موقع اسطنبول بهار عام 2019 في شهر ايار في
                            مدينة
                            اسطنبول عاصمة التجارة المستقبلية لتكون مقرا لإدارة الموقع تم تأسيس الموقع لتوفير خدمات
                            التسوق
                            عبر الإنترنت وجعلها سهلة وأقل تكلفة للعملاء وبشكل أكثر كفاءة من المتاجر الإلكترونية الأخرى.
                            ان مبادئنا في العمل والتي لا تتغير هي الجودة في الإنتاج والعمل المنظم والخدمة المرتفعة
                            القيمة
                            والتسليم في الموعد مع الأسعار المناسبة وبفضل هذا السياسات المبدئية والجودة في الإنتاج
                            استطعنا
                            اخذ شهادات جودة عالية وتصدير منتجاتنا الى أكثر من بلد عربي وأجنبي والحصول على شهادات عالمية
                            .
                            سوف تستمر <strong>أسطنبول بهار</strong> في طريقها الخاص بالتجديد في الإنتاج والوصول الى
                            أهدافها
                            الجديدة وإنجاز
                            نجاحات جديدة .. لهذا السبب فان توقيع أسطنبول بهار يعطي انعكاس للجودة وترمز الى الجودة في
                            العمل.
                            إن الثقة التي منحنا إياها عملاؤنا الكرام هي أكثر المكاسب التي نفخر بالحصول عليها .. وهي السر
                            لنجاحنا .. ونسعى دائما للحفاظ على هذه الثقة وترسيخها كأهم مبدأ نرتكز عليه ونحافظ على وجوده.
                        </p>
                        <h3>رؤيتنا :</h3>
                        <p>نساهم باستمرار في التنمية الاقتصادية لمجتمعاتنا وأن نكون قادة الاستثمار والتقدم في الشرق
                            الاوسط.
                        </p>
                        <h3>مهمتنا :</h3>
                        <p>تلبية حاجات العميل المختلفة من خلال تقديم منتجات وخدمات متنوعة بجودة عالية.
                        </p>
                        <h3>قيمنا:
                        </h3>
                        <p>الاحترام في التعامل والتفرد والاهتمام بالجودة المقدمة لعملائنا.
                        </p>
                        <h3>أهدافنا :
                        </h3>
                        <p> 1 – زيادة المبيعات وتنامي حصتنا في السوق. <br>2 – تطبيق نظام مراقبة الجودة والالتزام
                            بالمعايير
                            والمواصفات المعتمدة في مجال خدماتنا.
                            <br>3 – التركيز على أهمية الولاء المشترك بينا وبين العميل.
                            <br>4 – التطلع والوصول لإرضاء عملائنا.
                        </p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-11">
                        <div class="social-media d-flex justify-content-end align-items-center gap-1 mt-4">
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
            </div>
        </div>
    </section>

    <?php include "footer.php"; ?>

</body>

</html>