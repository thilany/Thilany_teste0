<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Projeto SCC - Sistema controle de corrida';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('bootstrap.min.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?= $this->Html->link('SCC', ['controller' => 'Motoristas', 'action' => 'index'], ['class' => 'navbar-brand']);  ?>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Motoristas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= $this->Html->link('Cadastrar ', ['controller' => 'Motoristas', 'action' => 'cadastrar']);  ?></li>
                            <li><?= $this->Html->link('Cadastrados ', ['controller' => 'Motoristas', 'action' => 'cadastrados']);  ?></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Passageiros <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= $this->Html->link('Cadastrar ', ['controller' => 'Passageiros', 'action' => 'cadastrar']);  ?></li>
                            <li><?= $this->Html->link('Cadastrados ', ['controller' => 'Passageiros', 'action' => 'cadastrados']);  ?></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Corridas <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><?= $this->Html->link('Cadastrar ', ['controller' => 'Corridas', 'action' => 'cadastrar']);  ?></li>
                            <li><?= $this->Html->link('Cadastrados ', ['controller' => 'Corridas', 'action' => 'cadastrados']);  ?></li>
                        </ul>
                    </li>
                </ul>               
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>   
    <?= $this->Html->script('/webroot/js/jquery-3.2.1.js'); ?>
    <?= $this->Html->script('/webroot/js/bootstrap.min.js'); ?>

<?= $this->Flash->render() ?>
<div class="container clearfix">
<?= $this->fetch('content') ?>
</div>

<footer>
</footer>
</div>

</body>
</html>
