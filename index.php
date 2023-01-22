<?php
    class User {
        public $username;
        public $email;

        public function __construct($username, $email) {
            $this->username = $username;
            $this->email = $email;
        }

        public function addFriend() {
            return "$this->username added a new friend";
        }

    }

    $userOne = new User('brosnan', 'brosnan@example.com');
    $userTwo = new User('pierce', 'pierce@example.com');
    $userThree = new User('mario', 'mario@example.com');

    echo $userOne->username . '<br>';
    echo $userOne->email . '<br>';
    echo $userOne->addFriend() . '<br>';

    // $userTwo->username = 'Fraiser';
    // $userTwo->email = 'fray@example.com';

    echo $userTwo->username . '<br>';
    echo $userTwo->email . '<br>';
    echo $userTwo->addFriend() . '<br>';

    echo $userThree->username . '<br>';
    echo $userThree->email . '<br>';
    echo $userThree->addFriend() . '<br>';

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