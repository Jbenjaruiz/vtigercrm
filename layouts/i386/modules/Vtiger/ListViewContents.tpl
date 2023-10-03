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
*}
<div class="container">

	<div class="row-fluid">
	
		<div class="span3">
			{foreach item=_CUSTOMVIEWS key=_CUSTOMVIEWGROUP from=$CUSTOM_VIEWS}
			<ul class="nav nav-list">
				{foreach item=_CUSTOMVIEW from=$_CUSTOMVIEWS}
					<li {if $VIEWID == $_CUSTOMVIEW->getId()}class="active"{/if}><a href="#">{$_CUSTOMVIEW->get('viewname')}</a></li>
				{/foreach}
			</ul>
			{/foreach}
		</div>
		<div class="span9">
		
			{foreach item=_E from=$LISTVIEW_ENTRIES}
			<div>
				<h3>#{$_E->getId()}</h3>
				<table class="table table-bordered-outline">
					{foreach item=_H key=_F from=$LISTVIEW_HEADERS}
					<tr>
						<td nowrap="">{$_H->get('label')}</td>
						<td>{$_E->get($_F)}</td>
					</tr>
					{/foreach}
				</table>
			</div>
			{/foreach}
			
		</div>
	</div>
</div>

{*
CUSTOM_VIEWS
VIEWID

LISTVIEW_ENTRIES
LISTVIEW_ENTRIES_COUNT
LISTVIEW_HEADERS
LISTVIEW_LINKS
LISTVIEW_MASSACTIONS
LIST_VIEW_MODEL
*}

{*
MODULE_NAME
*}