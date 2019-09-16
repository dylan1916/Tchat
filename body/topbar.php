<div class="topbar">
    <a href="index.php" class="app-name">Tchat</a>
    <span class="menu">

        <?php

            if (isLogged() == 1){
            ?>
                <a href="index.php?page=membres" class="<?php echo ($page =='membres') ? 'active' : ''; ?>">Membres</a>
                <a href="index.php?page=logout">Déconnexion</a>
            <?php

            }else{
            ?>
                <a href="index.php?page=register" class="<?php echo ($page =='register') ? 'active' : ''; ?>">S'inscrire</a>
                <a href="index.php?page=sign"  class="<?php echo ($page =='sign') ? 'active' : ''; ?>">Se connecter</a>
            <?php
            }
        ?>
        
    </span>
</div>


<style>

.topbar .menu a.active{
    background-color: #2c3e50;
}
</style>