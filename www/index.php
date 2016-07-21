<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/font-awesome-4.3.0/css/font-awesome.min.css">
	<title>PirateBox - Share Freely!</title>
	<link rel="stylesheet" href="/css/jquery-ui.min.css">
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width">
</head>
<body id="main-index">

<header id="header">
	<div class="container">
		<div id="logo">
			<h1>
				<a href="/">
					<img src="/img/piratebox-logo-horizontal-white.png" alt="PirateBox" title="PirateBox - Share Freely">
				</a>
			</h1>
		</div>
		<div id="menu-icon"><img src="/img/menu.png" alt="Menu"></div>
		<nav id="top-nav">
			<ul>
				<li><a href="/" class="current">Home</a></li>
				<li><a href="#juke">Jukebox</a></li>
				<li><a href="/Shared/">Files</a></li>
				<li><a href="#about">About</a></li>
			</ul>
		</nav>
	</div>
</header>

<section id="juke">
	<div id="container" class="disabled">

	<div id="cover-art">
		<div id="cover-art-big"></div>
		<img id="cover-art-small" alt="cover-art-small" src="/img/default.png">
		<div class="instructions">Drop your audio files here.</div>
	</div>

	<div id="wave"></div>

	<div id="control-bar">

		<div class="player-control">
			<div id="previous-button" title="Previous"><i class="fa fa-fast-backward"></i></div>
			<div id="play-button" title="Play"><i class="fa fa-play"></i></div>
			<div id="pause-button" title="Pause"><i class="fa fa-pause"></i></div>
			<div id="stop-button" title="Stop"><i class="fa fa-stop"></i></div>
			<div id="next-button" title="Next"><i class="fa fa-fast-forward"></i></div>
			<div id="shuffle-button" title="Shuffle Off"><i class="fa fa-random"></i></div>
			<div id="repeat-button" title="Repeat Off"><i class="fa fa-refresh"><span>1</span></i></div>
		</div>

		<div id="playlist">

			<div id="track-details" title="Show playlist">
				<i class="fa fa-sort"></i>
				<p id="track-desc">There are no tracks loaded in the player.</p>
				<p id="track-time">
					<span id="current">-</span> / <span id="total">-</span>
				</p>
			</div>

			<div id="expand-bar" class="hidden">

				<form>
					<label for="searchBox">Search</label><div><input id="searchBox" type="search" name="search"></div>
				</form>
				<ul id="list"></ul>
			</div>

		</div>

	</div>

	<div id="drop-zone" class="hidden">Drag &amp; Drop Files Here</div>

</div>

</section>

<section id="content">
	<div class="container">
		<div id="welcome">
			<div id="greeting" class="card">
				<h2>Welcome</h2>
				<p>Now, first of all, there is nothing illegal or scary going on here. This is a social place where you can chat and share files with people around you, <strong>anonymously</strong>! This is an off-line network, specially designed and developed for file-sharing and chat services. Staying off the grid is a precaution to maintain your full anonymity. Please have fun, chat with people, and feel free to share any files you may like.</p>
				<input id="thanks" class="button" type="submit" value="Thanks">
			</div>
		</div>
		<div id="sidebar">
			<div id="upload" class="card">
				<h2>Upload</h2>
				<iframe width="100%" height="80" src='http://piratebox.lan:8080' style='border:0px'>
					Your browser does not support iframes.. If you want to upload something, follow this <a href='http://piratebox.lan:8080'>Link</a>.
				</iframe>
				<h3><a href="/Shared">Browse Files -></a></h3>
				<div id="station"></div>
			</div>
			<div id="diskusagecard" class="card">
				<h2>Disk Usage</h2>
				<div id="diskusage"></div>
				<div id="refresh-diskusage">
					<form method="POST" name="diskusage" id="du_form" >
						<input class="button" type="submit" name="refresh" value="Refresh" id="du_form_button" title="Disk usage can only be refreshed every 5 minutes">
					</form>
				</div>
			</div>

		</div>

		<div id="main">
			<div id="chat" class="card">
				<h2>Chat</h2>
				<div id="shoutbox" class="shoutbox_content"></div>
				<form method="POST" name="psowrte" id="sb_form" >
					<div id="shoutbox-input">
						<input class="nickname" type="text" 	name="name" 	value="Anonymous" placeholder="Nickname">
						<input class="message" 	type="text" 	name="data" 	placeholder="Message...">
						<input class="button" 	type="submit" 	name="submit" 	value="Send"  id="send-button">
					</div>
					<div id="shoutbox-options">
						<h3>Text Color:</h3>
						<label for="def" 	class="bg-black">	<input name="color" type="radio" value="def" 	id="def" checked>Default</label>
						<label for="blue" 	class="bg-blue">	<input name="color" type="radio" value="blue" 	id="blue"		>Blue</label>
						<label for="green" 	class="bg-green">	<input name="color" type="radio" value="green" 	id="green"		>Green</label>
						<label for="orange" class="bg-orange">	<input name="color" type="radio" value="orange" id="orange"		>Orange</label>
						<label for="red" 	class="bg-red">		<input name="color" type="radio" value="red" 	id="red"		>Red</label>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<footer id="about">
	<div class="container">
		<div id="details">
			<p class="to-top"><a href="#header">Back to top</a></p>
			<h2>About PirateBox</h2>
			<p>Inspired by pirate radio and the free culture movement, PirateBox is a self-contained mobile collaboration and file sharing device. PirateBox utilizes Free, Libre and Open Source software (FLOSS) to create mobile wireless file sharing networks where users can anonymously share images, video, audio, documents, and other digital content.</p>
			<p>PirateBox is designed to be safe and secure. No logins are required and no user data is logged. The system is purposely not connected to the Internet in order to prevent tracking and preserve user privacy.</p>
			<small>PirateBox is licensed under GPLv3.</small>
		</div>
	</div>
</footer>

</body>
<?php include 'files.php';?>
<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/piratebox.js"></script>
<script src="/js/id3-minimized.js"></script>
<script src="/js/wavesurfer.min.js"></script>
<script src="/js/mediaplayer.js"></script>

</html>