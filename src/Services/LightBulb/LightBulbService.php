<?php
declare(strict_types=1);

namespace App\Services\LightBulb;

use App\Services\LightBulb\Entities\LightBulb;

class LightBulbService
{
    /**
     */
    public function __construct(protected LightBulb $lightBulb){}


    public function on()
    {
        return $this->lightBulb->setOn();
    }

    public function off()
    {
        return $this->lightBulb->setOff();
    }

    public function getStatus()
    {
        return $this->lightBulb->getStatus();
    }

    public function setBrightness(int $value)
    {
        return $this->lightBulb->setBrightness($value);
    }
}