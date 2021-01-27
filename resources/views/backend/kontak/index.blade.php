@extends('backend.layout.index')

@section('pageTitle', 'Profile')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.css') }}" type="text/css" />
@endsection

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Profile Perusahaan</h3>
            </div>
            
            <div class="row">
                <div class="col-md-5">
                    <div class="x_panel">
                        <table class="table table-responsive table-bordered">
                            <tbody>
                                <tr>
                                    <td>Plant</td>
                                    <td>{{ $kontak->plant }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{{ $kontak->alamat }}</td>
                                </tr>
                                <tr>
                                    <td>Telepon</td>
                                    <td>{{ $kontak->telepon }}</td>
                                </tr>
                                <tr>
                                    <td>FAX</td>
                                    <td>{{ $kontak->fax }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $kontak->email }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-7">
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
                            {{-- <div class="col-md-4 col-sm-4 ptp10">
                                <div class="item form-group">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <textarea class="form-control" readonly>
                                            ProfileProfileProfileProfileProfileProfileProfileProfileProfileProfileProfileProfile
                                        </textarea>
                                    </div>
                                </div>
                            </div> --}}
                            
                            <div class="col-md-12  col-sm-8 ptp10">
                                
                                <form class="form-horizontal form-label-left" action="{{ url('admin/kontak/update/1') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Plant <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="plant" id="plant" class="form-control" value="{{ $kontak->plant }}"></textarea>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Alamat <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="alamat" id="alamat" class="form-control" value="{{ $kontak->alamat }}"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Telepon <span class="required">*</span></label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="telepon" name="telepon" class="form-control" type="text" value="{{ $kontak->telepon }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Fax <span class="required">*</span></label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="fax" name="fax" class="form-control" type="text" value="{{ $kontak->fax }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Email <span class="required">*</span></label>
                                        <div class="col-md-4 col-sm-6 col-xs-12">
                                            <input id="email" name="email" class="form-control" type="email" value="{{ $kontak->email }}">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4 col-md-6 col-md-offset-4">
                                            <button id="btnPost" name="btnPost" type="submit" class="btn btn-success">Update</button>
                                        </div>
                                    </div>
                                                    
                                </form>
                            
                            </div>
                        </div>
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