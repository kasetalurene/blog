<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?= BASE_URL ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.png">

    <title><?= PROJECT_NAME ?></title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/components/bootstrap/css/bootstrap.css?<?=COMMIT_HASH?>" rel="stylesheet">

    <!-- jQuery UI core CSS -->
    <link href="vendor/components/jqueryui/themes/base/jquery-ui.css?<?=COMMIT_HASH?>" rel="stylesheet">

    <!-- Site core CSS -->
    <link href="assets/css/main.css?<?=COMMIT_HASH?>" rel="stylesheet">

    <style>
        body {
            padding-top: 70px;
        }
    </style>


    <!-- jQuery -->
    <script src="vendor/components/jquery/jquery.js?<?=COMMIT_HASH?>"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js?<?=COMMIT_HASH?>"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js?<?=COMMIT_HASH?>"></script>
    <![endif]-->


</head>

<body>

<!-- Fixed navbar -->
<!-- navbar with dropdown -->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#"><?= PROJECT_NAME ?></a>
        <ul class="navbar-nav">
            <li class="nav-item <?= $controller == 'posts' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo BASE_URL;?>">Posts</a></li>
            <li class="nav-item <?= $controller == 'tags' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo BASE_URL;?>tags">Tags</a></li>
            <li class="nav-item <?= $controller == 'users' ? 'active' : '' ?>"><a class="nav-link" href="<?php echo BASE_URL;?>users">Users</a></li>
            <li class="nav-item <?= $controller == 'halo' ? 'active' : '' ?>"><a class="nav-link" href="halo">Halo admin</a></li>
            <!-- dropdown list item start-->
            <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><?= $_SESSION['language'] ?></a>
                <div class="dropdown-menu">
                    <?php foreach ($supported_languages as $language): ?>
                        <a href="<?= $controller ?>?language=<?= $language ?>"
                           class="<?= $language == $_SESSION['language'] ? 'active' : '' ?>"><?= $language ?></a>
                    <?php endforeach ?>
                </div>
            </li>
            <!-- dropdown list item end -->
            <li title="<?=__('Log out')?> <?= $auth->name ?>" class="nav-item"><a class="nav-link" href="logout"><span class="glyphicon glyphicon-log-out" aria-hidden="true">Log Out</a></li>
        </ul>
    </div>
</nav>
<div class="container">

    <!-- Main component for a primary marketing message or call to action -->
    <?php if (!file_exists("views/$controller/{$controller}_$action.php")) error_out('The view <i>views/' . $controller . '/' . $controller . '_' . $action . '.php</i> does not exist. Create that file.'); ?>
    <?php @require "views/$controller/{$controller}_$action.php"; ?>

</div>
<!-- /container -->

<?php require 'templates/partials/error_modal.php'; ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="vendor/components/bootstrap/js/bootstrap.js?<?=COMMIT_HASH?>"></script>
<script src="vendor/components/jqueryui/jquery-ui.js?<?=COMMIT_HASH?>"></script>
<script src="assets/js/main.js?<?=COMMIT_HASH?>"></script>
</body>
</html>
<?php require 'system/error_translations.php' ?>