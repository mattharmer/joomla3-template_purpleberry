<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" 
xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
  <head>
   <jdoc:include type="head" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css" type="text/css" />
    <meta charset="utf-8">
    <title>Craze Dance Academy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700|Raleway:400,900&display=swap" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="container_image">

        <header class="header">

          <a href="" class="logo">Craze Dance Academy</a>
          <input class="menu-btn" type="checkbox" id="menu-btn" />
          <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
          <ul class="menu">
            <jdoc:include type="modules" name="navigation" /> 
          </ul>

        </header>

      </div>
      <div class="content-img-text">
          <h2>ENROL NOW FOR 2019 CLASSES</h2>
          <a href="#">Learn More</a>
      </div>
    </div>
    <div class="content">    
      <jdoc:include type="component" />
    </div>
      <footer class="bottom">
        <div class="social">
          <ul>
            <li><a href="#"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/facebook.svg" alt="Facebook" class="customImage" /></a></li>
            <li><a href="#"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/instagram.svg" alt="Instagram" class="customImage" /></a></li>
            <li><a href="#"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/twitter.svg" alt="Twitter" class="customImage" /></a></li>
            <li><a href="#"><img src="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/images/youtube.svg" alt="You Tube" class="customImage" /></a></li>
          </ul>
        </div>
        <div class="bottom-menu">
          <ul>
            <li>Home</li>
            <li>About</li>
            <li>Enrolment</li>
            <li>Classes</li>
            <li>Contact</li>
          </ul>
        </div>
      </footer>
    </div>

    <script>
    <?php
    $document = JFactory::getDocument();
    $document->addScript('templates/PurpleBerry/js/script.js');
    ?>
    </script>

  </body>
</html>
