<?php

function sum($a, $b) {
    return ($a + $b);
}

return;
return $name;
return

$name;
return

$VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongClassName;
return [1, 2, 3];
return [$veryVeryVeryVeryVeryVeryLongKey => 'VeryVeryVeryVeryVeryVeryVeryVeryVeryLongString', $veryVeryVeryVeryVeryVeryLongKey => 'VeryVeryVeryVeryVeryVeryVeryVeryVeryLongString', 3];
return ($a + $b);
return ( $a / $b );
return ( $a && $b );
return new $VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongClassName();
return "VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString" . "VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString";
return "VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString" . "VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString" . "VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongString";
return 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000;
return (1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000 + 1000000000);
return $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable ? true : false;
return $veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable->veryVeryVeryVeryVeryVeryLongProperty;
return ((($true ? ('foo' . ('foo'. 'bar')) : "foobarfoo")));
return 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string';
return ('string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string' . 'string');

return function () {};
return (function () {})();

return call();
return $a->b->c->d->e->f;
return $a->b()->c()->d()->e()->f();
return call()->b()->c()->d()->e()->f();
return $a::b()::c()::d()::e()::f();
return Foo::a()::b()::c()::d()::e()::f();

return "
string
string
string
";

return $str = <<<EOD
Example of string
spanning multiple lines
using heredoc syntax.
EOD;

return $str = <<<'EOD'
Example of string
spanning multiple lines
using nowdoc syntax.
EOD;

return new class {};
return new class {
    public function foo() {
        return 1;
    }
};

return null;

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)['extra']['laravel']['dont-discover'] ?? [];

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)['extra']['laravel']['dont-discover'] ? [] : [];

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)['extra']['laravel']['dont-discover'] . 'string';

return 'string' . json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)['extra']['laravel']['dont-discover'];

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)->foo->bar->foo->bar;

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)->foo()->bar()->foo()->bar();

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)::foo()::bar()::foo()::bar();

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)->foo->bar->foo->bar . 'string';

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)->foo()->bar()->foo()->bar() . 'string';

return json_decode(
    file_get_contents($this->basePath . '/composer.json'),
    true
)::foo()::bar()::foo()::bar() . 'string';

return isset($veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongLine) ? true : false;

return eval('$var = "veryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongLine"; $var .= $var;');

return include 'foo.php' . ' MORE OUTPUT';
return include 'foo.php' . ' MORE OUTPUT' . ' MORE OUTPUT' . ' MORE OUTPUT' . ' MORE OUTPUT' . ' MORE OUTPUT' . ' MORE OUTPUT';

return new Foo($arg);
return new Foo($arg, 'string', 1024, $veryVeryVeryVeryVeryVeryLongLine, true, false);
return new Foo($arg, 'string', 1024, $veryVeryVeryVeryVeryVeryLongLine, true, false) . 'string';
return 'string' . new Foo($arg, 'string', 1024, $veryVeryVeryVeryVeryVeryLongLine, true, false);

return [];
return ['foo', 'bar'];
return ['key' => 'foo', 'other-key' => 'bar'];
return [
    'key' => 'foo',
    'other-key' => 'bar'
];
return ['foo', 'bar', 'VeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryVeryLongLine'];
return [
    'bootstrap' => '^4.0.0',
    'jquery' => '^3.2',
    'popper.js' => '^1.12'
] || $packages;
return $packages || [
    'bootstrap' => '^4.0.0',
    'jquery' => '^3.2',
    'popper.js' => '^1.12'
];

return $this->events->until(
    new Events\NotificationSending(
        $notifiable,
        $notification,
        $channel
    )
) !== false;

return false !== $this->events->until(
    new Events\NotificationSending(
        $notifiable,
        $notification,
        $channel
    )
);

return $this->getOptions()['endpoint'] ??
    'https://api.sparkpost.com/api/v1/transmissions';
return $this->getOptions()['endpoint'] ??
    'https://api.sparkpost.com/api/v1/transmissions' ??
    'https://api.sparkpost.com/api/v1/transmissions' ??
    'https://api.sparkpost.com/api/v1/transmissions';

return $this->channels[$name] ??
    with($this->resolve($name), function ($logger) use ($name) {
        return $this->channels[$name] = $this->tap(
            $name,
            new Logger($logger, $this->app['events'])
        );
    });

return $original instanceof self
    ? $original->{__FUNCTION__}()
    : $original;
return $veryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable instanceof self
    ? $veryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable->{__FUNCTION__}()
    : $veryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable;

return count($this->query()) > 0
    ? $this->url() .
        $question .
        Arr::query(array_merge($this->query(), $query))
    : $this->fullUrl() . $question . Arr::query($query);
return count($this->query()) > 0
    ? $this->url() .
        $veryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable .
        Arr::query(array_merge($this->query(), $query))
    : $this->fullUrl() .
        $veryVeryVeryVeryVeryVeryVeryVeryVeryLongVariable .
        Arr::query($query);

return $this->hasEncodingOption(JSON_PARTIAL_OUTPUT_ON_ERROR) &&
    in_array($jsonError, [
        JSON_ERROR_RECURSION,
        JSON_ERROR_INF_OR_NAN,
        JSON_ERROR_UNSUPPORTED_TYPE
    ]);

return in_array($jsonError, [
    JSON_ERROR_RECURSION,
    JSON_ERROR_INF_OR_NAN,
    JSON_ERROR_UNSUPPORTED_TYPE
]) && $this->hasEncodingOption(JSON_PARTIAL_OUTPUT_ON_ERROR);

return $this->guards[$name] ?? ($this->guards[$name] = $this->resolve($name));
return $this->guards[$veryVeryVeryLongVariable] ?? ($this->guards[$name] = $this->resolve($name));
return $this->guards[$name] ?? ($this->guards[$veryVeryVeryLongVariable] = $this->resolve($name));
return $this->guards[$name] ?? ($this->guards[$name] = $this->resolve($veryVeryVeryLongVariable));
return $this->guards[$veryVeryVeryLongVariable] ?? ($this->guards[$veryVeryVeryLongVariable] = $this->resolve($veryVeryVeryLongVariable));

return call_user_func($this->passwordValidator, $credentials) && $password === $confirm;
return $password === $confirm && call_user_func($this->passwordValidator, $credentials);

return is_string($this->recaller) && Str::contains($this->recaller, '|');
return is_string($this->recallerWithClass) && Str::contains($this->recaller, '|');
return Str::contains($this->recaller, '|') && is_string($this->recallerWithClass);

return in_array('odbc', $this->getAvailableDrivers()) && $config['odbc'] ?? null === true;
return in_array('odbc', $this->getAvailableDrivers()) && $config['odbc'] ??
    null === true;
return in_array('odbc', $this->getAvailableDrivers()) && ($config['odbc'] ?? null) === true;
return in_array('odbc', $this->getAvailableDrivers()) &&
    ($config['odbc'] ?? null) === true;
return ($map[$name] ?? $name).(! is_null($parameters) ? ':'.$parameters : '');
return ($map[$name] ?? $name) .
    (!is_null($parameters) ? ':' . $parameters : '');
