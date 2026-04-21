<?php
require_once('wp-load.php');
kses_remove_filters();

$page_id = 10;

delete_post_meta($page_id, '_elementor_edit_mode');
delete_post_meta($page_id, '_elementor_data');

$content = '
<style>
.pr-hero{background:#0f1623;padding:40px;text-align:center;min-height:80vh;display:flex;align-items:center;justify-content:center;flex-direction:column;position:relative;overflow:hidden;}
.pr-hero::after{content:"";position:absolute;inset:0;background:url("https://phoenix-riders-next.vercel.app/img/hero/hero-bg.jpg") center/cover no-repeat;transform:scale(1);transition:transform 1.2s ease;z-index:0;}
.pr-hero:hover::after{transform:scale(1.06);}
.pr-hero::before{content:"";position:absolute;inset:0;background:rgba(15,22,35,0.50);z-index:1;}
.pr-hero h1{color:#fff;font-size:48px;font-weight:300;letter-spacing:6px;line-height:1.3;margin-bottom:20px;font-family:"Playfair Display",Georgia,serif;position:relative;z-index:2;}
.pr-hero .pr-gold-line,.pr-hero p,.pr-hero a{position:relative;z-index:2;}
.pr-gold-line{width:80px;height:2px;background:#c9a96e;margin:20px auto;}
.pr-hero p{color:#ccc;font-size:18px;margin-bottom:30px;}
.pr-btn{background:#c9a96e;color:#fff;padding:15px 40px;text-decoration:none;letter-spacing:2px;font-size:13px;display:inline-block;}
.pr-why{background:#fff;padding:80px;text-align:center;}
.pr-why h2{font-size:32px;letter-spacing:3px;color:#0f1623;font-family:Georgia,serif;display:inline-block;transition:transform 0.4s ease;}
.pr-why h2:hover{transform:scale(1.08);}
.pr-why p{color:#555;font-size:17px;max-width:800px;margin:20px auto;line-height:1.8;}
.pr-services{background:#f5f0eb;padding:80px;display:flex;gap:40px;justify-content:center;flex-wrap:wrap;}
.pr-service{flex:1;min-width:200px;max-width:300px;}
.pr-service h3{font-size:20px;color:#0f1623;margin-bottom:10px;font-family:Georgia,serif;}
.pr-service p{color:#666;font-size:15px;line-height:1.7;}
.pr-testimonial{background:#0f1623;padding:80px 60px;text-align:center;border-bottom:1px solid rgba(255,255,255,0.2);}
.pr-testimonial h2{color:#fff;font-size:32px;letter-spacing:3px;font-family:Georgia,serif;}
.pr-testimonial-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:40px;max-width:1000px;margin:40px auto 0;}
.pr-tcard{display:flex;flex-direction:column;align-items:center;gap:15px;opacity:0;transform:translateY(30px);transition:opacity 0.6s ease,transform 0.6s ease;}
.pr-tcard.pr-visible{opacity:1;transform:translateY(0);}
.pr-avatar{width:80px;height:80px;border-radius:50%;background:#c9a96e;color:#0f1623;font-family:Georgia,serif;font-size:20px;font-weight:bold;display:flex;align-items:center;justify-content:center;flex-shrink:0;transition:transform 0.35s ease,box-shadow 0.35s ease;cursor:pointer;}
.pr-avatar:hover{transform:scale(1.12);box-shadow:0 0 0 3px #c9a96e,0 0 18px 4px rgba(201,169,110,0.55);}
.pr-tcard p{color:#ccc;font-size:15px;font-style:italic;line-height:1.7;margin:0;}
.pr-tcard cite{color:#c9a96e;font-style:normal;font-weight:bold;font-size:14px;letter-spacing:1px;display:inline-block;transition:transform 0.3s ease;}
.pr-tcard:has(.pr-avatar:hover) cite{transform:scale(1.15);}
.pr-avatar.pr-touch-active{transform:scale(1.12);box-shadow:0 0 0 3px #c9a96e,0 0 18px 4px rgba(201,169,110,0.55);}
.pr-tcard:has(.pr-avatar.pr-touch-active) cite{transform:scale(1.15);}
@media (max-width:768px){
  .pr-hero{min-height:100svh;padding:30px 20px;justify-content:flex-end;padding-bottom:80px;}
  .pr-hero h1{font-size:22px;letter-spacing:1px;}
  .pr-hero p{font-size:15px;}
  .pr-btn{padding:12px 28px;font-size:12px;}
  .pr-why{padding:50px 20px;}
  .pr-why h2{font-size:24px;}
  .pr-why p{font-size:15px;}
  .pr-services{padding:50px 20px;gap:30px;}
  .pr-service{min-width:100%;max-width:100%;}
  .pr-testimonial{padding:50px 20px;}
  .pr-testimonial-grid{grid-template-columns:1fr;gap:40px;}
}
</style>

<div class="pr-hero" style="position:relative;z-index:0;">
  <div style="position:relative;z-index:1;"></div>
  <h1 id="pr-hero-title" style="visibility:hidden;"></h1>
<script>
document.addEventListener("DOMContentLoaded", function(){
  var words = ["LUXURY","EQUESTRIAN","CENTER","& COUNTRY","CLUB"];
  var el = document.getElementById("pr-hero-title");
  el.style.visibility = "visible";
  var spans = [];
  words.forEach(function(word, i){
    var span = document.createElement("span");
    span.style.cssText = "opacity:0;transition:opacity 2.2s ease;display:inline;";
    if(i === 3){ var br = document.createElement("br"); el.appendChild(br); span.textContent = word; }
    else { span.textContent = (i > 0 ? "\u00a0" : "") + word; }
    el.appendChild(span);
    spans.push(span);
  });
  function animateWords(){
    spans.forEach(function(span){ span.style.opacity = "0"; });
    spans.forEach(function(span, i){
      setTimeout(function(){ span.style.opacity = "1"; }, i * 200);
    });
  }
  animateWords();
  var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry){
      if(entry.isIntersecting){ animateWords(); }
      else { spans.forEach(function(span){ span.style.opacity = "0"; }); }
    });
  }, {threshold: 0.5});
  observer.observe(el);
});
</script>
  <div class="pr-gold-line"></div>
  <p><span class="pr-en">Excellence, Passion &amp; Opportunity</span><span class="pr-ro">Excelență, Pasiune &amp; Oportunitate</span></p>
  <a href="' . get_permalink(get_page_by_title("About Us")) . '" class="pr-btn"><span class="pr-en">DISCOVER MORE</span><span class="pr-ro">DESCOPERĂ MAI MULT</span></a>
</div>

<div class="pr-why">
  <h2><span class="pr-en">WHY CHOOSE US</span><span class="pr-ro">DE CE NOI</span></h2>
  <div class="pr-gold-line"></div>
  <p class="pr-en">Phoenix Riders is an internationally renowned, luxurious showground and country club — a place where riders, trainers, and professionals come together in pursuit of excellence, passion, and opportunity.</p>
  <p class="pr-ro">Phoenix Riders este un showground de lux cu renume internațional și un country club — un loc unde călăreți, antrenori și profesioniști se reunesc în căutarea excelenței, pasiunii și oportunității.</p>
</div>

<div class="pr-services">
  <div class="pr-service">
    <h3><span class="pr-en">Training &amp; Coaching</span><span class="pr-ro">Antrenament &amp; Coaching</span></h3>
    <div class="pr-gold-line" style="margin:10px 0;width:40px;"></div>
    <p class="pr-en">Professional training programs for all levels, led by internationally acclaimed coaches.</p>
    <p class="pr-ro">Programe profesionale de antrenament pentru toate nivelurile, conduse de antrenori cu recunoaștere internațională.</p>
  </div>
  <div class="pr-service">
    <h3><span class="pr-en">Competitions</span><span class="pr-ro">Competiții</span></h3>
    <div class="pr-gold-line" style="margin:10px 0;width:40px;"></div>
    <p class="pr-en">Host and participate in top-level equestrian competitions in a world-class facility.</p>
    <p class="pr-ro">Găzduim și participăm la competiții ecvestre de top într-o facilitate de clasă mondială.</p>
  </div>
  <div class="pr-service">
    <h3>Country Club</h3>
    <div class="pr-gold-line" style="margin:10px 0;width:40px;"></div>
    <p class="pr-en">Exclusive country club amenities for members and guests in a luxury setting.</p>
    <p class="pr-ro">Facilități exclusive de country club pentru membri și oaspeți într-un cadru de lux.</p>
  </div>
</div>

<div class="pr-testimonial">
  <h2><span class="pr-en">WHAT THEY SAY</span><span class="pr-ro">CE SPUN EI</span></h2>
  <div class="pr-gold-line"></div>
  <div class="pr-testimonial-grid">
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000145-788fc788fe/700/cover%20education.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;I cannot wait to be back!&rdquo;</span><span class="pr-ro">&ldquo;Abia aștept să revin!&rdquo;</span></p>
      <cite>Werner Deeg</cite>
    </div>
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000238-87d4f87d51/700/ANA_0902-6.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;Nice place!&rdquo;</span><span class="pr-ro">&ldquo;Un loc minunat!&rdquo;</span></p>
      <cite>Gregory Bodo</cite>
    </div>
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000334-4756247565/450/download%20%281%29-8.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;It was a pleasure meeting you all and designing at this competition!&rdquo;</span><span class="pr-ro">&ldquo;A fost o plăcere să vă cunosc pe toți și să colaborez la această competiție!&rdquo;</span></p>
      <cite>Olaf Petersen</cite>
    </div>
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000062-dcebadcebb/450/download%20%281%29.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;Incredible what Alexia has built here &ndash; such a beautiful facility!&rdquo;</span><span class="pr-ro">&ldquo;Incredibil ce a construit Alexia aici &ndash; o bază atât de frumoasă!&rdquo;</span></p>
      <cite>Holger Hetzel</cite>
    </div>
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000061-d9a60d9a62/450/download%20%282%29.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;Amazing place!&rdquo;</span><span class="pr-ro">&ldquo;Un loc uimitor!&rdquo;</span></p>
      <cite>Rodrigo Giesteira</cite>
    </div>
    <div class="pr-tcard">
      <div class="pr-avatar" style="background-image:url(https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000060-d684bd684e/450/download%20%284%29.webp?ph=1aae2a70b3);background-size:cover;background-position:center;"></div>
      <p><span class="pr-en">&ldquo;Best stable, amazing indoor, great footing, professional people. The place to be!&rdquo;</span><span class="pr-ro">&ldquo;Cel mai bun grajd, indoor uimitor, teren excelent, oameni profesioniști. Locul unde trebuie să fii!&rdquo;</span></p>
      <cite>Matteo Giunti</cite>
    </div>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function(){
  var cards = document.querySelectorAll(".pr-tcard");
  var observer = new IntersectionObserver(function(entries){
    entries.forEach(function(entry, i){
      if(entry.isIntersecting){
        setTimeout(function(){ entry.target.classList.add("pr-visible"); }, i * 120);
      } else {
        entry.target.classList.remove("pr-visible");
      }
    });
  }, {threshold: 0.2});
  cards.forEach(function(card){ observer.observe(card); });
  if(\'ontouchstart\' in window){
    document.querySelectorAll(\'.pr-avatar\').forEach(function(av){
      av.addEventListener(\'click\', function(){
        var active = av.classList.contains(\'pr-touch-active\');
        document.querySelectorAll(\'.pr-avatar\').forEach(function(a){ a.classList.remove(\'pr-touch-active\'); });
        if(!active) av.classList.add(\'pr-touch-active\');
      });
    });
  }
});
</script>

';

global $wpdb;
$wpdb->update($wpdb->posts, array(
  'post_content' => $content,
  'post_status'  => 'publish',
), array('ID' => $page_id));
clean_post_cache($page_id);

update_post_meta($page_id, '_wp_page_template', 'elementor_header_footer');

echo 'Done! <a href="http://phoenix-riders.local/">View site</a>';
