<?php

namespace spec\MVPDesign\ThemosisTheme\Controllers;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HomeControllerSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('MVPDesign\ThemosisTheme\Controllers\HomeController');
    }

    function it_uses_the_default_layout()
    {
    	$this->getLayout()->shouldReturn('layouts.default');
    }
}
