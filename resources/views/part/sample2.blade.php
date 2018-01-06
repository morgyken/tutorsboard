<!DOCTYPE html>
<html>
<head>
<script src="https://code.jquery.com/jquery.min.js"></script>
<link href={{ URL::to('css/bootstrap-homepage.css')}} rel="stylesheet" type="text/css" />

<script type="text/javascript">
div {
  font-size: 0;
}

a {
  font-size: 16px; 
  display: inline-block;
  margin-bottom: 8px;
  width: calc(50% - 4px);
  margin-right: 8px;
}

a:nth-of-type(2n) {
  margin-right: 0;
}

@media screen and (min-width: 50em) {
  a {
    width: calc(25% - 6px);
  }

  a:nth-of-type(2n) {
    margin-right: 8px;
  }

  a:nth-of-type(4n) {
    margin-right: 0;
  }
}

</script>

  <meta charset="utf-8">
  <title>JS Bin</title>

  
</head>
<body>
  <div class="container-fluid">
  <div>
  <a href="http://lorempixel.com/800/600/nature/7"> 
    <figure>
      <img src="http://lorempixel.com/800/600/nature/7" alt="">
    </figure>
  </a>

  <!-- other anchors here ... -->

</div>
  </div>

</body>
</html>