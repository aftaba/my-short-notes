<?php
include 'functions.php';
$token = set_csrf_token();

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>My Short Notes | MSNS.ML </title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicons -->
	<link href="img/favicon.png" rel="icon">
	<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

	<!-- Bootstrap CSS File -->
	<link href="<?php echo PROJECT_PATH; ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo PROJECT_PATH; ?>assets/css/style.css" rel="stylesheet">
	<script type="text/javascript">
		var project_path = "<?php echo PROJECT_PATH; ?>";
	</script>  
</head>

<body>
	<section id="intro">
		<div class="intro-container wow">
			<h1 class="mb-4 pb-0">My Short Notes<span>Notes</span></h1>
			<div class="container">
				<?php
				$params = $_SERVER['REQUEST_URI'];
				$slug = substr($params, strpos( $params, "/view/" ) + 6 );
				?>
				<?php $path = PROJECT_PATH.'apis/get-notes.php?slug='.$slug; ?>
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


	<script src="<?php echo PROJECT_PATH; ?>assets/lib/jquery/jquery.min.js"></script>
	<script src="<?php echo PROJECT_PATH; ?>assets/lib/wow/wow.min.js"></script>
	<script src="<?php echo PROJECT_PATH; ?>assets/js/main.js"></script>
</body>
</html>
