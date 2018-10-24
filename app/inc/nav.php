<?php
/*
* Navbar comes after the header and before content
*
*
*/
?>

<!--HEADER-->
<header class="uk-box-shadow-small" style="background-color: white">
   <div class="uk-container uk-container-expand">
      <nav class="uk-navbar" id="navbar" data-uk-navbar>
         <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="#">Logo</a>
         </div>
         <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@m">
               <li class="uk-active"><a href="/">Active</a></li>
               <li><a href="/post">Post Page</a></li>
               <li><a href="#">Our Products</a></li>
               <li><a href="#">Contact Us</a></li>
            </ul>
            <div class="uk-navbar-item">
               <a class="uk-navbar-toggle uk-hidden@s" data-uk-toggle data-uk-navbar-toggle-icon href="#offcanvas-nav"></a>
               <a href="#" class="uk-button uk-button-secondary uk-visible@m"><span data-uk-icon="sign-in"></span>SIGN UP</a>
            </div>
         </div>
      </nav>
   </div>
</header>
<!--/HEADER-->

<!-- OFFCANVAS -->
<div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
   <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
      <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
      <ul class="uk-nav uk-nav-default">
         <li class="uk-active"><a href="/">Active</a></li>
         <li class="uk-parent">
            <a href="#">Parent</a>
            <ul class="uk-nav-sub">
               <li><a href="/post">Post Page</a></li>
               <li><a href="#">Sub item</a></li>
            </ul>
         </li>
         <li class="uk-nav-header">Header</li>
         <li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span> Item</a></li>
         <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span> Item</a></li>
         <li class="uk-nav-divider"></li>
         <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a></li>
      </ul>
      <h3>Title</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
   </div>
</div>
<!-- /OFFCANVAS -->