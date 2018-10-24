<?php


include 'apis/misc-function.php';
$token = set_csrf_token();
// Check if token time is valid
// if ( $_SESSION['token_time'] > time() ) {
//     unset( $_SESSION );
// }
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
            <form method="post" id="add-new-note-form">
                <div class="form-group">
                    <textarea class="form-control" id="my-short-notes" rows="10" cols="50"></textarea>
                </div>
                <input type="hidden" id="csrf-token" name="csrf_token" value="<?php echo $token; ?>">
                <input type="submit" id="add-new-note" class="about-btn" value="Add new note">
            </form>
            <div class="message text-center hide-me" id="response-message">
                <h3 class="mb-4" id="message"></h3>
                <div class="mb-4" id="slug"></div> 
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
