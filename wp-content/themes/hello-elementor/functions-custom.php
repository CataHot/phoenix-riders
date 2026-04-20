<?php
// Custom header styles and nav for Phoenix Riders
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('pr-google-fonts', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Cormorant+Garamond:wght@300;400;600&display=swap', array(), null);
});

add_action('wp_head', function() {
?>
<style>
/* Reset hello theme header */
.site-header { padding: 0 !important; background: #0f1623 !important; border-bottom: none !important; position: sticky; top: 0; z-index: 9999; }
.site-branding { display: none !important; }
.pr-header { display: flex; align-items: center; justify-content: space-between; padding: 18px 60px; }
.pr-logo { font-family: Georgia, serif; font-size: 22px; font-weight: 700; text-decoration: none; letter-spacing: 3px; }
.pr-logo .pr-word-phoenix { color: #0f1623; transition: color 0.3s; }
.pr-logo .pr-word-riders { color: #c9a96e; transition: color 0.3s; }
.pr-logo:hover .pr-word-phoenix { color: #c9a96e; }
.pr-logo:hover .pr-word-riders { color: #0f1623; }
.pr-logo span { color: #c9a96e; }
.pr-nav { display: flex; gap: 35px; list-style: none; margin: 0; padding: 0; }
.pr-nav a { font-size: 12px; letter-spacing: 2px; color: #c9a96e; text-decoration: none; text-transform: uppercase; font-family: Arial, sans-serif; transition: color 0.3s; }
.pr-nav a:hover { color: #0f1623; }
.pr-nav .pr-dropdown { position: relative; }
.pr-nav .pr-dropdown > a::after { content: " ›"; font-size: 14px; }
.pr-dropdown-menu { display: none; position: absolute; top: 100%; left: 0; background: #fff; min-width: 200px; padding: 20px 0; box-shadow: 0 8px 30px rgba(0,0,0,0.12); z-index: 9999; }
.pr-dropdown-menu .pr-dropdown-label { font-size: 10px; letter-spacing: 2px; color: #aaa; text-transform: uppercase; font-family: Arial, sans-serif; padding: 0 25px 10px; display: block; }
.pr-dropdown-menu a { display: block; padding: 10px 25px; font-size: 13px; letter-spacing: 1px; color: #0f1623; text-transform: none; font-family: Georgia, serif; font-style: italic; }
.pr-dropdown-menu a:hover { color: #c9a96e; background: #faf7f3; }
.pr-dropdown > a { padding-bottom: 15px; }
.pr-dropdown:hover .pr-dropdown-menu { display: block; }
.pr-lang { display: flex; gap: 6px; }
.pr-lang a { font-size: 11px; letter-spacing: 1px; color: #c9a96e; text-decoration: none; border: 1px solid #c9a96e; padding: 5px 10px; font-family: Arial, sans-serif; transition: all 0.3s; cursor: pointer; }
.pr-lang a:hover, .pr-lang a.active { background: #c9a96e; color: #fff; }
[data-lang="ro"] .pr-ro { display: block !important; }
[data-lang="ro"] .pr-en { display: none !important; }
[data-lang="en"] .pr-ro { display: none !important; }
[data-lang="en"] .pr-en { display: block !important; }
span[data-lang="ro"], span[data-lang="en"] { display: inline !important; }
[data-lang="ro"] span.pr-ro { display: inline !important; }
[data-lang="ro"] span.pr-en { display: none !important; }
[data-lang="en"] span.pr-ro { display: none !important; }
[data-lang="en"] span.pr-en { display: inline !important; }
</style>
<?php
});

add_action('wp_body_open', function() {
    echo '<div class="pr-header">
        <a class="pr-logo" href="' . home_url() . '"><span class="pr-word-phoenix">PHOENIX</span> <span class="pr-word-riders">RIDERS</span></a>
        <ul class="pr-nav">
            <li><a href="' . home_url() . '"><span class="pr-en">Home</span><span class="pr-ro">Acasă</span></a></li>
            <li><a href="' . get_permalink(get_page_by_title("About Us")) . '"><span class="pr-en">About Us</span><span class="pr-ro">Despre Noi</span></a></li>
            <li class="pr-dropdown">
                <a href="#"><span class="pr-en">Competitions</span><span class="pr-ro">Competiții</span></a>
                <div class="pr-dropdown-menu">
                    <span class="pr-dropdown-label"><span class="pr-en">Compete</span><span class="pr-ro">Concurează</span></span>
                    <a href="' . get_permalink(get_page_by_title("Calendar")) . '"><span class="pr-en">Calendar</span><span class="pr-ro">Calendar</span></a>
                    <a href="' . get_permalink(get_page_by_title("Ranking")) . '">Ranking</a>
                    <a href="' . get_permalink(get_page_by_title("Competitors")) . '"><span class="pr-en">Competitors</span><span class="pr-ro">Concurenți</span></a>
                    <a href="' . get_permalink(get_page_by_title("Watch Live")) . '"><span class="pr-en">Watch Live</span><span class="pr-ro">Urmărește Live</span></a>
                </div>
            </li>
            <li><a href="' . get_permalink(get_page_by_title("Events")) . '"><span class="pr-en">Events 2026</span><span class="pr-ro">Evenimente 2026</span></a></li>
            <li><a href="' . get_permalink(get_page_by_title("Shop")) . '">Shop</a></li>
            <li><a href="' . get_permalink(get_page_by_title("Contact")) . '">Contact</a></li>
        </ul>
        <div class="pr-lang"><a id="pr-btn-ro" onclick="prSetLang(\'ro\')">RO</a><a id="pr-btn-en" onclick="prSetLang(\'en\')" class="active">EN</a></div>
    </div>';
});

add_action('wp_head', function() {
    echo '<style>.site-footer { display: none !important; }</style>';
}, 99);

add_action('wp_footer', function() {
?>
<style>
.pr-footer { background: #0f1623; color: #aaa; padding: 50px 60px 30px; font-family: Arial, sans-serif; }
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
      <a href="<?php echo get_permalink(get_page_by_title('Calendar')); ?>">Calendar</a>
      <a href="<?php echo get_permalink(get_page_by_title('Events')); ?>">Events</a>
      <a href="<?php echo get_permalink(get_page_by_title('Contact')); ?>">Contact</a>
    </div>
    <div class="pr-footer-address">
      <strong style="color:#c9a96e;letter-spacing:1px;">LOCATION</strong><br>
      DN1 NR. 12, Băicoi<br>
      Jud. Prahova, România
    </div>
  </div>
  <div class="pr-footer-bottom">
    &copy; <?php echo date('Y'); ?> Phoenix Riders. All rights reserved.
  </div>
</footer>
<script>
function prSetLang(lang) {
  localStorage.setItem('pr_lang', lang);
  document.documentElement.setAttribute('data-lang', lang);
  document.getElementById('pr-btn-en').classList.toggle('active', lang === 'en');
  document.getElementById('pr-btn-ro').classList.toggle('active', lang === 'ro');
}
(function(){
  var lang = localStorage.getItem('pr_lang') || 'en';
  document.documentElement.setAttribute('data-lang', lang);
  document.addEventListener('DOMContentLoaded', function(){
    document.getElementById('pr-btn-en').classList.toggle('active', lang === 'en');
    document.getElementById('pr-btn-ro').classList.toggle('active', lang === 'ro');
  });
})();
</script>
<?php
}, 20);
