<?php
namespace MVPDesign\ThemosisTheme\Models\WordPress;

class Theme
{
    /**
     * Retrieve template directory URI for the current theme. Checks for SSL.
     *
     * @return string
     */
    public function getTemplateDirectoryURI()
    {
        return get_template_directory_uri();
    }

    /**
     * Absolute path to the directory of the current theme (without the trailing slash).
     *
     * @return string
     */
    public function getTemplateDirectory()
    {
        return get_template_directory();
    }

}
