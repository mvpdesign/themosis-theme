<?php
namespace MVPDesign\ThemosisTheme\Models\WordPress;

class General
{
    /**
     * Return the language HTML attributes
     *
     * @return string
     */
    public static function getLanguageAttributes()
    {
        ob_start();
        language_attributes();
        return ob_get_clean();
    }

    /**
     * Return the classes for the body element.
     *
     * @return string
     */
    public static function getBodyClass($class = '')
    {
        ob_start();
        body_class($class);
        return ob_get_clean();
    }

    /**
     * Fire the wp_head action
     *
     * @return string
     */
    public static function wpHead()
    {
        ob_start();
        wp_head();
        return ob_get_clean();
    }

    /**
     * Fire the wp_footer action
     *
     * @return string
     */
    public static function wpFooter()
    {
        ob_start();
        wp_footer();
        return ob_get_clean();
    }

    /**
     * Return information about the blog
     *
     * @param  string $show
     * @param  string $filter
     * @return string
     */
    public static function getBlogInfo($show = '', $filter = 'raw')
    {
        return get_bloginfo($show, $filter);
    }

    /**
     * Return the page title for the blog
     *
     * @param  string $sep
     * @param  string $seplocation
     * @return string
     */
    public static function getPageTitle($sep = '&raquo;', $seplocation = '')
    {
        return wp_title($sep, false, $seplocation);
    }
}
