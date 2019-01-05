<?php

namespace voganu\tornado\admin;

use luya\admin\components\AdminMenuBuilder;

/**
 * News Admin Module.
 *
 * @author Basil Suter <basil@nadar.io>
 */
final class Module extends \luya\admin\base\Module
{
    public $apis = [
        'api-tornado-postav' => 'voganu\tornado\admin\apis\PostavController',
        'api-tornado\status' => 'voganu\tornado\admin\apis\StatusController',
    ];

    /**
     * @inheritdoc
     */
    public function getMenu()
    {
        return (new AdminMenuBuilder($this))
            ->node('tornado', 'local_library')
                ->group('tornado_administrate')
                    ->itemApi('postav', 'tornadoadmin/postav/index', 'edit', 'api-tornado-postav');
//                    ->itemApi('cat', 'newsadmin/cat/index', 'bookmark_border', 'api-news-cat');
    }

    public static function onLoad()
    {
        self::registerTranslation('tornadoadmin', '@tornadoadmin/messages', [
            'tornadoadmin' => 'tornadoadmin.php',
        ]);
    }
    
    /**
     * Translat news messages.
     *
     * @param string $message
     * @param array $params
     * @return string
     */
    public static function t($message, array $params = [])
    {
        return parent::baseT('tornadoadmin', $message, $params);
    }
}
