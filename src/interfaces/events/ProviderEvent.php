<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\events;

use MyCLabs\Enum\Enum;

/**
 * Provider events
 *
 * @see https://openfeature.dev/specification/types/#provider-events
 *
 * @method static ProviderEvent READY()
 * @method static ProviderEvent ERROR()
 * @method static ProviderEvent CONFIGURATION_CHANGED()
 * @method static ProviderEvent STALE()
 *
 * @extends Enum<string>
 *
 * @psalm-immutable
 */
final class ProviderEvent extends Enum
{
    private const READY = 'PROVIDER_READY';
    private const ERROR = 'PROVIDER_ERROR';
    private const CONFIGURATION_CHANGED = 'PROVIDER_CONFIGURATION_CHANGED';
    private const STALE = 'PROVIDER_STALE';
}
