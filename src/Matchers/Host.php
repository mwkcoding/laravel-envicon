<?php

namespace Hedger\Envicon\Matchers;

class Host implements Matcher
{
    public function match($domain)
    {
        return preg_match("/$domain/", request()->getHost());
    }
}
