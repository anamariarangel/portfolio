find-images.php
<?php
require_once('wp-load.php');

$upload_dir = wp_upload_dir();
$target_dir = $upload_dir['basedir'] . '/elementor/thumbs/';

$images = glob($target_dir . '*.{jpg,jpeg,png,webp}', GLOB_BRACE);

foreach ($images as $image_path) {
    $filename = basename($image_path);

    // Verifica se já existe um attachment com esse nome
    if (null !== get_page_by_title($filename, OBJECT, 'attachment')) {
        continue; // Já importado
    }

    $filetype = wp_check_filetype($filename, null);

    $attachment = array(
        'guid'           => $upload_dir['baseurl'] . '/elementor/thumbs/' . $filename,
        'post_mime_type' => $filetype['type'],
        'post_title'     => sanitize_file_name($filename),
        'post_content'   => '',
        'post_status'    => 'inherit'
    );

    $attach_id = wp_insert_attachment($attachment, $image_path);
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    $attach_data = wp_generate_attachment_metadata($attach_id, $image_path);
    wp_update_attachment_metadata($attach_id, $attach_data);

    echo "Importado: $filename<br>";
}
