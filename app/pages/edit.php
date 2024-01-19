<?php include("app/pages/includes/header.php"); ?>

<main class="m-5">
    <?php
        if(!isset($_GET['id']))
        {?>
            <h4>Not found message!</h4>
    <?php }
        else {
            $id = $_GET['id'];
            $edit_message = array();
            for($i = 0; $i < count($user_messages); $i++) {
                if ($id == $user_messages[$i]['message_id']) {
                    $edit_message = $user_messages[$i];
                    $_SESSION['edit_msg_id'] = $id;
                }
            }
    ?>
    <h4>Create the message!</h4>
    <h6 style="color: #0a53be"><?= $_SESSION['edit_msg'] ?? ''?></h6>
    <form utocomplete="off" action="/app/core/function.php" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">Title message</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="msg_title" value="<?=$edit_message['title']?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Short description</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="msg_short_desc" value="<?=$edit_message['short_desc']?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message text</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="msg_full_desc" ><?=$edit_message['full_desc']?></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2" name="edit_msg">Confirm</button>
    </form>
    <?php } ?>
</main>

<?php include("app/pages/includes/footer.php"); ?>
<?php if(isset($_SESSION['edit_msg'])) unset($_SESSION['edit_msg']); ?>
