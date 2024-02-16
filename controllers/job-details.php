<?php
include("includes/config.php");
include("includes/functions.php");
$query = parse_url($_SERVER["REQUEST_URI"])["query"];
$sql = "SELECT * FROM jobposts WHERE slug='$query';";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $post = $row;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["apply-btn"])) {
        $jobId = $post["id"];
        $title = $_POST["title"];
        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $dob = $_POST["dob"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $location = $_POST["location"];
        $qualification = $_POST["qualification"];
        $cv = $_POST["cv"];
        $message = $_POST["message"];

        $insert_query = "INSERT INTO jobapplications (job_id, title, first_name, last_name, dob, email, location, qualification, cv_link, message, phone_number)
        VALUES ($jobId, $title, $firstName, $lastName, $dob, $email, $location, $qualification, $cv, $message, $phone);";
        var_dump($insert_query);
        $result = mysqli_query($conn, $insert_query);
        var_dump($result);
        // if (mysqli_num_rows($result) > 0) {
        //     while ($row = mysqli_fetch_assoc($result)) {
        //         var_dump($row);
        //     }
        // }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/user/style.css">
    <script src="https://kit.fontawesome.com/eb8fffcb35.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once "layout/user/header.php" ?>
    <div class="job-title-container">
        <div class="job-title-box-container">
            <div class="job-title-info-box">
                <div>
                    <img src="<?php echo $post["img_url"] ?>" alt="<?php echo $post["img_name"] ?>" />
                </div>
                <div>
                    <h1>
                        <?php echo $post["title"]; ?>
                    </h1>
                    <div class="firm-location-box">
                        <p>
                            <?php echo $post["firm"]; ?>
                        </p>
                    </div>
                    <div class="firm-location-box">

                        <?php echo $post["location"]; ?>
                    </div>
                    <div class="job-type-container">

                        <div class="job-type-btn">
                            <p>Full time</p>
                        </div>

                        <div class="job-type-btn">
                            <p>Part Time</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <button class="apply-btn" id="job-apply-btn">
                    Apply For Job
                </button>
            </div>
        </div>
    </div>
    <div class="job-info-container">
        <div>
            <div class="info-box">
                <h2>Job description</h2>
                <p class="mt-5">
                    <?php echo $post["description"]; ?>
                </p>
            </div>
            <?php if (count(json_decode($post["responsibilities"])) > 0) { ?>
                <div class="info-box">
                    <h2>Key Responsibilities</h2>
                    <ul>
                        <?php foreach (json_decode($post["responsibilities"]) as $responsibility) { ?>
                            <?php echo "<li>$responsibility</li>" ?>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
            <?php if (count(json_decode($post["skills"])) > 0) { ?>
                <div class="info-box">
                    <h2>Skills & Experiences</h2>
                    <ul>
                        <?php foreach (json_decode($post["skills"]) as $skill) { ?>
                            <?php echo "<li>$skill</li>" ?>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
        <div class="job-overview-container">
            <div class="job-overview-box">
                <h2>Job Overview</h2>
                <div class="overview-items">
                    <i class="fa-regular fa-calendar-days"></i>
                    <div>
                        <p class="item-title">Date posted:</p>
                        <p class="item-value">Posted:
                            <?php echo dateFormat($post["date"]); ?>
                        </p>
                    </div>
                </div>
                <div class="overview-items">
                    <i class="fa-solid fa-hourglass-start"></i>
                    <div>
                        <p class="item-title">Expiration date:</p>
                        <p class="item-value">
                            <?php echo dateFormat($post["due_date"]) ?>
                        </p>
                    </div>
                </div>
                <div class="overview-items">
                    <i class="fa-solid fa-user-tie"></i>
                    <div>
                        <p class="item-title">Job title</p>
                        <p class="item-value">
                            <?php echo $post["title"] ?>
                        </p>
                    </div>
                </div>
                <div class="overview-items">
                    <i class="fa-solid fa-door-open"></i>
                    <div>
                        <p class="item-title">Vacancy:</p>
                        <p class="item-value">
                            <?php

                            echo $post["vacancy"] ?>
                        </p>
                    </div>
                </div>
                <div class="overview-items">
                    <i class="fa-regular fa-calendar"></i>
                    <div>
                        <p class="item-title">Job Schedule:</p>
                        <p class="item-value">
                            <?php echo $post["job_shedule"] ?>
                        </p>
                    </div>
                </div>
                <div class="overview-items">
                    <i class="fa-solid fa-location-dot"></i>
                    <div>
                        <p class="item-title">Location:</p>
                        <p class="item-value">
                            <?php echo $post["location"] ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "view/partials/modal.php"; ?>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#modal").hide()
            $("#job-apply-btn").click(function () {
                $("#modal").show()
            })
            $("#close-modal").click(function () {
                $("#modal").hide()
            })
        })
    </script>
    <?php require_once "./layout/user/footer.php" ?>
</body>

</html>