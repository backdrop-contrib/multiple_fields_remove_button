<?php
/**
 * @file
 * Multiple fields remove button API documentation.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Modify field widgets for which the remove button will be added.
 *
 * @param array $fieldwidgets
 *   A list with field widgets.
 */
function hook_multiple_field_remove_button_field_widgets_alter(&$fieldwidgets) {
  // Add new widget type in the array $fieldwidgets
  $fieldwidgets[] = 'custom_field_widget';
}
