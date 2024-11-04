<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Tiêu đề hiển thị khi chia sẻ -->
        <meta property="og:title" content="Tiêu đề của trang web" />

        <!-- Mô tả ngắn gọn về nội dung trang web -->
        <meta property="og:description" content="Mô tả ngắn gọn về trang web của bạn." />

        <!-- URL của hình ảnh hiển thị khi chia sẻ -->
        <meta property="og:image" content="{{ asset('images/preview.jpg') }}" />

        <!-- URL của trang web -->
        <meta property="og:url" content="{{ env("APP_URL") }}" />

        <!-- Xác định kiểu nội dung (website) -->
        <meta property="og:type" content="website" />

        <!-- Tên trang hoặc tên website (không bắt buộc nhưng nên có) -->
        <meta property="og:site_name" content="Tên trang web của bạn" />

        <title>My Wedding</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,300..800;1,300..800&family=Lobster&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

        <link rel="stylesheet" href="{{ asset('css/font.css') }}">
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    </head>
    <body>
        <div class="wrapper">
            <div class="section section-1">
                <div class="container">
                    <header class="d-flex align-items-center justify-content-between flex-wrap">
                        <div class="logo lobster-regular mb-3">
                            Huy & Trang
                        </div>
                        <div class="active-navbar" data-click="menuToggle">
                            <img src="./images/icons-menu.svg" alt="">
                        </div>
                        <div class="navbar-web raleway-regular">
                            <ul class="d-flex align-items-center justify-content-between">
                                <li class="navbar-item me-5 scrollLink" data-target="information">
                                    <a href="">Wedding Information</a>
                                </li>
                                <li class="navbar-item me-5 scrollLink" data-target="about-us">
                                    <a href="" >About Us</a>
                                </li>
                                <li class="navbar-item me-5 scrollLink" data-target="album">
                                    <a href="">Wedding Album</a>
                                </li>
                                <li class="navbar-item scrollLink" data-target="contact">
                                    <a href="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-mobile">
                            <ul class="d-flex align-items-start justify-content-between flex-column">
                                <li class="navbar-item me-5 raleway-regular" data-click="menuToggle" style="text-align: end; width: 100%;">
                                    X
                                </li>
                                <li class="navbar-item me-5 scrollLink raleway-regular" data-target="information">
                                    <a class="wrap-text" href="">Wedding Information</a>
                                </li>
                                <li class="navbar-item me-5 scrollLink raleway-regular" data-target="about-us">
                                    <a class="wrap-text" href="" >About Us</a>
                                </li>
                                <li class="navbar-item me-5 scrollLink raleway-regular" data-target="album">
                                    <a class="wrap-text" href="">Wedding Album</a>
                                </li>
                                <li class="navbar-item scrollLink raleway-regular" data-target="contact">
                                    <a class="wrap-text" href="">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="navbar-overlay" data-click="menuToggle"></div>
                    </header> 
                    <div class="title faustina-regular wow animate__animated animate__fadeInLeft" data-wow-duration="2s">
                        <span>WELCOME TO</span>
                        <br>
                        <span>OUR HAPPINESS</span>
                    </div>    
                </div>
            </div>
            <div class="section section-2" id="information">
                <div class="container">
                    <div class="content wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                        <div class="header-content">
                            Welcome to our wedding
                        </div>
                        <div class="main-content">
                            <div class="wellcome-list row">
                                <div class="col-lg-4 col-md-6">
                                    <div class="wellcome-items">
                                        <div class="image-content">
                                            <img src="./images/section-2-wellcome-1.jpg" alt="" loading="lazy">
                                        </div>
                                        <div class="detail-content">
                                            <div class="detail-content-title">
                                                time
                                            </div>
                                            <div class="detail-content-desc raleway-regular">
                                                <p class="mb-1">11h00 AM | Saturday |</p>
                                                <p class="mb-1">16/11/2024</p>
                                                <p>11h | Thứ bảy | 16/11/2024</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="wellcome-items
                                    wellcome-items-2">
                                        <div class="image-content">
                                            <img src="./images/section-2-wellcome-2.jpg" alt="" loading="lazy">
                                        </div>
                                        <div class="detail-content">
                                            <div class="detail-content-title wrap-text">
                                                location
                                            </div>
                                            <div class="detail-content-desc raleway-regular">
                                                <p class="mb-1 wrap-text">Lễ thành hôn được tổ chức tại</p>
                                                <p class="mb-1 wrap-text">CTM Palace - 131</p>
                                                <p class="wrap-text">Nguyễn Phong Sắc, Cầu Giấy, HN</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="wellcome-items">
                                        <div class="image-content">
                                            <img src="./images/section-2-wellcome-3.jpg" alt="" loading="lazy">
                                        </div>
                                        <div class="detail-content wrap-text">
                                            <div class="detail-content-title wrap-text">
                                                Dresscode
                                            </div>
                                            <div class="detail-content-desc raleway-regular">
                                                <p class="mb-2 wrap-text">Trang phục lịch sự, trang nhã,</p>
                                                <p class="mb-2 wrap-text">sang trọng, phù hợp dự tiệc</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="custom-border-left">
                            <img src="./images/section-2-wrap.svg" alt="" loading="lazy">
                        </div>
                        <div class="custom-border-right">
                            <img src="./images/section-2-wrap.svg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                
            </div>
    
            <div class="section section-3" id="about-us">
                <div class="container">
                    <div class="decor-section">
                        <div class="content wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                            <div class="header-content faustina-regular above-decor">
                                About Us
                            </div>
                            <div class="main-content">
                                <div class="about-list row">
                                    <div class="col-lg-4 col-md-4">
                                        <div class="about-items">
                                            <div class="wrap-img">
                                                <img src="./images/section-3-about-1.jpg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="about-items">
                                            <div class="wrap-img">
                                                <img src="./images/section-3-about-2.jpg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="about-items">
                                            <div class="wrap-img">
                                                <img src="./images/section-3-about-3.jpg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-4">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="img-frame above-decor wow animate__animated animate__fadeInTopLeft" data-wow-duration="2s">
                                            <div class="img-wrapper">
                                                <img src="./images/section-4-frame-1.jpg" alt="" loading="lazy">
                                            </div>
                                            <div class="img-footer">
                                                <img src="./images/image-frame-footer.svg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="content-desc faustina-regular above-decor wow animate__animated animate__fadeInTopRight" data-wow-duration="2s">
                                            <div>
                                                <div class="text-top ">Bride</div>
                                                <div class="text-title">Huyền Trang</div>
                                                <ul class="text-desc">
                                                    <li>“Gia trưởng”</li>
                                                    <li>Hướng lung tung</li>
                                                    <li>Thích đếm tiền 💵</li>
                                                </ul>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-2">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section section-5">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="content-desc faustina-regular wow animate__animated animate__fadeInBottomLeft" data-wow-duration="2s">
                                            <div>
                                                <div class="text-top ">Groom</div>
                                                <div class="text-title">Quang Huy</div>
                                                <ul class="text-desc">
                                                    <li>Family is my life</li>
                                                    <li>Hướng nội</li>
                                                    <li>Yêu “🐶”</li>
                                                </ul>
                                            </div>
                                            <div class="line"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="img-frame above-decor wow animate__animated animate__fadeInBottomRight" data-wow-duration="2s">
                                            <div class="img-wrapper">
                                                <img src="./images/section-5-frame-1.jpg" alt="" loading="lazy">
                                            </div>
                                            <div class="img-footer">
                                                <img src="./images/image-frame-footer.svg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-2">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-6" id="album">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-lg-7 wow animate__animated animate__fadeInRight" data-wow-duration="3s">
                                        <div class="d-flex flex-column justify-content-between h-100" style="height: 100%;">
                                            <div class="header-content above-decor">
                                                <div class="title faustina-regular">Album</div>
                                                <div class="decs raleway-regular">We got married ❤️</div>
                                                <div class="line"></div>
                                            </div>
                                            <div class="slide-album-border">
                                                <div class="slide-album">
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-1.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-2.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item slide-item-3">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-3.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-4.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item item-5">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-5.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-6.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-7.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-8.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-9.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-10.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="slide-item">
                                                        <div class="wrap-border">
                                                            <div class="wrap-img">
                                                                <img src="./images/section-6-album-11.jpg" alt="" loading="lazy">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 wow animate__animated animate__fadeInRight " data-wow-duration="4s">
                                        <div class="album-main">
                                            <div class="album-main-border above-decor">
                                                <div class="wrap-img">
                                                    <img src="images/section-6-album-main.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-7">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="header-content faustina-regular above-decor wow animate__animated animate__fadeInUp" data-wow-duration="2s">
                                Our Memories
                            </div>
                            <div class="main-content">
                                <div class="memory-list row">
                                    <div class="col-lg-3 col-md-6">
                                        <div class="memory-items wow animate__animated animate__fadeInLeft" data-wow-duration="2s">
                                            <div class="header-item raleway-regular">
                                                <p class="year mb-2">2023</p>
                                                <p>1 year anniversary</p>
                                            </div>
                                            <div class="line-item"></div>
                                            <div class="body-item">
                                                <div class="wrap-img">
                                                    <img src="./images/section-7-memory-1.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="memory-items wow animate__animated animate__fadeInRight" data-wow-duration="3s">
                                            <div class="header-item raleway-regular">
                                                <p class="year mb-2">2024</p>
                                                <p>2 year anniversary</p>
                                            </div>
                                            <div class="line-item"></div>
                                            <div class="body-item">
                                                <div class="wrap-img">
                                                    <img src="./images/section-7-memory-2.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="memory-items wow animate__animated animate__fadeInLeft" data-wow-duration="4s">
                                            <div class="header-item raleway-regular">
                                                <p class="year mb-2">6/9/2024</p>
                                                <p>Ngày ăn hỏi</p>
                                            </div>
                                            <div class="line-item"></div>
                                            <div class="body-item">
                                                <div class="wrap-img">
                                                    <img src="./images/section-7-memory-3.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6">
                                        <div class="memory-items wow animate__animated animate__fadeInRight" data-wow-duration="5s">
                                            <div class="header-item raleway-regular">
                                                <p class="year mb-2">16/11/2024</p>
                                                <p>It’s Wedding Day</p>
                                            </div>
                                            <div class="line-item"></div>
                                            <div class="body-item">
                                                <div class="wrap-img">
                                                    <img src="./images/section-7-memory-4.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-3">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-2">
                            <img src="./images/decor-2.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-8">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="main-content wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="thanks-content">
                                            <div class="title faustina-regular above-decor">
                                                Lời ngỏ
                                            </div>
                                            <div class="title-line"></div>
                                            <div class="description raleway-regular">
                                                <div class="title-desc">
                                                    Thank you for sharing our joy
                                                </div>
                                                <div class="desc">
                                                    Chúng con/em rất hân hạnh được chào đón sự góp mặt đông đủ của quý vị khách quý. Sự hiện diện của tất cả mọi người là lời chúc tốt đẹp nhất dành cho chúng con/em!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="album-main">
                                            <div class="album-main-border above-decor">
                                                <div class="wrap-img">
                                                    <img src="images/section-8-thank-1.jpg" alt="" loading="lazy">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-2">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-9">
                <div class="container">
                    <div class="content">
                        <div class="main-content wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-banner">
                                        <div class="wrap-img">
                                            <img src="./images/section-9-banner-1.jpg" alt="" loading="lazy">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6" id="contact">
                                    <div class="form-apply">
                                        <div class="form-title lobster-regular">
                                            Will you come to our
                                            wedding day!?
                                        </div>
                                        <div class="form-options raleway-regular">
                                            <div class="options" data-click="select-option">
                                                Yes
                                            </div>
                                            <div class="options option-hide" data-click="select-option">
                                                No
                                            </div>
                                        </div>
                                        <div class="form-submit">
                                            <div class="title lobster-regular">Send message to us</div>
                                            <div>
                                                <input type="text" class="form-input raleway-regular" name="name" placeholder="Your Name" required>
                                                <br>
                                                <span class="error-text error-name raleway-regular"></span>
                                            </div>
                                            <div>
                                                <input type="text" class="form-input raleway-regular" name="message" placeholder="Message" required>
                                                <br>
                                                <span class="error-text error-message raleway-regular"></span>
                                            </div>
                                            <div class="form-action">
                                                <button class="form-button raleway-regular" data-click="send-mail">Send Here!</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-10">
                <div class="container">
                    <div class="decor-section">
                        <div class="content">
                            <div class="header-content faustina-regular wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                Our Wedding Location
                            </div>
                            <div class="header-line"></div>
                            <div class="header-title raleway-regular wow animate__animated animate__fadeInUp" data-wow-duration="3s">
                                Đi theo chỉ dẫn để tới nha!
                            </div>
                            <div class="main-content">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="map-img wow animate__animated animate__fadeInLeft" data-wow-duration="3s">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4460.749944223999!2d105.78730827596313!3d21.042427880610433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab313282ca37%3A0x93c5760e067d47f4!2sCTM%20Palace!5e1!3m2!1svi!2s!4v1730476540995!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="map-img wow animate__animated animate__fadeInRight" data-wow-duration="3s">
                                            <div class="wrap-img">
                                                <img src="./images/section-10-map-1.jpg" alt="" loading="lazy">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="section section-11">
                <div class="content">
                    <div class="main-content">
                        <div class="img-background">
                            <div class="wrap-img">
                                <img src="./images/section-11-background.jpg" alt="" loading="lazy">
                            </div>
                        </div>
                        <div class="gift faustina-regular">
                            <div class="message me-3">
                                    <span>Send love to us! 👉</span>
                                    <span class="wrap-img bellring" data-bs-toggle="modal" data-bs-target="#giftModal" style="cursor: pointer;">🧧</span>
                            </div>
                            <!-- <img src="./images/gift-box-2.jpg" alt=""> -->
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="footer">
                <div class="container">
                    <div class="decor-section">
                        <div class="wrap-footer">
                            <div class="footer-title lobster-regular">Quang Huy & Huyền Trang</div>
                            <div class="footer-desc raleway-regular">
                                <p>Sự hiện diện của quý vị là niềm vinh hạnh cho gia đình chúng tôi.</p>
                                <p>Chân thành cảm ơn!</p>
                            </div>
                        </div>
                        <div class="decor-4">
                            <img src="./images/decor-3.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-1">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-2">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-3">
                            <img src="./images/decor-2.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-5">
                            <img src="./images/decor-1.jpg" alt="" loading="lazy">
                        </div>
                        <div class="decor-6">
                            <img src="./images/decor-2.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="footer-note raleway-regular">
                From HuyCan with love ❤️
            </div>

            <div id="loading-overlay" class="">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>

            <div class="loading-page">
                <div class="progress-text raleway-regular">
                    Loading...
                </div>
                <div class="progress-line">
                    <div class="progress-bar"></div>
                </div>
                <div class="list-images">
                    <div class="image-item item-1">
                        <div class="wrap-img">
                            <img src="./images/section-6-album-1.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="image-item item-2" style="display: none">
                        <div class="wrap-img">
                            <img src="./images/section-6-album-11.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="image-item item-3" style="display: none">
                        <div class="wrap-img">
                            <img src="./images/section-6-album-6.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="image-item item-4" style="display: none">
                        <div class="wrap-img">
                            <img src="./images/section-6-album-7.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                    <div class="image-item item-5" style="display: none">
                        <div class="wrap-img">
                            <img src="./images/section-6-album-8.jpg" alt="" loading="lazy">
                        </div>
                    </div>
                </div>
                <div class="progress-number raleway-regular">
                    0%
                </div>
            </div>
    
            <div class="modal fade" id="giftModal" tabindex="-1" aria-labelledby="giftModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="d-flex align-items-center justify-content-center">
                                <div class="modal-gift m-3 raleway-regular">
                                    <img src="./images/section-11-gift-1.jpg" alt="" loading="lazy">
                                    <p class="m-0">Cao Nguyễn Huyền Trang</p>
                                    <p class="m-0">BIDV</p>
                                </div>
    
                                <div class="modal-gift m-3 raleway-regular">
                                    <img src="./images/section-11-gift-2.jpg" alt="" loading="lazy">
                                    <p class="m-0">Nguyễn Quang Huy</p>
                                    <p class="m-0">TECHCOMBANK</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="toast-container position-fixed top-0 end-0 p-3">
                <div id="myToast" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body raleway-regular">
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>

            {{-- <audio id="myAudio" controls autoplay>
                <source src="{{ asset('audio/I-Do.mp3') }}" type="audio/mpeg">
            </audio> --}}
            <audio id="myAudio" controls autoplay>
                <source src="./audio/I-Do.mp3" type="audio/mpeg">
            </audio>
            <button id="startButton" class="play-button">Bắt đầu</button>
            {{-- <iframe id='video-outlet' src='./audio/I-Do.mp3' width='640' height='480' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe hidden> --}}
        </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- Bootstrap JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

        <script>
            const myToast = new bootstrap.Toast($('#myToast'), {
                delay: 4000
            });
            let bussy = false;
            new WOW().init();

            function runLoading() {
                let i = 0;
                const interval = setInterval(() => {
                    if (i > 100) {
                        $('.loading-page').fadeOut()
                        clearInterval(interval); // Dừng khi đạt 100%
                    } else {
                        $('.loading-page .progress-number').text(`${i}%`);
                        $('.loading-page .progress-line .progress-bar').css('width', `${i}%`);
                        
                        // Xử lý chuyển đổi hình ảnh
                        switch (i) {
                            case 20:
                                $('.loading-page .list-images .item-1').fadeOut(500, () => {
                                    $('.loading-page .list-images .item-2').fadeIn(500);
                                });
                                break;
                            case 40:
                                $('.loading-page .list-images .item-2').fadeOut(500, () => {
                                    $('.loading-page .list-images .item-3').fadeIn(500);
                                });
                                break;
                            case 60:
                                $('.loading-page .list-images .item-3').fadeOut(500, () => {
                                    $('.loading-page .list-images .item-4').fadeIn(500);
                                });
                                break;
                            case 80:
                                $('.loading-page .list-images .item-4').fadeOut(500, () => {
                                    $('.loading-page .list-images .item-5').fadeIn(500);
                                });
                                break;
                            default: break;
                        }
                        i++;
                    }
                }, 150);
            }
            runLoading()

            $('#startButton').on('click', function() {
                const audio = document.getElementById("myAudio");
                audio.play().catch(error => {
                    console.error("Không thể phát nhạc tự động:", error);
                });
            });

            // $(document).one('click touchstart', function() {
            //     $('#startButton').trigger('click');
            // });


            $(document).on('click', '[data-click="menuToggle"]', function (e) {
                $('.navbar-mobile').toggleClass('active')
                $('.navbar-overlay').toggleClass('active')
            })

            $(document).on('click', '[data-click="send-mail"]', function (e) {
                if (bussy) return 0
                bussy = true
                $('#loading-overlay').addClass('active')

                $(`.error-text`).text('')

                let data = {
                    "name": $('input[name="name"]').val(),
                    "message": $('input[name="message"]').val()
                }

                $.ajax({
                    url: '/send-mail',
                    type: 'POST',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.success) {
                            $(`#myToast .toast-body`).text(response.message)
                            myToast.show(); 
                            $('.section-9').fadeOut()
                        }

                        $('#loading-overlay').removeClass('active')
                        bussy = false
                    },
                    error: function(xhr, status, error) {
                        let responseJSON = xhr.responseJSON
                        if (responseJSON.errors) {
                            $.each(responseJSON.errors, function (key, val) { 
                                $(`.error-text.error-${key}`).text(val[0])
                            });
                        }

                        $(`#myToast .toast-body`).text("Gửi lời chúc không thành công, hãy thử lại")
                        myToast.show(); 

                        $('#loading-overlay').removeClass('active')
                        bussy = false
                    }
                });

                
            })

            $(document).on('click', '[data-click="select-option"]', function (e) {
                let ele = $(this)
                if (ele.hasClass('option-hide')) {
                    ele.removeClass('bell');

                    setTimeout(function() {
                        ele.addClass('bell');
                    }, 10);
                } else {
                    ele.addClass('option-selected')
                }
            })

            $(window).on('load', function() {
                $(".scrollLink").click(function(event) {
                    event.preventDefault();
                    let target = $(this).attr("data-target");
                    document.getElementById(target).scrollIntoView({ behavior: "smooth", block: "start" });
                });
            })

            $('.slide-album').slick({
                autoplay: false,
                autoplaySpeed: 3000,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    {
                        breakpoint: 768, 
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480, 
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        </script>
    </body>
</html>
