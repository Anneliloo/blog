<?php
/**
 * Created by PhpStorm.
 * User: Anneli
 * Date: 17.09.14
 * Time: 18:20
 */

class users extends Controller {
    public $requires_auth = true;
    function index(){
        $this->users = get_all("SELECT * FROM user");
    }
    function view(){
        $user_id = $this->params[0];
        $this->users = get_first("SELECT * FROM user WHERE user_id = '$user_id'");
    }

} 