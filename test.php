<?php
	if(!isset($_SESSION))
	{
		session_start();
	}
	
	include("./language.func.php");
?>
<!DOCTYPE html>
<html lang="<?php echo $languageCode ?>">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<title><?php echo $language['site-title']; ?></title>
	</head>
	<body>
		<div>
			<?php
				$test = new Language();
				$test->getLanguageCodes();
			?>
		</div>
		<div>
			<p>
				<?php
					echo $language['p1'];
				?>
			</p>
		</div>
	</body>
</html>