<?php
// Custom header styles and nav for Phoenix Riders
add_action('wp_head', function() {
?>
<style>
/* Reset hello theme header */
.site-header { padding: 0 !important; background: #fff !important; border-bottom: 1px solid #e8e0d5 !important; position: sticky; top: 0; z-index: 9999; }
.site-branding { display: none !important; }
.pr-header { display: flex; align-items: center; justify-content: space-between; padding: 18px 60px; }
.pr-logo { font-family: Georgia, serif; font-size: 22px; font-weight: 700; color: #1a1a1a; text-decoration: none; letter-spacing: 3px; }
.pr-logo span { color: #c9a96e; }
.pr-nav { display: flex; gap: 35px; list-style: none; margin: 0; padding: 0; }
.pr-nav a { font-size: 12px; letter-spacing: 2px; color: #1a1a1a; text-decoration: none; text-transform: uppercase; font-family: Arial, sans-serif; transition: color 0.3s; }
.pr-nav a:hover { color: #c9a96e; }
.pr-lang { font-size: 12px; letter-spacing: 1px; color: #888; }
</style>
<?php
});

add_action('wp_body_open', function() {
    echo '<div class="pr-header">
        <a class="pr-logo" href="' . home_url() . '">PHOENIX<span>RIDERS</span></a>
        <ul class="pr-nav">
            <li><a href="' . home_url() . '">Home</a></li>
            <li><a href="' . get_permalink(get_page_by_title("About Us")) . '">About Us</a></li>
            <li><a href="' . get_permalink(get_page_by_title("Competitions")) . '">Competitions</a></li>
            <li><a href="' . get_permalink(get_page_by_title("Ranking")) . '">Ranking</a></li>
            <li><a href="' . get_permalink(get_page_by_title("Events")) . '">The House of Equestrian Excellence 2026</a></li>
            <li><a href="' . get_permalink(get_page_by_title("Contact")) . '">Contact</a></li>
        </ul>
        <span class="pr-lang">RO | EN</span>
    </div>';
});

add_action('wp_head', function() {
    echo '<style>.site-footer { display: none !important; }</style>';
}, 99);

add_action('wp_footer', function() {
?>
<style>
.pr-footer { background: #111; color: #aaa; padding: 50px 60px 30px; font-family: Arial, sans-serif; }
.pr-footer-top { display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 40px; border-bottom: 1px solid #333; padding-bottom: 40px; margin-bottom: 25px; }
.pr-footer-brand { font-family: Georgia, serif; font-size: 20px; letter-spacing: 3px; color: #fff; }
.pr-footer-brand span { color: #c9a96e; }
.pr-footer-brand p { font-size: 12px; color: #888; margin-top: 8px; letter-spacing: 1px; }
.pr-footer-links { display: flex; flex-direction: column; gap: 8px; }
.pr-footer-links a { color: #aaa; text-decoration: none; font-size: 12px; letter-spacing: 1px; text-transform: uppercase; transition: color 0.3s; }
.pr-footer-links a:hover { color: #c9a96e; }
.pr-footer-address { font-size: 13px; line-height: 1.8; color: #888; }
.pr-footer-bottom { text-align: center; font-size: 11px; color: #555; letter-spacing: 1px; }
</style>
<footer class="pr-footer">
  <div class="pr-footer-top">
    <div>
      <div class="pr-footer-brand">PHOENIX<span>RIDERS</span>
        <p>Luxury Equestrian Center &amp; Country Club</p>
      </div>
    </div>
    <div class="pr-footer-links">
      <a href="<?php echo home_url(); ?>">Home</a>
      <a href="<?php echo get_permalink(get_page_by_title('About Us')); ?>">About Us</a>
      <a href="<?php echo get_permalink(get_page_by_title('Competitions')); ?>">Competitions</a>
      <a href="<?php echo get_permalink(get_page_by_title('Events')); ?>">Events</a>
      <a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>">Contact</a>
    </div>
    <div class="pr-footer-address">
      <strong style="color:#c9a96e;letter-spacing:1px;">LOCATION</strong><br>
      DN1 NR. 12, Baicoi<br>
      Jud. Prahova, Romania
    </div>
  </div>
  <div class="pr-footer-bottom">
    &copy; <?php echo date('Y'); ?> Phoenix Riders. All rights reserved.
  </div>
</footer>
<?php
}, 20);
