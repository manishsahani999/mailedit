@extends('layouts.app')

@section('links')
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.1/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="wrap">
        <div class="main-heading">
            <div class="title is-inline">{{ $brand->brand_name }}</div>
            <div class="title is-6 is-inline">/ New Campaign</div>
        </div>
        <div class="brand-body m-t-1 m-l-1">
            @include('components.errors')
            {{--form--}}
            <form action="{{ route('campaign.store', $brand->slug) }}" method="post">
                @csrf
                <div class="row">
                    <div class="col is-4">
                        {{--Select template--}}
                        <div class="form-group">
                            <label>Select Template</label>
                            <select class="form-control">
                                <option>Select template</option>
                            </select>
                        </div>
                        {{--Name--}}
                        <div class="form-group">
                                <label> Name</label>
                                <input type="text" name="name"
                                       value="{{ old('name') }}"
                                       class="form-control">

                        </div>
                        {{--subject--}}
                        <div class="form-group">
                                <label> Subject</label>
                                <input type="text" name="subject"
                                       value="{{ old('subject') }}"
                                       class="form-control">

                        </div>
                        {{--From name--}}
                        <div class="form-group">
                            <label class="label"> From name </label>
                                <input type="text" class="form-control"
                                       value="{{ old('from_name') }}"
                                       name="from_name">
                        </div>
                        {{--From email--}}
                        <div class="form-group">
                            <label class="label"> From email</label>
                                <input type="text" class="form-control"
                                       value="{{ old('from_email') }}"
                                       name="from_email">
                        </div>
                        {{--Reply to--}}
                        <div class="form-group">
                            <label class="label"> Reply to email</label>
                                    <input type="text" class="form-control"
                                           value="{{ old('reply_to') }}"
                                           name="reply_to">
                        </div>
                        {{--Plain text--}}
                        <div class="form-group">
                            <label class="label"> Plain text</label>
                                <textarea class="form-control" name="text" id="" cols="30" rows="10"></textarea>
                        </div>
                        {{--Allowed files--}}
                        <div class="form-group">
                            <label class="label"> Allowed attachments file types </label>
                                    <input type="text" class="form-control"
                                           name="allowed_files"
                                           value="{{ old('allowed_files') }}"
                                           required>
                        </div>
                        {{--Brand logo--}}
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Brand logo</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">
                        </div>
                        {{--button--}}
                        <div class="form-group">
                            <button class="btn" name="status" value="draft">Save</button>
                            <button class="btn btn-dark" name="status" value="sent">Save and Exit</button>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="title">Html code</div>
                        {{--html--}}
                        <div class="form-group">
                                <textarea name="htmltext" id="htmltext" class="textarea"></textarea>
                        </div>
                        {{--description--}}
                        <div class="form-group">
                            <label>Description</label>
                                    <textarea name="description"  class="form-control"></textarea>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        ClassicEditor
            .create( document.querySelector( '#htmltext' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection