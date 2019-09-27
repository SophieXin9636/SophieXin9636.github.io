<!DOCTYPE html>
<html lang="en">

<?php
  $main_pageName = "習慣是無痛的釋放";
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sophie Xin</title>

  <!-- Favicon -->
  <link href="/img/favicon.ico" rel="icon" type="image/x-icon">
  <link href="/img/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="/img/favicon.ico" rel="bookmark" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Sophie Xin</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="posts/index.html">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/newtaipei-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <?php 
              echo "<h2>{$main_pageName}</h2>";
            ?>
            <span class="subheading">Listening Music and Learning CS
            </span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->

  <?php
    $post = array(
      array(
        'post-subtitle' => '常見的泰勒展開式',
        'post-title' => 'Commonly Used Taylor Series.',
        'Date' => 'on January 7, 2018',
        'link' => 'posts/C/taylor-series.html'
      ),
      array(
        'post-subtitle' => '字串相關整理',
        'post-title' => 'String.',
        'Date' => 'on January 7, 2018',
        'link' => 'posts/C/string.html'
      ),
      array(
        'post-subtitle' => '質數相關程式題',
        'post-title' => 'Example of prime number in C.',
        'Date' => 'on December 19, 2017',
        'link' => 'posts/C/prime-number.html'
      ),
      array(
        'post-subtitle' => '常見的迭代式總整理',
        'post-title' => 'Example of common iteration.',
        'Date' => 'on December 19, 2017',
        'link' => 'posts/C/iterative.html'
      ),
      array(
        'post-subtitle' => '常見的遞迴式總整理',
        'post-title' => 'Example of common recursion.',
        'Date' => 'on December 16, 2017',
        'link' => 'posts/C/recursive.html'
      ),
      array(
        'post-subtitle' => 'Two AI robots : Sophia and Han Robot.',
        'post-title' => 'Two Robots first debate the future of humanity.',
        'Date' => 'on December 16, 2017',
        'link' => 'posts/Technology/AI-debate.html'
      ),
      array(
        'post-subtitle' => '印出直角三角形及菱形.',
        'post-title' => 'Print right triangle and diamond in C.',
        'Date' => 'on December 14, 2017',
        'link' => 'posts/C/triangle.html'
      ),
      array(
        'post-subtitle' => 'Trial and error',
        'post-title' => 'Learning from Error : assignment to expression with array type',
        'Date' => 'on December 12, 2017',
        'link' => 'posts/Convergent-Thinking/assignment-to-expression-with-array-type.html'
      ),
      array(
        'post-subtitle' => 'Hello darkness, my old friend.',
        'post-title' => 'The Sound of Silence',
        'Date' => 'on November 28, 2017',
        'link' => 'posts/music/The-sound-of-silence.html'
      ),
      array(
        'post-subtitle' => '擁有獨特的嗓音，一位具有個人特色的藝術音樂家',
        'post-title' => 'Sainkho Namtchylak',
        'Date' => 'on November 21, 2017',
        'link' => 'posts/music/Sainkho-Namtchylak.html'
      ),
      array(
        'post-subtitle' => 'Martin Garrix',
        'post-title' => 'A famous DJ in Netherlands.',
        'Date' => 'on November 21, 2017',
        'link' => 'posts/music/1121-Martin-Garrix.html'
      ),
      array(
        'post-subtitle' => 'More range, higher speeds and increase broadcasting capacity.',
        'post-title' => 'Bluetooth 5.0',
        'Date' => 'on November 08, 2017',
        'link' => 'posts/Technology/1108-Bluetooth5.html'
      )
      
    );

    foreach($post as $key => $content){
      echo "<div class='post-preview'>";
      echo "<a href={$post[$key]['link']}>";
      echo "<h2 class='post-title'>";
              echo "{$post[$key]['post-title']}";
              echo "</h2>";
              echo "<h3 class='post-subtitle'>";
              echo "{$post[$key]['post-subtitle']}";
              echo "</h3>";
              echo "</a>";
              echo "<p class='post-meta'>Posted by <a href='#'>Sophie Xin</a>";
            echo "{$post[$key]['date']}</p>";
        echo "</div>";
        echo "<hr>";
    }

  ?>

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/SophieXin_Chen">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/chacha8536">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/SophieXin9636">
                <span class="fa-stack fa-lg">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Sophie Xin 2017</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>