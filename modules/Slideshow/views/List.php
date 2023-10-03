<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/

/* Include dependency required for using Server API */
include_once 'include/Webservices/Query.php';

class Slideshow_List_View extends Vtiger_Index_View {

	public function process(Vtiger_Request $request) {

		// Current User Context	
		$userContext = vglobal('current_user');
		$viewer = $this->getViewer($request);
	
		if ($request->has('ids') && $request->has('src_module')) {
			// Was request made for the slideshow - lets act now.
			
			// Prepare Webservices Query
			$srcModule = $request->get('src_module');
			$ids = array_map('intval', $request->get('ids'));
			$idsuffix = trim(vtws_getWebserviceEntityId($srcModule, '0'), '0');
			$wsids = array(); foreach ($ids as $id) $wsids[] = $idsuffix.$id;

			$wsquery = sprintf("SELECT * FROM %s WHERE id IN ('%s');", $srcModule, implode("','", $wsids) );

			// Execute the query and fetch records
			$records = vtws_query($wsquery, $userContext);
			
			// Pass the records for rendering the slideshow.			
			$viewer->assign('RECORDS', $records);
			$viewer->assign('SRCMODULE', $srcModule);
			$viewer->assign('COUNT', count($records));
		}
		
		$viewer->view('ListViewContents.tpl', $request->getModule());
	}
}