<?php
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