<?php
require_once('wp-load.php');

$uc_content = '
<style>
.pr-uc-wrap{min-height:70vh;display:flex;flex-direction:column;align-items:center;justify-content:center;text-align:center;padding:80px 40px;background:#fff;}
.pr-uc-wrap h1{font-family:"Playfair Display",Georgia,serif;font-size:42px;font-weight:400;letter-spacing:5px;color:#0f1623;text-transform:uppercase;margin:0 0 20px;}
.pr-gold-line{width:80px;height:2px;background:#c9a96e;margin:0 auto 30px;}
.pr-uc-wrap p{color:#666;font-size:16px;letter-spacing:2px;text-transform:uppercase;font-family:Arial,sans-serif;margin:0;}
</style>
<div class="pr-uc-wrap">
  <h1>%%TITLE%%</h1>
  <div class="pr-gold-line"></div>
  <p><span class="pr-en">Under Construction</span><span class="pr-ro">În Construcție</span></p>
</div>';

$pages = array(
    'Competitors' => '<span class="pr-en">Competitors</span><span class="pr-ro">Concurenți</span>',
    'Watch Live'  => '<span class="pr-en">Watch Live</span><span class="pr-ro">Urmărește Live</span>',
);

foreach ($pages as $title => $display) {
    $page = get_page_by_title($title);
    if (!$page) {
        $id = wp_insert_post(array(
            'post_title'  => $title,
            'post_status' => 'publish',
            'post_type'   => 'page',
        ));
    } else {
        $id = $page->ID;
    }
    $content = str_replace('%%TITLE%%', $display, $uc_content);
    wp_update_post(array('ID' => $id, 'post_content' => $content));
    delete_post_meta($id, '_elementor_edit_mode');
    update_post_meta($id, '_wp_page_template', 'elementor_header_footer');
    echo "Created/updated: $title<br>";
}

echo '<br><strong>Done!</strong>';
