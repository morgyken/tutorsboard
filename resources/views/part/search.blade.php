


    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>




        <input name="category"  class="typeahead form-control input-lg" placeholder="Search Category" type="text">



    <script type="text/javascript">

        var path = "autocomplete";

        $('input.typeahead').typeahead({

            source:  function (query, process) {

                return $.get(path, { query: query }, function (data) {

                    return process(data);

                });

            }

        });

    </script>

