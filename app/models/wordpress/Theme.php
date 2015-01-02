<?php
namespace MVPDesign\ThemosisTheme\Models\WordPress;

class Theme
{
    /**
     * Retrieve template directory URI for the current theme. Checks for SSL.
     *
     * @return string
     */
    public static function getTemplateDirectoryURI()
    {
        return get_template_directory_uri();
    }
}
