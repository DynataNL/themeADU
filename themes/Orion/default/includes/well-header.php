<?php
/**
 * Support the htmlinject hook, which allows modules to change header, pre and post body on all pages.
 */
$this->data['htmlinject'] = array(
	'htmlContentPre' => array(),
	'htmlContentPost' => array(),
	'htmlContentHead' => array(),
);


$jquery = array();
if (array_key_exists('jquery', $this->data)) $jquery = $this->data['jquery'];

if (array_key_exists('pageid', $this->data)) {
	$hookinfo = array(
		'pre' => &$this->data['htmlinject']['htmlContentPre'], 
		'post' => &$this->data['htmlinject']['htmlContentPost'], 
		'head' => &$this->data['htmlinject']['htmlContentHead'], 
		'jquery' => &$jquery, 
		'page' => $this->data['pageid']
	);
		
	SimpleSAML_Module::callHooks('htmlinject', $hookinfo);	
}
// - o - o - o - o - o - o - o - o - o - o - o - o -

/**
 * Do not allow to frame simpleSAMLphp pages from another location.
 * This prevents clickjacking attacks in modern browsers.
 *
 * If you don't want any framing at all you can even change this to
 * 'DENY', or comment it out if you actually want to allow foreign
 * sites to put simpleSAMLphp in a frame. The latter is however
 * probably not a good security practice.
 */
header('X-Frame-Options: SAMEORIGIN');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
	<title>
		<?php
			if(array_key_exists('header', $this->data)) {
				echo $this->data['header'];
			} else {
				echo 'simpleSAMLphp';
			}
		?>
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Custom styles for this template -->
  <link href="<?php echo SimpleSAML_Module::getModuleURL('themeOrion/css/signin.css'); ?>" rel="stylesheet">
</head>
<body class="login">
	<div id="login" class="container">
		<div class="col-md-offset-2 col-md-8 well">
				<img class="img-responsive" alt="logo" src="<?php echo SimpleSAML_Module::getModuleURL('themeOrion/logo.png') ?>" style="margin: 0 auto;" />

	<?php 	
	$includeLanguageBar = TRUE;
	if ($includeLanguageBar) {
		
		$languages = array('nl'=>'','en'=>'');
		if ( count($languages) > 1 ) {
			echo '<div id="languagebar">';
			$langnames = array(
						'no' => 'Bokmål', // Norwegian Bokmål
						'nn' => 'Nynorsk', // Norwegian Nynorsk
						'se' => 'Sámegiella', // Northern Sami
						'sam' => 'Åarjelh-saemien giele', // Southern Sami
						'da' => 'Dansk', // Danish
						'en' => 'English',
						'de' => 'Deutsch', // German
						'sv' => 'Svenska', // Swedish
						'fi' => 'Suomeksi', // Finnish
						'es' => 'Español', // Spanish
						'fr' => 'Français', // French
						'it' => 'Italiano', // Italian
						'nl' => 'Nederlands', // Dutch
						'lb' => 'Lëtzebuergesch', // Luxembourgish
						'cs' => 'Čeština', // Czech
						'sl' => 'Slovenščina', // Slovensk
						'lt' => 'Lietuvių kalba', // Lithuanian
						'hr' => 'Hrvatski', // Croatian
						'hu' => 'Magyar', // Hungarian
						'pl' => 'Język polski', // Polish
						'pt' => 'Português', // Portuguese
						'pt-br' => 'Português brasileiro', // Portuguese
						'ru' => 'русский язык', // Russian
						'et' => 'eesti keel', // Estonian
						'tr' => 'Türkçe', // Turkish
						'el' => 'ελληνικά', // Greek
						'ja' => '日本語', // Japanese
						'zh' => '简体中文', // Chinese (simplified)
						'zh-tw' => '繁體中文', // Chinese (traditional)
						'ar' => 'العربية', // Arabic
						'fa' => 'پارسی', // Persian
						'ur' => 'اردو', // Urdu
						'he' => 'עִבְרִית', // Hebrew
						'id' => 'Bahasa Indonesia', // Indonesian
						'sr' => 'Srpski', // Serbian
						'lv' => 'Latviešu', // Latvian
						'ro' => 'Românește', // Romanian
						'eu' => 'Euskara', // Basque
			);
			
			$textarray = array();
			foreach ($languages AS $lang => $current) {
				$lang = strtolower($lang);
				if ($current) {
					$textarray[] = $langnames[$lang];
				} else {
					$textarray[] = '<a href="' . htmlspecialchars(SimpleSAML_Utilities::addURLparameter(SimpleSAML_Utilities::selfURL(), array($this->languageParameterName => $lang))) . '">' .
						$langnames[$lang] . '</a>';
				}
			}
			echo join(' | ', $textarray);
			echo '</div>';
		}

	}



	?>


<?php

if(!empty($this->data['htmlinject']['htmlContentPre'])) {
	foreach($this->data['htmlinject']['htmlContentPre'] AS $c) {
		echo $c;
	}
}
