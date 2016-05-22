<!------------------------------------------------------------------------------------
  * This is the "DIFFERENT-BEER-WARE LICENSE" -> (v0.1):
  * I (Chronyms / <chronyms@outlook.com>) wrote this Licence-File on the Basement of
  * "THE BEER-WARE LICENSE" (Revision 42). Based on the Sense of "THE BEER-WARE LICENSE",
  * can you do whatever you want with this stuff, as long as you didn't remove the 
  * Licence-File / Licence-Section.
  * The only condition is, that you say thank you, to the creator. You can therefore send
  * a E-Mail with some nice words, send a Letter with some words and images or buy me a
  * Beer, if we meet someday.
  * And btw., please do crazy stuff.
  * ----------------------------------------------------------------------------------->
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