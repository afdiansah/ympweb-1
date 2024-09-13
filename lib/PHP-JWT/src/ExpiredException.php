<?php

namespace Firebase\JWT;

interface JWTExceptionWithPayloadInterface
{
    public function setPayload(object $payload): void;
    public function getPayload(): object;
}

class ExpiredException extends \UnexpectedValueException implements JWTExceptionWithPayloadInterface
{
    private object $payload;

    public function setPayload(object $payload): void
    {
        $this->payload = $payload;
    }

    public function getPayload(): object
    {
        return $this->payload;
    }
}
