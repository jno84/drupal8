<?php

use Drupal\Component\Utility\Xss;

/**
 * @file
 * Save custom CSS to file
 */
function at_core_submit_custom_css($values, $theme, $generated_files_path) {
  $custom_css = '';
  if (!empty($values['settings_custom_css'])) {
    // sanitize user entered data
    $custom_css = Xss::filter($values['settings_custom_css']);
  }

  //$file_name = $theme . '.custom-css.css';

  $file_name = 'custom-css.css';
  $filepath = $generated_files_path . '/' . $file_name;
  file_unmanaged_save_data($custom_css, $filepath, FILE_EXISTS_REPLACE);
}
