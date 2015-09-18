<?php

/**
 * @file
 * Contains \Drupal\d8example\Controller\d8exampleController.
 */

namespace Drupal\d8example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Iplements a simple "Hello World" page.
 */
class d8exampleController extends ControllerBase {
  public function content() {
    return array(
      '#theme' => 'd8example',
      '#text' => t('Hello World'),
    );
  }
}
