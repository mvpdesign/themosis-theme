<?php
namespace MVPDesign\ThemosisTheme\Models\Theme;

use MVPDesign\ThemosisTheme\Models\WordPress\Theme;

class Assets
{
    /**
     * assets directory
     *
     * @var string
     */
    private static $assetsDir = 'app/assets';

    /**
     * distribution directory
     *
     * @var string
     */
    private static $distDir = 'dist';

    /**
     * css directory
     *
     * @var string
     */
    private static $cssDir = 'css';

    /**
     * images directory
     *
     * @var string
     */
    private static $imagesDir = 'images';

    /**
     * javascript directory
     *
     * @var string
     */
    private static $jsDir = 'js';

    /**
     * fonts directory
     *
     * @var string
     */
    private static $fontsDir = 'fonts';

    /**
     * Return a path to the css assets directory
     *
     * @return string
     */
    public static function css($path = '')
    {
        return self::path(self::$cssDir . '/' . $path);
    }

    /**
     * Return a path to the images assets directory
     *
     * @return string
     */
    public static function image($path = '')
    {
        return self::path(self::$imagesDir . '/' . $path);
    }

    /**
     * Return a path to the js assets directory
     *
     * @return string
     */
    public static function js($path = '')
    {
        return self::path(self::$jsDir . '/' . $path);
    }

    /**
     * Return a path to the fonts assets directory
     *
     * @return string
     */
    public static function font($path = '')
    {
        return self::path(self::$fontsDir . '/' . $path);
    }

    /**
     * Returns the path to the assets directory
     *
     * @return string
     */
    public static function path($path = '')
    {
        return Theme::getTemplateDirectoryURI() . '/' . self::$assetsDir . '/' . self::$distDir . '/' . $path;
    }
}
