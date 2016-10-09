<? php

/**
 * Desc: Define Custom Badge in /custom/module/{Module}/clients/base/views/record/record.php
 * Written by: Mohammed Jhosawa
 */

$viewdefs['module'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'record' => 
      array (
        'buttons' => 
        array (
        // Buttons 
        ),
        'panels' =>
        array (
        0 => 
          array (
            'name' => 'panel_header',
            'header' => true,
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'custom_badge_c', // Custom Field 
                'label' => 'Custom Badge',
                'type' => 'custom_badge',
                'readonly' => true,   // Read-only 
                'dismiss_label' => true,
             ),
            ),
           ),
          ),
          // Record View Panel
         ),
        ),
       ),
     ),
     
  ?>
