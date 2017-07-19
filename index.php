<?php
/**
 * Created by PhpStorm.
 * User: huy
 * Date: 7/19/17
 * Time: 4:04 PM
 */
 require 'database.php';
 $query = "select * from tblAccount";
 $listAccount = $conn->query($query);
 $listAccount= $listAccount->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php foreach ($listAccount as $account) { ?>
        <tr>
            <td><?= $account['_username']?></td>
            <td><?= $account['_password']?></td>
        </tr>
    <?php  } ?>
</body>
</html>
