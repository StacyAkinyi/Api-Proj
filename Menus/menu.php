<?php 
class menu{
    public function main_menu(){
        ?>
        <div class="topnav">
            
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
            <?php $this->main_right_menu();?>
        </div>
        <?php    

            
    }
    public function main_right_menu(){
        ?>
        <div class="topnav-right">
            <a href="">Login</a>
            <a href="">Register</a>
        </div>
        <?php
    }
}