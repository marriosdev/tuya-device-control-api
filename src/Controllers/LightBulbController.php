<?php
declare(strict_types=1);

namespace App\Controllers;

use App\Services\LightBulb\LightBulbService;
use MareaTurbo\Request;
use MareaTurbo\Route;

final class LightBulbController
{
    public function __construct(
        protected LightBulbService $lightBulbService
    ){}

    #[Route('/lightbulb/off', 'GET', 'off')]
    public function off()
    {
        var_dump($this->lightBulbService->off());
    }

    #[Route('/lightbulb/on', 'GET', 'on')]
    public function on()
    {
        var_dump($this->lightBulbService->on());
    }

    #[Route('/lightbulb/status', 'GET', 'status')]
    public function status()
    {
        var_dump($this->lightBulbService->getStatus());
    }

    #[Route('/lightbulb/brightness/{value}', 'GET', 'brightness')]
    public function brightness(Request $request)
    {
        $value = (int) $request->only(['value'])['value'];

        var_dump($this->lightBulbService->setBrightness($value));
    }
}
