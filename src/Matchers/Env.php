<?php

namespace Hedger\Envicon\Matchers;

use Illuminate\Support\Facades\App;

class Env implements Matcher
{
    public function match($env)
    {
        return preg_match("/$env/", App::environment());
    }
}
