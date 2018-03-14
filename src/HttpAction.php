<?php
/**
 * Created by PhpStorm.
 * User: gde
 * Date: 14/03/2018
 * Time: 09:04
 */

namespace ObjectivePHP\Middleware\HttpAction;


use Psr\Http\Message\ResponseInterface;
use Psr\Http\Server\MiddlewareInterface;
use Zend\Diactoros\Response;

/**
 * Class HttpAction
 * @package ObjectivePHP\Middleware\HttpAction
 */
abstract class HttpAction implements MiddlewareInterface
{

    /**
     * @param $uri
     * @param array $headers
     * @param int $code
     * @return Response\RedirectResponse
     */
    public function redirect($uri, array $headers = [], $code = 302) : ResponseInterface
    {
        return new Response\RedirectResponse($uri, $code, $headers);
    }

}