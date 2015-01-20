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
     * @param  string  $path
     * @param  boolean $absolutePath
     * @return string
     */
    public function css($path = '', $absolutePath = false)
    {
        return $this->path($this->cssDir . '/' . $path, $absolutePath);
    }

    /**
     * Return a path to the images assets directory
     *
     * @param  string  $path
     * @param  boolean $absolutePath
     * @return string
     */
    public function image($path = '', $absolutePath = false)
    {
        return $this->path($this->imagesDir . '/' . $path, $absolutePath);
    }

    /**
     * Return a path to the js assets directory
     *
     * @param  string  $path
     * @param  boolean $absolutePath
     * @return string
     */
    public function js($path = '', $absolutePath = false)
    {
        return $this->path($this->jsDir . '/' . $path, $absolutePath);
    }

    /**
     * Return a path to the fonts assets directory
     *
     * @param  string  $path
     * @param  boolean $absolutePath
     * @return string
     */
    public function font($path = '', $absolutePath = false)
    {
        return $this->path($this->fontsDir . '/' . $path, $absolutePath);
    }

    /**
     * Returns the path to the assets directory
     *
     * @param  string  $path
     * @param  boolean $absolutePath
     * @return string
     */
    public function path($path = '', $absolutePath = false)
    {
        return $absolutePath ? $this->absolutePath($path) : $this->uriPath($path);
    }

    /**
     * Returns the URI path to the assets directory
     *
     * @return string
     */
    public function uriPath($path = '')
    {
        return $this->theme->getTemplateDirectoryURI() . '/' . $this->assetsDir . '/' . $this->distDir . '/' . $path;
    }

    /**
     * Returns a base64 encoded string of an svg
     *
     * @return string
     */
    public function svg($path = '')
    {
        $contents = @file_get_contents($path);
        return $contents ? 'data:image/svg+xml;base64,' . base64_encode($contents) : false;
    }

    /**
     * Returns the absolute path to the assets directory
     *
     * @return string
     */
    public function absolutePath($path = '')
    {
        return $this->theme->getTemplateDirectory() . '/' . $this->assetsDir . '/' . $this->distDir . '/' . $path;
    }
}
