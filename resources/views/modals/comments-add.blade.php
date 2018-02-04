
                     
                     <!-- Comments Form -->
                    <div class="card collapse my-4" id="message">
                        <h5 class="card-header" style="margin-top: 20px;">Reply Student</h5>
                        <div class="card-body">
                            <form action="{{ route('post-comments', ['question_id' => $question['question_id']]) }}" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                
                                <input type="hidden" name="commtype" value="admin"  >
                                
                                <div class="form-group">
                                    <textarea class="form-control form-control input-lg" name="comment_body" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="usr">Include Files</label>

                                    @include('part.file-picker')

                                </div>
                                <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                        <hr>
                    </div>


                    <!-- Comments Form -->
                    <div class="card collapse my-4" id="Comment">
                        <h5 class="card-header">Send us a messge</h5>
                        <div class="card-body">
                            <form action="{{ route('post-comments', ['question_id' => $question['question_id']]) }}" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                               <input type="hidden" name="commtype" value="Comment"  >
                                <div class="form-group">

                                    <textarea class="form-control form-control input-lg" name="comment_body" rows="3"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="usr">Include Files</label>

                                    @include('part.file-picker')

                                </div>
                                <button type="submit" class="btn btn-primary  btn-lg btn-block">Submit</button>
                            </form>
                        </div>
                        <hr>
                    </div>


