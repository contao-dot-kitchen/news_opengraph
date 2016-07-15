<?php

namespace Contao;

class OpenGraph
{
	public function myParseArticles($objTemplate, $arrRow, $objModule)
	{
		if($objModule->type == 'newsreader')
		{
			$objTemplate = new \FrontendTemplate('mod_news_opengraph');

			$objTemplate->title       = htmlentities($arrRow['headline']);
			$objTemplate->url         = substr(\Environment::Get('base'), 0, -1) . \Environment::Get('requestUri');
			$objTemplate->description = preg_replace( "/\r|\n/", "", htmlentities(strip_tags($arrRow['teaser'])));

			if($arrRow['addOGImage'])
			{
				$objFile = \FilesModel::findByUuid($arrRow['ogSRC']);
			}
			elseif($arrRow['addImage'])
			{
				$objFile = \FilesModel::findByUuid($arrRow['singleSRC']);
			}

			if($objFile->path)
			{
				$objTemplate->image = \Environment::Get('base') . $objFile->path;
			}

			$GLOBALS['TL_HEAD'][] = $objTemplate->parse();		
		}
	}
}