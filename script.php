<script type="text/javascript">
var scripturl = (("https:" == document.location.protocol) ? "https://" : "http://") + "go.lytiks.com/content/WebTrack/catracker.js";
document.write(unescape("%3Cscript src='" + scripturl + "' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
    try {
    var cat = new CATracker("<?php echo get_option('lwp_tracking_code'); ?>");
    cat.Pause = true; cat.TrackOutboundLinks(); cat.PageView();
    } catch (err) {document.write("There has been an error initializing Lytiks web tracking.");}
</script>
<noscript><img src='http://go.lytiks.com/content/WebTrack/track.gif?noscript=1&aweid=<?php echo get_option('lwp_tracking_code'); ?>&action=PageView'/></noscript>