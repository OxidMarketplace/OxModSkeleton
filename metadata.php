/**
 *
 * @link      https://github.com/OxidMarketplace
 * @copyright (C) Jens Hergert
 * @version   1.1
 */

/**
 * Metadata version
 */
$sMetadataVersion = '6-3.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'oxmodskeleton',
    'title'       => 'Oxid Module Skeleton with Namespaces',
    'description' => array(
        'de' => 'Oxid Module Skeleton with Namespaces',
        'en' => 'Oxid Module Skeleton with Namespaces',
    ),
    'thumbnail'     => 'oxmodskeleton.png',
    'version'       => '6-3.1',
    'author'        => 'Jens Hergert',
    'url'           => 'https://github.com/OxidMarketplace',
    'email'         => 'kenmarall@hotmail.com',

    'extend'        => array(  
        \OxidEsales\Eshop\Application\Model\Article::class =>    MyVendor\MyModuleNamespace\Application\Model\MyModuleArticle::class),

    'controllers'   => array(),
    
    'templates'     => array(),

    'events'        => array(),
    
    'blocks'        => array(),
    
    'settings'      => array()
);

