<?php
declare(strict_types=1);
namespace Atomicplan\PlateLayoutCes\Utility;

/**
 * @package Plate
 * @subpackage Utility
 */
class TcaHelpers{


    /**
     * get siteconfig
     * @return array
     */

    public static function getSiteconfig(): array{
        return [];
    }

    /**
     * @param $path
     * @return array
     */
    public static function getSubFolderNames($path): array{
        $folders = [];
        $directories = glob($path . '/*', GLOB_ONLYDIR);
        foreach($directories as $dir){
            $parts = explode('/', $dir);
            $name = end($parts);
            array_push($folders, $name );
        }
        return $folders;
    }

    /**
     * @param string $extension
     * @param string $name
     * @param string $wizardCategory
     * @param string $icon
     */
    public static function definePlugin(string $extension,string $name, string $wizardCategory,string $icon, string $cePath = '/Resources/Private/CEs/'): array{
        $lowercaseFoldername = strtolower($name);
        $plugin = 'tx_'.$extension.'_' .$lowercaseFoldername;
        $plugin_locallang_file='ll_'.$lowercaseFoldername.'.xlf';
        $plugin_incon_ident = $plugin .'icon';
        $plugin_icon_file=$icon;

        $php = <<<PHP
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
            'mod {
                wizards.newContentElement.wizardItems.' .$wizardCategory .' {
                    elements {
                        ' .$plugin .' {
                            iconIdentifier = ' .$plugin_incon_ident .'
                            title = LLL:EXT:'.$extension. $cePath .$name .'/Config/ll.xlf:wizard.title
                            description = LLL:EXT:'.$extension .$cePath .$name .'/Config/ll.xlf:wizard.description
                            tt_content_defValues {
                                CType = '.$plugin .'
                            }
                        }
                    }
                    show = *
                }
            }'
        );
        $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
        $iconRegistry->registerIcon(
            $plugin_incon_ident,
            \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
            ['source' => 'EXT:'.$extension .$cePath .$name .'/icon.svg']
        );
        PHP;
        return $php;
    }


    /**
     * a function that maps an array to a string
     */

    public static function mapArrayToString(array $array, string $glue = ','): string
    {
        $string = '';
        foreach ($array as $key => $value) {
            $string .= $key . ' = ' . $value . $glue;
        }
        return $string;
    }
}