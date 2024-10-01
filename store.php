<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المتجر</title>

    <style>
        :root {
            --orange-color: #e52710;
            --dark-color: #373737;
        }

        body {
            font-family: 'Noto Kufi Arabic', sans-serif;
        }

        #store-section .b-crumb {
            background-color: var(--dark-color);
            border-radius: 7px;
        }

        #store-section .breadcrumb>.breadcrumb-item:first-child i {
            color: var(--orange-color);
        }

        #store-section .breadcrumb-item+.breadcrumb-item::before {
            color: rgb(174, 171, 171);
        }

        #store-section .title {
            font-size: 2rem;
            letter-spacing: 1px;
        }

        #store-section .hr {
            width: 100%;
            height: 2px;
            background-color: var(--dark-color);
        }

        #store-section .form-part {
            border: 1px solid var(--orange-color);
            border-radius: 7px;
        }

        #store-section h3.side-title {
            font-size: 1.5rem;
            color: var(--orange-color);
        }

        #store-section .btnSearch {
            border: 0;
            border-radius: 5px;
        }

        #store-section .product img {
            aspect-ratio: 1/1;
        }

        #store-section .product .det {
            background-color: #eee;
        }

        #store-section .product h4 {
            font-size: 0.9rem;
            margin-bottom: 20px;
            margin-bottom: 30px;
            font-weight: bold;
        }

        #store-section .product .btnMore {
            text-decoration: none;
            background-color: white;
            color: var(--orange-color);
            font-size: 0.9rem;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        #store-section .pagination .page-link {
            border-radius: 0 !important;
        }

        #store-section .page-item.active a {
            background-color: #eee;
            color: gray;
            border-color: #dee2e6;
        }

        #store-section .page-link:hover {
            background-color: #eee;
        }
    </style>
</head>

<body>

    <?php include "header.php"; ?>

    <section id="store-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 d-none d-md-block">
                    <nav class="b-crumb mb-5" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb p-2">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">المتجر</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-12 col-lg-11">
                    <div class="row">
                        <div class="col-3 d-none d-lg-block">
                            <div class="form-part p-2 pt-4">
                                <form action="">
                                    <input class="w-75" type="text" placeholder="البحث عن منتجات...">
                                    <button class="btnSearch bg-secondary text-white">بحث</button>

                                    <h3 class="side-title mt-4">تصنيفات المنتج</h3><select name='product_cat'
                                        id='product_cat' class='w-100'>
                                        <option selected disabled hidden>حدد التصنيف</option>
                                        <option value="uncategorized">Uncategorized</option>
                                    </select>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-lg-9">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="title text-center fw-bold">المتجر</h2>
                                    <div class="hr mb-4"></div>
                                </div>
                                <div class="col-12">
                                    <div class="d-flex flex-column flex-sm-row justify-content-between mb-4">
                                        <p>عرض 1–6 من أصل 11 نتيجة</p>
                                        <form class="woocommerce-ordering" method="get">
                                            <select name="orderby" class="orderby" aria-label="نظام المتجر">
                                                <option value="menu_order" selected='selected'>الترتيب الافتراضي
                                                </option>
                                                <option value="popularity">ترتيب حسب الشهرة</option>
                                                <option value="rating">ترتيب حسب معدل التقييم</option>
                                                <option value="date">ترتيب حسب الأحدث</option>
                                                <option value="price">ترتيب حسب: الأدنى سعراً للأعلى</option>
                                                <option value="price-desc">ترتيب حسب: الأعلى سعراً للأدنى</option>
                                            </select>
                                            <input type="hidden" name="paged" value="1" />
                                        </form>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/calrybelle.jpeg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>Calrybelle</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/clavora-white.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>Clavora White</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/collagen.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>الكولاجين الذهبي</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/pousse-growing.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>بوسي السيروم</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="product mb-4">
                                                <a class="w-100" href="product.php"><img class="w-100"
                                                        src="./imgs/black-castro-oil.jpg" alt="image"></a>
                                                <div class="det p-3 text-center">
                                                    <h4>زيت تكثيف الرموش</h4>
                                                    <a class="btnMore rounded-pill px-3 fw-bold" href="product.php">اقرأ
                                                        المزيد</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="d-flex justify-content-center mt-4">
                                                <nav aria-label="...">
                                                    <ul class="pagination pagination-sm">
                                                        <li class="page-item active"><a class="page-link" href="#"
                                                                aria-current="page">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#">&larr;</a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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