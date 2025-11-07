<?php
// masthead include: expects $masthead_inner to be set to the inner HTML of the masthead
if(!isset($masthead_inner)){
    // default content: site name
    $site_name = isset($_SESSION['setting_name']) ? $_SESSION['setting_name'] : '';
    $masthead_inner = '<div class="container h-100">'
        .'<div class="row h-100 align-items-center justify-content-center text-center">'
            .'<div class="col-lg-10 align-self-center mb-4 page-title">'
                .'<h1 class="text-white">Welcome to '.htmlspecialchars($site_name, ENT_QUOTES).'</h1>'
                .'<hr class="divider my-4 bg-dark" />'
            .'</div>'
        .'</div>'
    .'</div>';
}
?>

<header class="masthead">
    <!-- vídeo de fondo común -->
    <video class="bg-video" autoplay muted loop playsinline poster="assets/img/<?php echo isset($_SESSION['setting_cover_img'])?$_SESSION['setting_cover_img']:'' ?>">
        <source src="assets/vid/fondovideo.mp4" type="video/mp4">
        <!-- opcional: añadir webm source -->
        Tu navegador no soporta la etiqueta video.
    </video>

    <?php echo $masthead_inner ?>

</header>
