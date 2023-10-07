<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achreen || Posts</title>

<link rel="stylesheet" href="assets/css/style.css">  

<!-- ======== Slider Js ======= -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
 
<!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<!--
  - google font link
-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
  rel="stylesheet">
  
</head>
<body>
    
  <div class="overlay" data-overlay></div>

  <!--
    - MODAL
  -->

  <div class="modal--" data-modal>

    <div class="modal-close-overlay--" data-modal-overlay></div>

    <div class="modal-content--">

      <button class="" data-modal-close>
      </button>


    </div>

  </div> 





  <!--
    - NOTIFICATION TOAST
  -->

  <?php foreach ($posts as $post): ?>
  <div class="notification-toast" data-toast>

    <button class="toast-close-btn" data-toast-close>
      <ion-icon name="close-outline"></ion-icon>
    </button>

    <div class="toast-banner">
      <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="Rose Gold Earrings" width="80" height="70">
    </div>

    <div class="toast-detail">

      <p class="toast-message">
        Just Posted
      </p>

      <p class="toast-title">
      <?php echo $post['title']; ?>
      </p>

      <!-- <p class="toast-meta">
        <time datetime="PT2M">2 Minutes</time> ago
      </p> -->

    </div>

  </div>

  <?php endforeach; ?>




  <!--
    - HEADER
  -->
  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>



 
  <div class="banner">

    <div class="container swiper">

      <div class="swiper-wrapper">

      <?php foreach ($posts as $post): ?>
        <div class="swiper-slide">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="banner" class="banner-img">
          <div class="banner-content">
            <h2 class="banner-title"><?php echo $post['title']; ?> </h2>
            <a href="single.php?id=<?php echo $post['id']; ?>" class="banner-btn">Read now</a>
          </div>
        </div>
        <?php endforeach; ?>






      </div>

    </div>

  </div>
  

  
    <div class="trending-posts">
        <h1>All posts</h1>
    </div>
    
    <div class="search-results">
       
    <?php foreach ($posts as $post): ?>
        <div class="search-grid">
          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="">

          <div class="search-text">
              <a href="read.php?id=<?php echo $post['id']; ?>" class="search-post"><?php echo $post['title']; ?></a>
              <i class="far fa-user"></i>  <?php echo $post['username']; ?>
              &nbsp;
              <i class="far fa-calendar"> </i> <?php echo date('F j', strtotime($post['created_at'])); ?>
          </div>
        </div>
        <?php endforeach; ?>

    </div>


<!-- newsletter section starts -->

<section class="sb-newsletter">

  <form action="">
      <h3>subscribe for latest updates</h3>
      <input type="email" name="" placeholder="enter your email" id="" class="box">
  </form>

</section>

<!-- newsletter section ends -->
       <!-- ==FOOTER== -->
       <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>






<!-- ======== SwiperJS ======= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.7.5/swiper-bundle.min.js"></script>

  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!--
    - ionicon link
  -->      
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="assets/js/script.js"></script>
<script src="assets/js/slider.js"></script>

</body>
</html>