<?php
declare(strict_types=1);
namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController(prefix="admin")
 */
Class UserController
{

    public function index(RequestInterface $request){

        $id = $request->input('id',1);
        return (string) $id;
    }

    public function hello(){

    }
}