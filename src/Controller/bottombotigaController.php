<?php

namespace Drupal\bottombotiga\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Defines bottombotigaController class.
 */
class bottombotigaController extends ControllerBase {


  public function template() {
    return [
      '#theme' => 'bottombotiga',
      '#tlf1' => $this->t('645223365'),
      '#tlf2' => $this->t('635774410'),
      '#attached' => [
        'library' => [
          'bottombotiga/bottombotiga',
        ],
      ],

    //'#type' => 'markup',
      //'#markup' => $this->t('Hola caracola'),
    ];
  }

}
