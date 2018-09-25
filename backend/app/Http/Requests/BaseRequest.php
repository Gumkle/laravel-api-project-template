<?php
namespace App\Http\Requests;
use Illuminate\Http\Request;

/**
 * Class developed for possibility of receiving exceptions in JSONs in the API
 * @package App\Http\Requests
 */
class BaseRequest extends Request
{
    public function expectsJson()
    {
        if($this->segment(1) == 'api')
            return true;
        else
            return parent::expectsJson();
    }
    public function wantsJson()
    {
        if($this->segment(1) == 'api')
            return true;
        else
            return parent::wantsJson();
    }
}