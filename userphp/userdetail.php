<?php
require 'app/include/database.php';
require 'app/include/functions.php';

?>
<?php
$userinfo = get_information($_GET['id']);
?>
<?php foreach ($userinfo as $info):?>

    <p><a href="#"></a></p>
            <?php
            echo $info['firstname']
            ?>
            <?php
            echo  $info['lastname']
            ?>

    <p> Логин:</p>
        <?php
        echo $info['username']
        ?>



    <div><p>Дата рождения:</p>
            <?php
            echo
            $info['dob']
            ?>
        </div>
    <br/>
    <ul>
        <li><p>Последнее обновление</p></i>
            <?php
            echo $info['updated']?>
        </li><br>
        <li><p>Последний раз в сети</p>
            <?php
            echo $info['lastlogin']
            ?>
        </li><br>
    </ul>
    <hr>
<?php
endforeach;
?>



