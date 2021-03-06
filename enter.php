<?php
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Secure Login: Log In</title>
		<meta content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="yes" name="apple-mobile-web-app-capable" />

		<meta content="minimal-ui, initial-scale=1 maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<title>Neilson Drive</title>
		<meta content="Neilson Engineering delivers engineering and design solutions to a host of industry leading companies, as well as individuals. Since establishment by UCL MEng graduate, Henry Neilson, our superior London-based service is only limited by what you may request." name="description" />
		<meta content="Engineering, Neilson, Engineer, Designer, Render, Art, Consulting, Consultancy" name="keywords" />
		<meta content="Neilson Engineering" name="author" />
		<meta property="og:image" content="https://neilsonengineering.com/images/oglogo.png" />
		<meta property="og:description" content="Neilson Engineering delivers engineering and design solutions to a host of industry leading companies, as well as individuals. Since establishment by UCL MEng graduate, Henry Neilson, our superior London-based service is only limited by what you may request." />
		<meta property="og:url" content="https://www.hcawn.com" />
		<meta property="og:title" content="Neilson Engineering" />

		<link rel="apple-touch-icon" sizes="180x180" href="https://neilsonengineering.com/favicons/apple-touch-icon.png?v=BGBR3AKGdq">
		<link rel="icon" type="image/png" href="https://neilsonengineering.com/favicons/favicon-32x32.png?v=BGBR3AKGdq" sizes="32x32">
		<link rel="icon" type="image/png" href="https://neilsonengineering.com/favicons/favicon-16x16.png?v=BGBR3AKGdq" sizes="16x16">
		<link rel="manifest" href="https://neilsonengineering.com/favicons/manifest.json?v=BGBR3AKGdq">
		<link rel="mask-icon" href="https://neilsonengineering.com/favicons/safari-pinned-tab.svg?v=BGBR3AKGdq" color="#000aff">
		<link rel="shortcut icon" href="https://neilsonengineering.com/favicons/favicon.ico?v=BGBR3AKGdq">
		<meta name="apple-mobile-web-app-title" content="Neilson Engineering">
		<meta name="application-name" content="Neilson Engineering">
		<meta name="msapplication-config" content="https://neilsonengineering.com/favicons/browserconfig.xml?v=BGBR3AKGdq">
		<meta name="theme-color" content="#ffffff" Drive!" />
		<meta name="twitter:image" content="https://flok.uk/graphics/spin.png" />

		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="../styles/base.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
	<body>
		<?php if (login_check($mysqli) == true) : ?>
		<p>
			Welcome <?php echo htmlentities($_SESSION['username']); ?>!<br>
			<?php echo ("<a href=\"https://hcawn.com/" . ($_SESSION['username']) . "/root\" target=\"_parent\" style=\"font-size: 32px\">Enter drive.</a>"); ?>
			<br>
			Don't forget to <a href="includes/logout.php" target="_parent">log out</a>.
		</p>
		<?php else : ?>
 	   <?php endif; ?>
 	</body>
</html>