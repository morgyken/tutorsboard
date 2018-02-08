 <div class="card collapse my-4" id="Comment">
                     <div class="modal-header">
                        
                        <h4 class="modal-title">Send a message to customer care</h4>
                    </div>
                        <div class="card-body">
                          <form action="{{ route('post-comments', ['question_id' => $question['question_id']]) }}" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                               <input type="hidden" name="commtype" value="Comment"  >
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
                                                       <strong>Fill in the following to send comments</strong>

                                                       <div class="form-group">

                                                    <textarea class="form-control form-control input-lg" name="comment_body" rows="3"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        
                                                        <label for="usr">Include Files</label>

                                                        @include('part.file-picker')

                                                    </div> 


                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mbr-figure col-md-4">                                              
                                                    <button type="input" class="btn btn-md btn-success btn-block"> Send Comments</button>
                                                    <button type="reset" class="btn btn-md btn-warning btn-block" data-dismiss="modal"> Cancel</button>
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