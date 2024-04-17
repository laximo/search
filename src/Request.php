<?php

namespace Laximo\Search;


class Request
{
    /**
     * @var string
     */
    private $controller;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $method;

    /**
     * @var array
     */
    private $params;

    /**
     * @var array
     */
    private $body;

    /**
     * @var string
     */
    private $path;

    private $filePath;

    private $fileName;

    private $returnType;

    public function __construct(?string $returnType, string $method, string $controller, string $action, array $params, $body, $filePath, $fileName)
    {
        $this->returnType = $returnType;
        $this->method = $method;
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
        $this->body = $body ?: [];
        $this->path = $method . ':' . $controller . ($action ? '/' . $action : '');
        $this->filePath = $filePath;
        $this->fileName = $fileName;

        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getAction(): string
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getController(): string
    {
        return $this->controller;
    }

    /**
     * @return array
     */
    public function getParams(): array
    {
        return $this->params;
    }

    /**
     * @return array
     */
    public function getBody(): array
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     */
    public function setPath(string $path)
    {
        $this->path = $path;
    }

    public function getFilePath()
    {
        return $this->filePath;
    }

    /**
     * @return mixed
     */
    public function getFileName()
    {
        return $this->fileName;
    }

    /**
     * @param mixed $fileName
     */
    public function setFileName($fileName)
    {
        $this->fileName = $fileName;
    }

    /**
     * @return string
     */
    public function getReturnType(): ?string
    {
        return $this->returnType;
    }
}
