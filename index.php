<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="robots" content="index, follow">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Dailymotion Thumbnail Downloader - Dailymotion Thumbnail viewer </title>
	<meta name="description" content="">
    <meta name="keywords" content="" />
<meta content='en_US' property='og:locale'/>
<meta name="googlebot" content="index, follow" />
         <meta name="YandexBot" content="index, follow" />
         <meta name="robots" content="all" />
<meta content='en_GB' property='og:locale:alternate'/>
<meta content='english' name='language'/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="apple-touch-icon" sizes="180x180" href="image/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="image/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="image/favicon-16x16.png">
</head>
	<style>
	
				body{background-color: whitesmoke;min-height:auto;font-family: work sans,sans-serif;min-width: 370px;max-width:1600px;}.yt h2{margin-left:55px;color: black;margin: auto;display: block;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;text-transform: uppercase;min-width: 300px;}.yt p{color:#6d6f73;display: block;margin-block-start: 1em;margin-block-end: 1em;margin-inline-start: 0px;margin-inline-end: 0px;font-size:15px;padding: 10px 0;padding-top: 10px;padding-right: 0px;padding-bottom: 10px;padding-left: 0px;}.download{background-color:#3b60e9;color: white;border-radius:6px;padding:10px;}.download a{color:white;text-decoration:none;}.container{min-height: 35vh;border-color: #555;min-width: 300px;}.yt{background-color: whitesmoke;}@viewport{zoom:1.0;}@-ms-viewport{zoom:1.0;}h2{color:white;}.golden-span{color: #f2b90c;font-weight: 600;}.container1 p{margin-left:50px;margin-right:50px;}.container1 h2{margin-left:50px;text-transform: uppercase;margin-right:50px;}.container1 h5{margin-left:55px;margin-right:70px;}#share-buttons img{width:65px;padding: 5px;border: 0;box-shadow: 0;background-color: whitesmoke;}.share-buttons a{background-color: whitesmoke;display:relative;}.topnav{overflow: hidden;background-color: orange;}.topnav a{float: right;display: block;color: white;text-align: center;padding: 14px 17px;text-decoration: none;font-size: 17px;}.left1{background-color: #3b60e9;color: white;float: left;text-align:left;}.topnav .icon{display: none;}.topnav a:hover{background-color: orange;color:black;}@media screen and (max-width: 600px){.topnav a:not(:first-child), .dropdown .dropbtn{display: none;}.topnav a.icon{float: right;display: block;}}@media screen and (max-width:650px){.topnav.responsive{position: relative;}.topnav.responsive .icon{position: absolute;right: 0;top: 0;}.topnav.responsive a{float: none;display: block;text-align: left;}.topnav.responsive .dropdown{float: none;}.topnav.responsive .dropdown-content{position: relative;}.topnav.responsive .dropdown .dropbtn{display: block;width: 100%; text-align: left;}}.left a{float:left;}.left a:hover{background-color: #3b60e9;color:white;}.container1{min-width:300px;}.container1 h3{margin-left:50px;margin-right:50px;}.links{text-align: center;margin-top: 10px;clear: both;float: left;width: 100%;}.links a{background: #fff;display: inline-block;margin: 3px;text-transform: uppercase;border-radius: 10px 0 10px 0;font-size: 12px;color: #000;cursor: pointer;justify-content: center;padding: 7px 15px;text-align: center;white-space: nowrap;border: 1px solid #eee;text-decoration: none;}.links a:hover{background: #3b60e9;color: #fff;}
			</style>

<body>
	<?php if(isset($_POST[ "Search"])){ 
		$url=  $_POST[ "url"]; 
		$value = explode ( 'video/', $url); 
		$videoId= $value[1]; 
	}
	 ?>
	<div class="topnav" id="myTopnav">
		<div class="left"> <a href="/" class="left1">Dailymotion Thumbnail Downloader</a>
		</div> <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
	</div>
	<main>
		<br>
		<br>
		<div class="container text-center">
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6 text-center">
					<h1 style="color:black;" class="py-5">Dailymotion <span class="golden-span">Thumbnail</span> Downloader</h1>
					<form method="post" class="form-group">
						<input name="url" type="url" class="form-control form-control-lg mb-3" placeholder="https://www.dailymotion.com/video/x7tku3c" required>
						<button style="background-color:#f2ae06;border:none" name="Search" class="btn btn-primary btn-lg btn-block">Get Thumbnail</button>
					</form>
					<div class="addthis_inline_share_toolbox"></div>
					</form>
					<center>
<script language="javascript">document.write( unescape( '%3C%70%3E%3C%61%20%68%72%65%66%3D%22%2F%2F%67%72%61%69%7A%6F%61%68%2E%63%6F%6D%2F%61%66%75%2E%70%68%70%3F%7A%6F%6E%65%69%64%3D%33%35%39%39%32%38%31%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%3E%3C%69%6D%67%20%62%6F%72%64%65%72%3D%22%30%22%20%64%61%74%61%2D%6F%72%69%67%69%6E%61%6C%2D%68%65%69%67%68%74%3D%22%33%31%32%22%20%64%61%74%61%2D%6F%72%69%67%69%6E%61%6C%2D%77%69%64%74%68%3D%22%37%39%39%22%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%31%2E%62%70%2E%62%6C%6F%67%73%70%6F%74%2E%63%6F%6D%2F%2D%68%6B%39%77%38%55%65%66%77%53%67%2F%58%33%58%67%67%48%49%45%73%78%49%2F%41%41%41%41%41%41%41%41%41%6E%67%2F%4F%37%78%46%43%30%33%61%4B%41%77%73%58%53%67%6A%38%49%71%42%6A%49%42%50%7A%69%33%47%46%50%75%78%77%43%4C%63%42%47%41%73%59%48%51%2F%73%33%32%30%2F%32%36%2D%32%36%38%32%36%33%5F%66%6F%63%61%6C%2D%66%6F%72%65%73%74%2D%70%64%66%2D%64%6F%77%6E%6C%6F%61%64%2D%62%75%74%74%6F%6E%2D%65%6E%2D%64%6F%77%6E%6C%6F%61%64%2D%62%75%74%74%6F%6E%2D%72%65%6D%6F%76%65%62%67%2D%70%72%65%76%69%65%77%2E%70%6E%67%22%20%73%74%79%6C%65%3D%22%74%65%78%74%2D%61%6C%69%67%6E%3A%20%63%65%6E%74%65%72%3B%22%20%77%69%64%74%68%3D%22%33%32%30%22%20%2F%3E%3C%2F%61%3E%3C%2F%70%3E%3C%70%3E%3C%2F%70%3E' ))</script></center>
					<?php if(!empty($videoId)){ ?>
					<h3 class="mt-5">Dailymotion Thumbnail (Full HD)</h3>  <a href="https://www.dailymotion.com/thumbnail/video/<?php echo $videoId; ?>" target="_POST"><img src="https://www.dailymotion.com/thumbnail/video/<?php echo $videoId; ?>" alt="Full HD" class="img-fluid mb-3"></a> 
					<div class="download"> <a href="https://www.dailymotion.com/thumbnail/video/<?php echo $videoId; ?>">Download (Full HD)</a> 
					</div>
					<?php } ?>
					<br>
					<br>
					<br>
					<br>
				</div>
				
			
			
			</div>
			<center>
			 <p class="credit">Made With ❤	 By <a href="https://www.youtube.com/channel/UC0MwYqq5QDeyIEG3ShLMtbQ?sub_confirmation=1">Alee</a></p>
</center>
			<script>
				function myFunction(){var x=document.getElementById("myTopnav"); if (x.className==="topnav"){x.className +=" responsive";}else{x.className="topnav";}}
			</script>
			<script>
				var _0xc6ae=["\x44\x4F\x4D\x43\x6F\x6E\x74\x65\x6E\x74\x4C\x6F\x61\x64\x65\x64","\x69\x6D\x67\x2E\x6C\x61\x7A\x79","\x71\x75\x65\x72\x79\x53\x65\x6C\x65\x63\x74\x6F\x72\x41\x6C\x6C","\x63\x61\x6C\x6C","\x73\x6C\x69\x63\x65","\x49\x6E\x74\x65\x72\x73\x65\x63\x74\x69\x6F\x6E\x4F\x62\x73\x65\x72\x76\x65\x72","\x69\x73\x49\x6E\x74\x65\x72\x73\x65\x63\x74\x69\x6E\x67","\x74\x61\x72\x67\x65\x74","\x73\x72\x63","\x64\x61\x74\x61\x73\x65\x74","\x6C\x61\x7A\x79","\x72\x65\x6D\x6F\x76\x65","\x63\x6C\x61\x73\x73\x4C\x69\x73\x74","\x75\x6E\x6F\x62\x73\x65\x72\x76\x65","\x66\x6F\x72\x45\x61\x63\x68","\x6F\x62\x73\x65\x72\x76\x65","\x61\x64\x64\x45\x76\x65\x6E\x74\x4C\x69\x73\x74\x65\x6E\x65\x72"];document[_0xc6ae[16]](_0xc6ae[0],function(){var _0x20c2x1=[][_0xc6ae[4]][_0xc6ae[3]](document[_0xc6ae[2]](_0xc6ae[1]));if(_0xc6ae[5] in window){let _0x20c2x2=new IntersectionObserver(function(_0x20c2x1,_0x20c2x3){_0x20c2x1[_0xc6ae[14]](function(_0x20c2x1){if(_0x20c2x1[_0xc6ae[6]]){let _0x20c2x3=_0x20c2x1[_0xc6ae[7]];_0x20c2x3[_0xc6ae[8]]=_0x20c2x3[_0xc6ae[9]][_0xc6ae[8]],_0x20c2x3[_0xc6ae[12]][_0xc6ae[11]](_0xc6ae[10]),_0x20c2x2[_0xc6ae[13]](_0x20c2x3)}})});_0x20c2x1[_0xc6ae[14]](function(_0x20c2x1){_0x20c2x2[_0xc6ae[15]](_0x20c2x1)})}})
			</script>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e9acf03b5e1bed0"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
