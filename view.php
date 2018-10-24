<?php

include 'apis/misc-function.php';
$token = set_csrf_token();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>My Short Notes</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript">
    var project_path = "<?php echo PROJECT_PATH; ?>";
</script>  
</head>

<body>
<section id="intro">
    <div class="intro-container wow">
        <h1 class="mb-4 pb-0">My Short <span>Notes</span></h1>
        <div class="container">
            <?php $path = PROJECT_PATH.'apis/get-notes.php?slug='.$_GET["slug"]; ?>
            <?php $notes = file_get_contents( $path ); ?>
            <?php if ( "" == $notes ) : ?>
                <div class="message text-center" id="response-message">
                  <h3 class="mb-4" id="message">No notes found with this slug.</h3>
                </div>
              <?php else : ?>
                  <div class="col-md-12 col-sm-10 col-sm-offset-1 col-xs-offset-1 col-xs-10 textbox">
                    <?php echo $notes; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
  
</section>


<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>

</html>
