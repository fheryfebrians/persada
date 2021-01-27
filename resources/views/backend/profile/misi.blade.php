@extends('backend.layout.index')

@section('pageTitle', 'Misi')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.css') }}" type="text/css" />
@endsection

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Misi Perusahaan</h3>
            </div>
            
            <div class="row">
                <div class="col-md-5">
                    <div class="x_panel">
                        {{-- @foreach ($persada as $persada) --}}
                        <p>{{ $persada->misi }}</p>
                        {{-- @endforeach --}}
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
                                
                                <form class="form-horizontal form-label-left" name="frmBlogPost" id="frmBlogPost" action="{{ url('admin/misi/update/1') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                            <textarea name="misi" id="" cols="100" rows="20"></textarea>
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
{{-- 
<script type="text/javascript">
$(document).ready(function () {

	CKEDITOR.replace('profile',
    {
        filebrowserBrowseUrl :"{{ asset('admin/ckeditor/filemanager/browser/default/browser.html?Connector=admin/ckeditor/filemanager/connectors/php/connector.php') }}",
        filebrowserImageBrowseUrl : "{{ asset('admin/ckeditor/filemanager/browser/default/browser.html?Type=Image&Connector=admin/ckeditor/filemanager/connectors/php/connector.php') }}",
        filebrowserFlashBrowseUrl :"{{ asset('admin/ckeditor/filemanager/browser/default/browser.html?Type=Flash&Connector=admin/ckeditor/filemanager/connectors/php/connector.php') }}",
		filebrowserUploadUrl  :"{{ asset('admin/ckeditor/filemanager/connectors/php/upload.php?Type=File') }}",
		filebrowserImageUploadUrl : "{{ asset('admin/ckeditor/filemanager/connectors/php/upload.php?Type=Image') }}",
		filebrowserFlashUploadUrl : "{{ asset('admin/ckeditor/filemanager/connectors/php/upload.php?Type=Flash') }}" 
	}); 
	
});
</script> --}}
@endsection