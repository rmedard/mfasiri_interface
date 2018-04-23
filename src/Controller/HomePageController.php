<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 20/04/2018
 * Time: 20:14
 */

namespace Drupal\mfasiri_interface\Controller;


use Drupal\Core\Controller\ControllerBase;

/**
 * Class HomePageController
 * @package Drupal\mfasiri_interface\Controller
 */
class HomePageController extends ControllerBase {
    public function content() {
        return array(
            '#theme' => 'homepage'
        );
    }
}