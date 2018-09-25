<?php
/**
 * PHP Version 7.2
 *
 * @category Controllers
 * @package  App\Http\Controllers
 * @author   Thiago Mallon <thiagomallon@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.linkedin.com/in/thiago-mallon/
 */

/**
 * File namespace
 *
 * @subpackage Http\Controllers
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;    
use App\Events\PublicMessageSent;   
use App\Http\Requests\PublicMessageRequest; 
use Validator;

/**
 * Class FrontController
 *
 * @category Controllers
 * @package  App\Http\Controllers
 * @author   Thiago Mallon <thiagomallon@gmail.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://www.linkedin.com/in/thiago-mallon/
 */ 
class FrontController extends Controller
{
    /**
     * Public method __construct - Constructor method
     *
     * @method void __construct Constructor method
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Public method index - Index action
     *
     * @method object index Index action
     * @return object Returns the view object
     */
    public function index(): object
    {
        return view('front.home');
    }

    /**
     * Public method sendPublicMessage - Method dispatch the broadcasting event
     *
     * @method string sendPublicMessage Method dispatch the broadcasting event
     * @return string 
     */
    public function sendPublicMessage(): object
    {
        $validator = Validator::make(
        );
        if ($validator->fails()) {
            return response($validator->errors(), 200);
        } else {
            PublicMessageSent::dispatch(request('message'));
            return response(request('message'), 200);
        }
    }
}
