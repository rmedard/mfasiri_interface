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
        $interpreterPlatform = Node::load(8);
        $tripsToAfrica = Node::load(9);
        $interpreterPlatformTrans = Drupal::service('entity.repository')->getTranslationFromContext($interpreterPlatform);
        $tripsToAfricaTrans = Drupal::service('entity.repository')->getTranslationFromContext($tripsToAfrica);
        $element = array(
            '#theme' => 'mfasiri_homepage',
            '#node1' => $interpreterPlatformTrans,
            '#node2' => $tripsToAfricaTrans,
        );
        return $element;
    }

}