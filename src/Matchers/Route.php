<?php

namespace Hedger\Envicon\Matchers;

use Illuminate\Support\Facades\Route as RouteFacade;

class Route implements Matcher
{
    public function match($route)
    {
        return preg_match("~$route~", RouteFacade::current()->uri);
    }
}
