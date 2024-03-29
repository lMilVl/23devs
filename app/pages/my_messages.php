<?php include("app/pages/includes/header.php"); ?>
<?php
    if(isset($_SESSION['user']))
    {
        if(isset($user_messages) and !empty($user_messages)) {
            for($i = 0; $i < count($user_messages); $i++) { ?>
                <div class="bg-body-tertiary p-5 rounded mt-3">
                    <h1><?=htmlspecialchars($user_messages[$i]['title'], ENT_QUOTES, 'UTF-8')?></h1>
                    <h5>Author: <?=htmlspecialchars($user_messages[$i]['user_name'], ENT_QUOTES, 'UTF-8')?></h5>
                    <p class="lead"><?=htmlspecialchars($user_messages[$i]['short_desc'], ENT_QUOTES, 'UTF-8')?></p>
                    <a class="btn btn-lg btn-primary" href="message?id=<?=$user_messages[$i]['message_id']?>" role="button">Read more... &raquo;</a>
                    <a class="btn btn-lg btn-danger float-end m-1" href="delete?id=<?=$user_messages[$i]['message_id']?>" role="button">Delete</a>
                    <a class="btn btn-lg btn-warning float-end m-1" href="edit?id=<?=$user_messages[$i]['message_id']?>" role="button">Edit</a>
                </div>
            <?php }
        }
    }
    else
    {?>
            <h4>Please, <a href="login">sign in</a></h4>
    <?php } ?>


<?php include("app/pages/includes/footer.php"); ?>