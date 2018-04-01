<?php
/**
 * Created by PhpStorm.
 * User: blacksquirrelz
 * Date: 4/1/18
 * Time: 15:34
 */

namespace http;

use \Exception;

class HTTPException extends Exception implements HTTPStatusCode
{
    use HTTPStatusHeader;

    protected $header;
    protected $statusCode;
    protected $body;

    public function __construct($statusCode = HTTPStatusCode::HTTP_400_BAD_REQUEST, $statusPhrase = null, $body = null)
    {
        $this->statusCode = $statusCode;
        $this->header = self::createHeader($statusCode, $statusPhrase);
        $this->body = $body;
    }

    public function getHeader($replaceHeader = true){
        self::setHeader($this->header, $this->statusCode, $replaceHeader);
        return $this->header;
    }

    public function getBody()
    {
        return $this->body;
    }
}