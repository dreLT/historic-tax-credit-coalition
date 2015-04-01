<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	
  <head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
      // conditionizr.com
      // configure environment tests
      conditionizr.config({
          assets: '<?php echo get_template_directory_uri(); ?>',
          tests: {}
      });
    </script>
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	</head>
  
  <div class="background">
  	<body <?php body_class(); ?>>
  		
  		<div class="wrapper">

  			<header class="header clear" role="banner">
          
					<div class="logo-container">
						<a href="<?php echo home_url(); ?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
            
          <!-- Layouts for main navigation based on screen size -->
          
          <!-- Wide version -->
          <nav class="nav main-nav wide-nav clearfix" role="navigation">
            <ul>
              <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="<?php echo home_url(); ?>/about/">About</a></li>
              <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="<?php echo home_url(); ?>/take-action/">Take Action</a></li>
              <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="<?php echo home_url(); ?>/advocacy/">Advocacy</a></li>
              <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="<?php echo home_url(); ?>/news/">News</a></li>
              <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?php echo home_url(); ?>/join/">Join</a></li>
              <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
            </ul>
          </nav>

          <!-- Two-line/row version -->
          <nav class="nav main-nav two-line-nav clearfix" role="navigation">
            <ul class="first-row">
              <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="<?php echo home_url(); ?>/about/">About</a></li>
              <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="<?php echo home_url(); ?>/take-action/">Take Action</a></li>
              <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="<?php echo home_url(); ?>/advocacy/">Advocacy</a></li>
            </ul>
            <ul class="second-row">
              <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="<?php echo home_url(); ?>/news/">News</a></li>
              <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?php echo home_url(); ?>/join/">Join</a></li>
              <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
            </ul>
          </nav>

          <!-- Mobile version -->
          <div class="main-nav-mobile-container">
            <nav class="main-nav-mobile">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve">
                <path class="nav-icon" d="M4 10h24c1.104 0 2-0.896 2-2s-0.896-2-2-2H4C2.896 6 2 6.9 2 8S2.896 10 4 10z M28 14H4c-1.104 0-2 0.896-2 2 s0.896 2 2 2h24c1.104 0 2-0.896 2-2S29.104 14 28 14z M28 22H4c-1.104 0-2 0.896-2 2s0.896 2 2 2h24c1.104 0 2-0.896 2-2 S29.104 22 28 22z"/>
              </svg>
              <label for="show-nav" class="show-nav"></label>
              <input type="checkbox" id="show-nav" role="button">
              <ul id="page-list">
                <li id="menu-item-25" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-25"><a href="<?php echo home_url(); ?>/about/">About</a></li>
                <li id="menu-item-24" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-24"><a href="<?php echo home_url(); ?>/take-action/">Take Action</a></li>
                <li id="menu-item-23" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-23"><a href="<?php echo home_url(); ?>/advocacy/">Advocacy</a></li>
                <li id="menu-item-22" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22"><a href="<?php echo home_url(); ?>/news/">News</a></li>
                <li id="menu-item-21" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-21"><a href="<?php echo home_url(); ?>/join/">Join</a></li>
                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="<?php echo home_url(); ?>/contact/">Contact</a></li>
                <li id="menu-item-20" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-20"><a href="<?php echo home_url(); ?>/member-categories/materials-for-monthly-update-call/">Members Area</a></li>
              </ul>
            </nav>
          </div>

          <!-- Member login button -->
          <div class="member-login-container">
            <a class="member-login" href="<?php echo site_url(); ?>/member-categories/materials-for-monthly-update-call/">Members Area</a>
          </div>
              
  			</header>
        
      </div>