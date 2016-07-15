<?php

ClassLoader::addNamespaces(array
(
	'Contao'
));

ClassLoader::addClasses(array
(
	'Contao\OpenGraph' => 'system/modules/news_opengraph/classes/OpenGraph.php'
));

TemplateLoader::addFiles(array
(
	'mod_news_opengraph' => 'system/modules/news_opengraph/templates/modules'
));