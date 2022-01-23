<?php
session_start();
class Auth
{
    public $users;
    public $dataPath;

    public function __construct()
    {
        $this->dataPath = "user.json";
        $this->users = $this->loadData();

    }

    public function login($request)
    {
        $email = $request["email"];
        $password = $request["password"];
        foreach ($this->users as $user) {
            if ($user->email == $email) {
                if ($user->password == $password) {
                    $_SESSION["user"] = $user;
                    header("Location:index.php");
                }
            }
        }

    }

    public function logout(){
        //unset($_SESSION['user'])--xóa 1 cái
        session_destroy();// xóa toàn bộ
        header("Location:login.php");
    }

    public function loadData()
    {
        $dataJson = file_get_contents($this->dataPath);
        return json_decode($dataJson);
    }

}