{*
/*************************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *
 *************************************************************************************/
*}<!doctype html>
<html>
	<head>
		<title>{$APPTITLE}</title>
		
		<link rel="stylesheet" type="text/css" href="layouts/i386/libraries/bootstra.386/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="layouts/i386/libraries/bootstra.386/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="layouts/i386/skins/application.css">
		
		<script type="text/javascript" src="layouts/i386/libraries/jquery/jquery.min.js"></script>
		<script type="text/javascript" src="layouts/i386/libraries/bootstra.386/js/bootstrap.js"></script>
		<script type="text/javascript" src="layouts/i386/skins/application.js"></script>
		
	</head>
	<body>
		
		{if $CURRENT_USER_MODEL}	
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="collapse nav-collapse">
						<ul class="nav">
							<li {if $MODULE == 'Home'}class="active"{/if}>
								<a href="index.php" class="active">Vtiger</a>
							</li>
							{if $MODULE && $MODULE != 'Home'}
							<li class="active">
								<a href="index.php?module={$MODULE}">{$MODULE|vtranslate:$MODULE}</a>
							</li>
							{/if}							
						</ul>
						<ul class="nav pull-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">{$CURRENT_USER_MODEL->get('first_name')} {$CURRENT_USER_MODEL->get('last_name')}</a>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="index.php?module=Users&action=Logout">Logout</a>
									</li>
								</ul>
							</li>
					</div>
				</div>
			</div>
		</div>
		{/if}
		