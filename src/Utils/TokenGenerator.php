<?php

namespace App\Utils;

use Symfony\Component\HttpKernel\Exception\ServiceUnavailableHttpException;

/**
 * Class TokenGenerator
 * @package App\Utils
 */
class TokenGenerator
{

    /**
     * @return string
     */
    public function generateToken(): string
    {
        try {
            return rtrim(strtr(base64_encode(random_bytes(32)), '+/', '-_'), '=');
        } catch (\Throwable $throwable) {
            throw new ServiceUnavailableHttpException(null,"generateToken error.", $throwable);
        }
    }

}