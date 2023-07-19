<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\provider;

use MyCLabs\Enum\Enum;

/**
 * Provider Status
 *
 * @see https://openfeature.dev/specification/types/#provider-status
 *
 * @method static ProviderState NOT_READY()
 * @method static ProviderState READY()
 * @method static ProviderState ERROR()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
final class ProviderState extends Enum
{
    private const NOT_READY = 'NOT_READY';
    private const READY = 'READY';
    private const ERROR = 'ERROR';
}
