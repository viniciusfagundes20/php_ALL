<?php 

$url = $this->data['URL'];

if(!empty($url)){

    $query = "SELECT * FROM sts_controllers WHERE controller = :controller LIMIT 1";

    $params = "controller=".$url;

    $exec = new \Sts\Models\helper\StsRead();

    $exec->fullRead($query, $params);
    $header = $exec->getResultado();

    extract($header[0]);

    $css = explode("&", $css);
    $js = explode("&", $js);

} 
 ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?= isset($title) ? $title : "default"; ?></title>
    <?php foreach ($css as $value) { ?> 
        <link rel="stylesheet" href="<?= URL ?>assets/css/<?= $value ?>">
    <?php } ?>

    </head>
    <body>