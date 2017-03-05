<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

/**
 * Class EsperantoHelperPlugin
 * @package Grav\Plugin
 */
class EsperantoHelperPlugin extends Plugin
{
    /**
     * @return array
     *
     * The getSubscribedEvents() gives the core a list of events
     *     that the plugin wants to listen to. The key of each
     *     array section is the event that the plugin listens to
     *     and the value (in the form of an array) contains the
     *     callable (or function) as well as the priority. The
     *     higher the number the higher the priority.
     */
    public static function getSubscribedEvents()
    {
        return [
            'onPluginsInitialized' => ['onPluginsInitialized', 0]
        ];
    }

    /**
     * Initialize the plugin
     */
    public function onPluginsInitialized()
    {
        // Don't proceed if we are in the admin plugin
        if ($this->isAdmin()) {
            return;
        }

        // Enable the main event we are interested in
        $this->enable([
            'onPageContentRaw' => ['onPageContentRaw', 0]
        ]);
    }

    /**
     * Do some work for this event, full details of events can be found
     * on the learn site: http://learn.getgrav.org/plugins/event-hooks
     *
     * @param Event $e
     */
    public function onPageContentRaw(Event $e)
    {
        // Get the current raw content
        $content = $e['page']->getRawContent();
        
        $esperanto_characters = array(
            "cx" => "\u{0109}",
            "CX" => "\u{0108}",
            "gx" => "\u{011d}",
            "GX" => "\u{011c}",
            "hx" => "\u{0125}",
            "HX" => "\u{0124}",
            "jx" => "\u{0135}",
            "JX" => "\u{0134}",
            "sx" => "\u{015d}",
            "SX" => "\u{015c}",
            "ux" => "\u{016d}",
            "UX" => "\u{016c}"
        );

        foreach( $esperanto_characters as $key => $value) {
            $content = str_replace($key, $value, $content);
        }

        // Prepend the output with the custom text and set back on the page
        $e['page']->setRawContent($content);
    }
}
