<?php
namespace MVPDesign\ThemosisTheme\Models\Theme;

use MVPDesign\ThemosisTheme\Models\WordPress;

class Assets
{
    /**
     * assets directory
     *
     * @var string
     */
    private $assetsDir = 'app/assets';

    /**
     * distribution directory
     *
     * @var string
     */
    private $distDir = 'dist';

    /**
     * css directory
     *
     * @var string
     */
    private $cssDir = 'css';

    /**
     * images directory
     *
     * @var string
     */
    private $imagesDir = 'images';

    /**
     * javascript directory
     *
     * @var string
     */
    private $jsDir = 'js';

    /**
     * fonts directory
     *
     * @var string
     */
    private $fontsDir = 'fonts';

    /**
     * Constructor
     *
     */
    public function __construct($theme = false)
    {
        if (! $theme) {
            $theme = new WordPress\Theme;
        }

        $this->theme = $theme;
    }

    /**
     * Return a path to the css assets directory
     *
     * @return string
     */
    public function css($path = '')
    {
        return $this->path($this->cssDir . '/' . $path);
    }

    /**
     * Return a path to the images assets directory
     *
     * @return string
     */
    public function image($path = '')
    {
        return $this->path($this->imagesDir . '/' . $path);
    }

    /**
     * Return a path to the js assets directory
     *
     * @return string
     */
    public function js($path = '')
    {
        return $this->path($this->jsDir . '/' . $path);
    }

    /**
     * Return a path to the fonts assets directory
     *
     * @return string
     */
    public function font($path = '')
    {
        return $this->path($this->fontsDir . '/' . $path);
    }

    /**
     * Returns the path to the assets directory
     *
     * @return string
     */
    public function path($path = '')
    {
        return $this->theme->getTemplateDirectoryURI() . '/' . $this->assetsDir . '/' . $this->distDir . '/' . $path;
    }
}
