<?php
session_start();
require_once './config.php';
require './db_connection.php';
?>

<!DOCTYPE html>
<html lang="<?php echo $_SESSION['lang']; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $lang['page_title']; ?></title>
        <link rel="stylesheet" href="./styles.css?v=<?php echo time(); ?>" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css?v=<?php echo time(); ?>" type="text/css" />
        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css?v=<?php echo time(); ?>" type="text/css">
        <link rel="shortcut icon" href="./icon/favicon_<?php echo $_SESSION['lang']; ?>.png?v=<?php echo time(); ?>" type="image/png">

        <link rel="manifest" href="./manifest.json?v=<?php echo time(); ?>">

        <meta name="theme-color" content="#00346cff" media="(prefers-color-scheme: light)">
        <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)">

        <meta name="msapplication-navbutton-color" content="#00346cff">
        <meta name="apple-mobile-web-app-status-bar-style" content="default">

        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
        <meta name="apple-mobile-web-app-title" content="My Portfolio - Shota Kurdgelashvili">
        <meta name="mobile-web-app-capable" content="yes">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js?v=<?php echo time(); ?>"></script>
    </head>
    <!-- Only Desktop  -->
    <header>
        <div class="text">
            <a href="/"><h2 class="title"><?php echo $lang['title']; ?></h2></a>
        </div>

        <div class="header-menu">
            <a href="/" class="link"><?php echo $lang['main_page']; ?></a>
            <a href="#about-me" class="link"><?php echo $lang['about_me']; ?></a>
            <a href="#services" class="link"><?php echo $lang['services']; ?></a>
            <a href="#portfolio" class="link"><?php echo $lang['portfolio']; ?></a>
            <a href="#contact" class="link"><?php echo $lang['contact']; ?></a>
        </div>

        <?php 
        if ($_SESSION['lang'] === 'ka') {
            $setLanguage = 'en';
        } else {
            $setLanguage = 'ka';
        }
        ?>

        <div class="lang-toggle" onclick="changeLanguage('<?php echo $setLanguage; ?>'); location.reload();" title="<?php echo $lang['lang_btn_title']; ?>">
            <?php if ($_SESSION['lang'] === 'ka') { ?>
            <a class="user-lang" id="lang_toggle" href="javascript:void(0);"><img class="georgian_flag" src="./img/Flag_of_Georgia.svg" width="24" alt="Georgia"> ქარ</a>
            <?php } else { ?>
            <a class="user-lang" id="lang_toggle" href="javascript:void(0);"><img class="uk_flag" src="./img/Flag_of_the_United_Kingdom.svg" width="24" alt="UK"> ENG</a>
            <?php } ?>
        </div>
    </header>
    <!-- End Only Desktop -->
    <body>

        <!-- Only Responsive -->

        <section class="responsive-header" id="responsive-header">
            <div class="text">
                <a href="/"><h2 class="title"><?php echo $lang['title']; ?></h2></a>
            </div>

            <div class="sidebar-menu-btn">
                <a href="javascript:void(0);" id="sidebar-btn"><img src="./img/menu.png" alt="Sidebar Button" id="btn-img"></a>
            </div>
        </section>

        <section class="responsive-sidebar" id="responsive-sidebar">
            <div class="sidebar-close-btn">
                <a href="javascript:void(0);" id="sidebar-close-btn"><img src="./img/close.png" alt="Close Button" id="close-btn-img"></a>
            </div>

            <div class="sidebar">
                <a href="/" class="link"><?php echo $lang['main_page']; ?></a>
                <a href="#about-me" id="about_me_btn" class="link"><?php echo $lang['about_me']; ?></a>
                <a href="#services" id="services_btn" class="link"><?php echo $lang['services']; ?></a>
                <a href="#portfolio" id="portfolio_btn" class="link"><?php echo $lang['portfolio']; ?></a>
                <a href="#contact" id="contact_btn" class="link"><?php echo $lang['contact']; ?></a>
            </div>

            <div class="lang-toggle-responsive" onclick="changeLanguage('<?php echo $setLanguage; ?>'); location.reload();">
                <?php if ($_SESSION['lang'] === 'ka') { ?>
                <a id="lang_toggle_responsive" href="javascript:void(0);"><img class="georgian_flag" src="./img/Flag_of_Georgia.svg" width="24" alt="Georgia"> ქარ</a>
                <?php } else { ?>
                <a id="lang_toggle_responsive" href="javascript:void(0);"><img class="georgian_flag" src="./img/Flag_of_the_United_Kingdom.svg" width="24" alt="Georgia"> ENG</a>
                <?php } ?>
            </div>
        </section>

        <!-- End Only Responsive -->

        <div class="webpage-background" id="webpage_background" data-aos="fade-up"></div>

        <div class="return-to-top" id="return_to_top">
            <button id="arrow_up_btn"><img class="arrow-up" src="./img/arrow-heading-up.png" alt="Arrow Up"></button>
        </div>

        <section class="introduction-banner" id="introduction-banner" data-aos="fade-down">
            <div class="text">
                <h1 class="title"><?php echo $lang['introduction_banner_title']; ?></h1><br>
                <h2 class="subtitle"><?php echo $lang['introduction_banner_subtitle']; ?></h2>
            </div>
        </section>

        <section class="about-me" id="about-me">
            <div class="container">
                <img class="main-pic" id="main_pic" src="./img/profile.jpg" alt="Profile" data-aos="zoom-in" data-aos-duration="500">

                <p class="text" data-aos="zoom-in" data-aos-duration="500" data-aos-delay="200"><?php echo $lang['about_me_text']; ?></p>
            </div>
        </section>

        <section class="services" id="services">
            <h1 class="title"><?php echo $lang['services_title']; ?></h1>

            <?php
            $services_popup_icons = glob('./img/services/*.png');
            $userAgent = $_SERVER['HTTP_USER_AGENT'];
            $popup_index = 0;
            $language = $_SESSION['lang'];
            ?>
            <div class="container">
                <?php foreach ($services_popup_icons as $icon) { ?>
                <div class="box" id="box_<?php echo $popup_index; ?>" data-aos="fade-right" data-popup-index="<?php echo $popup_index; ?>">
                    <img src="./img/services/<?php echo basename($icon); ?>" class="box-icon" alt="<?php echo basename($icon); ?>">
                    <p><?php echo $lang[str_replace('.png', '', basename($icon))]; ?></p>
                </div>
                <?php 
                $popup_index++;
                }
                ?>
            </div>

            <div class="services-popup-wrapper" id="services_popup_wrapper">
                <?php
                foreach ($services_popup_icons as $icon) {
                $stmt = $pdo->prepare("SELECT * FROM services_$language WHERE icon_path = :icon_path");
                $stmt->execute(['icon_path' => basename($icon)]);
                $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                foreach ($results as $result) {
                ?>
                    <div class="services-popup">
                        <a href="javascript:void();">
                            <img src="./img/close.png" class="popup-close-btn" alt="Popup Close Button">
                        </a>
                        <img src="./img/services/<?php echo $result['icon_path']; ?>" class="box-popup-icon" alt="">
                        <p><?php echo $result['description']; ?></p>
                    </div>
                <?php } 
                } ?>
            </div>
        </section>

        <section class="portfolio" id="portfolio">

            <h1 class="title"><?php echo $lang['container_title']; ?></h1>
            <h3 class="subtitle"><?php echo $lang['container_subtitle']; ?></h3>

            <div class="swiper" data-aos="fade-right">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php
                    $slides = glob('./img/portfolio/*.jpg');
                    natsort($slides);
                    $slides = array_values($slides);
                    $language = $_SESSION['lang'];
                    $stmt = $pdo->prepare("SELECT * FROM pictures_$language WHERE file_name = :file_name");
                    if (strpos($userAgent, 'Mobile') == true) {
                        foreach ($slides as $slide_mobile) {
                            $stmt->execute(['file_name' => basename($slide_mobile)]);
                            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                            if (strpos($slide_mobile, '_mobile.jpg') == true) {
                            ?>
                            <div class="swiper-slide" id="responsive-swiper-slide">
                                <img src="./img/portfolio/<?php echo basename($slide_mobile); ?>">
                            </div>
                        <?php }
                        }
                    } else {
                        foreach ($slides as $slide) {
                            if (strpos($slide, '_mobile.jpg') == false) {
                            ?>
                            <div class="swiper-slide" id="swiper-slide">
                                <img src="./img/portfolio/<?php echo basename($slide); ?>">
                            </div>
                        <?php }
                        }
                    } ?>
                </div>
                <?php if (strpos($userAgent, 'Mobile') == false) { ?>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <?php } ?>
            </div>

            <?php
            if (strpos($userAgent, 'Mobile') !== false) {
                ?>
                <div class="responsive-container-wrapper" id="responsive_container_wrapper"></div>
                <?php
                $mobileIndex = 0;
                foreach ($slides as $slide_mobile) {
                    if (strpos($slide_mobile, '_mobile.jpg') !== false) {
                        $stmt->execute(['file_name' => basename($slide_mobile)]);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="responsive-slide-container" id="responsive_slide_container_<?php echo $mobileIndex; ?>" data-slide-index="<?php echo $mobileIndex; ?>">
                            <a class="container-close-btn" href="javascript:void(0);">
                                <img class="container-close-btn-img" src="./img/close.png" alt="Close Button">
                            </a>
                            <div class="text">
                                <h3 class="title"><?php echo $result['name']; ?></h3>
                                <p class="description"><?php echo $result['description']; ?></p>
                            </div>
                        </div>
                        <?php
                        $mobileIndex++;
                    }
                }
            } else {
                ?>
                <div class="container-wrapper" id="container_wrapper"></div>
                <?php
                $desktopIndex = 0;
                foreach ($slides as $slide) {
                    if (strpos($slide, '_mobile.jpg') === false) {
                        $stmt->execute(['file_name' => basename($slide)]);
                        $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        ?>
                        <div class="slide-container" id="slide_container_<?php echo $desktopIndex; ?>" data-slide-index="<?php echo $desktopIndex; ?>">
                            <a class="container-close-btn" href="javascript:void(0);">
                                <img class="container-close-btn-img" src="./img/close.png" alt="Close Button">
                            </a>
                            <div class="text">
                                <h3 class="title"><?php echo $result['name']; ?></h3>
                                <p class="description"><?php echo $result['description']; ?></p>
                            </div>
                        </div>
                        <?php
                        $desktopIndex++;
                    }
                }
            }
            ?>
        </section>

        <section class="order-form">
            <h2 class="title"><?php echo $lang['order_form_title']; ?></h2>

            <form action="send_email.php" method="POST" class="form">
                <label for="full_name_or_company_name"><?php echo $lang['label_full_name']; ?></label>
                <input type="text" id="full_name_or_company_name" name="full_name_or_company_name" required>
                <label for="email"><?php echo $lang['label_email']; ?></label>
                <input type="email" id="email" name="email" required>
                <label for="website_type"><?php echo $lang['label_website_type']; ?></label>
                <select name="website_type" id="website_type" required>
                    <option value=""><?php echo $lang['option_placeholder']; ?></option>
                    <option value="landing"><?php echo $lang['option_landing']; ?></option>
                    <option value="corporate"><?php echo $lang['option_corporate']; ?></option>
                    <option value="online_webstore"><?php echo $lang['option_online_webstore']; ?></option>
                    <option value="other"><?php echo $lang['other']; ?></option>
                </select>

                <input type="hidden" name="order_number" value="<?php echo rand(100, 999); ?>">

                <input type="submit" class="submit-btn" value="<?php echo $lang['submit_btn']; ?>">
            </form>
        </section>

    </body>
    <footer>
        <div class="social-media-icons">
            <div class="text">
                <h2 class="title"><?php echo $lang['footer_social_media_title']; ?></h2>

                <div class="info">
                    <a href="https://www.facebook.com/shota.kurdgelashvili2003"><img src="./img/facebook.png" alt="Facebook" class="icon"></a>
                    <a href="https://www.instagram.com/shota_kurdgelashvili/"><img src="./img/instagram.png" alt="Instagram" class="icon"></a>
                    <a href="https://www.linkedin.com/in/shota-kurdgelashvili-70438b237/"><img src="./img/linkedin.png" alt="LinkedIn" class="icon"></a>
                </div>
            </div>
        </div>
        <div class="contact" id="contact">
            <h2 class="title"><?php echo $lang['footer_contact']; ?></h2>
            <a class="email" href="mailto:kurdgelashvili2013@gmail.com" style="font-family: 'BPG ExtraSquare Mtavruli';">kurdgelashvili2013@gmail.com</a><br>
            <a class="phone-number" href="tel:+995551026419" style="font-family: 'BPG ExtraSquare Mtavruli';">551-02-64-19</a>
        </div>
    </footer>
    <script src="./js/script.js?v=<?php echo time(); ?>"></script>
    <script src="./js/swiper.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.net.min.js?v=<?php echo time(); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js?v=<?php echo time(); ?>"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js?v=<?php echo time(); ?>"></script>
    <script>
        VANTA.NET({
            el: "#webpage_background",
            mouseControls: true,
            touchControls: true,
            gyroControls: false,
            minHeight: 100.00,
            minWidth: 100.00,
            scale: 0.80,
            scaleMobile: 0.50,
            color: 0x3f84ff,
            backgroundColor: 0x1329
        })
    </script>
    <script>
        function changeLanguage(value) {
            jQuery.ajax({
                type: "POST",
                url: "change_language.php",
                data: { lang: value },
                success: function(response) {
                    console.log(response);
                },
                error: function(xhr, status, error) {
                    console.error("An error occurred: " + error);
                }
            });
        }
    </script>
    <script>
        AOS.init();
    </script>
</html>