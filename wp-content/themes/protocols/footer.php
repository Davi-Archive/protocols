<script>
	$('.js-pscroll').each(function() {
		var ps = new PerfectScrollbar(this);

		$(window).on('resize', function() {
			ps.update();
		})
	});
</script>

<script async="" src="<?= get_template_directory_uri() ?>/Table V04_files/js"></script>
<script>
	window.dataLayer = window.dataLayer || [];

	$(document).ready(function gtag() {
		dataLayer.push(arguments);
	});
	$(document).ready(gtag('js', new Date()));

	$(document).ready(gtag('config', 'UA-23581568-13'));
</script>

<script src="<?= get_template_directory_uri() ?>/Table V04_files/main.js.download"></script>
<script defer="" src="<?= get_template_directory_uri() ?>/js/other2.js" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon="{&quot;rayId&quot;:&quot;7c4ee3636f0300e5&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.4.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>


<!-- WP Admin Start -->
<?php wp_footer() ?>
<!-- WP Admin End -->
</body>

</html>