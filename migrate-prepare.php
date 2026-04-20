<?php
require_once('wp-load.php');
global $wpdb;

$old = 'http://phoenix-riders.local';
$new = 'https://phoenix-riders.tln.ro';

// 1. siteurl and home
$wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->options} SET option_value = %s WHERE option_name = 'siteurl'", $new
));
$wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->options} SET option_value = %s WHERE option_name = 'home'", $new
));

// 2. post_content
$posts = $wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->posts} SET post_content = REPLACE(post_content, %s, %s)", $old, $new
));

// 3. post guid
$guids = $wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->posts} SET guid = REPLACE(guid, %s, %s)", $old, $new
));

// 4. postmeta
$meta = $wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->postmeta} SET meta_value = REPLACE(meta_value, %s, %s)", $old, $new
));

// 5. options (theme mods, widget data, etc.)
$opts = $wpdb->query($wpdb->prepare(
    "UPDATE {$wpdb->options} SET option_value = REPLACE(option_value, %s, %s)
     WHERE option_name NOT IN ('siteurl','home')
     AND option_value LIKE %s",
    $old, $new, '%' . $wpdb->esc_like($old) . '%'
));

echo '<h2>Migrare completă!</h2>';
echo '<p>siteurl și home → <strong>' . $new . '</strong></p>';
echo '<p>post_content: <strong>' . $posts . '</strong> rânduri actualizate</p>';
echo '<p>guid: <strong>' . $guids . '</strong> rânduri actualizate</p>';
echo '<p>postmeta: <strong>' . $meta . '</strong> rânduri actualizate</p>';
echo '<p>options: <strong>' . $opts . '</strong> rânduri actualizate</p>';
echo '<hr>';
echo '<p><strong>Pași următori:</strong></p>';
echo '<ol>';
echo '<li>Exportă baza de date din Local by Flywheel → phpMyAdmin → Export → SQL</li>';
echo '<li>Uploadează fișierele WordPress pe hosting (fără build-*.php și migrate-prepare.php)</li>';
echo '<li>Creează baza de date pe hosting și importă fișierul SQL</li>';
echo '<li>Actualizează wp-config.php cu credențialele noii baze de date</li>';
echo '<li>Accesează wp-admin → Settings → Permalinks → Save</li>';
echo '</ol>';
