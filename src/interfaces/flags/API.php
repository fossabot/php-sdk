<?php

declare(strict_types=1);

namespace OpenFeature\interfaces\flags;

use OpenFeature\interfaces\common\Disposable;
use OpenFeature\interfaces\common\Metadata;
use OpenFeature\interfaces\hooks\HooksAdder;
use OpenFeature\interfaces\hooks\HooksGetter;
use OpenFeature\interfaces\provider\Provider;
use OpenFeature\interfaces\provider\ProviderAware;
use Psr\Log\LoggerAwareInterface;

interface API extends Disposable, EvaluationContextAware, HooksAdder, HooksGetter, LoggerAwareInterface, ProviderAware
{
    public function getProviderMetadata(): Metadata;

    public function getClient(?string $name): Client;

    public function clearHooks(): void;

    public function setClientProvider(string $clientName, Provider $provider): void;
}
