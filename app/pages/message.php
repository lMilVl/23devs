<?php include("app/pages/includes/header.php");?>
<?php if(!isset($_GET['id']) or !is_numeric($_GET['id']))
{
    header('Location:' . ROOT . '/404' );
}
    else {
        $id = $_GET['id'];
        $browse_message = false;
        for ($i = 0; $i < count($all_messages); $i++) {
            if ($id == $all_messages[$i]['message_id']) {
                $browse_message = $all_messages[$i];
                $_SESSION['msg_id'] = $_GET['id'];
            }
        }
        if ($browse_message) {
            $all_comments = get_comments($comment);
        }
        else {
            header('Location:' . ROOT . '/404' );
        }
    }
?>
<div class="row g-5">
    <div class="col-md-8">

        <article class="blog-post">
            <h1 class="display-5 link-body-emphasis m-2"><?=htmlspecialchars($browse_message['title'], ENT_QUOTES, 'UTF-8')?></h1>
            <p class="blog-post-meta m-2 fs-5 text-muted">Written by the author <strong><?=htmlspecialchars($browse_message['user_name'], ENT_QUOTES, 'UTF-8')?></strong></a></p>
            <hr>
            <p class="m-2 fs-3"><?=htmlspecialchars($browse_message['full_desc'], ENT_QUOTES, 'UTF-8')?></p>
        </article>
    </div>
</div>

<section style="background-color: #eee;">
    <div class="container my-5 py-5">
        <div class="row d-flex justify-content-start">
            <div class="col-md-12 col-lg-10 col-xl-8">
                <div class="card">
                    <?php
                    for ($i = 0; $i < count($all_comments); $i++) {
                    ?>
                    <div class="card-body">
                        <div class="d-flex flex-start align-items-center">
                            <div>
                                <h6 class="fw-bold text-primary mb-1"><?=htmlspecialchars($all_comments[$i]['user_name'], ENT_QUOTES, 'UTF-8')?></h6>
                            </div>
                        </div>

                        <p class="mt-1 mb-2 pb-2">
                            <?=htmlspecialchars($all_comments[$i]['text'], ENT_QUOTES, 'UTF-8')?>
                        </p>
                    </div>
                    <?php } ?>

                    <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                        <form utocomplete="off" action="/app/core/function.php" method="post">
                            <div class="d-flex flex-start w-100">
                                <div class="form-outline w-100">
                                <textarea class="form-control" id="textAreaExample" rows="4" style="background: #fff;" name="text_comm" required></textarea>
                                    <label class="form-label" for="textAreaExample">Comment</label>
                                </div>
                            </div>
                            <button type="submit" class="float-end mt-2 pt-1 btn btn-primary btn-sm" name="post_comm">Post comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("app/pages/includes/footer.php"); ?>
