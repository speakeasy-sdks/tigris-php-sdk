<?php

declare(strict_types=1);

namespace tigris\core\Utils;

use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\JsonSerializationVisitor;

class EnumHandler implements SubscribingHandlerInterface
{
    /** @phpstan-ignore-next-line */
    public static function getSubscribingMethods(): array
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'enum',
                'method' => 'serializeEnumToJson',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'enum',
                'method' => 'deserializeEnumFromJson',
            ],
        ];
    }

    /** @phpstan-ignore-next-line */
    public function serializeEnumToJson(JsonSerializationVisitor $visitor, \BackedEnum $data, array $type, Context $context): string|int
    {
        return $data->value;
    }

    /** @phpstan-ignore-next-line */
    public function deserializeEnumFromJson(JsonDeserializationVisitor $visitor, mixed $data, array $type, Context $context): mixed
    {
        $type = $type['params'][0]['name'] ?? null;
        if (null === $type || !is_a($type, \BackedEnum::class, true)) {
            throw new \LogicException();
        }

        return $type::from($data);
    }
}
