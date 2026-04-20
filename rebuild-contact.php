<?php
require_once('wp-load.php');

$page = get_page_by_title('Contact');

$content = '
<style>
.pr-contact-hero{background:#0f1623;padding:80px 60px;text-align:center;}
.pr-contact-hero h1{color:#fff;font-family:Georgia,serif;font-size:40px;letter-spacing:4px;}
.pr-contact-wrap{max-width:1100px;margin:0 auto;padding:60px 40px;display:grid;grid-template-columns:1fr 1.5fr 1.2fr;gap:50px;flex-wrap:wrap;}
.pr-contact-info h2,.pr-contact-form h2,.pr-contact-map h2{font-family:Georgia,serif;font-size:20px;color:#0f1623;letter-spacing:2px;margin-bottom:10px;}
.pr-gold-line{width:40px;height:2px;background:#c9a96e;margin:0 0 20px 0;}
.pr-contact-info p{color:#555;font-size:14px;line-height:1.9;}
.pr-form input,.pr-form textarea{width:100%;padding:10px 12px;margin-bottom:12px;border:1px solid #ddd;font-size:13px;font-family:Arial,sans-serif;box-sizing:border-box;}
.pr-form textarea{height:100px;resize:vertical;}
.pr-form button{background:#c9a96e;color:#fff;border:none;padding:12px 30px;font-size:11px;letter-spacing:2px;cursor:pointer;text-transform:uppercase;width:100%;}
.pr-form button:hover{background:#b8934a;}
.pr-contact-map iframe{width:100%;height:100%;min-height:280px;border:1px solid #e8e0d5;display:block;}
.pr-travel{background:#f5f0eb;padding:60px 40px;}
.pr-travel-inner{max-width:700px;margin:0 auto;}
.pr-travel h2{font-family:Georgia,serif;font-size:22px;color:#0f1623;letter-spacing:2px;margin-bottom:10px;}
.pr-travel-card{background:#fff;border:1px solid #e8e0d5;border-radius:6px;padding:25px 30px;}
.pr-travel-subtitle{font-family:Georgia,serif;font-size:15px;color:#0f1623;margin:0 0 6px 0;}
.pr-travel-by-car{font-size:13px;color:#666;margin:0 0 20px 0;}
.pr-travel-header{display:flex;justify-content:space-between;align-items:center;margin-bottom:15px;padding-bottom:10px;border-bottom:1px solid #e8e0d5;}
.pr-travel-header-label{font-size:11px;letter-spacing:2px;color:#c9a96e;text-transform:uppercase;font-weight:bold;}
.pr-travel-header-updated{font-size:11px;color:#aaa;font-style:italic;}
.pr-travel-row{display:flex;align-items:center;padding:12px 0;border-bottom:1px solid #f0ebe4;}
.pr-travel-row:last-child{border-bottom:none;}
.pr-travel-icon{font-size:18px;width:36px;color:#c9a96e;}
.pr-travel-name{flex:1;font-size:14px;color:#333;margin-left:8px;}
.pr-travel-km{font-size:13px;color:#aaa;width:60px;text-align:center;}
.pr-travel-time{font-size:16px;font-weight:bold;color:#0f1623;width:70px;text-align:right;}
.pr-travel-dot{width:10px;height:10px;background:#4caf50;border-radius:50%;margin-left:12px;flex-shrink:0;}
.pr-travel-dot.loading{background:#f0c040;}
.pr-travel-dot.error{background:#e57373;}
.pr-travel-btns{display:flex;gap:12px;margin-top:20px;align-items:center;}
.pr-travel-btn{display:flex;align-items:center;gap:8px;padding:10px 20px;border:1px solid #0f1623;background:#fff;font-size:11px;letter-spacing:2px;cursor:pointer;text-decoration:none;color:#0f1623;text-transform:uppercase;font-family:Arial,sans-serif;}
.pr-travel-btn:hover{background:#0f1623;color:#fff;}
.pr-refresh-btn{background:none;border:none;cursor:pointer;font-size:18px;color:#999;padding:5px;}
.pr-refresh-btn:hover{color:#c9a96e;}
</style>

<div class="pr-contact-hero">
  <h1><span class="pr-en">CONTACT US</span><span class="pr-ro">CONTACTEAZĂ-NE</span></h1>
</div>

<div class="pr-contact-wrap">
  <div class="pr-contact-info">
    <h2><span class="pr-en">Find Us</span><span class="pr-ro">Găsește-ne</span></h2>
    <div class="pr-gold-line"></div>
    <p><strong><span class="pr-en">Address</span><span class="pr-ro">Adresă</span></strong><br>DN1 NR. 12, Băicoi<br>Jud. Prahova, România</p>
    <br>
    <p><strong>Email</strong><br>office@phoenixriders.ro</p>
    <br>
    <p><strong><span class="pr-en">Phone</span><span class="pr-ro">Telefon</span></strong><br>+40 744 644 472</p>
    <br>
    <p><strong><span class="pr-en">General Enquiries</span><span class="pr-ro">Informații Generale</span></strong><br>events@phoenixriders.ro</p>
    <br>
    <p><strong>Concierge</strong><br>concierge@phoenixriders.ro</p>
  </div>
  <div class="pr-contact-form">
    <h2><span class="pr-en">Send a Message</span><span class="pr-ro">Trimite un mesaj</span></h2>
    <div class="pr-gold-line"></div>
    <form class="pr-form" method="post">
      <input type="text" id="pr-name" placeholder="Your Name" required>
      <input type="email" id="pr-email" placeholder="Your Email" required>
      <input type="tel" id="pr-phone" placeholder="Your Phone">
      <input type="date" id="pr-date">
      <textarea id="pr-msg" placeholder="Your Message"></textarea>
      <button type="submit"><span class="pr-en">SEND MESSAGE</span><span class="pr-ro">TRIMITE MESAJ</span></button>
    </form>
  </div>
  <div class="pr-contact-map">
    <h2><span class="pr-en">Location</span><span class="pr-ro">Locație</span></h2>
    <div class="pr-gold-line"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2820.253595262777!2d25.831250676545338!3d45.01977726298113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40b2530054367235%3A0x176ff9883d67b2f8!2sPhoenix%20Riders!5e0!3m2!1sro!2sro!4v1776470614128!5m2!1sro!2sro" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</div>

<div class="pr-travel">
  <div class="pr-travel-inner">
    <h2><span class="pr-en">Getting Here</span><span class="pr-ro">Cum ajungi</span></h2>
    <div class="pr-gold-line"></div>
    <div class="pr-travel-card">
      <p class="pr-travel-subtitle"><span class="pr-en">By Car</span><span class="pr-ro">Cu mașina</span></p>
      <p class="pr-travel-by-car"><span class="pr-en">110 km north of Bucharest via the A3 motorway. Free parking for cars, horse trailers and horse trucks available on site.</span><span class="pr-ro">110 km nord de București via autostrada A3. Parcare gratuită pentru mașini, remorci și camioane pentru cai disponibilă pe amplasament.</span></p>
      <div class="pr-travel-header">
        <span class="pr-travel-header-label"><span class="pr-en">Live Travel Times</span><span class="pr-ro">Timpi de deplasare live</span></span>
        <span class="pr-travel-header-updated" id="pr-updated">Calculating...</span>
      </div>
      <div class="pr-travel-row">
        <span class="pr-travel-icon">✈</span>
        <span class="pr-travel-name"><span class="pr-en">OTP Airport</span><span class="pr-ro">Aeroport OTP</span></span>
        <span class="pr-travel-km">71 km</span>
        <span class="pr-travel-time" id="pr-t-otp">—</span>
        <span class="pr-travel-dot loading" id="pr-d-otp"></span>
      </div>
      <div class="pr-travel-row">
        <span class="pr-travel-icon">🏙</span>
        <span class="pr-travel-name">București</span>
        <span class="pr-travel-km">100 km</span>
        <span class="pr-travel-time" id="pr-t-buc">—</span>
        <span class="pr-travel-dot loading" id="pr-d-buc"></span>
      </div>
      <div class="pr-travel-row">
        <span class="pr-travel-icon">📍</span>
        <span class="pr-travel-name">Ploiești</span>
        <span class="pr-travel-km">25 km</span>
        <span class="pr-travel-time" id="pr-t-plo">—</span>
        <span class="pr-travel-dot loading" id="pr-d-plo"></span>
      </div>
      <div class="pr-travel-row">
        <span class="pr-travel-icon">📍</span>
        <span class="pr-travel-name">Sinaia</span>
        <span class="pr-travel-km">47 km</span>
        <span class="pr-travel-time" id="pr-t-sin">—</span>
        <span class="pr-travel-dot loading" id="pr-d-sin"></span>
      </div>
      <div class="pr-travel-btns">
        <a class="pr-travel-btn" href="https://www.google.com/maps/dir/?api=1&destination=Phoenix+Riders,Baicoi,Romania" target="_blank">🗺 Google Maps</a>
        <a class="pr-travel-btn" href="https://waze.com/ul?ll=45.019777,25.831251&navigate=yes" target="_blank">▲ Waze</a>
        <button class="pr-refresh-btn" onclick="prLoadTravelTimes()" title="Refresh">↻</button>
      </div>
    </div>
  </div>
</div>

<script>
var PR_GMAPS_KEY = "YOUR_GOOGLE_MAPS_API_KEY";
var PR_DEST = "45.019777,25.831251";
var PR_ORIGINS = [
  { id: "otp", coords: "44.5718,26.0850" },
  { id: "buc", coords: "44.4268,26.1025" },
  { id: "plo", coords: "44.9390,26.0225" },
  { id: "sin", coords: "45.3536,25.5469" },
];
function prSecsToLabel(s){
  var h=Math.floor(s/3600), m=Math.round((s%3600)/60);
  return h>0 ? h+"h "+m+"m" : m+"m";
}
function prLoadTravelTimes(){
  document.getElementById("pr-updated").textContent="Updating...";
  if(PR_GMAPS_KEY==="YOUR_GOOGLE_MAPS_API_KEY"){
    var fb={otp:"59m",buc:"1h 10m",plo:"24m",sin:"41m"};
    var now=new Date(), hm=now.getHours()+":"+(now.getMinutes()<10?"0":"")+now.getMinutes();
    for(var k in fb){
      document.getElementById("pr-t-"+k).textContent=fb[k];
      document.getElementById("pr-d-"+k).className="pr-travel-dot";
    }
    document.getElementById("pr-updated").textContent="Updated "+hm+" (estimated)";
    return;
  }
  var origins=PR_ORIGINS.map(function(o){return o.coords;}).join("|");
  var url="https://maps.googleapis.com/maps/api/distancematrix/json?origins="+encodeURIComponent(origins)+"&destinations="+encodeURIComponent(PR_DEST)+"&mode=driving&departure_time=now&key="+PR_GMAPS_KEY;
  fetch("pr-travel-proxy.php?url="+encodeURIComponent(url))
    .then(function(r){return r.json();})
    .then(function(data){
      var now=new Date(), hm=now.getHours()+":"+(now.getMinutes()<10?"0":"")+now.getMinutes();
      data.rows.forEach(function(row,i){
        var el=PR_ORIGINS[i], elem=row.elements[0];
        if(elem.status==="OK"){
          var dur=elem.duration_in_traffic?elem.duration_in_traffic.value:elem.duration.value;
          document.getElementById("pr-t-"+el.id).textContent=prSecsToLabel(dur);
          document.getElementById("pr-d-"+el.id).className="pr-travel-dot";
        } else {
          document.getElementById("pr-t-"+el.id).textContent="N/A";
          document.getElementById("pr-d-"+el.id).className="pr-travel-dot error";
        }
      });
      document.getElementById("pr-updated").textContent="Updated "+hm;
    })
    .catch(function(){document.getElementById("pr-updated").textContent="Could not load";});
}
document.addEventListener("DOMContentLoaded",prLoadTravelTimes);
</script>
';

wp_update_post(array(
    'ID' => $page->ID,
    'post_content' => $content,
));

delete_post_meta($page->ID, '_elementor_edit_mode');
update_post_meta($page->ID, '_wp_page_template', 'elementor_header_footer');

echo 'Done! <a href="http://phoenix-riders.local/contact/">View Contact page</a>';
