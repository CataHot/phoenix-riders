<?php
require_once('wp-load.php');
kses_remove_filters();

$pages = array(

  'About Us' => '
<style>
.pr-page-hero{background:#0f1623;padding:80px 60px;text-align:center;}
.pr-page-hero h1{color:#fff;font-family:Georgia,serif;font-size:40px;letter-spacing:4px;}
.pr-page-content{max-width:900px;margin:0 auto;padding:80px 40px;font-family:Arial,sans-serif;}
.pr-page-content h2{font-family:Georgia,serif;font-size:28px;color:#0f1623;letter-spacing:2px;margin-bottom:15px;}
.pr-gold-line{width:60px;height:2px;background:#c9a96e;margin:0 0 30px 0;}
.pr-page-content p{color:#555;font-size:16px;line-height:1.9;margin-bottom:25px;}
.pr-two-col{display:flex;gap:60px;margin:60px 0;flex-wrap:wrap;}
.pr-two-col>div{flex:1;min-width:250px;}
</style>
<div class="pr-page-hero"><h1><span class="pr-en">ABOUT US</span><span class="pr-ro">DESPRE NOI</span></h1></div>
<div class="pr-page-content">
  <h2><span class="pr-en">Our Story</span><span class="pr-ro">Povestea noastră</span></h2>
  <div class="pr-gold-line"></div>
  <p class="pr-en">Phoenix Riders is an internationally renowned luxury equestrian center and country club located in Băicoi, Prahova, România.</p>
  <p class="pr-ro">Phoenix Riders este un centru ecvestru de lux cu renume internațional și un country club situat în Băicoi, Prahova, România.</p>
  <div class="pr-two-col">
    <div>
      <h2><span class="pr-en">Our Mission</span><span class="pr-ro">Misiunea noastră</span></h2>
      <div class="pr-gold-line"></div>
      <p class="pr-en">To provide an unparalleled equestrian experience that combines sporting excellence with luxury hospitality.</p>
      <p class="pr-ro">Să oferim o experiență ecvestră inegalabilă care combină excelența sportivă cu ospitalitatea de lux.</p>
    </div>
    <div>
      <h2><span class="pr-en">Our Values</span><span class="pr-ro">Valorile noastre</span></h2>
      <div class="pr-gold-line"></div>
      <p class="pr-en">Excellence, integrity, and passion are at the core of everything we do.</p>
      <p class="pr-ro">Excelența, integritatea și pasiunea sunt la baza a tot ceea ce facem.</p>
    </div>
  </div>
</div>',

  'Calendar' => '
<style>
.pr-page-hero{position:relative;padding:80px 60px;text-align:center;overflow:hidden;min-height:300px;display:flex;align-items:center;justify-content:center;}
.pr-page-hero video{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;z-index:0;}
.pr-page-hero::after{content:"";position:absolute;inset:0;background:rgba(15,22,35,0.6);z-index:1;}
.pr-page-hero h1{color:#fff;font-family:"Playfair Display",Georgia,serif;font-size:40px;font-weight:400;letter-spacing:5px;text-transform:uppercase;position:relative;z-index:2;}
.pr-page-content{max-width:960px;margin:0 auto;padding:80px 40px;}
.pr-page-content h2{font-family:"Playfair Display",Georgia,serif;font-size:26px;color:#0f1623;letter-spacing:2px;margin:50px 0 10px;}
.pr-page-content h2:first-child{margin-top:0;}
.pr-gold-line{width:60px;height:2px;background:#c9a96e;margin:0 0 25px 0;}
.pr-page-content p{color:#555;font-size:16px;line-height:1.9;margin-bottom:25px;}
.pr-cal-table{width:100%;border-collapse:collapse;margin-bottom:40px;}
.pr-cal-table thead tr{background:#0f1623;}
.pr-cal-table thead th{color:#c9a96e;padding:14px 18px;text-align:left;font-size:12px;letter-spacing:2px;font-family:Arial,sans-serif;text-transform:uppercase;}
.pr-cal-table tbody tr{border-bottom:1px solid #eee;}
.pr-cal-table tbody tr:nth-child(even){background:#faf7f3;}
.pr-cal-table tbody td{padding:14px 18px;color:#444;font-size:14px;line-height:1.6;vertical-align:top;}
.pr-cal-table .pr-date{color:#0f1623;font-weight:bold;white-space:nowrap;}
.pr-cal-table .pr-badge{display:inline-block;color:#c9a96e;font-size:11px;letter-spacing:1px;border:1px solid #c9a96e;padding:2px 7px;white-space:nowrap;}
.pr-section-label{display:inline-block;background:#0f1623;color:#c9a96e;font-size:11px;letter-spacing:2px;padding:5px 14px;margin-bottom:15px;font-family:Arial,sans-serif;text-transform:uppercase;}
</style>
<div class="pr-page-hero"><video autoplay loop muted playsinline><source src="https://phoenix-riders-next.vercel.app/video/competitions-hero.mp4" type="video/mp4"></video><h1 id="pr-cal-title" style="opacity:0;transform:translateY(60px);transition:opacity 1.4s ease,transform 1.4s ease;"><span class="pr-en">COMPETITION CALENDAR</span><span class="pr-ro">CALENDAR COMPETIȚII</span></h1></div>
<script>
document.addEventListener("DOMContentLoaded", function(){
  setTimeout(function(){
    var el = document.getElementById("pr-cal-title");
    el.style.opacity = "1";
    el.style.transform = "translateY(0)";
  }, 100);
});
</script>
<div class="pr-page-content">

  <span class="pr-section-label"><span class="pr-en">Winter Indoor</span><span class="pr-ro">Indoor de iarnă</span></span>
  <table class="pr-cal-table">
    <thead><tr>
      <th><span class="pr-en">Dates</span><span class="pr-ro">Date</span></th>
      <th><span class="pr-en">Event</span><span class="pr-ro">Eveniment</span></th>
      <th><span class="pr-en">Level</span><span class="pr-ro">Nivel</span></th>
    </tr></thead>
    <tbody>
      <tr><td class="pr-date"><span class="pr-en">Jan 23–25, 2026</span><span class="pr-ro">23–25 Ian. 2026</span></td><td><span class="pr-en">Regional jumping competition with youth categories</span><span class="pr-ro">Concurs regional de sărituri cu categorii de juniori</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Jan 29 – Feb 1, 2026</span><span class="pr-ro">29 Ian. – 1 Feb. 2026</span></td><td><span class="pr-en">International qualifiers</span><span class="pr-ro">Calificări internaționale</span></td><td><span class="pr-badge">CSI1*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Feb 20–22, 2026</span><span class="pr-ro">20–22 Feb. 2026</span></td><td><span class="pr-en">Regional jumping competition</span><span class="pr-ro">Concurs regional de sărituri</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Mar 13–15, 2026</span><span class="pr-ro">13–15 Mar. 2026</span></td><td><span class="pr-en">Regional jumping competition with youth categories</span><span class="pr-ro">Concurs regional de sărituri cu categorii de juniori</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Mar 18–22, 2026</span><span class="pr-ro">18–22 Mar. 2026</span></td><td><span class="pr-en">International qualifiers</span><span class="pr-ro">Calificări internaționale</span></td><td><span class="pr-badge">CSI1*</span></td></tr>
    </tbody>
  </table>

  <span class="pr-section-label"><span class="pr-en">Summer Outdoor</span><span class="pr-ro">Outdoor de vară</span></span>
  <table class="pr-cal-table">
    <thead><tr>
      <th><span class="pr-en">Dates</span><span class="pr-ro">Date</span></th>
      <th><span class="pr-en">Event</span><span class="pr-ro">Eveniment</span></th>
      <th><span class="pr-en">Level</span><span class="pr-ro">Nivel</span></th>
    </tr></thead>
    <tbody>
      <tr><td class="pr-date"><span class="pr-en">Apr 17–19, 2026</span><span class="pr-ro">17–19 Apr. 2026</span></td><td><span class="pr-en">Regional jumping competition</span><span class="pr-ro">Concurs regional de sărituri</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Apr 21–26, 2026</span><span class="pr-ro">21–26 Apr. 2026</span></td><td><span class="pr-en">International qualifiers &amp; Romanian Federation Cup — Week 1</span><span class="pr-ro">Calificări internaționale &amp; Cupa Federației Române — Săptămâna I</span></td><td><span class="pr-badge">CSI3*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Apr 28 – May 3, 2026</span><span class="pr-ro">28 Apr. – 3 Mai 2026</span></td><td><span class="pr-en">International qualifiers &amp; Romanian Federation Cup — Week 2</span><span class="pr-ro">Calificări internaționale &amp; Cupa Federației Române — Săptămâna II</span></td><td><span class="pr-badge">CSI3*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">May 29–31, 2026</span><span class="pr-ro">29–31 Mai 2026</span></td><td><span class="pr-en">Regional jumping with dressage events</span><span class="pr-ro">Concurs regional de sărituri cu probe de dresaj</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Jun 26–28, 2026</span><span class="pr-ro">26–28 Iun. 2026</span></td><td><span class="pr-en">Regional jumping competition</span><span class="pr-ro">Concurs regional de sărituri</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Jul 3–5, 2026</span><span class="pr-ro">3–5 Iul. 2026</span></td><td><span class="pr-en">International jumping — Balkans Championship qualification</span><span class="pr-ro">Sărituri internaționale — calificare Campionat Balcanic</span></td><td><span class="pr-badge">CSI2*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Jul 10–12, 2026</span><span class="pr-ro">10–12 Iul. 2026</span></td><td><span class="pr-en">International jumping qualifiers</span><span class="pr-ro">Calificări internaționale de sărituri</span></td><td><span class="pr-badge">CSI2*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Aug 28–30, 2026</span><span class="pr-ro">28–30 Aug. 2026</span></td><td><span class="pr-en">Regional jumping with national dressage</span><span class="pr-ro">Sărituri regionale cu dresaj național</span></td><td><span class="pr-badge">Regional</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Aug 31 – Sep 2, 2026</span><span class="pr-ro">31 Aug. – 2 Sep. 2026</span></td><td><span class="pr-en">Regional jumping and international dressage</span><span class="pr-ro">Sărituri regionale și dresaj internațional</span></td><td><span class="pr-badge">CDI</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Sep 18–20 &amp; 25–27, 2026</span><span class="pr-ro">18–20 &amp; 25–27 Sep. 2026</span></td><td><span class="pr-en">International jumping events</span><span class="pr-ro">Concursuri internaționale de sărituri</span></td><td><span class="pr-badge">CSI2*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Oct 30 – Nov 1, 2026</span><span class="pr-ro">30 Oct. – 1 Nov. 2026</span></td><td><span class="pr-en">Regional jumping with championship finals</span><span class="pr-ro">Sărituri regionale cu finale de campionat</span></td><td><span class="pr-badge">Regional</span></td></tr>
    </tbody>
  </table>

  <span class="pr-section-label"><span class="pr-en">Winter Indoor — Christmas Tour</span><span class="pr-ro">Indoor de iarnă — Christmas Tour</span></span>
  <table class="pr-cal-table">
    <thead><tr>
      <th><span class="pr-en">Dates</span><span class="pr-ro">Date</span></th>
      <th><span class="pr-en">Event</span><span class="pr-ro">Eveniment</span></th>
      <th><span class="pr-en">Level</span><span class="pr-ro">Nivel</span></th>
    </tr></thead>
    <tbody>
      <tr><td class="pr-date"><span class="pr-en">Nov 26–29, 2026</span><span class="pr-ro">26–29 Nov. 2026</span></td><td><span class="pr-en">Christmas Tour</span><span class="pr-ro">Christmas Tour</span></td><td><span class="pr-badge">CSI3*/2*/1*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Dec 3–6, 2026</span><span class="pr-ro">3–6 Dec. 2026</span></td><td><span class="pr-en">Christmas Tour</span><span class="pr-ro">Christmas Tour</span></td><td><span class="pr-badge">CSI4*/2*/1*</span></td></tr>
      <tr><td class="pr-date"><span class="pr-en">Dec 10–13, 2026</span><span class="pr-ro">10–13 Dec. 2026</span></td><td><span class="pr-en">Christmas Tour</span><span class="pr-ro">Christmas Tour</span></td><td><span class="pr-badge">CSI4*/2*/1*</span></td></tr>
    </tbody>
  </table>

</div>',

  'Events' => '
<style>
.pr-page-hero{background:#0f1623;padding:80px 60px;text-align:center;}
.pr-page-hero h1{color:#fff;font-family:Georgia,serif;font-size:40px;letter-spacing:4px;}
.pr-page-content{max-width:900px;margin:0 auto;padding:80px 40px;}
.pr-page-content h2{font-family:Georgia,serif;font-size:28px;color:#0f1623;letter-spacing:2px;margin-bottom:15px;}
.pr-gold-line{width:60px;height:2px;background:#c9a96e;margin:0 0 30px 0;}
.pr-event-card{border:1px solid #eee;padding:30px;margin-bottom:25px;display:flex;gap:30px;align-items:flex-start;}
.pr-event-date{background:#0f1623;color:#c9a96e;padding:15px 20px;text-align:center;font-family:Georgia,serif;min-width:70px;box-shadow:0 0 12px 3px rgba(15,22,35,0.45);transition:box-shadow 0.3s ease;}
.pr-event-card:hover .pr-event-date{box-shadow:0 0 22px 6px rgba(15,22,35,0.75);}
.pr-event-date strong{display:block;font-size:28px;}
.pr-event-date span{font-size:12px;letter-spacing:1px;}
.pr-event-info h3{font-family:Georgia,serif;font-size:20px;color:#0f1623;margin-bottom:8px;}
.pr-event-info p{color:#666;font-size:14px;line-height:1.7;}
</style>
<div class="pr-page-hero"><h1 id="pr-events-title"><span class="pr-en" id="pr-tw-en"></span><span class="pr-ro" id="pr-tw-ro"></span></h1>
</div>
<script>
document.addEventListener("DOMContentLoaded", function(){
  var lang = localStorage.getItem("pr_lang") || "en";
  var texts = {en: "PHOENIX RIDERS VENUE EVENTS", ro: "EVENIMENTE PHOENIX RIDERS"};
  var elEn = document.getElementById("pr-tw-en");
  var elRo = document.getElementById("pr-tw-ro");
  var target = lang === "ro" ? elRo : elEn;
  var text = texts[lang];
  var i = 0;
  function type(){
    if(i <= text.length){
      target.textContent = text.slice(0, i);
      i++;
      setTimeout(type, 100);
    }
  }
  type();
});
</script>
<div class="pr-page-content">
  <h2><span class="pr-en">Upcoming Events</span><span class="pr-ro">Evenimente viitoare</span></h2>
  <div class="pr-gold-line"></div>
  <div class="pr-event-card">
    <div class="pr-event-date"><strong>21</strong><span><span class="pr-en">APR</span><span class="pr-ro">APR</span></span></div>
    <div class="pr-event-info">
      <h3><span class="pr-en">Romanian Federation Cup — Week One</span><span class="pr-ro">Cupa Federației Române — Săptămâna I</span></h3>
      <p class="pr-en">Apr 21–26, 2026. FEI sanctioned CSI3* show jumping competition.</p>
      <p class="pr-ro">21–26 Apr 2026. Competiție de sărituri CSI3* sancționată FEI.</p>
    </div>
  </div>
  <div class="pr-event-card">
    <div class="pr-event-date"><strong>25</strong><span><span class="pr-en">APR</span><span class="pr-ro">APR</span></span></div>
    <div class="pr-event-info">
      <h3>Spring Opening</h3>
      <p class="pr-en">Apr 25–26. Lifestyle event combining competition with dining and entertainment.</p>
      <p class="pr-ro">25–26 Apr. Eveniment lifestyle combinând competiția cu dining și entertainment.</p>
    </div>
  </div>
  <div class="pr-event-card">
    <div class="pr-event-date"><strong>28</strong><span><span class="pr-en">APR</span><span class="pr-ro">APR</span></span></div>
    <div class="pr-event-info">
      <h3><span class="pr-en">Romanian Federation Cup — Week Two</span><span class="pr-ro">Cupa Federației Române — Săptămâna II</span></h3>
      <p class="pr-en">Apr 28–May 3, 2026. FEI sanctioned CSI3* show jumping competition.</p>
      <p class="pr-ro">28 Apr–3 Mai 2026. Competiție de sărituri CSI3* sancționată FEI.</p>
    </div>
  </div>
</div>',

  'Ranking' => '',
);

global $wpdb;
foreach ($pages as $title => $content) {
    if (empty($content)) continue;
    $page = get_page_by_title($title);
    if (!$page && $title === 'Calendar') {
        $page = get_page_by_title('Competitions');
    }
    if ($page) {
        $wpdb->update($wpdb->posts, array(
            'post_title'   => $title,
            'post_name'    => sanitize_title($title),
            'post_content' => $content,
            'post_status'  => 'publish',
        ), array('ID' => $page->ID));
        clean_post_cache($page->ID);
        delete_post_meta($page->ID, '_elementor_edit_mode');
        delete_post_meta($page->ID, '_elementor_data');
        update_post_meta($page->ID, '_wp_page_template', 'elementor_header_footer');
        echo "Updated: $title<br>";
    }
}

echo '<br><strong>Done!</strong> <a href="http://phoenix-riders.local/">View site</a>';
