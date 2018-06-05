<?php
/**
 * Created by PhpStorm.
 * User: reberme
 * Date: 13/04/2018
 * Time: 15:29
 */

namespace Drupal\mfasiri_interface\Plugin\Block;


use Drupal;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Language\LanguageInterface;
use Drupal\Core\Url;

/**
 * Class LanguageSwitcher
 *
 * @package Drupal\mfasiri_interface\Plugin\Block
 *
 * @Block(
 *     id = "mfasiri_language_switcher",
 *     admin_label = @Translation("Mfasiri Language Switcher block"),
 *     category = @Translation("Custom Mfasiri Blocks")
 * )
 */
class LanguageSwitcher extends BlockBase {

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
    public function build() {
        $currentUrl = Url::fromUri('internal:' . Drupal::request()->getRequestUri());
        $languages = Drupal::languageManager()
            ->getLanguageSwitchLinks(LanguageInterface::TYPE_INTERFACE, $currentUrl);
        $languages1 = Drupal::languageManager()
            ->getLanguageSwitchLinks(LanguageInterface::TYPE_CONTENT, $currentUrl);
        Drupal::logger('mfasiri_interface')->warning("Langs: " . $languages->links . "## Langs1: " . $languages1->links );
        return [
            '#theme' => 'language_switcher',
            '#links' => $languages->links,
            '#cache' => array(
                'max-age' => 0,
            )
        ];
    }
}