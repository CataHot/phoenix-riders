<?php
require_once('wp-load.php');
kses_remove_filters();

$page = get_page_by_title('About Us');

$content = '
<style>
.pr-page-hero{background:#112240 url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000019-f1c24f1c26/DJI_0154.webp?ph=1aae2a70b3) center/cover no-repeat;padding:120px 60px;text-align:center;position:relative;}
.pr-page-hero h1{color:#fff;font-family:"Playfair Display",Georgia,serif;font-size:44px;font-weight:300;letter-spacing:6px;margin:0;position:relative;z-index:1;text-shadow:0 2px 12px rgba(0,0,0,0.8),0 0 30px rgba(0,0,0,0.6);text-transform:uppercase;}
.pr-page-hero p{color:#c9a96e;font-size:14px;letter-spacing:2px;margin-top:15px;position:relative;z-index:1;text-shadow:0 1px 6px rgba(0,0,0,0.9);}
.pr-about-wrap{max-width:860px;margin:0 auto;padding:70px 40px 35px;font-family:Arial,sans-serif;text-align:center;}
.pr-gold-line{width:60px;height:2px;background:#c9a96e;margin:0 auto 30px;}
.pr-about-wrap h2{font-family:Georgia,serif;font-size:28px;color:#0f1623;letter-spacing:2px;margin:0 0 20px 0;}
.pr-about-wrap p{color:#444;font-size:16px;line-height:1.9;margin-bottom:20px;}
.pr-about-wrap em{color:#555;font-style:italic;}
.pr-join-link{color:#c9a96e;font-family:Georgia,serif;font-style:italic;font-size:16px;text-decoration:underline;transition:color 0.3s;}
.pr-join-link:hover{color:#112240;}
.pr-slider{max-width:900px;margin:30px auto 0;position:relative;background:#0f1623;outline:1px solid #0f1623;outline-offset:6px;box-shadow:0 0 0 10px #fff,0 0 0 12px #0f1623;}
.pr-slider-img{width:100%;height:520px;object-fit:cover;display:block;}
.pr-slider-btn{position:absolute;top:50%;transform:translateY(-50%);background:rgba(15,22,35,0.6);border:1px solid #c9a96e;color:#c9a96e;font-size:22px;width:48px;height:48px;cursor:pointer;display:flex;align-items:center;justify-content:center;transition:all 0.3s;z-index:2;}
.pr-slider-btn:hover{background:#c9a96e;color:#0f1623;}
.pr-slider-prev{left:16px;}
.pr-slider-next{right:16px;}
.pr-slider-counter{position:absolute;bottom:14px;right:20px;color:#c9a96e;font-size:12px;letter-spacing:2px;font-family:Arial,sans-serif;background:rgba(15,22,35,0.6);padding:4px 10px;}
@media(max-width:768px){
  .pr-page-hero{padding:40px 15px;}
  .pr-page-hero h1{font-size:16px;letter-spacing:1px;}
  .pr-about-wrap{padding:40px 20px;}
  .pr-slider{margin:20px 10px 0;}
  .pr-slider-img{height:220px;}
}
</style>

<div class="pr-page-hero">
  <h1 id="pr-about-h1" style="visibility:hidden;"></h1>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
  var lang = localStorage.getItem("pr_lang") || "en";
  var words = lang === "ro" ? ["CENTRU","ECVESTRU","&","COUNTRY","CLUB"] : ["EQUESTRIAN","CENTER","&","COUNTRY","CLUB"];
  var el = document.getElementById("pr-about-h1");
  el.style.visibility = "visible";
  var spans = [];
  words.forEach(function(word, i){
    var span = document.createElement("span");
    span.style.cssText = "opacity:0;transition:opacity 2.2s ease;display:inline;";
    span.textContent = (i > 0 ? "\u00a0" : "") + word;
    el.appendChild(span);
    spans.push(span);
  });
  function animateWords(){
    spans.forEach(function(span){ span.style.opacity="0"; });
    spans.forEach(function(span, i){
      setTimeout(function(){ span.style.opacity="1"; }, i * 200);
    });
  }
  animateWords();
  var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){ animateWords(); }
      else { spans.forEach(function(span){ span.style.opacity="0"; }); }
    });
  }, {threshold: 0.5});
  observer.observe(el);
});
</script>

<div class="pr-about-wrap">
  <div class="pr-gold-line"></div>
  <p class="pr-en">Just 45 minutes away from Bucharest, Phoenix Riders Equestrian Centre is a luxurious destination for equestrian enthusiasts.</p>
  <p class="pr-ro">La doar 45 de minute de București, Phoenix Riders Equestrian Centre este o destinație de lux pentru pasionații de echitație.</p>

  <p><em class="pr-en">This exceptional environment is home to the state-of-the-art sporting, educational and artistic facilities.</em></p>
  <p><em class="pr-ro">Acest mediu excepțional găzduiește facilități sportive, educaționale și artistice de ultimă generație.</em></p>

  <p class="pr-en">Beyond the stables, our exclusive country club provides a haven of relaxation and sophistication, featuring fine dining and social events. Whether you&rsquo;re here to ride, unwind, or connect with like-minded individuals, Phoenix Riders offers an unparalleled experience where passion meets elegance.</p>
  <p class="pr-ro">Dincolo de grajduri, exclusivul nostru country club oferă un refugiu de relaxare și sofisticare, cu restaurante fine și evenimente sociale. Indiferent dacă ești aici pentru a călări, a te relaxa sau a te conecta cu persoane cu aceleași pasiuni, Phoenix Riders oferă o experiență inegalabilă unde pasiunea întâlnește eleganța.</p>
  <p style="margin-top:10px;"><a href="/contact/" class="pr-join-link"><span class="pr-en">Join our team</span><span class="pr-ro">Alătură-te echipei</span></a></p>
</div>

<div style="text-align:center;padding:12px 40px;font-family:Arial,sans-serif;">
  <p style="color:#555;font-size:16px;font-style:italic;line-height:1.9;max-width:860px;margin:0 auto;"><em class="pr-en">Phoenix Riders is continually investing to improve horses&rsquo; living conditions and academic, sports and leisure facilities.</em><em class="pr-ro">Phoenix Riders investește continuu pentru a îmbunătăți condițiile de viață ale cailor și facilitățile academice, sportive și de agrement.</em></p>
</div>

<div class="pr-slider">
  <img class="pr-slider-img" id="pr-slide" src="https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000578-d424ed4250/ANA_1667-4.webp?ph=1aae2a70b3" alt="Phoenix Riders">
  <button class="pr-slider-btn pr-slider-prev" onclick="prSlide(-1)">&#8249;</button>
  <button class="pr-slider-btn pr-slider-next" onclick="prSlide(1)">&#8250;</button>
  <div class="pr-slider-counter"><span id="pr-slide-num">1</span> / 13</div>
</div>
<script>
var prSlides = [
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000578-d424ed4250/ANA_1667-4.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000606-1aaa81aaaa/DJI_0141.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000604-0abdc0abdf/DJI_0138.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000576-dcb47dcb49/ANA_1668-1.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000581-8d3768d379/ANA_1753.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000584-568d8568da/ANA_3805-2.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000610-3ed233ed24/DSC_2780-7.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000585-e45a7e45a9/ANA_4195.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000587-c2682c2684/ANA_4269-3.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000589-3ae983ae99/ANA_5537.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000595-dbcaddbcae/DSC_0309.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000599-7863578637/DSC_0544.webp?ph=1aae2a70b3",
  "https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000602-2f11d2f11e/DJI_0133-1.webp?ph=1aae2a70b3"
];
var prCurrent = 0;
function prSlide(dir) {
  prCurrent = (prCurrent + dir + prSlides.length) % prSlides.length;
  var img = document.getElementById("pr-slide");
  img.style.opacity = 0;
  setTimeout(function(){
    img.src = prSlides[prCurrent];
    img.style.opacity = 1;
    document.getElementById("pr-slide-num").textContent = prCurrent + 1;
  }, 600);
}
document.getElementById("pr-slide").style.transition = "opacity 0.6s";
</script>
';

global $wpdb;
$wpdb->update($wpdb->posts, array(
    'post_content' => $content,
    'post_status'  => 'publish',
), array('ID' => $page->ID));
clean_post_cache($page->ID);

delete_post_meta($page->ID, '_elementor_edit_mode');
update_post_meta($page->ID, '_wp_page_template', 'elementor_header_footer');

echo 'Done! <a href="http://phoenix-riders.local/about-us/">View About Us page</a>';
