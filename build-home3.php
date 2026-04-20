<?php
require_once('wp-load.php');
kses_remove_filters();

$page_id = 10;

delete_post_meta($page_id, '_elementor_edit_mode');
delete_post_meta($page_id, '_elementor_data');

$content = '
<style>
.pr-hero{background:#0f1623 url("https://phoenix-riders-next.vercel.app/img/hero/hero-bg.jpg") center/cover no-repeat;padding:40px;text-align:center;min-height:80vh;display:flex;align-items:center;justify-content:flex-end;flex-direction:column;padding-bottom:0;justify-content:center;flex-direction:column;position:relative;}
.pr-hero::before{content:"";position:absolute;inset:0;background:rgba(15,22,35,0.50);}
.pr-hero h1{color:#fff;font-size:48px;font-weight:700;letter-spacing:4px;line-height:1.3;margin-bottom:20px;font-family:Georgia,serif;position:relative;z-index:1;}
.pr-hero .pr-gold-line,.pr-hero p,.pr-hero a{position:relative;z-index:1;}
.pr-gold-line{width:80px;height:2px;background:#c9a96e;margin:20px auto;}
.pr-hero p{color:#ccc;font-size:18px;margin-bottom:30px;}
.pr-btn{background:#c9a96e;color:#fff;padding:15px 40px;text-decoration:none;letter-spacing:2px;font-size:13px;display:inline-block;}
.pr-why{background:#fff;padding:80px;text-align:center;}
.pr-why h2{font-size:32px;letter-spacing:3px;color:#0f1623;font-family:Georgia,serif;}
.pr-why p{color:#555;font-size:17px;max-width:800px;margin:20px auto;line-height:1.8;}
.pr-services{background:#f5f0eb;padding:80px;display:flex;gap:40px;justify-content:center;flex-wrap:wrap;}
.pr-service{flex:1;min-width:200px;max-width:300px;}
.pr-service h3{font-size:20px;color:#0f1623;margin-bottom:10px;font-family:Georgia,serif;}
.pr-service p{color:#666;font-size:15px;line-height:1.7;}
.pr-testimonial{background:#0f1623;padding:80px 60px;text-align:center;border-bottom:1px solid rgba(255,255,255,0.2);}
.pr-testimonial h2{color:#fff;font-size:32px;letter-spacing:3px;font-family:Georgia,serif;}
.pr-testimonial-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:40px;max-width:1000px;margin:40px auto 0;}
.pr-tcard{display:flex;flex-direction:column;align-items:center;gap:15px;}
.pr-avatar{width:80px;height:80px;border-radius:50%;background:#c9a96e;color:#0f1623;font-family:Georgia,serif;font-size:20px;font-weight:bold;display:flex;align-items:center;justify-content:center;flex-shrink:0;}
.pr-tcard p{color:#ccc;font-size:15px;font-style:italic;line-height:1.7;margin:0;}
.pr-tcard cite{color:#c9a96e;font-style:normal;font-weight:bold;font-size:14px;letter-spacing:1px;}
</style>

<div class="pr-hero" style="position:relative;z-index:0;">
  <div style="position:relative;z-index:1;"></div>
  <h1>LUXURY EQUESTRIAN CENTER<br>&amp; COUNTRY CLUB</h1>
  <div class="pr-gold-line"></div>
  <p><span class="pr-en">Excellence, Passion &amp; Opportunity</span><span class="pr-ro">Excelență, Pasiune &amp; Oportunitate</span></p>
  <a href="#contact" class="pr-btn"><span class="pr-en">DISCOVER MORE</span><span class="pr-ro">DESCOPERĂ MAI MULT</span></a>
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

';

wp_update_post(array(
  'ID' => $page_id,
  'post_content' => $content,
));

update_post_meta($page_id, '_wp_page_template', 'elementor_header_footer');

echo 'Done! <a href="http://phoenix-riders.local/">View site</a>';
