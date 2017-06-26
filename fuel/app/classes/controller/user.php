<?php
use \Model\user;

class Controller_User extends Controller
{
    public function action_list_users()
    {
        $model_user = new \Model\User();
        $list_users = $model_user->list_users();
        
        return View::forge('user/index', array('list_users' => $list_users));
    }
    
    public function get_delete_user()
    {
        $model_user = new \Model\User();
        $id = $_GET['id'];
        
        $del_result = $model_user->delete_user($id);
        
        Response::redirect('users');
    }
    
    public function get_douser()
    {
        $model_user = new \Model\User();
        
        // ADD
        if (isset($_GET['add']))
        {
            $fullname = $_GET['fullname'];
            $username = $_GET['username'];
            $password= $_GET['password'];

            // validate
            // Add to db
            // load page
        }
        
        
        //Response::redirect('users');
    }
}
