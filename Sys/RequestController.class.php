<?php
/**
 * Fmkj Framework
 *
 * RequestController
 *
 */
namespace Sys\Controllers;

class Request
{
    private $post;
    private $get;

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
    }

    public function isPost()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            return true;
        } else {
            return false;
        }
    }

    public function isGet()
    {
        if ($_SERVER['REQUEST_METHOD'] == "GET") {
            return true;
        } else {
            return false;
        }
    }

    public function request()
    {
        $method = array_map('htmlentities', array_merge($this->post, $this->get));
        return $method;
    }

}