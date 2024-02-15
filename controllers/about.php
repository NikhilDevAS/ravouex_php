<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css"
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="public/user/style.css">
</head>
<body>
<?php require_once "layout/user/header.php" ?>

<!----------------- Page Banner ------------ -->
<div class="banner-image"
    style="background-image: url('public/user/images/banner1.webp');">
    <h1 class="main-title">{content.about.title}</h1>
    <p class="sub-text">{content.about.subtitle}</p>
</div>
<!----------------- End Page Banner ------------ -->

<!----------------------- Message From Chairman -------------------------->
<div class="chairman-msg-container">
    <div class="msg-container">
        <div>
            <img src="public/user/images/banner1.webp"
                alt={content.about.img_alt} />
        </div>
        <div class="msg-text-container">
            <h2>{content.about.suptitle}</h2>
            <p>{content.about.message}</p>
        </div>
    </div>
</div>
<!----------------------- End Message From Chairman -------------------------->

     <!----------------------------- Vision, Mission & Motto ------------------------>
     <section>
        <div class="vision-container">
            <h2 class="main-title">Ravouex Vision and Aim</h2>
            <p class="sub-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
                harum recusandae quas suscipit illum voluptatibus neque dolor
            </p>
            <div class="owl-vision-mission-motto owl-carousel owl-theme">
                <div class="card">
                    <img src="public/user/images/banner1.webp" alt="{content.filename}" />
                    <div class="info">
                        <h3>{content.title}</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus id ad excepturi nemo
                            iste porro repellat asperiores, fugiat autem debitis ipsam voluptatum deleniti quod et ut
                            neque, recusandae fuga?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="public/user/images/banner1.webp" alt="{content.filename}" />
                    <div class="info">
                        <h3>{content.title}</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus id ad excepturi nemo
                            iste porro repellat asperiores, fugiat autem debitis ipsam voluptatum deleniti quod et ut
                            neque, recusandae fuga?</p>
                    </div>
                </div>
                <div class="card">
                    <img src="public/user/images/banner1.webp" alt="{content.filename}" />
                    <div class="info">
                        <h3>{content.title}</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla doloribus id ad excepturi nemo
                            iste porro repellat asperiores, fugiat autem debitis ipsam voluptatum deleniti quod et ut
                            neque, recusandae fuga?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------- End Vision, Mission & Motto ------------------------>
    <?php require_once "layout/user/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
           $('.owl-vision-mission-motto').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    </script>
</body>
</html>