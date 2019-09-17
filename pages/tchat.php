<?php

if (!isset($_GET['user'])|| isLogged() == 0 || user_exist() != 1)
{
    header('Location:index.php?page=home');
}

$_SESSION['user'] = $_GET['user'];


foreach(get_user() as $user)
{
    ?>
        <h2 class="header"><?= $user->name; ?></h2>
        
        <div class="messages-box">
            <div class="message message-membre"> Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum iusto tempore dolore nam, consequatur unde. Laborum ratione tempora, expedita quis est provident dolores sit magni? Voluptate officiis dolorem temporibus!</div>
            <div class="message message-user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sapiente nisi excepturi laboriosam alias odio architecto corporis amet assumenda, neque quo tenetur blanditiis porro nemo mollitia veniam iste fugiat. Neque.</div>
            <div class="message message-membre"> Lorem ipsum dolor sit amet consectetur adipisicing elit. A rerum iusto tempore dolore nam, consequatur unde. Laborum ratione tempora, expedita quis est provident dolores sit magni? Voluptate officiis dolorem temporibus!</div>
            <div class="message message-user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sapiente nisi excepturi laboriosam alias odio architecto corporis amet assumenda, neque quo tenetur blanditiis porro nemo mollitia veniam iste fugiat. Neque.</div>
            <div class="message message-user">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sapiente nisi excepturi laboriosam alias odio architecto corporis amet assumenda, neque quo tenetur blanditiis porro nemo mollitia veniam iste fugiat. Neque.</div>

        </div>

        <div class="bottom">
            <div class="field field-area">
                <label for="message" class="field-label">Votre message</label>
                <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
            </div>
            <button type="submit" id="send" class="send">
                <span><img src="https://img.icons8.com/material/20/000000/filled-sent.png"></span>
            </button>
        </div>
    <?php
}

?>



<style>
.messages-box{
    position:relative;
    background-color: #fff;
    margin-bottom: 95px;
}

.messages-box .message{
    padding: 3px 8px;
    margin: 6px 0;
    border-radius: 12px;
    max-width: 55%;
    display: inline-block;
    min-height: 25px;
    font-family: Arial, Helvetica, sans-serif;
}

.messages-box .message.message-membre{
    background-color: #3498db;
    float: right;
}

.messages-box .message.message-user{
    background-color: #bdc3c7;
    float: left;
}
</style>