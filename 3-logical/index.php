<?php
error_reporting(0);

system('find ./files/ -type f -mmin +5 -delete'); // delete unnecessary old uploads

if(isset($_FILES['file'])) {
	$path = './files/' . basename($_FILES['file']['name']);

	if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
	    $res = getimagesize($path);
            $used = shell_exec('du -sh /');
            $msg = "Success! Space used: $used. Here're the results:";
	    unlink($path);
	} else {
	    $msg = "Couldn't upload the file =(";
	}

}
?><html>
<head>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
	<h4>Image Processor</h4>
	<form method="post" enctype="multipart/form-data" id="wowyouarehacker" action="/">
		<input type="file" name="file" class="form-control input-sm chat-input" placeholder="Image" />
		<div class="wrapper">
		<span class="group-btn">
	        <a class="btn btn-primary btn-md" onclick="document.getElementById('wowyouarehacker').submit();">go <i class="fa fa-sign-in"></i></a>
		</span>
		</div>
	</form>
<?php
if(isset($msg)) {
	echo "<h4>$msg</h4>";
}
if(isset($res)) {
	if(!$res) {
		echo "<h5>The file is not an image!</h5>";
	}
	else {
		echo "<pre>Image width: $res[0]\nImage height: $res[1]\nImage type: $res[mime]</pre>";
	}
}
?>
</div>

</div>
</body>
</html>
