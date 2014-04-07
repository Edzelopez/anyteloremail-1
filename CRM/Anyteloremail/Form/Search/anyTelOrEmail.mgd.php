<?php
// This file declares a managed database record of type "CustomSearch".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Anyteloremail_Form_Search_anyTelOrEmail',
    'entity' => 'CustomSearch',
    'params' => 
    array (
      'version' => 3,
      'label' => 'anyTelOrEmail',
      'description' => 'Any Telephone Or Email: Returns all telephone and email addresses for contacts in the database based on partial telephone or email address',
      'class_name' => 'CRM_Anyteloremail_Form_Search_anyTelOrEmail',
    ),
  ),
);
