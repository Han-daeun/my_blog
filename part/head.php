<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <link rel="stylesheet" href="/resource/common.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/resource/common.js"></script>
    <title>블로그</title>
</head>

<body>
<!--PC 상단바-->
<div class="top-bar-01 flex visible-md-up">
  <a href="/" class="logo flex-jc-center flex-ai-c">
    <span style="color:#FC354C"><i class="fab fa-connectdevelop fa-3x"></i></span>
  </a>
  <nav class="menu-bar con flex">
    <ul class="flex flex-ai-end flex-jc-center">
      <li><a href="/">Home</a></li>
      <li><a href="/list.php">Articles</a></li>
      <li><a href="/aboutMe.php">About me</a></li>
      <li>
        <a href="/sns.php">SNS</a>
        <ul>
          <li><a href="https://github.com/Han-daeun" target="_blank">GITHUB</a></li>
        </ul>
      </li>
    </ul>
  </nav>
</div>

<!--모바일 상단바-->
<div class="mobile-top-bar visible-sm-down flex">
  <a href="/" class="logo">
    <span style="color:#FC354C"><i class="fab fa-connectdevelop fa-2x"></i></span>
  </a>
  <a href="#" onclick="return false;" class="btn-toggle-mobile-side-bar flex-jc-center flex-ai-c">
    <div></div>
    <div></div>
    <div></div>
  </a>
</div>

<!--모바일 사이드메뉴-->
<div class="mobile-side-menu-bg"></div>

<div class="left-side-menu">
  <nav class="mobile-side-menu-01">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Articles</a></li>
      <li><a href="#">About me</a></li>
      <li><a href="#">SNS</a></li>
    </ul>
  </nav>
</div>