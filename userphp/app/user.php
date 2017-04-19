<?php
 require_once 'include/database.php';
 require_once 'include/functions.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Пользователи</title>
    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body>


                 <?php
                  $user = get_users();
                 ?>
                    <?php if(count($user) === 0): ?>
                     <?php else: ?>


                  <?php foreach($user as $users): ?>
                            <ul> <li><a href="/userdetail.php?id=<?php echo $users["id"]?>"><?php echo $users["namefamily"]?></a></li></ul>
                        <?php endforeach; ?>
                    <?php endif; ?>

             </div>
        </div>
    </div>
 </body>
</html>