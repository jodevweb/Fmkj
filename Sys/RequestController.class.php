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
    private $output_post = "";
    private $output_get = "";

    public function __construct()
    {
        $this->post = $_POST;
        $this->get = $_GET;
    }

    public function __destruct()
    {
        $HTMLoutput = '
            <div class="modal fade" id="Request" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Request</h4>
                  </div>
                  <div class="modal-body">
                    '.$this->getRequest().'
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                  </div>
                </div>
              </div>
            </div>';
        echo $HTMLoutput;
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

        foreach($this->post as $request_post) {
            $this->output_post .= '<kbd>' . $request_post . '</kbd><br />';
        }

        foreach($this->get as $request_get) {
            $this->output_get .= '<kbd>' . $request_get . '</kbd><br />';
        }

        return $method;
    }

    public function getRequest()
    {
        $out = 'POST:<br />' . $this->output_post . ' <br />GET:<br />' . $this->output_get;
        return $out;
    }

}