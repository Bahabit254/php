<?php
    class User {
        public $username;
        private $email;
        public $role = 'member';

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->email added a new friend";
        }

        public function message() {
            return "$this->email sent a new message";
        }

        // getters
        public function getEmail() {
            return $this->email;
        }


        // setters
        public function setEmail($email) {
            if (strpos($email, '@') > -1) {
                $this->email = $email;
            }
        }

    
    }
    
    class AdminUser extends User {
        public $level;
        public $role = 'admin';

        public function __construct($username, $email, $level) {
            $this->level = $level;
            parent::__construct($username, $email);
        }
        
        public function message() {
            return "$this->email sent a new message";
        } // Trial on admin priveledges
    }

    $userOne = new User('brosnan', 'brosnan@example.com');
    $userTwo = new User('pierce', 'pierce@example.com');
    // $userThree = new User('mario', 'mario@example.com');
    $userFour = new AdminUser('bronco', 'bronco@example.com', 3);

    // echo $userOne->username . '<br>';
    // echo $userOne->email . '<br>'; >command will return error as email is private
    // echo $userOne->addFriend() . '<br>';
    // $userOne->setEmail('bruno@example.com');

    // echo $userFour->username . '<br>';
    // echo $userFour->getEmail() . '<br>';
    // echo $userFour->level . '<br>';

    echo $userOne->message() . '<br>';
    // echo $userFour->message() . '<br>';  Will throw an error
    // print_r(get_class_vars('User'));
    // print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP PROGRAMMING</title>
</head>
<body>
    
</body>
</html>