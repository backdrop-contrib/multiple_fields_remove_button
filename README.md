# Multiple fields Remove button

Adds a "Remove" button to unlimited input fields.

## Installation

Install this module using the official Backdrop CMS instructions at
<https://backdropcms.org/guide/modules>.

## Configuration

There is no configuration. It will appear automatically on fields with the
"unlimited" option.

## For developers

You can add this functionality to others fields which have not containing remove
button by declaring the following hook:

```php
function hook_multiple_field_remove_button_field_widgets_alter(&$fieldwidgets) {
  // Add new widget type in the array $fieldwidgets
  $fieldwidgets[] = 'custom_field_type';
}
```

## License

This project is GPL v2 software. See the LICENSE.txt file in this directory
for complete text.

## Maintainers

* [Herb v/d Dool](https://github.com/herbdool)

## Credits

Ported to Backdrop by [Herb v/d Dool](https://github.com/herbdool).

Drupal version currently maintained by:

* [asghar](https://www.drupal.org/u/asghar)
* [semjuel](https://www.drupal.org/u/semjuel)
* [faheem586](https://www.drupal.org/u/faheem586)
