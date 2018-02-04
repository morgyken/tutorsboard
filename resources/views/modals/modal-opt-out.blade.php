


 <div class="card collapse my-4" id="myModal-optout">
                     <div class="modal-header">
                        
                        <h4 class="modal-title">Are you Sure you want to opt out?</h4>
                    </div>
                        <div class="card-body">
                            <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    
                            <input type="hidden" name="update" value="optout">

                          <input type="hidden" name="user_id" value="{{ Auth::user()->email }}">
                       
                          @if(Auth::user()->user_role === 'admin')

                          <input type="" class="form-control input-lg" name="tutor_id">

                          @endif

                        <section class="mbr-section content7 cid-qIEMywmUVk" id="content7-1c">  
    

                            <div class="container">
                                <div class="media-container-row">
                                    <div class="col-12 col-md-8">
                                        <div class="media-container-row">
                                            <div class="media-content">
                                                <div class="mbr-section-text">
                                                    <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">
                                                       <strong><h2> Warning: You must give a reason for opting out!</h2>
                                                       </strong> After deciding to opt out,  send us a reason below the question. Note that a reason for opting must be given. Also note that you had committed to give a professional answer for the question.
                                                    </p>

                                                    <textarea name="reason" class="form-control" rows="5"></textarea>
                                                </div>
                                            </div>
                                            <div class="mbr-figure" style="width:15%;">                                              
                                                    <button type="input" class="btn btn-md col-sm-4 btn-success btn-block">Opt Out of the Question</button>
                                                    <button type="reset" class="btn btn-md col-sm-4 btn-warning btn-block" data-dismiss="modal"> Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>                        

                    </form>
                        </div>
                        <hr>
                    </div>




