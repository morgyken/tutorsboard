<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Autocomplete - Remote JSONP datasource</title>
  
  <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</head>
<body>
<br />
<br />
<div class="container" style="width:500px;">
  <input type="text" name="searchItem" class="form-control" id="searchItem" placeholder="Search">
  <div class="panel-body">
    <table>
      <tr>
        <td>ID</td>
        <td> <input type="text" id="id" class="form-control" placeholder="id" name="id"></td>
      </tr>
      <tr>
        <td>University Name</td>
        <td> <input type="text" id="name" class="form-control" placeholder="Name" name="name"></td>
      </tr>
      
    </table>
  </div>
</div>

<script type="text/javascript">
  $('#searchItem').autocomplete({
    source:'{!! URL::route('university') !!}',
    minlength:1,
    autoFocus:true,
    select: function(e, ui){
      console.log('success');
    }
  })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>


