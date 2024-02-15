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

    <!----------------------------- Carousel ------------------------>

    <section class="main-carousel owl-carousel owl-theme">

        <div class="item">
            <img src="public/user/images/banner1.webp" alt="">
            <div class="carousel-content">
                <h2 class="carousel-title">sdfsdfsdfsdfsdf</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nam quisquam repellat incidunt
                    eaque labore vero aut animi, enim consectetur, minima aspernatur dolore quae commodi!
                    Numquam officia accusamus sapiente reiciendis.</p>
                <a href="#" class="py-2 px-5 bg-[#0f4658] font-bold text-sm text-white rounded-md shadow-sm">Learn
                    more</a>
            </div>
        </div>
        <div class="item">
            <img src="public/user/images/banner1.webp" alt="">
            <div class="carousel-content">
                <h2 class="carousel-title">sdfsdfsdfsdfsdf</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nam quisquam repellat incidunt
                    eaque labore vero aut animi, enim consectetur, minima aspernatur dolore quae commodi!
                    Numquam officia accusamus sapiente reiciendis.</p>
                <a href="#" class="py-2 px-5 bg-[#0f4658] font-bold text-sm text-white rounded-md shadow-sm">Learn
                    more</a>
            </div>
        </div>
        <div class="item">
            <img src="public/user/images/banner1.webp" alt="">
            <div class="carousel-content">
                <h2 class="carousel-title">sdfsdfsdfsdfsdf</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nam quisquam repellat incidunt
                    eaque labore vero aut animi, enim consectetur, minima aspernatur dolore quae commodi!
                    Numquam officia accusamus sapiente reiciendis.</p>
                <a href="#" class="py-2 px-5 bg-[#0f4658] font-bold text-sm text-white rounded-md shadow-sm">Learn
                    more</a>
            </div>
        </div>
        <div class="item">
            <img src="public/user/images/banner1.webp" alt="">
            <div class="carousel-content">
                <h2 class="carousel-title">sdfsdfsdfsdfsdf</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo nam quisquam repellat incidunt
                    eaque labore vero aut animi, enim consectetur, minima aspernatur dolore quae commodi!
                    Numquam officia accusamus sapiente reiciendis.</p>
                <a href="#" class="py-2 px-5 bg-[#0f4658] font-bold text-sm text-white rounded-md shadow-sm">Learn
                    more</a>
            </div>
        </div>
    </section>

    <!----------------------------- End Carousel ------------------------>

    <!----------------------------- Foundation ------------------------>

    <section class="foundation-container">
        <div class="foundation">
            <h2 class="main-title">{content.title}</h2>
            <p class="sub-text">{content.subtitle}</p>
            <div class="container">
                <div class="img-container">
                    <img src="public/user/images/banner1.webp" alt="{content.img_alt}" />
                </div>
                <div class="text-container">
                    <h3>About Us</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, corporis repudiandae minima
                        delectus in dolore rerum, non suscipit debitis magnam voluptatibus officia voluptates ducimus
                        iste ut tempore eveniet. Dicta, corrupti.</p>
                </div>
            </div>
        </div>
    </section>
    <!----------------------------- End Foundation ------------------------>

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

    <!----------------------------- Our Specialities ------------------------>

    <section class="speciality">
        <h2 class="main-title">
            Reveal Elements on scroll
        </h2>
        <p class="sub-text">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate
            harum recusandae quas suscipit illum voluptatibus neque dolor
        </p>
        <div class="counters">
            <div>
                <div class="counter">
                    <!-- <BsHospital size={30} class="text-gray-400 mb-5"/> -->
                    <h2><span data-count="156">0</span></h2>
                    <h4>Hospitals</h4>
                </div>
                <div class="counter">
                    <!-- <BsHospital size={30} class="text-gray-400 mb-5"/> -->
                    <h2><span data-count="156">0</span></h2>
                    <h4>Specialities</h4>
                </div>
                <div class="counter">
                    <!-- <BsHospital size={30} class="text-gray-400 mb-5"/> -->
                    <h2><span data-count="156">0</span></h2>
                    <h4>Staffs</h4>
                </div>
                <div class="counter">
                    <!-- <FaUsers size={30} class="text-gray-400 mb-5"/> -->
                    <h2><span data-count="156">0</span><sup>+</sup></h2>
                    <h4>Statisfied Patients</h4>
                </div>
            </div>
        </div>
    </section>

    <!----------------------------- End Our Specialities ------------------------>

    <!----------------------------- New Announcement ------------------------>

    <section class="newAnnouncement">
        <h2 class="main-title">{content.main_title}</h2>
        <p class="sub-text">{content.subtitle}</p>
        <div class="announcement-container">
            <img src="public/user/images/banner1.webp" alt="{content.original_filename}" />
        </div>
    </section>

    <!----------------------------- End New Announcement ------------------------>
    <!----------------------------- Our Awards and Certificates ------------------------>
    <section class="awardsandcertificates">
        <h2 class="main-title">{content.title}</h2>
        <p class="sub-text">{content.subtitle}</p>
        <div>
            <div class="owl-awards owl-carousel owl-theme">
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
                <div class="item">
                    <img src="public/user/images/banner1.webp" alt="{d.original_filename}" />
                </div>
            </div>
        </div>
    </section>
    <!----------------------------- End Awards and Certificates ------------------------>


  

<?php require_once "layout/user/footer.php"; ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script type="text/javascript">
        $('.main-carousel').owlCarousel({
            loop: true,
            margin: 10,
            autoplayTimeout: 60000,
            nav: false,
            dots: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })

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

        $('.owl-awards').owlCarousel({
            loop: true,
            dots: false,
            margin: 10,
            nav: false,
            autoplay: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 5
                }
            }
        })
    </script>
</body>

</html>