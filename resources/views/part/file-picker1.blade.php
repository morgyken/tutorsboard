
  <style type="text/css">
      
    .btn-file {
      position: relative;
      overflow: hidden;
    }
    .btn-file input[type=file] {
      position: absolute;
      top: 0;
      right: 0;
      min-width: 100%;
      min-height: 100%;
      font-size: 100px;
      text-align: right;
      filter: alpha(opacity=0);
      opacity: 0;
      background: red;
      cursor: inherit;
      display: block;
    }
    .input-group-button{
        height:120%;
    }
    input[readonly] {
      background-color: white !important;
      cursor: text !important;
    }
</style>

<script type="text/javascript">
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
<div class="container" style="margin-top: 20px;">
    <div class="row">
       
        <div>
           
            <div class="input-group">
                <span class="input-group-btn">
                    <span class="btn btn-warning btn-lg btn-file">
                        Browse &hellip; <input type="file" class="form-control" placeholder="No file selected" 
                                               name="file[]" multiple>
                    </span>
                </span>
                <input type="text" class="form-control" readonly>
            </div>
        </div>
        
    </div>
</div>