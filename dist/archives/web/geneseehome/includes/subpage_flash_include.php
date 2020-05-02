<script language="javascript">
	if (AC_FL_RunContent == 0) {
		alert("This page requires AC_RunActiveContent.js.");
	} else {
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0',
			'width', '980',
			'height', '516',
			'src', 'subpage_navigation',
			'quality', 'high',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'align', 'middle',
			'play', 'true',
			'loop', 'true',
			'scale', 'showall',
			'wmode', 'window',
			'devicefont', 'false',
			'id', 'subpage_navigation',
			'bgcolor', '#edebeb',
			'name', 'subpage_navigation',
			'menu', 'true',
			'allowFullScreen', 'false',
			'allowScriptAccess','sameDomain',
			'movie', 'subpage_navigation',
			'salign', '', 'FlashVars', 'navid=<?php echo $page_id; ?>'
			); //end AC code
	}
</script>

<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="980" height="516" id="subpage_navigation" align="middle">
    <param name="FlashVars" value="navid=<?php echo $page_id; ?>" />
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="subpage_navigation.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#edebeb" />	<embed src="subpage_navigation.swf" quality="high" bgcolor="#edebeb" width="980" height="516" name="subpage_navigation" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" FlashVars="navid=<?php echo $page_id; ?>" />
	</object>
</noscript>