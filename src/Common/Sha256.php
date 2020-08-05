<?php

declare(strict_types=1);

namespace BrosSquad\LaravelCrypto\Common;

/**
 * Class Sha256
 *
 * @package BrosSquad\LaravelCrypto\Common
 */
class Sha256 extends Hash
{
    protected $algo = 'sha512/256';

    /**
     * @param  string  $data
     *
     * @return string
     */
    public function hash(string $data): string
    {
        return hash($this->algo, $data);
    }

    public function hashRaw(string $data): ?string
    {
        return hash($this->algo, $data, true);
    }
}
