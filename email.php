<?php
if ( mail('richard@gokitecabarete.com, tom@gokitecabarete.com, info@gokitecabarete.com', 'Website form: ' . $_POST["subject"], 'name: ' . $_POST["name"] . "\n" . $_POST["message"], 'From: ' . $_POST["email"]) ) {
  $output = "Email message has been send";
} else {
  $output = "Fatal error sending message";
}
?>

<?php header("Refresh: 2;url=http://www.gokitecabarete.com/contactoform.html"); ?>
<html>
    <head>
        <title>Redirects</title>
        <meta http-equiv="refresh" content="2; URL=http://www.gokitecabarete.com/contactoform.html" />
        <script type="text/javascript">
                    window.setTimeout(function() {
                        location.href = 'http://www.gokitecabarete.com/contactoform.html';
                    }, 2000);
        </script>
    </head>
    <body>
        <h2><?php echo $output ?></h2>
        <p>Click here if you are not redirected automatically in 2 seconds<br />
            <a href="http://www.gokitecabarete.com/contactoform.html">GoKiteCabarete.com</a>.
        </p>
    </body>
</html>
