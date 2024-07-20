<?php
declare(strict_types=1);

namespace App\Services\Api;

class TuyaApi
{
    private string $appId;

    public function __construct()
    {
        $this->appId = $_ENV['TUYA_APP_ID'];
    }

    /**
     *  Get the device controll
     * @return \tuyapiphp\Devices
     */
    protected function getDeviceControll(): \tuyapiphp\Devices
    {
        $tuya = new \tuyapiphp\TuyaApi([
            'accessKey' 	=> $_ENV['TUYA_ACCESS_KEY'],
            'secretKey' 	=> $_ENV['TUYA_SECRET_KEY'],
            'baseUrl'		=> $_ENV['TUYA_BASE_URL']
        ]);
        $token = $tuya->token->get_new( )->result->access_token;
        $devices = $tuya->devices($token);
        return $devices;
    }

    /**
     * 
     * @param mixed $device_id
     * @param mixed $payload
     * @return void
     */
    protected function postCommands($device_id, $payload)
    {
        return $this->getDeviceControll()->post_commands($device_id, ['commands' => [$payload]]);
    }
}
