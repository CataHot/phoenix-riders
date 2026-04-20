<?php
require_once('wp-load.php');

$page = get_page_by_title('Ranking');

$content = '
<style>
.pr-page-hero{position:relative;padding:80px 60px;text-align:center;overflow:hidden;min-height:300px;display:flex;flex-direction:column;align-items:center;justify-content:center;background:#0f1623 url("https://1aae2a70b3.clvaw-cdnwnd.com/011297634431441dae942d76bc328672/200000398-6278142450/images-pexels-com-photos-7267591-pexels-photo-7267591.webp?ph=1aae2a70b3") center/cover no-repeat;}
.pr-page-hero::before{content:"";position:absolute;inset:0;background:rgba(15,22,35,0.6);z-index:0;}
.pr-page-hero h1{color:#fff;font-family:Georgia,serif;font-size:40px;letter-spacing:4px;margin:0;position:relative;z-index:1;}
.pr-page-hero p{color:#c9a96e;font-size:13px;letter-spacing:3px;margin-top:15px;position:relative;z-index:1;}
.pr-lb-btn{position:relative;z-index:1;}
.pr-rank-wrap{max-width:900px;margin:0 auto;padding:70px 40px;font-family:Arial,sans-serif;}
.pr-rank-wrap h2{font-family:Georgia,serif;font-size:26px;color:#0f1623;letter-spacing:2px;margin:50px 0 10px;}
.pr-rank-wrap h3{font-family:Georgia,serif;font-size:19px;color:#0f1623;margin:30px 0 8px;letter-spacing:1px;}
.pr-gold-line{width:60px;height:2px;background:#c9a96e;margin:0 0 25px 0;}
.pr-rank-wrap p{color:#444;font-size:16px;line-height:1.9;margin-bottom:15px;}
.pr-rank-wrap ul{color:#444;font-size:15px;line-height:1.9;padding-left:20px;margin-bottom:20px;}
.pr-rank-wrap ul li{margin-bottom:6px;}
.pr-motto{background:#0f1623;padding:40px 60px;text-align:center;margin:40px 0;}
.pr-motto p{color:#fff;font-family:Georgia,serif;font-size:20px;font-style:italic;margin:0;}
.pr-motto span.pr-gold{color:#c9a96e;}
.pr-highlight{background:#f5f0eb;padding:25px 35px;border-left:3px solid #c9a96e;margin:25px 0;}
.pr-highlight p{margin:0;color:#333;font-size:15px;line-height:1.8;}
.pr-dark-box{background:#0f1623;padding:30px 40px;margin:30px 0;text-align:center;}
.pr-dark-box p{color:#fff;font-size:15px;margin:0;line-height:1.8;}
.pr-dark-box strong{color:#c9a96e;}
.pr-pillars{display:flex;gap:0;justify-content:center;margin:20px 0 30px;}
.pr-pillar{flex:1;text-align:center;padding:20px 10px;border:1px solid #e8e0d5;}
.pr-pillar strong{display:block;font-family:Georgia,serif;font-size:14px;letter-spacing:2px;color:#0f1623;}
.pr-points-table{width:100%;border-collapse:collapse;margin:20px 0 30px;}
.pr-points-table th{background:#0f1623;color:#c9a96e;padding:12px 15px;text-align:center;font-size:12px;letter-spacing:1px;}
.pr-points-table td{padding:10px 15px;border-bottom:1px solid #eee;text-align:center;color:#444;font-size:14px;}
.pr-points-table tr:nth-child(even) td{background:#f9f6f2;}
.pr-closing{background:#0f1623;padding:60px;text-align:center;margin-top:60px;}
.pr-closing h2{color:#fff;font-family:Georgia,serif;font-size:28px;letter-spacing:3px;margin-bottom:15px;}
.pr-closing p{color:#aaa;font-size:16px;line-height:1.8;max-width:650px;margin:0 auto 20px;}
.pr-closing em{color:#c9a96e;font-style:italic;font-size:18px;display:block;margin-top:25px;}
.pr-lb-btn{display:inline-block;background:#c9a96e;color:#fff;padding:14px 45px;letter-spacing:3px;font-size:13px;text-decoration:none;font-family:Arial,sans-serif;text-transform:uppercase;margin-top:20px;transition:background 0.3s;}
.pr-lb-btn:hover{background:#112240;}
</style>

<div class="pr-page-hero">
  <h1 id="pr-rank-h1" style="opacity:0;transform:translateY(60px);transition:opacity 1.4s ease,transform 1.4s ease;">PHOENIX RIDERS RANKING</h1>
  <p id="pr-rank-p" style="opacity:0;transform:translateY(60px);transition:opacity 1.4s ease,transform 1.4s ease;"><span class="pr-en">RISE TO THE TOP</span><span class="pr-ro">URCĂ SPRE VÂRF</span></p>
  <a href="' . home_url('/leaderboard/') . '" class="pr-lb-btn"><span class="pr-en">Leaderboard</span><span class="pr-ro">Clasament</span></a>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
  setTimeout(function(){
    document.getElementById("pr-rank-h1").style.opacity="1";
    document.getElementById("pr-rank-h1").style.transform="translateY(0)";
  }, 100);
  setTimeout(function(){
    document.getElementById("pr-rank-p").style.opacity="1";
    document.getElementById("pr-rank-p").style.transform="translateY(0)";
  }, 400);
});
</script>

<div class="pr-rank-wrap">

  <h2><span class="pr-en">What are Phoenix Ranking Points?</span><span class="pr-ro">Ce sunt Phoenix Ranking Points?</span></h2>
  <div class="pr-gold-line"></div>
  <p class="pr-en">Phoenix Ranking Points is not just a ranking. It is the story of a season. It is about the athlete who starts the year with a young horse at 1.00m and, competition by competition, progresses to 1.20m or higher. It is about the invisible work between competitions. About consistency. About the desire to be better tomorrow than you were yesterday.</p>
  <p class="pr-ro">Phoenix Ranking Points nu este doar un clasament. Este povestea unui sezon. Este despre atletul care începe anul cu un cal tânăr la 1.00m și, concurs după concurs, progresează la 1.20m sau mai mult. Este despre munca invizibilă dintre competiții. Despre consecvență. Despre dorința de a fi mai bun mâine decât ai fost ieri.</p>

  <div class="pr-motto">
    <p><span class="pr-gold">&ldquo;<span class="pr-en">If You fall – move forward.</span><span class="pr-ro">Dacă cazi – mergi înainte.</span></span><br><span class="pr-en">You win – move forward.&rdquo;</span><span class="pr-ro">Câștigi – mergi înainte.&rdquo;</span></p>
  </div>

  <p class="pr-en">Phoenix Ranking Points (PRP) is an internal loyalty and bonus point tracking system, awarded to athletes for each horse, at each competition organized by Jumping Baicoi. It is a real tool for measuring individual sporting progress and is open to all athletes, regardless of nationality.</p>
  <p class="pr-ro">Phoenix Ranking Points (PRP) este un sistem intern de urmărire a punctelor de loialitate și bonus, acordat sportivilor pentru fiecare cal, la fiecare concurs organizat de Jumping Baicoi. Este un instrument real de măsurare a progresului sportiv individual și este deschis tuturor sportivilor, indiferent de naționalitate.</p>

  <h2><span class="pr-en">Why Phoenix Riders Ranking Exists</span><span class="pr-ro">De ce există Phoenix Riders Ranking</span></h2>
  <div class="pr-gold-line"></div>
  <p class="pr-en">For a long time, only the podium mattered. Phoenix Ranking Points aims to change this perspective. Here, what matters is:</p>
  <p class="pr-ro">Multă vreme, doar podiumul conta. Phoenix Ranking Points urmărește să schimbe această perspectivă. Aici, contează:</p>
  <ul>
    <li><span class="pr-en">every start</span><span class="pr-ro">fiecare start</span></li>
    <li><span class="pr-en">every correctly ridden round</span><span class="pr-ro">fiecare parcurs corect</span></li>
    <li><span class="pr-en">every step forward</span><span class="pr-ro">fiecare pas înainte</span></li>
  </ul>

  <div class="pr-pillars">
    <div class="pr-pillar"><strong><span class="pr-en">DREAMS</span><span class="pr-ro">VISE</span></strong></div>
    <div class="pr-pillar"><strong><span class="pr-en">EMOTION</span><span class="pr-ro">EMOȚIE</span></strong></div>
    <div class="pr-pillar"><strong><span class="pr-en">AMBITION</span><span class="pr-ro">AMBIȚIE</span></strong></div>
    <div class="pr-pillar"><strong><span class="pr-en">PERFORMANCE</span><span class="pr-ro">PERFORMANȚĂ</span></strong></div>
  </div>

  <h2><span class="pr-en">How the System Works</span><span class="pr-ro">Cum funcționează sistemul</span></h2>
  <div class="pr-gold-line"></div>
  <ul>
    <li><span class="pr-en">Points are accumulated per athlete</span><span class="pr-ro">Punctele se acumulează per sportiv</span></li>
    <li><span class="pr-en">An athlete may score points with a maximum of <strong>3 horses</strong> per competition</span><span class="pr-ro">Un sportiv poate acumula puncte cu maximum <strong>3 cai</strong> pe concurs</span></li>
    <li><span class="pr-en">Only <strong>Top 10 placings</strong> are scored</span><span class="pr-ro">Doar <strong>primele 10 locuri</strong> sunt punctate</span></li>
    <li><span class="pr-en">Every start counts</span><span class="pr-ro">Fiecare start contează</span></li>
  </ul>

  <h2><span class="pr-en">The Point System</span><span class="pr-ro">Sistemul de punctare</span></h2>
  <div class="pr-gold-line"></div>
  <table class="pr-points-table">
    <thead>
      <tr><th><span class="pr-en">Position</span><span class="pr-ro">Poziție</span></th><th>80–100cm</th><th>105–115cm</th><th>120–130cm</th><th>135cm+</th></tr>
    </thead>
    <tbody>
      <tr><td>1st</td><td>10</td><td>15</td><td>20</td><td>30</td></tr>
      <tr><td>2nd</td><td>8</td><td>12</td><td>16</td><td>24</td></tr>
      <tr><td>3rd</td><td>6</td><td>9</td><td>12</td><td>18</td></tr>
      <tr><td>4th</td><td>5</td><td>7</td><td>10</td><td>15</td></tr>
      <tr><td>5th</td><td>4</td><td>6</td><td>8</td><td>12</td></tr>
      <tr><td>6th</td><td>3</td><td>5</td><td>7</td><td>10</td></tr>
      <tr><td>7th</td><td>2</td><td>4</td><td>6</td><td>8</td></tr>
      <tr><td>8th</td><td>2</td><td>3</td><td>5</td><td>7</td></tr>
      <tr><td>9th</td><td>1</td><td>2</td><td>4</td><td>6</td></tr>
      <tr><td>10th</td><td>1</td><td>1</td><td>3</td><td>5</td></tr>
    </tbody>
  </table>

  <h2><span class="pr-en">Next Star — Where the Journey Begins</span><span class="pr-ro">Next Star — Unde începe călătoria</span></h2>
  <div class="pr-gold-line"></div>
  <p class="pr-en">Dedicated to athletes aged <strong>10 to 18</strong> competing at <strong>80–105cm</strong>.</p>
  <p class="pr-ro">Dedicat sportivilor cu vârsta între <strong>10 și 18 ani</strong> care concurează la <strong>80–105cm</strong>.</p>

  <div class="pr-dark-box">
    <p><strong>&ldquo;<span class="pr-en">Here, young athletes are not the future. They are the present.</span><span class="pr-ro">Aici, tinerii sportivi nu sunt viitorul. Ei sunt prezentul.</span>&rdquo;</strong></p>
  </div>

  <h2><span class="pr-en">Prizes &amp; The Gala</span><span class="pr-ro">Premii &amp; Gala</span></h2>
  <div class="pr-gold-line"></div>
  <div class="pr-dark-box">
    <p><strong><span class="pr-en">THE GALA OF THE BEST ATHLETES OF THE YEAR</span><span class="pr-ro">GALA CELOR MAI BUNI SPORTIVI AI ANULUI</span></strong><br><br>
    <span style="color:#ccc;font-size:13px;"><span class="pr-en">THIS IS NOT JUST A GALA. IT IS THE RECOGNITION OF A CORRECTLY BUILT JOURNEY.</span><span class="pr-ro">ACEASTA NU ESTE DOAR O GALĂ. ESTE RECUNOAȘTEREA UNUI PARCURS CORECT CONSTRUIT.</span></span></p>
  </div>

</div>

<div class="pr-closing">
  <h2><span class="pr-en">THE PHOENIX PHILOSOPHY</span><span class="pr-ro">FILOZOFIA PHOENIX</span></h2>
  <p class="pr-en">We seek athletes who grow. Who return. Who do not give up. Who turn emotion into performance.</p>
  <p class="pr-ro">Căutăm sportivi care cresc. Care revin. Care nu renunță. Care transformă emoția în performanță.</p>
  <em>&ldquo;<span class="pr-en">We invite you to make history together</span><span class="pr-ro">Vă invităm să facem istorie împreună</span>&rdquo;</em>
</div>';

global $wpdb;
$wpdb->update($wpdb->posts, array(
    'post_content' => $content,
    'post_status'  => 'publish',
), array('ID' => $page->ID));
clean_post_cache($page->ID);

delete_post_meta($page->ID, '_elementor_edit_mode');
update_post_meta($page->ID, '_wp_page_template', 'elementor_header_footer');

echo 'Done! <a href="http://phoenix-riders.local/ranking/">View Ranking page</a>';
