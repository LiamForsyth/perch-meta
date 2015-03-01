<?php
	include('../perch/runtime.php');

	$post = perch_blog_custom(array(
		'filter' => 'postSlug',
		'match' => 'eq',
		'value' => perch_get('s'),
		'skip-template' => 'true',
		'return-html' => 'true',
	));

	// If using Perch Layout for your head information
	perch_layout('global.head', [ 'metaDetails' => $post ]);
	
	// If using includes for your head information
	$metaDetails = $post; include('../inc/head.php');
?>
<body>
	<?php echo $post['html']; ?>
</body>
</html>