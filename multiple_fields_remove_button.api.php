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
 * Modify list of field widgets for which the remove button will be added.
 *
 * @param array $fieldwidgets
 *   A list with field widgets.
 */
function hook_multiple_fields_remove_button_field_widgets_alter(&$fieldwidgets) {
  // Add new widget type in the array $fieldwidgets
  $fieldwidgets[] = 'custom_field_widget';
}

/**
 * Modify list of field widgets for which the remove button should not be added.
 *
 * @param array $skipwidgets
 *   A list with field widgets.
 */
function hook_multiple_fields_remove_button_skip_widgets_alter(&$skipwidgets) {
  // Add new widget type in the array $skipwidgets
  $skipwidgets[] = 'custom_field_widget';
}

/**
 * Skip the remove button for a field widget.
 *   This hook is context-sensitive so can display or skip the Remove button,
 *   depending on different conditions.
 *
 * @param array $element
 *   An associative array containing the structure of the current element.
 * @param array $form_state
 *   A keyed array containing the current state of the form.
 * @param array $context
 *   An associative array containing the following keys:
 *   - field: The $field array.
 *   - instance: The $instance array.
 *   - format: The string $format.
 *   - entity_type: The $entity_type.
 *   - entity: The $entity object.
 *   - langcode: The string $langcode.
 *   - item: The $item array.
 *   - display: The $display array.
 * @return true|null
 *   TRUE if skipping the remove button, NULL otherwise.
 */
function hook_multiple_fields_remove_button_skip_widget($element, $form_state, $context) {
  if ($context['instance']['widget']['type'] == 'date_combo') {
    return TRUE;
  }

  return NULL;
}
