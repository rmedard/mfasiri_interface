<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 20/04/2018
 * Time: 20:14
 */

namespace Drupal\mfasiri_interface\Controller;


use Drupal;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;

/**
 * Class HomePageController
 * @package Drupal\mfasiri_interface\Controller
 */
class HomePageController extends ControllerBase {

    public function content() {
        $interpretor_platform = Node::load(8);
        $translation = Drupal::service('entity.repository')->getTranslationFromContext($interpretor_platform);
        $element = array(
            '#theme' => 'mfasiri_homepage',
            'platform_node' => $translation
        );
        return $element;
    }

}