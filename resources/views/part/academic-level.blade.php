<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  
  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    

  <script src="https://code.jquery.com/jquery-3.2.1.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css">

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

</head>
<body>

  <input type="text" name="academic_level" class="form-control" id="searchItem" placeholder="Academic level">
  


<script type="text/javascript">
  $('#searchItem').autocomplete({
    source: '{!! URL::route('academic-level') !!}',
    minlength:1,
    autoFocus:true,
    select: function(e, ui){
      console.log('success');
    }
  })
</script>
</body>
</html>


