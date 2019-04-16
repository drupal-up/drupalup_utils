<?php

namespace Drupal\drupalup_utils\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Our namelist controller.
 */
class NameListController extends ControllerBase {

  /**
   * Our page.
   */
  public function content() {
    $generator = new \Nubs\RandomNameGenerator\Vgng();

    $list_of_names = [];
    for ($i=0;$i<100;$i++) {
      $list_of_names[] = $generator->getName();
    }

    return [
      '#theme' => 'item_list',
      '#list_type' => 'ul',
      '#items' => $list_of_names,
    ];

  }
}
