<div class="container shadow {{$rows->class_css}} p-0">
    <div class="row d-flex align-items-center">
        @foreach($rows->columns as $i=>$row)
            @if($i==0)
                <div class="col-lg-6 col-md-6 text-right">
                    {!! $row->container !!}
                </div>
                <div class="col-lg-6 col-md-6 pr-5">
                    <h3 class="text-center py-5">Get in touch</h3>
                    {{ Form::open(array('url' => 'foo/bar', 'method' => 'POST')) }}
                        <div class="form-group">
                            <label for="lbl_name">Name</label>
                            <input type="text" class="form-control" id="txt_Name" name="fullname" placeholder="full name" required>
                        </div>
                        <div class="form-group">
                            <label for="lbl_email">Email</label>
                            <input type="email" class="form-control" id="email" name="emailAddress" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group">
                            <label for="lbl_subject">Subject</label>
                            <input type="text" class="form-control" id="txt_subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="form-group">
                            <label for="lbl_subject">Review</label>
                            <textarea name="review" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            {!! app('captcha')->display() !!}
                        </div>
                        <button type="submit" class="btn btn-primary btn-round" name="btn-submit">Submit</button>
                    {{ Form::close() }}
                </div>
            @else
                <div class="col-lg-12 col-md-12">
                    <div class="px-5 my-3">
                        {!! $row->container !!}
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>
