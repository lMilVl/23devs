<?php include("app/pages/includes/header.php"); ?>
<?php
    if(isset($_SESSION['user']))
    { ?>
    <main class="m-5">
        <h4>Create the message!</h4>
        <h6 style="color: #0a53be"><?= $_SESSION['create_msg'] ?? ''?></h6>
        <form utocomplete="off" action="/app/core/function.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlInput1">Title message</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="msg_title" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Short description</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="msg_short_desc" required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message text</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="msg_full_desc" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-2" name="create_msg">Confirm</button>
        </form>
    </main>
        <?php } else {?>
        <h4>Please, <a href="login">sign in</a></h4>
    <?php } ?>

<?php include("app/pages/includes/footer.php"); ?>
<?php if(isset($_SESSION['create_msg'])) unset($_SESSION['create_msg']); ?>
