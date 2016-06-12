<?php

namespace Zelenin\Ddd\Core\Infrastructure\Service\IdentityGenerator;

use Zelenin\Ddd\Core\Domain\Object\DefaultObject;
use Zelenin\Ddd\Core\Domain\Service\IdentityGenerator\IdentityGenerator;
use Zelenin\Ddd\Core\Domain\Service\Service;

final class CombUuid4Generator extends DefaultObject implements IdentityGenerator, Service
{
    /**
     * @inheritdoc
     */
    public function generate()
    {
        $bytes = random_bytes(10);
        $bytes[6] = chr((ord($bytes[6]) & 0x0f) | 0x40);
        $bytes[8] = chr((ord($bytes[8]) & 0x3f) | 0x80);

        $hex = bin2hex($bytes) . str_pad(dechex($this->getTimestamp()), 6 * 2, '0', STR_PAD_LEFT);

        $fields = [
            'time_low' => substr($hex, 0, 8),
            'time_mid' => substr($hex, 8, 4),
            'time_hi_and_version' => substr($hex, 12, 4),
            'clock_seq_hi_and_reserved' => substr($hex, 16, 2),
            'clock_seq_low' => substr($hex, 18, 2),
            'node' => substr($hex, 20, 12),
        ];

        return vsprintf(
            '%08s-%04s-%04s-%02s%02s-%012s',
            $fields
        );
    }

    /**
     * @return string
     */
    private function getTimestamp()
    {
        $time = explode(' ', microtime(false));

        return $time[1] . substr($time[0], 2, 5);
    }
}
