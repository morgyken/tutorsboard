


                <div class="card collapse my-4" id="myModal-revision">
                     <div class="modal-header">
                        
                        <h4 class="modal-title">Are you sure you want the order on revision? </h4>
                    </div>
                        <div class="card-body">
                              <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                        <input type="hidden" name="update" value="revision" >

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
                                                       <strong>You can put your order on revision </strong> 
                                                       You have one week for the order to be put on revision. You can also request another tutor as well. Just contact admin to request another tutor.

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mbr-figure col-md-4">                                              
                                                    <button type="input" class="btn btn-md btn-success btn-block">Put order on Revision</button>
                                                    <button type="reset" class="btn btn-md btn-warning btn-block" data-dismiss="modal">Back</button>
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





