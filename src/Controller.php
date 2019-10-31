

<?php
//require_once 'MainController.php';
require_once __DIR__ . '/../src/User.php';
require_once __DIR__ . '/../src/SessionManager.php';
class Controller
{
    public function run()
    {
        session_start();
        $action = filter_input(INPUT_GET, 'action');

        $eventid = filter_input(INPUT_GET, 'eventid');

        $fighterid = filter_input(INPUT_GET, 'fighterid');

        $session = new SessionManager();



        //$mainController = new MainController();


        if (!isset($eventid) && !isset($fighterid) ) {
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

                    if ($session->isLoggedIn()) {

                        require_once __DIR__ . '/../templates/HomePage.php';

                    } else {

                        require_once __DIR__ . '/../templates/DisplayError.php';
                    }


                    break;

                case 'archive':

                    if ($session->isLoggedIn()) {

                        require_once __DIR__ . '/../templates/DisplayArchive.php';

                    } else {

                        require_once __DIR__ . '/../templates/DisplayError.php';
                    }


                    break;

                case 'search':

                    if ($session->isLoggedIn()) {

                        require_once __DIR__ . '/../templates/DisplaySearchResult.php';

                    } else {

                        require_once __DIR__ . '/../templates/DisplayError.php';
                    }


                    break;

                case 'rankings':

                    if ($session->isLoggedIn()) {

                        require_once __DIR__ . '/../templates/DisplayRankings.php';

                    }

                    else {

                        require_once __DIR__ . '/../templates/DisplayError.php';
                    }


                    break;


                default:
                    require_once __DIR__ . '/../templates/FirstScreen.php';
            }


        }

        elseif (isset($eventid))
        {
            if ($session->isLoggedIn()) {


                require_once __DIR__ . '/../templates/DisplayFightCard.php';

            }
            else {

                require_once __DIR__ . '/../templates/DisplayError.php';
            }

        }

        elseif (isset($fighterid))
        {
            if ($session->isLoggedIn()) {


                require_once __DIR__ . '/../templates/DisplayFighterInfo.php';

            }
            else {

                require_once __DIR__ . '/../templates/DisplayError.php';
            }

        }

    }
}