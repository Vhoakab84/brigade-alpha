                <? include('_includes/global-footer.html') ?>
            </main>
        </div>

        <script src="<?= $base_url ?>/script/global.js"></script>
        <script type="text/javascript">

          var _gaq = _gaq || [];
          _gaq.push(['_setAccount', 'UA-20825280-1']);
          _gaq.push(['_setDomainName', 'none']);
          _gaq.push(['_setAllowLinker', true]);
          _gaq.push(['_trackPageview']);

          (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
          })();

        </script>
    </body>

    <script src="<?= $base_url ?>/js/map.js"></script>
    <!-- <script src="<?= $base_url ?>/js/tabletop.js"></script>
    <script src="<?= $base_url ?>/js/stories.js"></script> -->

</html>
