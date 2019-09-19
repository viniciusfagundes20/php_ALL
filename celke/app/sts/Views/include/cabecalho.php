<?php

$controller = $this->Dados['url'];

$object = new \Sts\models\stsHeader();
$this->Dados['Resultado'] = $object->listener($controller);

unset($object);

$object = new \Sts\models\stsSeo();
$this->Dados['Seo'] = $object->index($this->Dados['Resultado'][0]['id']);

echo "<br><br><br>";

var_dump($this->Dados['Resultado'][0]['id']);

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php if (!empty($this->Dados['Resultado'][0])) {
        extract($this->Dados['Resultado'][0]); ?>

        <title><?= $titulo ?></title>
        <meta name="robots" content="<?= $tipo ?>">
        <meta name="keywords" content="<?= $keywords ?>">
        <meta name="author" content="<?= $author ?>">
        <meta name="description" content="<?= $description ?>">
        <link rel="icon" href="<?= URL.'assets/imagens/icone/'.$imagem ?>">
        <meta property='og:site_name' content='Celke'>
        <meta property='og:locale' content='pt_BR'>
        <meta property='fb:admins' content='100009416086586'>
        <meta property='og:url' content='<?= URL.$controller ?>'>
        <meta property='og:title' content='<?= $titulo ?>'>
        <meta property='og:description' content='<?= $description ?>'>
        <meta property='og:image' content='<?= URL."assets/imagens/icone/favicon.ico" ?>'>
        <meta property='og:type' content='website'>
        <meta property='og:image:width' content='1200'>
        <meta property='og:image:height' content='630'>
        <meta name='twitter:site' content='@celke'>
        <meta name='twitter:card' content='summary_large_image'>
        <meta name='twitter:title' content='<?= $titulo ?>'>
        <meta name='twitter:description' content='<?= $description ?>'>
        <meta name='twitter:image:src' content='<?= URL."assets/imagens/icone/favicon.ico" ?>'>
        <meta itemprop='name' content='Celke - <?= $titulo ?>'>
        <meta itemprop='description' content='<?= $description ?>'>
        <meta itemprop='image' content='<?= URL."assets/imagens/icone/favicon.ico" ?>'>
        <meta itemprop='url' content='<?= URL.$controller ?>'>

    <?php } ?> 

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>assets/css/personalizado.css">
</head>
<body>