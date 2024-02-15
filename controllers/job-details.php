<?php
// var_dump(parse_url($_SERVER["REQUEST_URI"])["query"]);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/public/user/style.css">
</head>

<body>
    <?php require_once "layout/user/header.php" ?>
    <div class="job-title-container">
        <div class="job-title-box-container">
            <div class="job-title-info-box">
                <div>
                    <img src="public/user/images/banner1.webp" alt="{jobData.img_name}" />
                </div>
                <div>
                    <h1>{jobData.title}</h1>
                    <div class="firm-location-box">
                        <p>{jobData.firm}</p>
                    </div>
                    <div class="firm-location-box">
                        {jobData.location}
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
                <p class="mt-5">{jobData.description}</p>
            </div>
            <div class="info-box">
                <h2>Key Responsibilities</h2>
                <ul>
                    <li key={index}>{responsibility}</li>
                </ul>
            </div>
            <div class="info-box">
                <h2>Skills & Experiences</h2>
                <ul>
                    <li key={index}>{skills}</li>
                </ul>
            </div>
        </div>
        <div class="job-overview-container">
            <div class="job-overview-box">
                <h2>Job Overview</h2>
                <div class="overview-items">
                    <CiCalendarDate size={30} />
                    <div>
                        <p class="item-title">Date posted:</p>
                        <p class="item-value">Posted {dateFormat(jobData.date)}</p>
                    </div>
                </div>
                <div class="overview-items">
                    <BiSolidHourglassTop size={30} />
                    <div>
                        <p class="item-title">Expiration date:</p>
                        <p class="item-value">{dateFormat(jobData.due_date)}</p>
                    </div>
                </div>
                <div class="overview-items">
                    <FaUserTie size={30} />
                    <div>
                        <p class="item-title">Job title</p>
                        <p class="item-value">{jobData.title}</p>
                    </div>
                </div>
                <div class="overview-items">
                    <LiaDoorOpenSolid size={30} />
                    <div>
                        <p class="item-title">Vacancy:</p>
                        <p class="item-value">{jobData.vacancy}</p>
                    </div>
                </div>
                <div class="overview-items">
                    <MdOutlineSchedule size={30} />
                    <div>
                        <p class="item-title">Job Schedule:</p>
                        <p class="item-value">{jobData.job_shedule}</p>
                    </div>
                </div>
                <div class="overview-items">
                    <IoLocationOutline size={30} />
                    <div>
                        <p class="item-title">Location:</p>
                        <p class="item-value">Rapha Aroma Hospital</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "view/partials/modal.php"; ?>

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


            // Apply Job Ajex Request

            $("#apply-btn").click(function (e) {
                if ($("#job-apply-form")[0].checkVisibility()) {
                    e.preventDefault();
                    $("#apply-btn").val('Please Wait...')
                    $.ajax({
                        url: "includes/action.php",
                        method: "post",
                        data: $("#job-apply-form").serialize() + '&action=applyjob',
                        success: function (response) {
                            console.log(response);
                        }
                    })
                }
            })
        })
    </script>
    <?php require_once "layout/user/footer.php" ?>
</body>

</html>