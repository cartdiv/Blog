<?php include("path.php"); ?>
<?php include(ROOT_PATH . '/app/controllers/posts.php');

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
}
$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achreen || Blogs</title>

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

        <div class="swiper-slide">

          <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="banner" class="banner-img">

          <div class="banner-content">


            <h2 class="banner-title"><?php echo $post['title']; ?></h2>


          </div>

        </div>

      </div>


    </div>

  </div>
  
  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <!-- Content -->
    <div class="content clearfix">

      <!-- Main Content Wrapper -->
      <div class="main-content-wrapper">
        <div class="main-content single">

          <div class="post-content">
          <?php echo html_entity_decode($post['body']); ?>
          </div>

        </div>
      </div>
      <!-- // Main Content -->

      <!-- Sidebar -->
      <div class="sidebar single">

        <div class="section popular">
          <h2 class="section-title">Most Read</h2>


          <?php foreach ($posts as $p): ?>
          <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
            <a href="read.php?id=<?php echo $post['id']; ?>" class="title">
            <?php echo $p['title'] ?>
            </a>
          </div>
          <?php endforeach; ?>

        </div>


      </div>
      <!-- // Sidebar -->

    </div>
    <!-- // Content -->

  </div>
  <!-- // Page Wrapper -->
  
 

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