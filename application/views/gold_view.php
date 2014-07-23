<html>
<head>
	<link rel="stylesheet" type="text/css" href="/assets/css/ninja_style.css">
	<title></title>
</head>
<body>
	
		<h2>Your Gold:</h2>
		<?php  echo $this->session->userdata('gold'); ?>
		<form action="/process/reset">
			<input type='submit' name='reset' value='Start Over'>
		</form>

	
	<div id="farm" class="location">
		<h3>Farm</h3>
		<p>(earns 10-20 golds)</p>
		<form action="/process/gold" method="post">
			<input type="submit"  name="farm" value="Find Gold!"  class="find-gold"/>
		</form>
	</div>
	<div id="cave" class="location">
		<h3>Cave</h3>
		<p>(earns 5-10 golds)</p>
		<form action="/process/gold" method="post">
			<input type="submit" name="cave" value="Find Gold!" class="find-gold"/>
		</form>
	</div>
	<div id="house" class="location">
		<h3>House</h3>
		<p>(earns 2-5 golds)</p>
		<form action="/process/gold" method="post">
			<input type="submit" name="house" value="Find Gold!" class="find-gold"/>
		</form>
	</div>
	<div id="casino" class="location">
		<h3>Casino</h3>
		<p>(earns/takes 0-50 golds)</p>
		<form action="/process/gold" method="post">
			<input type="submit" name="casino" value="Find Gold!" class="find-gold"/>
		</form>


	</div>
	<p>Activities:</p>
	<div id="activities">
		<?php
			$reversed = array_reverse($this->session->userdata('activities'));
			foreach ($reversed as $activity) 
			{
				echo $activity . "<br>";		
			}
			


		?>
	</div>
</body>
</html>