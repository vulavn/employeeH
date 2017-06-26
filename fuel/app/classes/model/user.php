<?php
namespace Model;
class User extends \Model
{
    public function list_users()
    {
        return $result = \DB::query("SELECT * FROM users")->execute();
    }
    
    public function delete_user($id)
    {
        return $result = \DB::delete('users')->where('id', '=', $id)->execute();
    }
    

}
