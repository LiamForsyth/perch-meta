<?php
	global $metaDetails;
	$domain = 'http://'.$_SERVER["HTTP_HOST"];
	$url = $domain.$_SERVER["REQUEST_URI"];
	PerchSystem::set_var('url',$url);
	PerchSystem::set_var('domain',$domain);
	PerchSystem::set_var('siteName', perch_layout_var('siteName', true));
	PerchSystem::set_var('siteAuthor', perch_layout_var('siteAuthor', true));
	$page_attributes = perch_page_attributes(['template' => '../../layouts/meta-plus/template-meta.html'], true);
	if(empty($metaDetails)) { $metaDetails = perch_layout_var('metaDetails', true); }
	if(!empty($page_attributes)) { $content = $page_attributes;  }
	else{
		if(!empty($metaDetails[0])) {
			$content = perch_template('layouts/meta-plus/template-meta.html', $metaDetails[0], true );
		}else{
			$content = perch_template('layouts/meta-plus/template-meta.html', $metaDetails, true );
		}
	}
	echo str_replace('<m',"\n\t".'<m', preg_replace('/^\s+|\n|\r|\s+$/m', '',  $content));
?>