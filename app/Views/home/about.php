<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us - Lisboa Otel</title>

    <meta name="keywords"
        content="Gordon Resort Hotel Abraka, About Gordon Resort Hotel, McCarthy Beach, Beaches in Delta state, Beaches in Nigeria, beaches in Africa, beaches near me" />
    <meta name="description"
        content=" About Us - Gordon Resort Hotel popularly known as McCarthy Beach is located in the University town of Abraka in Delta State. It is famous for its Natural white sandy Beach and serene environment." />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1EVRTK6PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-C1EVRTK6PD");
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NSMS76N");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/favicon.png" type="image/x-icon" />

    <!-- Favicon -->
    <script src="https://kit.fontawesome.com/344589b924.js" crossorigin="anonymous"></script>

    <!-- Semantic UI CDN -->
    <link
        href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css"
        rel="stylesheet" type="text/css" />

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script
        src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js">
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->


    <!-- Header Navigation --> 
    <?php include "app/Views/parts/_header.php"?>

    <!-- header finish -->
    <!-- End Header -->

    <!-- Breadcrumb -->
    <section class="breadcrumb-section">
        <div class="container" id="breadcrumb-cont">
            <div class="row" id="breadcrumb-row">
                <div class="col-12" id="breadcrumb-col">
                    <h1 class="page-title">Hakkımızda</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- End Breadcrumb -->

    <!-- About section -->
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6" id="left-abt-col">
                    <img class="split-images" src="./assets/media/Outdoors/cut-images/image_part_001.jpg" alt="" />
                    <img class="split-images" src="./assets/media/Outdoors/cut-images/image_part_002.jpg" alt="" />
                    <img class="split-images" src="./assets/media/Outdoors/cut-images/image_part_003.jpg" alt="" />
                </div>
                <div class="col-12 col-md-6" id="right-abt-col">
                    <h2 class="header-h2">HAKKIMIZDA</h2>

                    <p class="about-text-parag">
                        Firmamız, seyahat endüstrisinde köklü bir geçmişe sahip olan öncü
                        bir şirkettir. Yıllar boyunca edindiğimiz deneyim ve birikimle,
                        müşterilerimize en iyi seyahat deneyimini sunmak için çalışıyoruz.
                        Amacımız, seyahat tutkunlarına unutulmaz anlar yaşatmak ve
                        yolculuklarını keyifli hale getirmektir. Müşterilerimizin güvenini
                        kazanmak ve onların memnuniyetini sağlamak için çaba gösteriyoruz.
                    </p>
                    <h2 class="header-h2">VİSYONUMUZ</h2>
                    <p class="about-text-parag">
                        Vizyonumuz, seyahat deneyimlerini dönüştürmek ve müşterilerimize
                        unutulmaz anlar yaşatmak için sürekli olarak yenilikçi çözümler
                        sunmaktır. Müşteri odaklı bir yaklaşımla hareket ederek, seyahat
                        sektöründe öncü bir marka olmayı hedefliyoruz.
                    </p>
                    <h2 class="header-h2">MİSYONUMUZ</h2>
                    <p class="about-text-parag">
                        Misyonumuz, müşterilerimize güvenli, konforlu ve uygun fiyatlı
                        seyahat deneyimleri sunarak onların memnuniyetini sağlamaktır.
                        Yolcularımızın güvenliğini ve konforunu her zaman ön planda
                        tutarak, seyahatlerini keyifli ve sorunsuz bir şekilde
                        geçirmelerini sağlamak için çalışıyoruz. Müşteri memnuniyetini en
                        üst düzeyde tutarak, seyahat endüstrisinde öncü bir rol oynamayı
                        amaçlıyoruz.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section end-->

    
    <!-- Cookies -->
    <?php include "app/Views/parts/_cookies.php"?>
    <!-- Cookies End -->
    <!-- Footer -->
    <?php include "app/Views/parts/_footer.php"?>
    <!-- Footer End -->

    <!-- Back to top button -->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- JS -->
    <script src="./assets/js/index.js"></script>

    <script src="/assets/bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>