<!DOCTYPE HTML>
<html>
<head>
  <?php
  function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
  }
  if(isMobile()){
    header("Location: http://www.nzseventh.tk/mobile/");
  }
  ?>
  <base href="http://www.nzseventh.tk/">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>NZ Seventh - Home</title>
</head>
<body>
  <div class="top_banner">
    <img id="banner_photo" src="nzseventhbanner.svg" alt="Banner here">
    <div id="banner_buttons">
    <div class="banner_button">
      <a href="/">
        <h2>Home</h2>
      </a>
    </div>
    <div class="banner_button">
      <a href="policy.html">
        <h2>Our Common Nonsense Policies</h2>
      </a>
    </div>
    <div class="banner_button">
      <a href="about.html">
        <h2>About Us</h2>
      </a>
    </div>
    <div class="banner_button">
      <a href="blog.html">
        <h2>Blog</h2>
      </a>
    </div>
    <div class="banner_button">
      <a href="contact.html">
        <h2>Contact Us</h2>
      </a>
    </div>
    <div class="satire_button">
      <a href="https://en.wikipedia.org/wiki/Satire" target="_blank">
        <h2>Wait, What?</h2>
      </a>
    </div>
    </div>
  </div>
</body>
</html>
