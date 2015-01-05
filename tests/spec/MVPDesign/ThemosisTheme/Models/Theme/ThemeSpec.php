<?php

namespace spec\MVPDesign\ThemosisTheme\Models\Theme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ThemeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MVPDesign\ThemosisTheme\Models\Theme\Theme');
    }

    function it_should_determine_if_it_is_not_responsive()
    {
        $this->isResponsive()->shouldReturn(false);
    }

    function it_should_determine_if_it_is_responsive()
    {
        define('RESPONSIVE', true);
        $this->isResponsive()->shouldReturn(true);
    }

    function it_should_determine_if_it_is_not_using_google_analytics()
    {
        $this->isUsingGoogleAnalytics()->shouldReturn(false);
    }

    function it_should_determine_if_it_is_using_google_analytics()
    {
        define('ENVIRONMENT', 'production');
        define('GOOGLE_ANALYTICS_ID', Argument::type('string'));
        define('GOOGLE_ANALYTICS_URL', Argument::type('string'));
        $this->isUsingGoogleAnalytics()->shouldReturn(true);
    }

    function it_should_determine_if_it_is_not_using_google_fonts()
    {
        $this->isUsingGoogleFonts()->shouldReturn(false);
    }

    function it_should_determine_if_it_is_using_google_fonts()
    {
        define('GOOGLE_FONTS', Argument::type('string'));
        define('GOOGLE_FONTS_URL', Argument::type('string'));
        $this->isUsingGoogleFonts()->shouldReturn(true);
    }

    function it_should_determine_if_it_is_not_using_typekit()
    {
        $this->isUsingTypekit()->shouldReturn(false);
    }

    function it_should_determine_if_it_is_using_typekit()
    {
        define('TYPEKIT_KIT_ID', Argument::type('string'));
        define('TYPEKIT_KIT_URL', Argument::type('string'));
        $this->isUsingTypekit()->shouldReturn(true);
    }

    function it_should_determine_if_it_is_not_using_typography()
    {
        $this->isUsingTypography()->shouldReturn(false);
    }

    function it_should_determine_if_it_is_using_typography()
    {
        define('TYPOGRAPHY_USER_ID', Argument::type('string'));
        define('TYPOGRAPHY_PROJECT_ID', Argument::type('string'));
        define('TYPOGRAPHY_URL', Argument::type('string'));
        $this->isUsingTypography()->shouldReturn(true);
    }
}
