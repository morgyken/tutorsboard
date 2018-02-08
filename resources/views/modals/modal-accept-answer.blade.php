

                <div class="card collapse my-4" id="modal-accept">
                     <div class="modal-header">
                        
                        <h4 class="modal-title">Are you Sure you are satisfied with the answer? </h4>
                    </div>
                        <div class="card-body">
                              <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <input type="hidden" name="update" value="accept" >

                          <input type="hidden" name="user_id" value="{{ Auth::user()->email }}">
                          @if(Auth::user()->user_role === 'admin')
                          <input type="" class="form-control input-lg" name="tutor_id">

                          @endif

                        <section class="mbr-section content7 cid-qIEMywmUVk" id="content7-1c">  
    

                            <div class="container">
                                <div class="media-container-row">
                                    <div class="col-12 col-md-12">
                                        <div class="media-container-row">
                                            <div class="media-content col-md-8">
                                                <div class="mbr-section-text">
                                                    <p class="mbr-text align-right mb-0 mbr-fonts-style display-7">
                                                       <strong>Ensure that you are satisfied with the answer before you accept it. </strong> Once the answer has been accepted, you can still request for revision. There is one week period for review after which the question will automatically close. 
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mbr-figure col-md-4">                                              
                                                    <button type="input" class="btn btn-md btn-success btn-block"> Accept Answer</button>
                                                    <button type="reset" class="btn btn-md btn-warning btn-block" data-dismiss="collapse">Back</button>
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