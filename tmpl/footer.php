<?php
// This check is stored as a global;
    global $is404;

?>
</div><!-- content -->

<!-- Footer region and sponsorship text -->
<div id="footer">
    <div id="footer-start"><hr></div>
    <span id="copyright">
        &copy; 2002-<?php echo date('Y') ?> by the MythTV Developers
    </span>
    <span id="sponsorship">
    Sponsored by:
    <a href="http://www.osuosl.org/"><img src="/img/osl.gif" alt="OSU OSL"></a>
    <a href="http://www.siliconmechanics.com/"><img src="/img/simech.gif" alt="Silicon Mechanics"></a>
    </span>
</div><!-- footer -->

<!-- End of the page -->

<!-- Google Analytics -->
<?php if ($_SERVER['HTTP_HOST'] == 'www.mythtv.org') { ?>
    <script type="text/javascript">
        var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
        document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
    </script>
    <script type="text/javascript">
        try {
        var pageTracker = _gat._getTracker("UA-6891668-1");
<?php if ($is404) { ?>
        pageTracker._trackPageview("/404/?page=" + document.location.pathname + document.location.search + "&from=" + document.referrer);
<?php } else { ?>
        pageTracker._trackPageview();
<?php } ?>
        } catch(err) {}
    </script>
<?php } ?>
<!-- End of Google Analytics -->

</body>
</html>
