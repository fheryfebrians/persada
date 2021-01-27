@extends('backend.layout.index')

@section('pageTitle', 'Create New Admin')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.css') }}" type="text/css" />
@endsection

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Create New Admin</h3>
			</div>
			
			<div class="x_panel">
				<div class="row">
					<div class="col-md-12  col-sm-12 ptp10">
						@if(session()->has('message.level'))
						    <div class="alert alert-{{ session('message.level') }}"> 
						    {!! session('message.content') !!}
						    </div>
						@endif
					</div>
					
					<div class="clearfix"></div>
					
					<div class="col-md-12  col-sm-12 ptp10">
						
						<form class="form-horizontal form-label-left" name="frmBlogPost" id="formPost" action="{{ url('admin/new/create') }}" method="post" enctype="multipart/form-data">
							@csrf
							
							<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>
    
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
    
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
    
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
    
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Tambah
                                    </button>
                                </div>
                            </div>
											
						</form>
					
					</div>
				</div>
			</div>
		</div>
		<!-- Dashboard End -->
	</div>
</div>
@endsection

@section('scripts')

<script src="{{ asset('admin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('admin/ckeditor/sample.js') }}" type="text/javascript"></script>
<script src="{{ asset('admin/ckeditor/config.js') }}" type="text/javascript"></script>
  
  
<script src="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.js') }}"></script>
<script src="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.js') }}"></script>
  
<script src="{{ asset('admin/js/jquery.validate.js') }}"></script>
<script src="{{ asset('admin/js/additional-methods.min.js') }}"></script>

@endsection