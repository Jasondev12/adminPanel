<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title><?php echo $data['title']; ?></title>
   <?php include "parts/header.php"; ?>
</head>

<body>
<div class="bg">
        <video autoplay loop muted id="bg_video">
            <source src="<?php echo Base_URL; ?>/assets/images/bgvideo.mp4" type="video/mp4">
        </video>

<?php $this->view($data['layout']); ?>
        
</div><!-- close container bg -->
</body>

</html>
