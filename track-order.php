<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تتبع الطلب</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #track-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #track-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #track-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #track-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #track-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #track-section .myRow {
            background-color: #eee;
            border-radius: 25px;
        }

        #track-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #track-section .social-media i {
            font-size: 15px;
        }

        #track-section .whatsapp {
            background-color: #25D366;
        }

        #track-section .linkedin {
            background-color: #0077B5;
        }

        #track-section .twitter {
            background: black;
        }

        #track-section .facebook {
            background-color: #1877F2;
        }

        #track-section .pinterest {
            background-color: #E60023;
        }

        #track-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #track-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #track-section .social-media i {
                font-size: 16px;
            }

            #track-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }

        #track-section .error {
            background-color: white;
            border-top: 3px solid var(--orange-color);
        }

        #track-section .entry {
            border-bottom: 3px solid var(--orange-color);
            border-radius: 5px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        #track-section .entry h4 {
            color: var(--orange-color);
            font-size: 1.1rem;
        }

        #track-section input::placeholder {
            font-size: 0.8rem;
        }

        #track-section input:focus {
            outline: 0;
        }

        #track-section .mail::placeholder {
            text-align: right;
        }

        #track-section .btnTrack {
            background-color: var(--dark-color);
            border-radius: 5px;
            width: fit-content;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="track-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page"> تتبع الطلب</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">تتبع الطلب</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow gx-0 p-4">
                        <div class="col-12">
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="error mb-3  p-3 text-secondary bg-light d-none">
                                            <i class="fa-solid fa-circle-exclamation me-3" style="color: #E60023;"></i>
                                            رجاء
                                            أدخل
                                            رقم
                                            طلب صحيح
                                        </div>
                                        <p>فضلًا أدخل رقم طلبك في الصندوق أدناه وأضغط زر لتتبعه "تتبع الطلب" لعرض حالته.
                                            بإمكانك
                                            العثور
                                            على رقم الطلب في البريد المرسل إليك والذي يحتوي على فاتورة تأكيد الطلب.
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="entry bg-white p-3 mb-3 mb-md-0">
                                            <h4 class="text-center mb-2">رقم الطلب</h4>
                                            <input class="p-1  w-100" type="text"
                                                placeholder="ستجده في رسالة تأكيد طلبك">
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="entry p-3 bg-white">
                                            <h4 class="text-center mb-2">البريد الإلكتروني للفاتورة</h4>
                                            <input class="mail p-1 w-100" type="email"
                                                placeholder="البريد الالكتروني الذي استخدمته أثناء اتمام الطلب"
                                                dir="rtl">
                                        </div>
                                    </div>

                                    <a class="btnTrack p-2 d-block mx-auto text-decoration-none text-white fw-bold mt-4"
                                        href="track-order.php">تتبع
                                        الطلب</a>
                                </div>
                            </form>
                        </div>
                    </div>
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
    </section>

    <?php include "footer.php"; ?>

</body>

</html>