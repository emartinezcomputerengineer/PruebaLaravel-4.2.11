<?php 
 
class Login extends BaseController {
 
    public function postUser()
    {
        
        $userdata= array(
            'email' => Input::get('email'),
            'password' => Input::get('password')
        );
        
        if(Auth::attempt($userdata))
        {
            //we are now logged in, go to admin
//            return "Usuario logeado correctamente.";
            return Redirect::to('products/list');
            
        }else{
            return Redirect::to('/')->with('msg', 'Usuario logeado Incorrectamente');
        }
        
        
    }
 
}
