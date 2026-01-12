<?php

declare(strict_types=1);

namespace K10r\Codestyle;

final class PHP84 extends DefaultRules
{
    public static function getRules(): array
    {
        return array_merge(DefaultRules::getRules(), [
            '@PHP8x4Migration' => true,
        ]);
    }
}
