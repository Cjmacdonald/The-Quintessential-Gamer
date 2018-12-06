<?php
require 'includes/functions.php';
include_once 'config.php';

//Generates new ID/password hash
$newid = uniqid(rand(), false);
$newuser = $_POST['newuser'];
$newpw = password_hash($_POST['password1'], PASSWORD_DEFAULT);
$pw1 = $_POST['password1'];
$pw2 = $_POST['password2'];


if (isset($admin_email)) {

    $newemail = $admin_email;

} else {

    $newemail = $_POST['email'];

}
if ($pw1 != $pw2) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password fields must match</div><div id="returnVal" style="display:none;">false</div>';

} elseif (strlen($pw1) < 4) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Password must be at least 4 characters</div><div id="returnVal" style="display:none;">false</div>';

} elseif (!filter_var($newemail, FILTER_VALIDATE_EMAIL) == true) {

    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Must provide a valid email address</div><div id="returnVal" style="display:none;">false</div>';

} else {
    if (isset($_POST['newuser']) && !empty(str_replace(' ', '', $_POST['newuser'])) && isset($_POST['password1']) && !empty(str_replace(' ', '', $_POST['password1']))) {


        $a = new NewUserForm;
        //finishes storing new userdata in db
        $response = $a->createUser($newuser, $newid, $newemail, $newpw);

        if ($response == 'true') {

            echo '<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>'. $signupthanks .'</div><div id="returnVal" style="display:none;">true</div>';
            //Sends Verification email
            $m = new MailSender;
            $m->sendMail($newemail, $newuser, $newid, 'Verify');

        //if errors
        } else {
            mySqlErrors($response);

        }
    } else {
        echo 'An error occurred on the form... try again';
    }
};
