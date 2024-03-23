<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umuttepe Turizm</title>
    <meta name="keywords"
        content="Gordon Resort Hotel Abraka, Gordon Resort Hotel, McCarthy Beach, Beaches in Delta state, Beaches in Nigeria, beaches in Africa, beaches near me" />
    <meta name="description"
        content=" Gordon Resort Hotel popularly known as McCarthy Beach is located in the University town of Abraka in Delta State. It is famous for its Natural white sandy Beach and serene environment." />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-C1EVRTK6PD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-C1EVRTK6PD');
    </script>

    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NSMS76N');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/media/favicon.png" type="image/x-icon">

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
    <?php  
       
    ?>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSMS76N" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header Navigation -->
    <?php include "app/Views/parts/_header.php"?>
    <!-- End Header -->

    <!-- hero section -->
    <section class="hero-section">

        <div class="container" id="hero-cont">
            <div class="row" id="hero-row">
                <div class="col-12" id="hero-col">
                    <h1 class="hero-h1">Umuttepe Turizme Hoşgeldiniz </h1>

                    <form class="home-search" action="./gallery.php">

                        <div class="form-row">
                            <i class="fa-solid fa-bus " style="color: #909090;"></i>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereden</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                            <select class="form-select form-select-sm" aria-label=".form-select-sm example" required>
                                <option value="" disabled selected hidden>Nereye</option>
                                <option value="istanbul">İstanbul</option>
                                <option value="bursa">Bursa</option>
                                <option value="kocaeli">Kocaeli</option>
                                <option value="sakarya">Sakarya</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="ui calendar" id="date-1">
                            <div class="ui input left icon">
                                <i class="calendar icon"></i>
                                <input type="text" class="calender-text" placeholder="Gidiş Tarihi" required>
                            </div>
                        </div>

                        <div id="donusTarihDiv" style="display:none;">
                            <div class="ui calendar" id="date-2">
                                <div class="ui input left icon">
                                    <i class="calendar icon"></i>
                                    <input type="text" class="calender-text" placeholder="Geliş Tarihi" required>
                                </div>
                            </div>
                        </div>
                        <input type="checkbox" id="donusCheckbox" name="donusCheckbox">
                        <label for="donusCheckbox">
                            <i>Dönüş Bileti Almak İstiyorum</i>
                        </label>

                        <script>
                        // JavaScript ile dönüş tarih input'unun görünürlüğünü kontrol etme
                        document.getElementById('donusCheckbox').addEventListener('change', function() {
                            var donusTarihDiv = document.getElementById('donusTarihDiv');
                            donusTarihDiv.style.display = this.checked ? 'block' : 'none';
                            if (!this.checked) {
                                document.getElementById('tarihDonus').value = ''; // Dönüş tarihini sıfırla
                            }
                        });
                        </script>




                        <div class="submit-search">
                            <button id="submit-main-btn" class="submit" onclick="window.location.href = 'gallery.php';">
                                <i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i>
                                <span class="hide-text-mobile">Arama</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>



    <!-- Cookies -->
    <?php include "app/Views/parts/_cookies.php"?>
    <!-- Cookies End -->
    <!-- Footer -->
    <?php include "app/Views/parts/_footer.php"?>
    <!-- Footer End -->
    <!-- Back to top button -->
    <!--Sayfada aşağıya indikçe sağ altta çıkan buton, sayfanın en üstüne çıkmayı sağlar.-->
    <button type="button" class="btn btn-danger btn-floating btn-lg" id="btn-back-to-top">
        <i class="fas fa-arrow-up"></i>
    </button>


    <!-- JS -->
    <script src="./assets/js/index.js"></script>


</body>

</html>