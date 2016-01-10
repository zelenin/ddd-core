<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\MessageSerializer;

use Zelenin\Ddd\Core\Domain\Service\MessageSerializer\Message;
use Zelenin\Ddd\Core\Domain\Service\MessageSerializer\MessageSerializerData;
use Zelenin\Ddd\Core\Domain\Service\Serializer\Serializer;

final class MessageSerializer implements \Zelenin\Ddd\Core\Domain\Service\MessageSerializer\MessageSerializer
{
    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param Serializer $serializer
     */
    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param Message $message
     *
     * @return string
     */
    public function serialize(Message $message)
    {
        return $this->serializer->serialize($message->serialize());
    }

    /**
     * @param $string
     *
     * @return Message
     */
    public function deserialize($string)
    {
        $data = $this->serializer->deserialize($string);
        $messageSerializerData = MessageSerializerData::createFromArray($data);

        /** @var Message $className */
        $className = $messageSerializerData->className();

        return $className::deserialize($messageSerializerData->data());
    }
}
