<?php 
  session_start();
  include ("functions/functions.php");
  include_once("functions/db.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>IPMD</title>

    <!-- Page styles -->
    <!-- Compiled and minified CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="components/css/materialize.css">
    <link rel="stylesheet" href="components/css/material.css">
    <link rel="stylesheet" href="components/css/styles.css">
    <!-- Compiled and minified JavaScript -->
    <script type="text/javascript" src='components/js/functions.js'></script>
    <script src="components/js/jquery-3.3.1.js"></script>
    <style>
    #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }
    </style>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var elems = document.querySelectorAll('.tooltipped');
        var instances = M.Tooltip.init(elems, options);
      });

    </script>


  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="index.php">
              <img class="android-logo-image" src="components/images/ipmd-logo.png">
            </a>
          </span>
          <!-- Add spacer, to align navigation to the right in desktop -->
          <div class="android-header-spacer mdl-layout-spacer"></div>
          <div class="android-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search-field">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search-field">
            </div>
          </div>
          <!-- Navigation -->
          <div class="android-navigation-container">
            <nav class="android-navigation mdl-navigation">
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">HOME</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">SERVICES</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">ABOUT</a>
              <a class="mdl-navigation__link mdl-typography--text-uppercase" href="">CONTACT US</a>
            </nav>
          </div>
          <span class="android-mobile-title mdl-layout-title">
            <a href="index.html">
              <img class="android-logo-image" src="components/images/ipmd-logo.png">
              </a>
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">account_circle</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item"><a href="login.php">Login</a></li>
            <li class="mdl-menu__item"><a href="register.php">Register</a></li>
          </ul>
        </div>
      </div>

      <div class="android-drawer mdl-layout__drawer">
        <span class="mdl-layout-title">
          <img class="android-logo-image" src="components/images/ipmd-logo-white.png">
        </span>
        <nav class="mdl-navigation">
          <span class="mdl-navigation__link">Site Navigation</span>
          <a class="mdl-navigation__link" href="">Home</a>
          <a class="mdl-navigation__link" href="">About Us</a>
          <a class="mdl-navigation__link" href="">Contact Us</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link">View/Edit</span>
          <a class="mdl-navigation__link" href="">Invention</a>
          <a class="mdl-navigation__link" href="">Utility Model</a>
          <a class="mdl-navigation__link" href="">Copyrights</a>
          <a class="mdl-navigation__link" href="">Trademarks</a>
          <a class="mdl-navigation__link" href="">Industrial Design</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Other IP's</span>
          <a class="mdl-navigation__link" href="">Other 1</a>
          <a class="mdl-navigation__link" href="">Other 2</a>
          <div class="android-drawer-separator"></div>
          <span class="mdl-navigation__link" href="">Other Information</span>
          <a class="mdl-navigation__link" href="">Requirements for filing</a>
      	</nav>
      </div>

      <div class="android-content mdl-layout__content">
        <div class="android-more-section"><center>
          <h2 class="orange-text">Trademark</h2>
          <p class="gray-text">
            A trademark, trade mark, or trade-mark is a recognizable sign, design, or expression which identifies products or services of a particular source from those of others, although trademarks used to identify services are usually called service marks. The trademark owner can be an individual, business organization, or any legal entity. A trademark may be located on a package, a label, a voucher, or on the product itself. For the sake of corporate identity, trademarks are often displayed on company buildings.</p>

          <button class="btn flat waves-effect waves-light"> View Database</button>
          <div class="hr"><br><br><br></div>
          <div class="col s12">
          <!--Utility Table-->
          <table class="highlight centered responsive-table">
            <thead>
              <tr>

                <th>Copyrights. ID. <i class="fa fa-sort"></i></th>
                <th class="title">Title of Work <i class="fa fa-sort"></i></th>
                <th>Agency <i class="fa fa-sort"></i></th>
                <th>Copyrights Reg. No <i class="fa fa-sort"></i></th>
                <th>Date Issued <i class="fa fa-sort"></i></th>
                <th>Date Submitted <i class="fa fa-sort"></i></th>
                <th>Year <i class="fa fa-sort"></i></th>
                <th>Status <i class="fa fa-sort"></i></th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>

              <?php
           $fetch_cus = mysqli_query($connect, "SELECT * FROM copyrights ORDER BY copyrights_status DESC")
            or die("Error: Could not fetch rows!".mysqli_error($connect));

           while($row = mysqli_fetch_array($fetch_cus))
           {
            $copyrights_id = $row['copyrights_id'];
            echo'<tr>
            
            <td>'.$row['copyrights_id'].'</td>
            <td>'. $row['copyrights_title'].'</td>
            <td>'. $row['copyrights_agency'].'</td>
            <td>'. $row['copyrights_reg_no'].'</td> 
            <td>'. $row['copyrights_issue_date'].'</td> 
            <td>'. $row['copyrights_submitted_date'].'</td>
            <td>'. $row['copyrights_year'].'</td>
            <td>'. $row['copyrights_status'].'</td>
            <td>
                      <div id="mytooltip" class="icon material-icons"><button class="btn-floating flat waves-effect waves-light btn-small"><i class="material-icons">remove_red_eye</i></button></div>
                      <div class="mdl-tooltip" for="mytooltip">View</div>
                      <div id="edit-btn" class="icon material-icons"><a class="btn-floating waves-effect waves-light orange btn-small"><i class="material-icons">create</i></a></div>
                      <div class="mdl-tooltip" for="edit-btn">Edit</div>
                      <div id="del-btn" class="icon material-icons"><a class="btn-floating waves-effect waves-light red btn-small"><i class="material-icons">delete</i></a></div>
                      <div class="mdl-tooltip" for="del-btn">Delete</div>  
                    </td>
            </tr>';

           }
          ?>

        
            </tbody>
          </table>
        </div>
      </div>

        <footer class="mdl-mega-footer android-footer">
    		  <div class="mdl-mega-footer__middle-section">

    		    <div class="mdl-mega-footer__drop-down-section">
    		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
    		      <h1 class="mdl-mega-footer__heading">Features</h1>
    		      <ul class="mdl-mega-footer__link-list">
    		        <li><a href="#">About</a></li>
    		        <li><a href="#">Terms</a></li>
    		        <li><a href="#">Partners</a></li>
    		        <li><a href="#">Updates</a></li>
    		      </ul>
    		    </div>

    		    <div class="mdl-mega-footer__drop-down-section">
    		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
    		      <h1 class="mdl-mega-footer__heading">Details</h1>
    		      <ul class="mdl-mega-footer__link-list">
    		        <li><a href="#">Specs</a></li>
    		        <li><a href="#">Tools</a></li>
    		        <li><a href="#">Resources</a></li>
    		      </ul>
    		    </div>

    		    <div class="mdl-mega-footer__drop-down-section">
    		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
    		      <h1 class="mdl-mega-footer__heading">Technology</h1>
    		      <ul class="mdl-mega-footer__link-list">
    		        <li><a href="#">How it works</a></li>
    		        <li><a href="#">Patterns</a></li>
    		        <li><a href="#">Usage</a></li>
    		        <li><a href="#">Products</a></li>
    		        <li><a href="#">Contracts</a></li>
    		      </ul>
    		    </div>

    		    <div class="mdl-mega-footer__drop-down-section">
    		      <input class="mdl-mega-footer__heading-checkbox" type="checkbox" checked>
    		      <h1 class="mdl-mega-footer__heading">FAQ</h1>
    		      <ul class="mdl-mega-footer__link-list">
    		        <li><a href="#">Questions</a></li>
    		        <li><a href="#">Answers</a></li>
    		        <li><a href="#">Contact us</a></li>
    		      </ul>
    		    </div>

    		  </div> 

    		  <div class="mdl-mega-footer__bottom-section">
    		    <div class="mdl-logo">BU INTELLECTUAL PROPERTY MANAGEMENT DIVISION 2018</div>
    		    <ul class="mdl-mega-footer__link-list">
    		      <li><a href="#">About Us</a></li>
    		      <li><a href="#">Contact Us</a></li>
    		    </ul>
    		  </div>
    		</footer>
      </div>
    </div>
    <script src="components/js/material.js"></script>
  </body>
</html>
