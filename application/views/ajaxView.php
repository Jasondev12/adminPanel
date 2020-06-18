<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
   <?php include "parts/header.php";?>
</head>

<body>

    <?php include "parts/nav.php";?>
        <div class="layout">
            <?php include "parts/sidebar.php";?>
        <div class="contents" id="contentsUser">
            <div class="content" id="contentUser">
               <?php $this->view($data['layout']);?>
            </div><!-- close content -->
        </div><!-- close contents -->
        </div><!-- close layout -->

        <?php if ($this->get_session("loader")): ?>
<div class="loader">
    <div class="loader-section">
        <div class="loader-circle">
            <div class="element">

            </div><!-- close element -->
        </div><!-- close loader circle -->
    </div><!-- close loader section -->
</div><!-- close loader -->
    <?php endif;?>
    <?php $this->unset_session('loader'); ?>

    <?php include "parts/footer.php";?>
</body>

<script src="http://localhost:8888/adminPanel/assets/js/app.js"></script>
</html>
