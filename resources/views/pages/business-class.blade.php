@extends('includes.master')
@section('title', $title)
@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
<style>
  .city-title {
    font-family: Fantasy;
    text-align: center;
    font-size: 45px;
  }
  .caro-image {
    height: 300px;
    margin: 5px;
    border-radius: 5px;
    transition: all 1s;
  }
  .caro-image.left,
  .caro-image.right {
    width: 50% !important;
  }
  .caro-image.center {
    width: 100% !important;
  }
  .caro-image:hover {
    transform: scale(1.05);
  }
  .slider-container {
    display: grid;
    grid-template-columns: 70% 30%;
    grid-gap: 10px;
    margin-right: 15%;
    margin-left: 15%;
  }
  .slick-prev,
  .slick-next {
    display: none !important;
  }
  .image-nav {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    margin-top: 10px;
    margin-right: 15%;
    margin-left: 15%;
  }
  .image-nav-item {
    width: 80px;
    height: 50px;
    margin: 0 5px;
    cursor: pointer;
    opacity: 0.6;
    overflow: hidden;
    transition: opacity 0.3s;
  }
  .image-nav-item:hover {
    opacity: 1;
  }
  .image-nav-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
  .slick-active .image-nav-item {
    opacity: 1;
  }
</style>

</head>
<body>
  <div class="site-wrapper">
    <section class="mt-5">
      <h1 class="city-title">Dubai Tour</h1>
      <div class="slider-container">
        <div class="slider">
          <?php
          $folderPath = 'assets/images/tour';
          $folders = scandir($folderPath);
          foreach ($folders as $folder) {
            if ($folder === '.' || $folder === '..') {
              continue;
            }
            $images = scandir($folderPath . '/' . $folder);
            foreach ($images as $image) {
              if ($image === '.' || $image === '..') {
                continue;
              }
              echo '<img class="caro-image" src="' . $folderPath . '/' . $folder . '/' . $image . '" alt="' . $image . '">';
            }
          }
          ?>
        </div>
        <div class="image-nav">
          <?php
          foreach ($folders as $folder) {
            if ($folder === '.' || $folder === '..') {
              continue;
            }
            $images = scandir($folderPath . '/' . $folder);
            $thumbnail = $folderPath . '/' . $folder . '/' . $images[2]; // Assuming the first image is the thumbnail
            echo '<div class="image-nav-item"><img src="' . $thumbnail . '" alt="' . $folder . '"></div>';
          }
          ?>
        </div>
      </div>
      <div class="clearfix"></div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
  <script>
    jQuery(document).ready(function($) {
      var slider = $('.slider').slick({
        prevArrow: false,
        nextArrow: false
      });

      $('.image-nav-item').click(function() {
        var index = $(this).index();
        slider.slick('slickGoTo', index);
      });

      slider.on('afterChange', function(event, slick, currentSlide) {
        $('.image-nav-item').removeClass('active');
        $('.image-nav-item').eq(currentSlide).addClass('active');
      });
    });
  </script>
</body>
</html>
@endsection
