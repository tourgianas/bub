
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css" media="screen,projection" />
      <title><?php echo $page_title; ?></title>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>

    <body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
	  <script type="text/javascript" src="<?php echo base_url("assets/js/materialize.min.js"); ?>"></script>
		
	<nav>

	<div class="black nav-wrapper">
	
      <a href="<?php echo base_url("index.php/home/home_page"); ?>" class="brand-logo">
		<img width=250 height=60 src="<?php echo base_url("images/BUB.jpg"); ?>">
		</a>
	  
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
	  <li>
			<form>
				<div class="input-field">
				  <input id="search" type="search" required>
				  <label for="search"><i class="material-icons">search</i></label>
				  <i class="material-icons">close</i>
				</div>
			</form>
		</li>
          <?php
            if($_SESSION['role'] == 'admin')
            {
          ?>
        <li><a href="<?php echo base_url("index.php/home/stuff"); ?>">Epilogh 1</a></li>
		<?php
            }
		?>
        <li><a href="<?php echo base_url("index.php/home/stuff"); ?>">Epilogh 2</a></li>
        <?php
		if(isset($_SESSION['logged_in']))
		{
		?>
        <li><a href="<?php echo base_url("index.php/home/logout"); ?>">Logout</a></li>
		<?php
			}else{
		?>		
        <li><a href="<?php echo base_url("index.php/login"); ?>">Login</a></li>
		<?php
			}
		?>
      </ul>
    </div>
	</nav>
    <div class="container">
