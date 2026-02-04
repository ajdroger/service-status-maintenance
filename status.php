<?php

declare(strict_types=1);

/**
 * Restituisce una stringa di stato del servizio.
 */
function serviceStatus(string $serviceName): string
{
    return "Servizio {$serviceName}: pronto";
}

$serviceName = $argv[1] ?? 'demo';
echo serviceStatus($serviceName) . PHP_EOL;