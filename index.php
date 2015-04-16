<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<title>Facebook custom feed</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="public/js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="public/css/style.css">
</head>
<body>
	<div class="container">
		<div class="info-alert">
			<div class="alert-msg">By posting, you agree that we do not take responsibility for what you post on your timeline from this page.</div>
		</div>
		<div class="block">
			<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
			<div class="info">
				<ol>
					<li>Write your custom post to publish.</li>
					<li>Post your custom post.</li>
					<li>
						Laught while pranking your friends and the world!
					</li>
				</ol>
			</div>
			<label for="picture">Picture <i>(Url to image, try using a image that is bigger than 442x253. If you have an own picture, try uploading it to <a href="http://flickr.com">flickr.com</a> and copy the link)</i></label>
			<input type="text" id="picture">
			<label for="name">Name <i>(Write something catchy here, this is the main title of the post)</i></label>
			<input type="text" id="name">
			<label for="description">Description <i>(Your description. Write a longer description than you would see in the preview, this preview is not 100% correct)</i></label>
			<textarea type="text" id="description"></textarea>
			<label for="caption">Caption <i>(Caption should be the domain name of the site you which the post to be from ex. CNN.COM)</i></label>
			<input type="text" id="caption">
			<br>
			Preview your prank!
			<div id="fb-preview">
				<div id="preview-picture"></div>
				<div id="description-content">
					<div id="text-content">
						<div id="preview-name">Name</div>
						<div id="preview-description">description</div>
					</div>
					<div id="preview-caption">caption</div>
				</div>
			</div>
			<a href="#" class="fb-button" id="feed-btn">Share with the world</a>
		</div>
	</div>

	<div class="prank" style="background: white; height: 100%; text-align: center; display:none">
		<img src="public/imgs/lol.gif">
		<h1>YOU GOT PWND!!1!</h1>
		<a href="" class="fb-button">I wanna prank too!</a>
		<br><br>
		<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
	</div>

</body>
</html>