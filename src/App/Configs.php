<?php

$app->getContainer()->set('db_settings', function(){
    return (object)[
        "DB_NAME" => "tickfood",
        "DB_PASS" => "",
        "DB_CHARSET" => "utf8",
        "DB_USER" => "root",
        "DB_HOST" => "localhost",
        "TIME_ZONE" => "America/El_Salvador"
    ];
});