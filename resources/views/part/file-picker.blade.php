<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: auto%;
        min-height: 100%;
        font-size: auto;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        background: red;
        cursor: inherit;
        display: block;
    }
    input[readonly] {
        background-color: white !important;
        cursor: text !important;
    }
</style>
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<link href="{{URL::asset('theme/assets/css/bootstrap-theme.css  ') }} rel="stylesheet">

        <div>
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-primary btn-file">

                        Browse Files... <input type="file" class="input-lg" placeholder="No file selected" name="file[]" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
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