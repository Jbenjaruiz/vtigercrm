<?php
include_once 'modules/Vtiger/CRMEntity.php';
class HelloWorld extends Vtiger_CRMEntity
{
    var $table_name = 'vtiger_helloworld';
    var $table_index = 'helloworldid';

    var $customFieldTable = array('vtiger_helloworldcf', 'helloworldid');

    var $tab_name = array('vtiger_crmentity', 'vtiger_helloworld', 'vtiger_helloworldcf');

    var $tab_name_index = array(
        'vtiger_crmentity' => 'crmid',
        'vtiger_helloworld' => 'helloworldid',
        'vtiger_helloworldcf' => 'helloworldid'
    );

    var $list_fields = array(
        /* Format: Field Label => Array(tablename, columnname) */
        // tablename should not have prefix 'vtiger_'
        'Summary' => array('helloworld', 'summary'),
        'Assigned To' => array('crmentity', 'smownerid')
    );
    var $list_fields_name = array(
        /* Format: Field Label => fieldname */
        'Summary' => 'summary',
        'Assigned To' => 'assigned_user_id',
    );

    // Make the field link to detail view
    var $list_link_field = 'summary';

    // For Popup listview and UI type support
    var $search_fields = array(
        /* Format: Field Label => Array(tablename, columnname) */
        // tablename should not have prefix 'vtiger_'
        'Summary' => array('helloworld', 'summary'),
        'Assigned To' => array('vtiger_crmentity', 'assigned_user_id'),
    );
    var $search_fields_name = array(
        /* Format: Field Label => fieldname */
        'Summary' => 'summary',
        'Assigned To' => 'assigned_user_id',
    );

    // For Popup window record selection
    var $popup_fields = array('summary');

    // For Alphabetical search
    var $def_basicsearch_col = 'summary';

    // Column value to use on detail view record text display
    var $def_detailview_recname = 'summary';

    // Used when enabling/disabling the mandatory fields for the module.
    // Refers to vtiger_field.fieldname values.
    var $mandatory_fields = array('summary', 'assigned_user_id');

    var $default_order_by = 'summary';
    var $default_sort_order = 'ASC';
}