<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>webOS Archive</title>

<link rel="stylesheet" href="wosa.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-D78HQSPL8V"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-D78HQSPL8V');
</script>
</head>
<body style="margin:0px;" height="100%">

<?php include('menu.php')?>

<div id="container">

<div class="wosaTitle">
  webOS Archive News
</div>

<?php
    $rssFeedURI="http://twitter.webosarchive.com/?MTQ2MzI2MjQ3NTM2MTUzMzk1Mg";
?>
<div>
    <?php include("rssWidget.php") ?>
</div>

<footer>
This archival project serves the public interest in preservation, access and research, and is protected by Fair Use doctrine of US copyright law.
</footer>
</div>
</body>