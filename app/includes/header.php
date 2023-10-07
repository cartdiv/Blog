<header class="header">

<a href="<?php echo BASE_URL . '/index.php' ?>" class="logo"> <i class="fas fa-newspaper"></i> Achreen </a>

<nav class="navbar">
  <ul>
    <li><a href="<?php echo BASE_URL . '/index.php' ?>">Home</a></li>
    <li><a href="<?php echo BASE_URL . '/posts.php' ?>">Posts</a></li>
    <li><a href="<?php echo BASE_URL . '/topics.php' ?>">Topics</a></li>
    <li><a href="<?php echo BASE_URL . '/events.php' ?>">Events</a></li>
    <li><a href="<?php echo BASE_URL . '/contact.php' ?>">Contact Us</a></li>
  </ul>
</nav>

<div class="icons">
  <ul>
    <li><div class="fas fa-search" id="search-btn"></div></li>
    <li><div class="fas fa-user" id="login-btn"></div></li>
  </ul>
</div>


<form action="index.php" method="post" class="search-form">
    <input type="text" name="search-term" id="search-box" placeholder="search here...">
</form>

<?php if (isset($_SESSION['id'])): ?>
<form action="" class="login-form">
  <h3>Hi, <?php echo $_SESSION['username']; ?></h3>
  <?php if($_SESSION['admin']): ?>
  <p><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>">Dashboard</a></p>
  <?php endif; ?>
  <p><a href="<?php echo BASE_URL . '/logout.php' ?>">Log Out</a></p>
</form>
<?php else: ?>

<form action="" class="login-form">
    <h3>login now</h3>
    <p>I dont have an existing account <a href="<?php echo BASE_URL . '/register.php' ?>">create now</a></p>
    <p>I have an existing account <a href="<?php echo BASE_URL . '/login.php' ?>">Log in</a></p>
</form>
<?php endif; ?>





<nav class="mobile-navigation-menu  has-scrollbar" data-mobile-menu >


  <div class="menu-top">
    <?php if (isset($_SESSION['id'])): ?>
    <h2 class="menu-title">Hi, <?php echo $_SESSION['username']; ?></h2> 
    <?php else: ?>
    <h2 class="menu-title">Hi, User</h2>
    <?php endif; ?>
    

    <button class="menu-close-btn" data-mobile-menu-close-btn>
      <ion-icon name="close-outline"></ion-icon>
    </button>
  </div>

  <ul class="mobile-menu-category-list">

    <li class="menu-category">
      <a href="<?php echo BASE_URL . '/index.php' ?>" class="menu-title">Home</a>
    </li>

    <li class="menu-category">
      <a href="<?php echo BASE_URL . '/posts.php' ?>" class="menu-title">Posts</a>
    </li>

    <li class="menu-category">
      <a href="<?php echo BASE_URL . '/topics.php' ?>" class="menu-title">Topics</a>
    </li>

    <li class="menu-category">
      <a href="<?php echo BASE_URL . '/event.php' ?>" class="menu-title">Events</a>
    </li>

    <li class="menu-category">
      <a href="<?php echo BASE_URL . '/contact.php' ?>" class="menu-title">Contact Us</a>
    </li>
 

  </ul>
  <form action="index.php" method="post">
  <input type="text" name="search-term" class="email-field" placeholder="search here..." required>
</form>
  <div class="menu-bottom">

    <ul class="menu-category-list">

      <li class="menu-category">
<?php if (isset($_SESSION['id'])): ?>
        <button class="accordion-menu" data-accordion-btn>
          <p class="menu-title">View Profile</p>

          <ion-icon name="caret-back-outline" class="caret-back"></ion-icon>
        </button>

        
        <ul class="submenu-category-list" data-accordion>
        <?php if($_SESSION['admin']): ?>
          <li class="submenu-category"><a href="<?php echo BASE_URL . '/admin/dashboard.php' ?>" class="submenu-title">Dashboard</a></li>
          <?php endif; ?>
          <li class="submenu-category"><a href="<?php echo BASE_URL . '/logout.php' ?>" class="submenu-title">Log Out</a></li>
          <?php else: ?>
            <li class="submenu-category"><a href="<?php echo BASE_URL . '/register.php' ?>" class="submenu-title">Sign up</a></li>
          <li class="submenu-category"><a href="<?php echo BASE_URL . '/login.php' ?>" class="submenu-title">Login</a></li>
        
<?php endif; ?>
        </ul>
      </li>


    </ul>



    <ul class="menu-social-container">

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>
    
    </ul>

  </div>

</nav>
<div data-mobile-menu-close-btn></div>  

<button class="action-btn" data-mobile-menu-open-btn>
    <ion-icon name="menu-outline"></ion-icon>
  </button>
</header>

