<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

class NoticeService implements NoticeServiceInterface
{
    public function get(): array
    {
        return ['这是条公共告','这是公共2'];
    }
}