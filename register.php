<?php
/**
 * Copyright (C) 2013 peredur.net
 * 
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
include_once 'includes/register.inc.php';
include_once 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Secure Login: Registration Form</title>
        <meta content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="yes" name="apple-mobile-web-app-capable" />

        <meta content="minimal-ui, initial-scale=1 maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="yes" name="apple-mobile-web-app-capable" />
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
        <link href="styles/styles.css" rel="stylesheet" type="text/css" />
        <link href="styles/base.css" rel="stylesheet" type="text/css" />
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script>
    </head>
    <body>
        <div class="overlay" >
        <a href="https://hcawn.com">
            <img src="../graphics/logo.png" id=logo>
        </a>
        <!-- Registration form to be output if the POST variables are not
        set or if the registration script caused an error. -->
        <h1>Register for UNLIMITED cloud storage.</h1>
        <?php
        if (!empty($error_msg)) {
            echo $error_msg;
        }
        ?>
        <ul>
            <li>Usernames may contain only digits, upper and lower case letters and underscores</li>
            <li>Emails must have a valid email format</li>
            <li>Passwords must be at least 6 characters long</li>
            <li>Passwords must contain
                <ul>
                    <li>At least one upper case letter (A..Z)</li>
                    <li>At least one lower case letter (a..z)</li>
                    <li>At least one number (0..9)</li>
                </ul>
            </li>
            <li>Your password and confirmation must match exactly</li>
        </ul>
        <form method="post" name="registration_form" action="<?php echo esc_url($_SERVER['PHP_SELF']); ?>">
            <input type='text' placeholder="Username" name='username' id='username' /><br>
            <input type="text" placeholder="Email" name="email" id="email" /><br>
            <input type="password" placeholder="Password" name="password" id="password"/><br>
            <input type="password" placeholder="Confirm Password" name="confirmpwd" id="confirmpwd" /><br>
            <input type="button" value="Register" id="rgstr"
                   onclick="return regformhash(this.form,
                                   this.form.username,
                                   this.form.email,
                                   this.form.password,
                                   this.form.confirmpwd);" /> 
        </form>
        <p><br><br>Return to the <a href="https://hcawn.com/">login page</a>.</p>
        </div>
    </body>
</html>
