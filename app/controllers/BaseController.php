<?php
namespace MVPDesign\ThemosisTheme\Controllers;

use Controller;
use View;
use Asset;
use MVPDesign\ThemosisTheme\Models\Theme;

class BaseController extends Controller
{
    /**
     * theme model
     *
     * @var string
     */
    private $theme;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->theme = new Theme\Theme;

        $globals = array(
            'isResponsive'           => $this->theme->isResponsive(),
            'isUsingGoogleAnalytics' => $this->theme->isUsingGoogleAnalytics(),
            'isUsingGoogleFonts'     => $this->theme->isUsingGoogleFonts(),
            'isUsingTypekit'         => $this->theme->isUsingTypekit(),
            'isUsingTypography'      => $this->theme->isUsingTypography()
        );

        // attach css & js files
        Asset::add('app-css', 'dist/css/app.min.css', false, '1.0.0', 'all');
        Asset::add('app-js', 'dist/js/app.min.js', false, '1.0.0', true);

        // share the globals across all views
        View::share($globals);
    }

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected function setupLayout()
    {
        if (! is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }
}
