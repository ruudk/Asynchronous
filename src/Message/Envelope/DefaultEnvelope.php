<?php

namespace SimpleBus\Asynchronous\Message\Envelope;

use Assert\Assertion;

class DefaultEnvelope implements Envelope
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $serializedMessage;

    public function __construct($type, $serializedMessage)
    {
        $this->setType($type);
        $this->setSerializedMessage($serializedMessage);
    }

    public function type()
    {
        return $this->type;
    }

    public function message()
    {
        return $this->serializedMessage;
    }

    private function setType($type)
    {
        Assertion::string($type);

        $this->type = $type;
    }

    private function setSerializedMessage($serializedMessage)
    {
        Assertion::string($serializedMessage);

        $this->serializedMessage = $serializedMessage;
    }
}