<?php

return array(

    /**
     * Mapping for all classes without a namespace.
     * The key is the class name and the value is the
     * absolute path to your class file.
     *
     * Watch your commas...
     */
    // Controllers
    'MVPDesign\ThemosisTheme\Controllers\BaseController' => themosis_path('app').'controllers'.DS.'BaseController.php',
    'MVPDesign\ThemosisTheme\Controllers\HomeController' => themosis_path('app').'controllers'.DS.'HomeController.php',

    // Models
    'MVPDesign\ThemosisTheme\Models\Theme\Assets' => themosis_path('app').'models'.DS.'Theme'.DS.'Assets.php',
    'MVPDesign\ThemosisTheme\Models\Theme\Theme' => themosis_path('app').'models'.DS.'Theme'.DS.'Theme.php',
    'MVPDesign\ThemosisTheme\Models\WordPress\General' => themosis_path('app').'models'.DS.'wordpress'.DS.'General.php',
    'MVPDesign\ThemosisTheme\Models\WordPress\Theme' => themosis_path('app').'models'.DS.'wordpress'.DS.'Theme.php',

    // Miscellaneous

);
