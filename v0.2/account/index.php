<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19.03.18
 * Time: 01:02
 */

include '../templates/sessionChecker.php';

?>

<!DOCTYPE html>
<html lang="en">

<?php

include '../templates/header.php';

?>

<body>

<?php

include '../templates/navbar.php';

if($isUserLoggedIn)
{
    include 'account.php';
}else{
    include 'login.php';
}


include '../templates/footer.php';

?>

</body>

</html>


