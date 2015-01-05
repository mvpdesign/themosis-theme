<?php
namespace MVPDesign\ThemosisTheme\Controllers;

use Controller;
use View;
use Asset;
use MVPDesign\ThemosisTheme\Models\WordPress;
use MVPDesign\ThemosisTheme\Models\Theme;

class BaseController extends Controller
{
    /**
     * array of theme models
     *
     * @var string
     */
    protected $themeModels = array();

    /**
     * array of wordpress models
     *
     * @var string
     */
    protected $wordPressModels = array();

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->addThemeModel('theme', new Theme\Theme);
        $this->addWordPressModel('general', new WordPress\General);

        Asset::add('app-css', 'dist/css/app.min.css', false, '1.0.0', 'all');
        Asset::add('app-js', 'dist/js/app.min.js', false, '1.0.0', true);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (! is_null($this->layout)) {
            $data = array(
                'languageAttributes'     => $this->getWordPressModel('general')->getLanguageAttributes(),
                'charset'                => $this->getWordPressModel('general')->getBlogInfo('charset'),
                'title'                  => $this->getWordPressModel('general')->getPageTitle('|', 'right'),
                'description'            => $this->getWordPressModel('general')->getBlogInfo('description'),
                'isResponsive'           => $this->getThemeModel('theme')->isResponsive(),
                'isUsingGoogleAnalytics' => $this->getThemeModel('theme')->isUsingGoogleAnalytics(),
                'isUsingGoogleFonts'     => $this->getThemeModel('theme')->isUsingGoogleFonts(),
                'isUsingTypekit'         => $this->getThemeModel('theme')->isUsingTypekit(),
                'isUsingTypography'      => $this->getThemeModel('theme')->isUsingTypography()
            );

            $this->layout = View::make($this->layout, $data);
        }
    }

    private function addThemeModel($modelKey = '', $modelInstance = false)
    {
        $this->themeModels[$modelKey] = $modelInstance;
    }

    protected function getThemeModel($modelKey = '')
    {
        return $this->themeModels[$modelKey];
    }

    private function addWordPressModel($modelKey = '', $modelInstance = false)
    {
        $this->wordPressModels[$modelKey] = $modelInstance;
    }

    protected function getWordPressModel($modelKey = '')
    {
        return $this->wordPressModels[$modelKey];
    }
}
