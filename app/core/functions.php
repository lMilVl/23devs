<?php
function sing_up(User $user): void
{
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pswd'])) {
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $password = md5($_POST['pswd']);
        $res = $user->insert($user_name, $user_email, $password);
        if($res){
            $_SESSION['msg_signup'] = 'Registration completed successfully!';
            header('Location:' . ROOT . '/login');
        }
        else {
            $_SESSION['msg_signup'] =  'Try again!';
            header('Location:' . ROOT . '/login');
        }
        unset($_SESSION['user_name']);
        unset($_SESSION['error_login']);
    }
}

function login(User $user): void
{
    if(isset($_POST['email']) && isset($_POST['pswd'])) {
        $user_email = $_POST['email'];
        $password = md5($_POST['pswd']);
        $result = $user->select($user_email, $password);
        if($result){
            $_SESSION['user'] =  $result;
            header('Location:' . ROOT );
        }
        else {
            $_SESSION['error_login'] = 'Incorrectly entered email or password';
            header('Location:' . ROOT . '/login');
        }
        unset($_SESSION['msg_signup']);
    }
}
function get_all_messages(Message $message): string|bool|array
{
    return $message->select_all();
}

function get_user_messages(Message $message, int $user_id): string|bool|array
{
    return $message->select_user_msg($user_id);
}

function insert_message(Message $message): void
{
    if(isset($_SESSION['user']) and isset($_POST['msg_title']) and isset($_POST['msg_short_desc']) and isset($_POST['msg_full_desc']))
    {
        $title = $_POST['msg_title'];
        $short_desc = $_POST['msg_short_desc'];
        $full_desc = $_POST['msg_full_desc'];
        $user_id = $_SESSION['user'][0]['user_id'];
        if($message->insert($user_id, $title, $short_desc, $full_desc))
        {
            $_SESSION['create_msg'] = 'Message added successfully!';
            header('Location:' . ROOT . '/create' );
        }
    }
    else {
        $_SESSION['create_msg'] = 'Did not work out. Try again!';
        header('Location:' . ROOT . '/create' );
    }
}

function update_message(Message $message): void
{
    if(isset($_POST['msg_title']) and isset($_POST['msg_short_desc']) and isset($_POST['msg_full_desc']) and isset($_SESSION['edit_msg_id']))
    {
        $title = $_POST['msg_title'];
        $short_desc = $_POST['msg_short_desc'];
        $full_desc = $_POST['msg_full_desc'];
        $message_id = $_SESSION['edit_msg_id'];
        if($message->update($title, $short_desc, $full_desc, $message_id))
        {
            $_SESSION['edit_msg'] = 'Message update successfully!';
            header('Location:' . ROOT . '/edit?id=' . $message_id );
        }
    }
    else {
        $_SESSION['create_msg'] = 'Did not work out. Try again!';
        header('Location:' . ROOT . '/edit?id=' . $_SESSION['edit_msg_id']);
    }
}

function delete_message(Message $message): void
{
    if(isset($_SESSION['delete_msg_id']))
    {
        if($message->delete($_SESSION['delete_msg_id']))
        {
            header('Location:' . ROOT . '/my_messages');
        }
    }
}

function get_comments(Comment $comment)
{
    if(isset($_SESSION['msg_id'])) {
        return $comment->select($_SESSION['msg_id']);
    }
}

function insert_comment(Comment $comment): void
{
    if(isset($_POST['text_comm']))
    {
        $user_id = $_SESSION['user'][0]['user_id'];
        $message_id = $_SESSION['msg_id'];
        $text = $_POST['text_comm'];
        if($comment->insert($message_id, $user_id, $text))
        {
            header('Location:' . ROOT . '/message?id=' . $message_id );
        }
    }
}


$conn = new DbModel();
$user = new User($conn);
$message = new Message($conn);
$comment = new Comment($conn);

$all_messages = get_all_messages($message);

if(isset($_POST['sign_up']))
{
    sing_up($user);
}
if(isset($_POST['login']))
{
    login($user);
}

if(isset($_SESSION['user']))
{
    $user_messages = get_user_messages($message, $_SESSION['user'][0]['user_id']);
}

if(isset($_POST['create_msg']))
{
    insert_message($message);
}
if(isset($_POST['edit_msg']))
{
    update_message($message);
}

if(isset($_POST['post_comm']) and isset($_SESSION['user']))
{
    insert_comment($comment);
}
else if (isset($_POST['post_comm'])) {
    header('Location:' . ROOT . '/message?id=' . $_SESSION['msg_id'] );
}


