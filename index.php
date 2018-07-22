<?php 

  
?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Introducing Lollipop, a sweet new take on Android.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>IPMD</title>

    <!-- Favicon icon-->
    <link rel="icon" href="favicon.ico" type="image/ico">
    <!-- Page styles -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="components/css/materialize.css">
    <link rel="stylesheet" href="components/css/material.css">
    <link rel="stylesheet" href="components/css/styles.css">
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
  </head>
  <body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">

      <div class="android-header mdl-layout__header mdl-layout__header--waterfall">
        <div class="mdl-layout__header-row">
          <span class="android-title mdl-layout-title">
            <a href="index.html">
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
            <a href="index.php">
              <img class="android-logo-image" src="components/images/ipmd-logo.png">
              </a>
          </span>
          <button class="android-more-button mdl-button mdl-js-button mdl-button--icon mdl-js-ripple-effect" id="more-button">
            <i class="material-icons">account_circle</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right mdl-js-ripple-effect" for="more-button">
            <li class="mdl-menu__item mdl-js-ripple-effect"><a href="userpages/login.php">Login</a></li>
            <li class="mdl-menu__item mdl-js-ripple-effect"><a href="userpages/register.php">Register</a></li>
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
          <a class="mdl-navigation__link" href="utilitymodel.php">Utility Model</a>
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
        <a name="top"></a>
        <div class="android-be-together-section mdl-typography--text-center">
          <div class="logo-font-w android-slogan">BU IPMD</div>
          <div class="logo-font-w android-sub-slogan">BICOL UNIVERSITY <br> INTELLECTUAL PROPERTY MANAGEMENT DIVISION</div>

          <a href="#screens">
            <button class="android-fab mdl-button mdl-button--colored mdl-js-button mdl-button--fab mdl-js-ripple-effect">
              <i class="material-icons">expand_more</i>
            </button>
          </a>
        </div>
        <div class="android-customized-section">
          <div class="android-customized-section-text">
            <div class="mdl-typography--font-light mdl-typography--display-1-color-contrast">What is BU IPMD?</div>
            <p class="mdl-typography--font-light">
              IPMD is part of Bicol University's HERRC office which deals with protecting and filing of Intellectual Properties inside or outside Bicol University.
              <br>
              <a href="" class="android-link mdl-typography--font-light">Contact us here!</a>
            </p>
          </div>
          <div class="android-customized-section-image"></div>
        </div>
        <div class="android-more-section">
          <div class="android-section-title mdl-typography--display-1-color-contrast">View Existing Patents and Copyrights</div>
          <div class="android-card-container mdl-grid">
            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="components/images/more-from-1.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Invention</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">View different inventions from our database.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   VIEW INVENTIONS
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="components/images/more-from-4.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Utility Model</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">View different utility models from our database.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   VIEW UMS
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="components/images/more-from-2.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Copyright</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">View different copyrights from our database.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   VIEW COPYRIGHT
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>

            <div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
              <div class="mdl-card__media">
                <img src="components/images/more-from-3.png">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Trademark</h4>
              </div>
              <div class="mdl-card__supporting-text">
                <span class="mdl-typography--font-light mdl-typography--subhead">View different trademark items from our database.</span>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="">
                   VIEW TRADEMARKS
                   <i class="material-icons">chevron_right</i>
                 </a>
              </div>
            </div>
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
