<?php
$_POST = json_decode(file_get_contents("php://input"), true);
echo var_dump($_POST);//берет данные с клиента, превращает их в строку и показывает снова на клиенте (response)

