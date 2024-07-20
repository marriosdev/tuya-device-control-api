<?php
declare(strict_types=1);

namespace App\Services\LightBulb\Entities;

use App\Services\Api\TuyaApi;

final class LightBulb extends TuyaApi
{
    private string $id;

    /**
     * 
     */
    public function __construct()
    {
        $this->id = $_ENV['TUYA_LIGHT_BULB_ID'];
    }

    /**
     * 
     */
    public function setOff()
    {
        $payload = ['code' => 'countdown_1', 'value' => 0];
        return $this->postCommands($this->id, $payload);
    }

    /**
     * 
     */
    public function setOn()
    {
        $payload = ['code' => 'countdown_1', 'value' => 1];
        return $this->postCommands($this->id, $payload);
    }

    /**
     * 
     */
    public function setBrightness(int $value)
    {
        $payload = ['code' => 'bright_value_v2', 'value' => $value];
        return $this->postCommands($this->id, $payload);
    }

    /**
     * 
     */
    public function setColor(int $value)
    {
        $payload = ['code' => 'colour_data', 'value' => $value];
        return $this->postCommands($this->id, $payload);
    }

    /**
     * 
     */
    public function setMode(int $value)
    {
        $payload = ['code' => 'work_mode', 'value' => $value];
        return $this->postCommands($this->id, $payload);
    }

    /**
     * 
     */
    public function getStatus()
    {
        return $this->getDeviceControll()->get_status($this->id);
    }
}
