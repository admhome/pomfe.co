<html lang=en>

<head>
  <meta charset=utf-8>
  <meta name=viewport content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="description" content="Upload and share files anonymously for free."/>
  <meta property=og:type content=website />
  <meta property=og:url content="https://pomfe.co" />
  <meta property=og:title content="Pomfe.co - File Hosting" />
  <meta property=og:site_name content=Pomfe.co />
  <meta property=og:locale content=en-US />
  <title>&middot; Pomfe.co&middot;</title>
  <link rel="shortcut icon" href=favicon.ico type="image/x-icon">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="layer">
<div class=container>
    <div class=jumbotron>
        <h1>Ohay&#x14D;!</h1>
        <p class=lead>100MiBs the Limit</p><noscript><p class="alert alert-error"><strong>Enable JavaScript</strong> Here is a non javascript version of the website: <a href="https://pomfe.co/nojs.html">https://pomfe.co/nojs.html</a></p></noscript>
        <p id=no-file-api class="alert alert-error"><strong>This site requires some cool Web 2.0 stuff</strong> Install the latest<a href="https://firefox.com/">Firefox</a> or <a href="https://chrome.google.com/">Botnet</a> and come back &lt;3</p><a href="javascript:;" id=upload-btn class=btn>Select <span>or drop</span> file(s)</a>
        <input type=file id=upload-input name="files[]" multiple data-max-size=100MiB>
        <ul id=upload-filelist></ul>

        <div class="footer">
            <?php include('global/footer.html'); ?>
        </div>

        <script async src=pomf.min.js></script>

  <div class="background-img"></div>
</body>

</html>
