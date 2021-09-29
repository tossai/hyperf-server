<?php
declare(strict_types=1);

namespace App\Controller;

use Hyperf\Contract\OnCloseInterface;
use Hyperf\Contract\OnMessageInterface;
use Hyperf\Contract\OnOpenInterface;
use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Server;
use Swoole\Websocket\Frame;
use Swoole\WebSocket\Server as WebSocketServer;

class WebSocketController implements OnMessageInterface,OnOpenInterface,OnCloseInterface{

    /**
     * @param Response|WebSocketServer $server
     */
    public function onClose($server, int $fd, int $reactorId): void
    {
        // TODO: Implement onClose() method.
        var_dump('closed');
    }

    /**
     * @param Response|WebSocketServer $server
     */
    public function onMessage($server, Frame $frame): void
    {
        // TODO: Implement onMessage() method.
        $server->push($frame->fd, 'Recv: ' . $frame->data);
    }

    /**
     * @param Response|WebSocketServer $server
     */
    public function onOpen($server, Request $request): void
    {
        $server->push($request->fd, 'linked established');
    }
}