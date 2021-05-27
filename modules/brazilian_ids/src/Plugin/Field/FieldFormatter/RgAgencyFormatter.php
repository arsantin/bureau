<?php

namespace Drupal\brazilian_ids\Plugin\Field\FieldFormatter;

use Drupal\Core\Field\FormatterBase;
use Drupal\Core\Field\FieldItemListInterface;

/**
 * Default formatter for RG fields.
 *
 * @FieldFormatter(
 *   id = "brazilian_ids_rg_agency",
 *   label = @Translation("Agency"),
 *   field_types = {
 *     "brazilian_ids_rg"
 *   }
 * )
 */
class RgAgencyFormatter extends FormatterBase {

  /**
   * {@inheritdoc}
   */
  public function viewElements(FieldItemListInterface $items, $langcode) {
    $element = [];
    foreach ($items as $delta => $item) {
      $element[$delta] = [
        '#plain_text' => isset($item->agency) ? $item->agency : '',
      ];
    }
    return $element;
  }

}
