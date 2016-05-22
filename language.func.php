<?php
 /*
  * ----------------------------------------------------------------------------------
  * This is the "DIFFERENT-BEER-WARE LICENSE" -> (v0.1):
  * I (Chronyms / <chronyms@outlook.com>) wrote this Licence-File on the Basement of
  * "THE BEER-WARE LICENSE" (Revision 42). Based on the Sense of "THE BEER-WARE LICENSE",
  * can you do whatever you want with this stuff, as long as you didn't remove the 
  * Licence-File / Licence-Section.
  * The only condition is, that you say thank you, to the creator. You can therefore send
  * a E-Mail with some nice words, send a Letter with some words and images or buy me a
  * Beer, if we meet someday.
  * And btw., please do crazy stuff.
  * -----------------------------------------------------------------------------------
  */

	include("./include/config.php");
	if(isset($_SESSION['config']['currentLanguage']))
	{
		include("./include/languages/".$_SESSION['config']['currentLanguage'].".php");
	}
	else
	{
		$_SESSION['config']['currentLanguage'] = $languageCode;
		echo "<script>";
			echo "location.reload();";
		echo "</script>";
	}
	
	class Language{
		function getLanguageCodes(){
			$availableLanguages = scandir("./include/languages");
			unset($availableLanguages[0],$availableLanguages[1]);
			
			Language::printLanguageCodes($availableLanguages);
		}
		
		private function printLanguageCodes($availableLanguages)
		{
			foreach ($availableLanguages as $key => $value) {
				$value = substr($value, 0, strrpos($value, '.'));
				echo "<a href=\"?lang=".$value."\">".$value."</a>";
				echo "\t";
			}
			
			Language::setLanguage();
		}
		
		private function setLanguage()
		{
			if(!empty($_GET))
			{
				if($_SESSION['config']['currentLanguage'] != $_GET['lang'])
				{
					$_SESSION['config']['currentLanguage'] = $_GET['lang'];
					echo "<script>";
						echo "location.reload();";
					echo "</script>";
				}
			}
		}
	}