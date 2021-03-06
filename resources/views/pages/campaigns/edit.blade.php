@extends('layouts.app')

@section('content')
<form action="{{ route('campaign.update', [
        'slug' => $brand->slug,
        'uuid' => $campaign->uuid ]) }}" method="post">
    @csrf
    @method('PUT')
    @include('components.campaign_navbar')
        <div class="wrap">
            <div class="home-header">
                <h2 class="inline-pc">{{ $brand->brand_name }}</h2>
                <h5 class="inline-pc"> / New Campaign</h5>
                <div class="mt-1">
                    <span>lorem some quote here lorem.</span>
                </div>
                @include('components.sessions')
            </div>
            <div class="home-body">
                <span id="body-tab">Campaign info</span>
                <hr class="mt-0">
                @include('components.errors')
                <div class="create-campaign-outer">
                    <!-- name -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Title</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" name="title"
                                    value="{{ $campaign->name }}"
                                    class="form-control form-control-lg">
                        </div>
                    </div>
                    <!-- subject -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Subject</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" name="subject"
                                       value="{{ $campaign->subject }}"
                                       class="form-control form-control-lg">
                        </div>
                    </div>
                    <!-- from name -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>From name</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control  form-control-lg"
                                       value="{{ old('from_name') ? old('from_name') : $campaign->from_name }}"
                                       name="from_name">
                        </div>
                    </div>
                    <!-- from email -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>From email</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg"
                                       value="{{ old('from_email') ? old('from_email') : $campaign->from_email }}"
                                       name="from_email">
                        </div>
                    </div>
                    <!-- Reply to -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Reply to</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg"
                                           value="{{ old('reply_to') ? old('reply_to') : $campaign->reply_to }}"
                                           name="reply_to">
                        </div>
                    </div> 
                    <!-- Allowed files -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Allowed files</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg"
                                    name="allowed_files"
                                    value="{{ $campaign->allowed_files }}">
                        </div>
                    </div>
                    <!-- query string -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Query Strings</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-lg"
                                    name="query_string"
                                    value="{{ old('query_string') }}">
                        </div>
                    </div> 
                    <!-- brand logo -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Brand Logo</h5>
                        </label>
                        <div class="col-sm-6">
                            <input type="file" class="form-control-file" id="exampleFormControlFile1">                            
                        </div>
                    </div> 
                    <!-- description -->
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">
                            <h5>Description</h5>
                        </label>
                        <div class="col-sm-6">
                            <textarea name="description" rows="4" class="form-control">{{ $campaign->description }}</textarea>                                                    
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- wrap ends -->
        </div>          
        <!-- body ends -->
</form>
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