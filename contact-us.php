<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اتصل بنا</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #contact-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #contact-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #contact-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #contact-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #contact-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #contact-section .info {
            border-radius: 15px;
        }

        #contact-section .info>div>span {
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

        #contact-section .myRow {
            background-color: #eee;
            border-radius: 25px;
        }

        #contact-section .social-media>a {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            color: white;
        }

        #contact-section .social-media i {
            font-size: 15px;
        }

        #contact-section .whatsapp {
            background-color: #25D366;
        }

        #contact-section .linkedin {
            background-color: #0077B5;
        }

        #contact-section .twitter {
            background: black;
        }

        #contact-section .facebook {
            background-color: #1877F2;
        }

        #contact-section .pinterest {
            background-color: #E60023;
        }

        #contact-section .share {
            background: #000000;
            border-radius: 3px !important;
            font-size: 5px !important;
            width: 20px !important;
            height: 20px !important;
        }

        @media(min-width:768px) {

            #contact-section .social-media>a {
                width: 35px;
                height: 35px;
            }

            #contact-section .social-media i {
                font-size: 16px;
            }

            #contact-section .share {
                font-size: 8px !important;
                width: 23px !important;
                height: 23px !important;
            }

        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="contact-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <nav class="b-crumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">اتصل بنا</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <h2 class="title text-center fw-bold">اتصل بنا</h2>
                    <div class="hr mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11">
                    <div class="row myRow justify-content-center gx-0 p-4">
                        <div class="col-12 col-md-8 col-lg-6"></div>
                        <div class="col-12 col-md-8 col-lg-6">
                            <div class="info bg-white p-3 mb-4">
                                <div class="d-flex flex-column align-items-center">
                                    <span><i class="fa-solid fa-phone"></i></span>
                                    <p dir="ltr">+90552 358 74 36</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span><i class="fa-solid fa-envelope"></i></span>
                                    <p>info@istbahar.com</p>
                                </div>
                                <div class="d-flex flex-column align-items-center">
                                    <span><i class="fa-solid fa-location-dot"></i></span>
                                    <p>اسطنبول تركيا</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.849983722235!2d28.663607615413966!3d41.00665657930085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDHCsDAwJzI0LjAiTiAyOMKwMzknNTYuOSJF!5e0!3m2!1sen!2str!4v1619361739766!5m2!1sen!2str"
                                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

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