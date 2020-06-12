<?php

namespace Hedger\Envicon;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class Envicon
{
    /** @var array */
    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
    }

    /**
     * Returns the URL of the favicon for the runtime environment
     */
    public function url()
    {
        $results = [];

        foreach ($this->config['matchers'] as $favicon => $matchers) {
            foreach ($matchers as $matcher => $value) {
                $matcherClass = "\\Hedger\\Envicon\\Matchers\\" . ucfirst(Str::camel($matcher));
                if (class_exists($matcherClass)) {
                    echo $matcherClass . '<br>';
                    $instance = new $matcherClass;
                    if ($instance->match($value)) {
                        echo 'matches';
                        if (isset($results[$favicon])) {
                            $results[$favicon] = $results[$favicon] + 1;
                        } else {
                            $results[$favicon] = 1;
                        }
                    }
                }
            }
        }

        dd($results);
    }

    /**
     * Returns the URL of the favicon for the given environment
     *
     * @param string $env name of the environment, as as defined in the config file
     * @return string URL to the favicon, or the default favicon URL if the environment does not exist
     */
    public function for($env)
    {
        return asset($this->config['environments'][$env] ?? $this->config['default_favicon']);
    }
}
