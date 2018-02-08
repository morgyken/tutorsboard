<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>

 
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<link href="{{URL::asset('theme/assets/css/bootstrap-theme.css  ') }}" rel="stylesheet">

        <div>
            <div class="input-group">
             
                    

                    <input type="file" class=" input-lg form-control" style="margin-top:20px;" placeholder="No file selected" name="file[]" multiple id="file-input">
                   
                </span>
                
            </div>
        </div>

<script type="text/javascript" >

    $(document).on('change', '.btn-file :file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
        });

        $(document).ready( function() {
        $('.btn-file :file').on('fileselect', function(event, numFiles, label) {

        var input = $(this).parents('.input-group').find(':text'),
        log = numFiles > 1 ? numFiles + ' files selected' : label;

        if( input.length ) {
        input.val(log);
        } else {
        if( log ) alert(log);
        }

        });

    });

</script>