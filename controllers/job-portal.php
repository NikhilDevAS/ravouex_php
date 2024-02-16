
<?php 
  require_once('includes/config.php');
    require_once('includes/functions.php');
 

  $sql = "SELECT * FROM jobposts;";
  $result = mysqli_query($conn, $sql);
  $posts = array(); // Initialize an empty array to store posts

  if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
          $posts[] = $row; // Append each row to the $posts array
      }
  }
?>

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
        <?php foreach ($posts as $post){?>
            <!-------------------------- Job Card  ---------------->
            <div class="job-box">
                <div>
                    <h2 class="job-title"><?php echo $post["title"]?></h2>
                    <p class="job-description"><?php echo $post["description"] ?></p>
                </div>
                <div style="width: 100%;">
                    <div class="post-details">
                        <div>
                            <p>Posted Date</p>
                            <span><?php echo dateFormat($post["date"])?></span>
                        </div>
                        <div class="vacancy-info">
                            <p>Vacancies</p>
                            <span><?php echo dateFormat($post["vacancy"]); ?></span>
                        </div>
                        <div>
                            <p>Due Date</p>
                            <p><?php echo dateFormat ($post["due_date"])?></p>
                        </div>
                    </div>
                    <div class="job-btn-container">
                        <a href="/job-details?<?php echo $post["slug"]; ?>"
                            class="job-btn">More
                            Details
                        </a>
                    </div>
                </div>
            </div>
            <!-------------------------- End Job Card  ---------------->
            <?php }; ?>
        </div>
    </div>

    <?php require_once "layout/user/footer.php"; ?>

</body>

</html>