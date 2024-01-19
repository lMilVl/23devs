<?php include("app/pages/includes/header.php"); ?>

    <main>
        <?php

            if(isset($all_messages) and !empty($all_messages)) {
                $page = $_GET['page'] ?? 0;
                $count = 5;
                $page_count = count($all_messages) / $count;
                for($i = $page * $count; $i < ($page + 1) * $count; $i++) {
                    if(isset($all_messages[$i])) {?>
                    <div class="bg-body-tertiary p-5 rounded mt-3">
                        <h1><?=$all_messages[$i]['title']?></h1>
                        <h5>Author: <?=$all_messages[$i]['user_name']?></h5>
                        <p class="lead"><?=$all_messages[$i]['short_desc']?></p>
                        <a class="btn btn-lg btn-primary" href="message?id=<?=$all_messages[$i]['message_id']?>" role="button">Read more... &raquo;</a>
                    </div>
        <?php        }
                }

        ?>
    </main>
    <div class="pagination_rounded">
        <ul>
            <li><a href="?page=<?php echo $page-1?>" class="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i> Prev </a></li>
            <?php for($j = 0; $j < $page_count; $j++) {?>
                <li><a href="?page=<?php echo $j?>"><?=$j + 1?></a></li>
            <?php
            }
            ?>
            <li><a href="?page=<?php echo $page+1?>" class="next"> Next <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
        </ul>
   </div>
    <?php } ?>


<?php include("app/pages/includes/footer.php"); ?>
