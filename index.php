<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>INK-12: Interactive Ink Inscriptions for K-12</title>  

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="plugins/foundation/js/vendor/modernizr.js"></script>
  <script src="plugins/foundation/js/foundation/foundation.js"></script>
  <script src="plugins/foundation/js/foundation/foundation.clearing.js"></script>
  <script src="js/scripts.js"></script>

  <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic|Amatic+SC:400,700' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
  <link rel="stylesheet" href="plugins/foundation/css/foundation.css" />
  <link rel="stylesheet" type="text/css" href="css/main.css" media="screen" />
</head>

<?php
  $page = $_GET['p'];
  if ($page == ''){
    $loadBlock = 'home';
    $theme = 'home';
  } else {
    if (file_exists($page . '.php')) {
      $loadBlock = $page;
      if ($page != 'moi') {
        $theme = $page;
      } else {
        $theme = 'home';
      }
    } else {
      $loadBlock = '404';
      $theme = 'home';
    }
  }
?>

<body class="theme-<?= $theme ?>">
  <header>
    <div class="logo-bar">
      <div class="logo-image">
      </div>
      <div class="partner-logos">
      </div>
    </div>
    <div class="dark-bar">
    </div>
  </header>
  <div class="nav-bar">
    <div class="row">
      <div class="columns large-12 force-position">
        <ul class="large-block-grid-7 medium-block-grid-7 small-block-grid-3 force-position">
          <li class="nav-item home"><a href='index.php'><div class="icon"></div><div class="nav-text">home</div></a></li>
          <li class="nav-item research"><a href='index.php?p=research'><div class="icon"></div><div class="nav-text">research</div></a>
            <ul>
              <li> 
                <a href='index.php?p=oops'>Overview</a>
              </li>
              <li> 
                <a href='index.php?p=oops'>Research Findings</a>
              </li>
            </ul>
          </li>
          <li class="nav-item classroom"><a href='index.php?p=classroom'><div class="icon"></div><div class="nav-text">classroom</div></a></li>
          <li class="nav-item technology">
          <a href='index.php?p=technology'><div class="icon"></div><div class="nav-text">technology</div></a>
            <ul>
              <li> 
                <a href='index.php?p=oops'>Overview</a>
              </li>
              <li> 
                <a href='index.php?p=oops'>Tools & Features</a>
              </li>
            </ul>
          </li>
          <li class="nav-item publications">
            <a href='index.php?p=publications'>
              <div class="icon"></div><div class="nav-text">publications</div>
            </a>
          </li>
          <li class="nav-item contact"><a href='index.php?p=contact'><div class="icon"></div><div class="nav-text">contact</div></a></li>
          <li class="nav-item about"><a href='index.php?p=about'><div class="icon"></div><div class="nav-text">about us</div></a>
            <ul>
              <li> 
                <a href='index.php?p=oops'>Goal</a>
              </li>
              <li> 
                <a href='index.php?p=oops'>The Team</a>
              </li>
              <li> 
                <a href='index.php?p=oops'>Partner Schools and Clubs</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="content">
  <!-- Content Begins Here -->

  <?php

    require_once($loadBlock . ".php");

  ?>

  <!-- content ends here -->
  </div>
  <footer>
    <div class="row">
      <div class="columns large-12">
        <h2>Interactive Ink Inscriptions in K-12</h2>
      </div>
    </div>
    <div class="row">
      <div class="columns large-3">
        <h3>The Project</h3>
        <p>INK-12 is investigating how pen-based interaction and wireless networking can support teaching and learning mathematics and science in upper elementary school</p>
      </div>
      <div class="columns large-4">
        <h3>Principal Investigators</h3>
        <h4>Kimberle Koile</h4>
        <p>
        MIT | Center for Educational Computing Initiatives <br />
        77 Massachusetts Avenue, E34-370 <br />
        Cambridge, MA 02139 <br />
        </p>
        <h4>Andee Rubin</h4>
        <p>
        TERC | Education Research Collaborative<br />
        2067 Massachusetts Avenue<br />
        Cambridge, MA 02140<br />
        </p>
      </div>
      <div class="columns large-3">
        <h3>Quick Links</h3>
        <ul>
          <li>
            <a href="">Contact</a>
          </li>
          <li>
            <a href="http://ceci.mit.edu/">MIT CECI</a>
          </li>
          <li>
            <a href="http://terc.edu/">TERC Home</a>
          </li>
          <li>
            <a href="https://www.nsf.gov">National Science Foundation</a>
          </li>
        </ul>
      </div>
      <div class="columns large-2">
        <div class="bottom-right-logos">
          <p>
            &copy; 2012 - 2015<br />
            MIT and TERC<br />
            All Rights Reserved
          </p>
          <div class="bottom-logos">
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>