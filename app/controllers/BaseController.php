<?php
namespace MVPDesign\ThemosisTheme\Controllers;

use Controller;
use View;
use Asset;
use MVPDesign\ThemosisTheme\Models\Theme;
use MVPDesign\ThemosisTheme\Models\WordPress;

class BaseController extends Controller
{
    /**
     * theme model
     *
     * @var string
     */
    private $theme;

    /**
     * wordpress general model
     *
     * @var string
     */
    private $general;

    /**
     * Constructor
     */
    public function __construct()
    {
        add_filter('show_admin_bar', array($this, 'adminBar'));

        $this->theme = new Theme\Theme;
        $this->general = new WordPress\General;

        $globals = array(
            'isResponsive'           => $this->theme->isResponsive(),
            'isUsingGoogleAnalytics' => $this->theme->isUsingGoogleAnalytics(),
            'isUsingGoogleFonts'     => $this->theme->isUsingGoogleFonts(),
            'isUsingTypekit'         => $this->theme->isUsingTypekit(),
            'isUsingTypography'      => $this->theme->isUsingTypography(),
            'isHome'                 => is_front_page(),
            'siteTitle'              => $this->general->getBlogInfo('name'),
            'siteUrl'                => $this->general->getBlogInfo('url')
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

    /**
     * Remove admin bar styling
     *
     * @return void
     */
    public function adminBar($show_admin_bar)
    {
        remove_action('wp_head', '_admin_bar_bump_cb');

        return $show_admin_bar;
    }
}
