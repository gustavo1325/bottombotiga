<?php

namespace Drupal\bottombotiga\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'bottombotiga' Block.
 *
 * @Block(
 *   id = "bottombotigablock",
 *   admin_label = @Translation("bottombotiga block"),
 *   category = @Translation("Sularyy"),
 * )
 */
class bottombotigaBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#theme' => 'bottombotiga',
      '#attached' => [
        'library' => [
          'bottombotiga/bottombotiga',
        ],
      ],

     ];

  }

}
