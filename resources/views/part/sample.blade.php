<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel 5.4 Bootstrap Typeahead Autocomplete</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">



</head>

<body>

<div class="container">

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">

            <div class="panel panel-primary">

                <div class="panel-heading">Laravel 5.4 Bootstrap Typeahead Autocomplete</div>

                <div class="panel-body">

                    <div class="form-group">

                        <input name="search_text" placeholder="Search Text" class="form-control" id="search_text" />

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script type="text/javascript">

    $(document).ready(function() {
        src = "{{ route('searchajax') }}";
        $("#search_text").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: src,
                    dataType: "json",
                    data: {
                        term : request.term
                    },
                    success: function(data) {
                        response(data);

                    }
                });
            },
            minLength: 3,

        });
    });
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
<script src="http://demo.expertphp.in/js/jquery.js"></script>
<script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>

</body>

</html>
