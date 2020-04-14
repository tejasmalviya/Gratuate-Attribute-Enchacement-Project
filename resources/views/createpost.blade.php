@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('postname') ? ' has-error' : '' }}">
                            <label for="postname" class="col-md-4 control-label">Post Title</label>

                            <div class="col-md-6">
                                <input id="postname" type="postname" class="form-control" name="postname" value="{{ old('postname') }}" required autofocus>

                                @if ($errors->has('postname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('postcontnet') ? ' has-error' : '' }}">
                            <label for="postcontnet" class="col-md-4 control-label">Post Content</label>

                            <div class="col-md-6">
                                <input id="postcontnet" type="postcontnet" class="form-control" name="postcontnet" required>

                                @if ($errors->has('postcontnet'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postcontnet') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
