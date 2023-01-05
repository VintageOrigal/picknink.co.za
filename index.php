<?php
header('HTTP/1.1 503 Service Temporarily Unavailable',true,503);
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 172800'); ?>

<head>
<title>this domain is temporarily unavailable</title>

<style media="screen" type="text/css">

html, body, div, object, h2
{
  margin: 0;
  padding: 0;
  border: 0;
  outline: 0;
  font-weight: normal;
  font-style: normal;
  font-size: 1em;
  font-family: inherit;
  vertical-align: baseline;
  background: transparent
}

h2
{
  font-family: Calibri, Arial, "Helvetica Neue", Helvetica, sans-serif;
  font-weight: normal;
  color: #ffa700;
  font-size: 18px;
  line-height: 20px;
  margin-bottom: 2px
}

body { background:#494949}

#content { position: absolute; left: 50%; top: 50%; text-align: center; width: 708px; height: 100px; margin: -50px 0 0 -354px}
#content h2 { color:#fff; font: bold 43px/58px Arial; margin-bottom: 10px; text-shadow: 0 1px 1px #000}
</style>
</head>

<body>
<div id="content">
  <h2>Website is temporarily unavailable</h2>
</div>
</body>
