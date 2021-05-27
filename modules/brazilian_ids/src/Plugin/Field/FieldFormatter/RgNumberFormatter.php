<?php

namespace Drupal\brazilian_ids\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Default formatter for RG fields.
 *
 * @FieldFormatter(
 *   id = "brazilian_ids_rg_number",
 *   label = @Translation("Number"),
 *   field_types = {
 *     "brazilian_ids_rg"
 *   }
 * )
 */
class RgNumberFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];
    foreach ($items as $delta => $item) {
      $element[$delta] = [
        '#plain_text' => isset($item->number) ? $item->number : '',
      ];
    }
    return $element;
  }

}
