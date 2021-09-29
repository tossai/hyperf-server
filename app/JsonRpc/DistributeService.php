<?php

namespace App\JsonRpc;

use Hyperf\RpcServer\Annotation\RpcService;

/**
 * @RpcService(name="DistributeService", protocol="jsonrpc-http", server="jsonrpc-http", publishTo="consul")
 */
class DistributeService implements DistributeServiceInterface
{
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

}