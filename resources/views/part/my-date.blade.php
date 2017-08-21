<div class="container">
    <form action="" class="form-horizontal"  role="form">
        <fieldset>
            <div class="form-group">
                <label for="dtp_input1" class="col-md-12 control-label">Select Deadline</label>
                <div class="container">
                    <div class="col-sm-12" style="height:130px;">
                        <div class="form-group">
                            <div class='input-group date' id='datetimepicker10'>
                                <input type='text' name= "date1" class="form-control" />
                                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar">
                    </span>
                </span>
                            </div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(function () {
                            $('#datetimepicker10').datetimepicker({
                                viewMode: 'years',
                                format: 'yyyy-mm-dd h:i'
                            });
                        });
                    </script>
                </div>

            </div>
        </fieldset>
    </form>
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('date/sample/jquery/jquery-1.8.3.min.js') }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('date/sample/bootstrap/js/bootstrap.min.js')  }}"></script>
<script type="text/javascript" src="{{URL::asset('date/js/bootstrap-datetimepicker.js')  }}" charset="UTF-8"></script>
<script type="text/javascript" src="{{URL::asset('date/js/locales/bootstrap-datetimepicker.fr.js')  }}" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    $('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        minView: 2,
        forceParse: 0
    });
    $('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
    });
</script>
