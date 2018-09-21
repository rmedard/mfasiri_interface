<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 21/09/2018
 * Time: 19:55
 */

namespace Drupal\mfasiri_interface\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Class FacebookLikeBox
 * @package Drupal\mfasiri_interface\Plugin\Block
 * @Block(
 *     id = "facebook_like_box",
 *     admin_label = @Translation("Facebook Like Box"),
 *     category = @Translation("Custom Mfasiri Blocks")
 * )
 */
class FacebookLikeBox extends BlockBase {

    /**
     * Builds and returns the renderable array for this block plugin.
     *
     * If a block should not be rendered because it has no content, then this
     * method must also ensure to return no content: it must then only return an
     * empty array, or an empty array with #cache set (with cacheability metadata
     * indicating the circumstances for it being empty).
     *
     * @return array
     *   A renderable array representing the content of the block.
     *
     * @see \Drupal\block\BlockViewBuilder
     */
    public function build()
    {
        return [
            '#theme' => 'facebook_like_box',
        ];
    }
}