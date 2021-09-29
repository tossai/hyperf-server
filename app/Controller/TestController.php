<?php
declare(strict_types=1);

namespace App\Controller;

use Hyperf\HttpServer\Contract\RequestInterface;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * @Controller()
 */
Class TestController
{
    /**
     * @RequestMapping(path="/test-get", methods="get,post")
     */
    public function index(RequestInterface $request)
    {
        $id = $request->input('id',1);
        return (string)$id;
    }
    /**
     * @RequestMapping(path="test-post", methods="post")
     */
    public function test(RequestInterface $request)
    {
        return "hello world";
    }

    /**
     * @RequestMapping(path="distribute-customer-query",method="get")
     */
    public function distributeCustomerInit()
    {

    }

}