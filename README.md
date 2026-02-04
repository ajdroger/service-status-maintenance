# Service Status Maintenance

## Scopo dello Script

`status.php` è uno script PHP che restituisce lo stato di un servizio specificato. Lo script accetta un nome di servizio come argomento da linea di comando e genera un messaggio di stato formattato.

## Prerequisiti

- **PHP**: versione 7.4 o superiore
- **Strict Types**: Lo script utilizza `declare(strict_types=1)` per garantire type safety

## Comandi di Esecuzione

### Esecuzione Base (senza argomenti)

```bash
php status.php
```

**Output atteso:**
```
Servizio demo: pronto
```

### Esecuzione con Argomento 'api'

```bash
php status.php api
```

**Output atteso:**
```
Servizio api: pronto
```

### Esecuzione con Argomento 'database'

```bash
php status.php database
```

**Output atteso:**
```
Servizio database: pronto
```

### Esecuzione con Argomento Personalizzato

```bash
php status.php <nome-servizio>
```

**Output atteso:**
```
Servizio <nome-servizio>: pronto
```

## Dettagli Tecnici

- La funzione `serviceStatus(string $serviceName): string` accetta un nome di servizio e restituisce una stringa formattata
- Se non viene fornito alcun argomento, viene utilizzato il valore predefinito `'demo'`
- L'argomento viene letto tramite `$argv[1]`
- L'output include automaticamente un carattere di newline (`PHP_EOL`)

## Struttura del Codice

```php
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
```

## Manutenzione

Per qualsiasi modifica o aggiornamento dello script, seguire le best practice Git:
- Creare un branch dedicato per la feature/fix
- Testare le modifiche prima del merge
- Documentare le modifiche nel commit message
