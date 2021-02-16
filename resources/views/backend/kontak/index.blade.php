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
                                    <td>{!! $kontak->plant !!}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>{!! $kontak->alamat !!}</td>
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
                                            <input type="hidden" name="plant2" value="{{ $kontak->plant }}">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Alamat <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea name="alamat" id="alamat" class="form-control" value="{{ $kontak->alamat }}"></textarea>
                                            <input type="hidden" name="alamat2" value="{{ $kontak->alamat }}">
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
<script type="text/javascript">
$(document).ready(function() {
  $('#plant').summernote({
        placeholder: '',
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    $('#alamat').summernote({
        placeholder: '',
        height: 120,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
});
</script>
@endsection