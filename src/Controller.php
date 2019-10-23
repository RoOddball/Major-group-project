

<?php
//require_once 'MainController.php';
require_once __DIR__ . '/../src/User.php';
class Controller
{
    public function run()
    {
        session_start();
        $action = filter_input(INPUT_GET, 'action');

        //$mainController = new MainController();


        switch ($action) {


            case 'register':
                require_once __DIR__ . '/../templates/RegisterScreen.php';

                break;

            case 'processRegister':

                $registerUser = new User();
                $registerUser->Register();
                break;

            case 'login':
                require_once __DIR__ . '/../templates/LoginScreen.php';

                break;

            case 'processLogin':

                $loginUser = new User();
                $loginUser->Login();
                break;

            case 'logout':
                require_once __DIR__ . '/../templates/LogoutScreen.php';

                break;

            case 'firstScreen':
                require_once __DIR__ . '/../templates/FirstScreen.php';

                break;

            case 'home':

                if (isset($_SESSION['regularUser']) && $_SESSION['regularUser']==true)
                {

                    require_once __DIR__ . '/../templates/HomePage.php';

                }
                else
                {

                    require_once __DIR__ . '/../templates/DisplayError.php';
                }


                break;


            default:
                require_once __DIR__ . '/../templates/FirstScreen.php';
        }
    }
}