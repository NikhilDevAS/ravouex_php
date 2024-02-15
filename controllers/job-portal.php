<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="public/user/style.css">
</head>

<body>
    <?php require_once "layout/user/header.php" ?>
    <!----------------- Page Banner ------------ -->
    <div class="banner-image" style="background-image: url('public/user/images/banner1.webp');">
        <h1 class="main-title">{content.about.title}</h1>
        <p class="sub-text">{content.about.subtitle}</p>
    </div>
    <!----------------- End Page Banner ------------ -->

    <div class="job-title-container">
        <h2>Latest Job listing:</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident, eos accusantium
            possimus esse quis maxime</p>
    </div>

    <div class="jobs-container">
        <div class="jobs-grid">

            <!-------------------------- Job Card  ---------------->
            <div class="job-box">
                <div>
                    <h2 class="job-title">dfgdfgdfgdfg</h2>
                    <p class="job-description">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, molestias accusamus iure aspernatur impedit deleniti aliquid quaerat minima dolorem velit modi maiores possimus voluptatem qui eveniet sapiente veritatis officia sunt!
                    </p>
                </div>
                <div style="width: 100%;">
                    <div class="post-details">
                        <div>
                            <p>Posted Date</p>
                            <span>{dateFormat(post.date)}</span>
                        </div>
                        <div class="vacancy-info">
                            <p>Vacancies</p>
                            <span>{post.vacancy}</span>
                        </div>
                        <div>
                            <p>Due Date</p>
                            <p>{dateFormat(post.due_date)}</p>
                        </div>
                    </div>
                    <div class="job-btn-container">
                        <a href="/job-details?nikhil-dev-a-s"
                            class="job-btn">More
                            Details
                        </a>
                    </div>
                </div>
            </div>
            <!-------------------------- End Job Card  ---------------->
        </div>
    </div>

    <?php require_once "layout/user/footer.php"; ?>

</body>

</html>