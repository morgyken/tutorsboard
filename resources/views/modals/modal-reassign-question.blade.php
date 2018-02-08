
            <div class="card collapse my-4" id="myModal-reassign">
             <div class="modal-header">                
                <h4 class="modal-title">To reassign, you have to select the tutor that you wish to work on your order</h4>
            </div>
            <div class="card-body">
            <form action="{{route('update-question', ['question_id' => $question['question_id']])}}" method="post" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="update" value="reassigned">

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
                                                       

                                                       <div class="form-group">
                                                          <label for="tutor"> <h4>Select tutor to reassign to </h4></label>
                                                           <select class="form-control" name="tutor_id">
                                                              @foreach($tutors as $item)
                                                                <option value="{{$item->email}}">
                                                                  {{$item->name}}
                                                                </option>
                                                              @endforeach
                                                            </select>
                                                       </div>
                                                       <div class="form-group">
                                                          <textarea class="form-control form-control input-lg"    name="comment_body" rows="3">
                                                            
                                                          </textarea>                                            
                                                    </div> 
                                                    <p> The request will be done within 24 hours.</p>

                                                    </p>
                                                </div>
                                            </div>
                                            <div class="mbr-figure col-md-4">                                     
                                                    <button type="input" class="btn btn-md btn-success btn-block">Cancel the question</button>
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

