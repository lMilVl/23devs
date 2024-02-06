<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | <?=WEB_TITLE?></title>
<link href="<?=ROOT?>/public/assets/bootstrap-5.3.2-dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="<?=ROOT?>/public/assets/css/reset.css/">
<link rel="stylesheet" href="<?=ROOT?>/public/assets/css/header.css">
    <link rel="stylesheet" href="<?=ROOT?>/public/assets/css/pagination.css">
</head>
<body>
<header class="p-3 mb-0 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="<?=ROOT?>" class="nav-link px-5 link-secondary">Home</a></li>
                <li><a href="<?=ROOT?>/my_messages" class="nav-link px-5 link-body-emphasis">Browse My</a></li>
                <li><a href="<?=ROOT?>/create" class="nav-link px-5 link-body-emphasis">Create Message</a></li>
            </ul>
            <?php
            if(!isset($_SESSION['user'])) { ?>

            <a href="<?=ROOT?>/login"><button type="button" class="btn btn-dark">Sign in</button></a>
            <?php }
            else { ?>
            <label class="p-2">Hello, <?php echo htmlspecialchars($_SESSION['user'][0]['user_name'], ENT_QUOTES, 'UTF-8');?>!</label>
            <div class="dropdown text-end">

                <a href="#" class="d-block link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                </a>
                <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="<?=ROOT?>/create">New message...</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="../logout">Sign out</a></li>
                </ul>
            </div>
            <?php } ?>
        </div>
    </div>
</header>
