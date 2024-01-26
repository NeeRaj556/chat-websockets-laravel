<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use Ratchet\Server\IoServer;

use Ratchet\Http\HttpServer;

use Ratchet\WebSocket\WsServer;

use React\EventLoop\Factory;

use App\Http\Controllers\SocketController;

class WebSocketServer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'websocket:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //return 0;

        $server = IoServer::factory(
            new HttpServer(
                new WsServer(
                    new SocketController()
                )
            ),
            8090
        );

        $server->run();
    }
}
