<?php
$users = [
    ['username' => 'user1', 'password' => 'password1'],
    ['username' => 'user2', 'password' => 'password2'],
];


session_start();
$error ='';

if (isset($_POST['submit'])) {
    $username = $_POST ['username'];?>
    <h1>
        <?php echo "Benvenut* $_SESSION ['username']" ?>
    </h1>
<?php }  else{   ?>
    <h1>
        Crea un username per poter accedere!
    </h1>
    <?php }?>



