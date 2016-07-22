<?php
    if (empty($_POST[para]) or empty($_POST[texto]) or empty($_POST[asunto])){
        echo "Faltan datos";
    } else {
        mail($_POST[para],$_POST[asunto],$_POST[texto]);
        echo "Todo bien";
    }
