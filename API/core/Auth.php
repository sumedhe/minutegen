<?php
// Authorization
session_start();
// $_SESSION['user'] = 'sumedhe5dms@gmail.com';
// var_dump($_SESSION);

// If Login
// if (isset($_GET['url'])){
//     if ($_GET['url'] == 'api/login'){
//         session_unset();
//         login();
//         if (authorize()){
//             respond('OK', 'LOGIN SUCCESS!');
//             die();
//         }
//     } else if ($_GET['url'] == 'api/logout'){
//         session_unset();
//         header("Location: https://accounts.google.com/logout");
//         die();
//     } else {
//         authorize();
//     }
// }

// Login
function login(){
    // Load login data to session
    $data = json_decode(file_get_contents("php://input"), true);
    if (isset($data['email'])){
        // $data['email'] = '';
        $_SESSION['user'] = $data['email'];
        $_SESSION['token'] = $data['token'];
        $_SESSION['data'] = array(
            'full_name' => $data['full_name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'profile_url' => $data['profile_url'],
            'client_id' => $data['client_id'],
        );
    }
    // var_dump($_SESSION);
}

// Authorize
function authorize(){
    if (isset($_SESSION['user'])){
        if (isset($_SESSION['authorized']) && $_SESSION['authorized']){
            // Valid user
            return true;
        } else {
            // Check
            $db = new DB();
            $user = $_SESSION['user'];
            $data = $db->execute("SELECT * FROM member_view WHERE email like '$user'", []);
            var_dump($data);

            if (count($data) ) {
                // Authorize
                $_SESSION['authorized'] = true;
                $_SESSION['member_type_name'] = $data[0]['member_type_name'];

                // UPDATE INFO
                $full_name = $_SESSION['data']['full_name'];
                $first_name = $_SESSION['data']['first_name'];
                $last_name = $_SESSION['data']['last_name'];
                $profile_url = $_SESSION['data']['profile_url'];
                $email = $_SESSION['user'];

                // $db->execute("UPDATE member SET full_name = '$full_name', first_name = '$first_name', last_name = '$last_name', profile_url = '$profile_url' WHERE email = '$email'", []);
                $x = $db->simpleExecute("UPDATE member SET full_name = '$full_name', first_name = '$first_name', last_name = '$last_name', profile_url = '$profile_url' WHERE email = '$email'");

                return true;
            } else {
                // Unautorized
                respond('UNAUTHORIZED', null, 'User not registered!');
                session_unset();
                die();
            }
        }
    } else {
        // Not logged in
        respond('UNAUTHORIZED', null, 'User not logged in');
        die();
    }
}
