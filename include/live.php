	<div class="col-md-8">
		<div class="titre">Live</div>
		<script src="http://player.twitch.tv/js/embed/v1.js"></script>
		<div id="<?php echo $_GET['stream']?>"></div>
		<script id="live" type="text/javascript">
			var options = {
				width: 750,
				height: 450,
				channel: "<?php echo $_GET['stream']?>",
				//video: "{VIDEO_ID}"
				};
			var player = new Twitch.Player("<?php echo $_GET['stream']?>", options);
			player.setVolume(0.5);
		</script>
	</div>