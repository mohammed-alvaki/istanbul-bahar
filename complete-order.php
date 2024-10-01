<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتمام الطلب</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #complete-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #complete-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #contact-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #complete-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #complete-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #complete-section .info {
            border-radius: 15px;
        }

        #complete-section .info>div>span {
            background-color: var(--dark-color);
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin-bottom: 5px;
        }

        #complete-section .myRow {
            background-color: #eee;
            border-radius: 15px;
        }

        #complete-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #complete-section .social-media i {
            font-size: 15px;
        }

        #complete-section .whatsapp {
            background-color: #25D366;
        }

        #complete-section .linkedin {
            background-color: #0077B5;
        }

        #complete-section .twitter {
            background: black;
        }

        #complete-section .facebook {
            background-color: #1877F2;
        }

        #complete-section .pinterest {
            background-color: #E60023;
        }

        #complete-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #complete-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #complete-section .social-media i {
                font-size: 16px;
            }

            #complete-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }

        #complete-section .warning {
            border: 2px solid var(--orange-color);
        }

        #complete-section .pref {
            width: 15px;
            height: 15px;
            border: 1px solid var(--orange-color);
            border-top-width: 4px;
        }

        #complete-section .back {
            background-color: #e7e3e3;
            border-radius: 5px;
            transition: all 0.3s linear;
        }

        #complete-section .back:hover {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="complete-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">سلة المشتريات</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">سلة المشتريات</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="basket p-3 pb-5 myRow">
                        <div class="warning rounded-pill d-flex align-items-center p-3 mb-5 bg-light">
                            <div class="pref mx-2"></div>
                            <div>سلة مشترياتك فارغة حاليًا.</div>
                        </div>
                        <a class="back fw-bold py-1 px-2 text-decoration-none text-dark bg-ligh" href="store.php">العودة إلى
                            المتجر
                        </a>
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