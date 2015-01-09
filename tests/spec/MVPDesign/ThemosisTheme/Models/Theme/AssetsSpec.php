<?php

namespace spec\MVPDesign\ThemosisTheme\Models\Theme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Mockery;

class AssetsSpec extends ObjectBehavior
{
    public function let()
    {
        $theme = Mockery::mock('MVPDesign\ThemosisTheme\Models\WordPress\Theme');
        $theme->shouldReceive('getTemplateDirectoryURI')
           ->andReturn('http://localhost/wp-content/theme/themosis');

        $this->beConstructedWith($theme);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('MVPDesign\ThemosisTheme\Models\Theme\Assets');
    }

    function it_should_return_a_path_to_the_css_assets_directory()
    {
        $this->css()->shouldReturn('http://localhost/wp-content/theme/themosis/app/assets/dist/css/');
    }

    function it_should_return_a_path_to_the_images_assets_directory()
    {
        $this->image()->shouldReturn('http://localhost/wp-content/theme/themosis/app/assets/dist/images/');
    }

    function it_should_return_a_path_to_the_js_assets_directory()
    {
        $this->js()->shouldReturn('http://localhost/wp-content/theme/themosis/app/assets/dist/js/');
    }

    function it_should_return_a_path_to_the_fonts_assets_directory()
    {
        $this->font()->shouldReturn('http://localhost/wp-content/theme/themosis/app/assets/dist/fonts/');
    }

    function it_should_return_the_path_to_the_assets_directory()
    {
        $this->path()->shouldReturn('http://localhost/wp-content/theme/themosis/app/assets/dist/');
    }
}
