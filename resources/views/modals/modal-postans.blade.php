 <div class="card collapse my-4" id="myModal-ans">
                     <div class="modal-header">
                        
                        <h4 class="modal-title">Are you Sure you want to Answer the Question?</h4>
                    </div>
                        <div class="card-body">
                             <form action="{{ route('update-question', ['question_id' => $question['question_id']]) }}"  enctype="multipart/form-data" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                         <input type="hidden" name="update" value="postAnswer">
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
                                                    <p> Ensure you do not coppy from anywhere. HAve your answers posted correctly and be sure that the answer posted is not copied from anywhere else. </p>                      
                                    
                                                     
                                                    <div class="form-group">
                                                        <textarea class="form-control form-control input-lg" name="answer_body" rows="6"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="usr">Include Files</label>
                                                        @include('part.file-picker')
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mbr-figure" style="width:15%;">                                              
                                                    <button type="input" class="btn btn-success btn-block"> Commit to Answer</button>
                                                    <button type="reset" class="btn btn-warning btn-block" data-dismiss="modal"> Cancel</button>
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







