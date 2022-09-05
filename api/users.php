<?php
include_once "../base.php";
$users=$User->all();
foreach($users as $user){
    if($user['acc']!=='admin'){
        echo "<tr>";
        echo "<td>".$user['acc']."</td>";
        echo "<td>".str_repeat("*",strlen($user['pw']))."</td>";
        echo "<td><input type='checkbox' name='del[]' value='{$user['id']}'></td>";
        echo "</tr>";
    }
}
?>