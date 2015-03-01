<?php
	include('perch/runtime.php');

	// If using Perch Layout for your head information
	perch_layout('global.head', [ 
		'metaDetails' => [
			'pageTitle' => ' ',
			'description' => ' ',
			'siteAuthor' => ' ',
			'ogtitle' => ' ',
			'ogtype' => ' ',
			'ogdescription' => ' ',
			'ogdeterminer' => ' ',
			'oglocale' => ' ',
			'ogimage' => ['path' => ' ', 'w' => ' ', 'h' => ' ', 'mime' => ' '],
			'ogaudio' => ' ',
			'ogvideo' => ' ',
		] 
	]); 

	// If using includes for your head information
	$metaDetails = [
		'pageTitle' => ' ',
		'description' => ' ',
		'siteAuthor' => ' ',
		'ogtitle' => ' ',
		'ogtype' => ' ',
		'ogdescription' => ' ',
		'ogdeterminer' => ' ',
		'oglocale' => ' ',
		'ogimage' => ['path' => ' ', 'w' => ' ', 'h' => ' ', 'mime' => ' '],
		'ogaudio' => ' ',
		'ogvideo' => ' ',
	]; include('inc/head.php');

?>
<body>

</body>
</html>