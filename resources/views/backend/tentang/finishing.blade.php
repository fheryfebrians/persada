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
				<h3 class="topspace">Tentang Tim Finishing</h3>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="table-responsive x_panel">
                        <table class="table">
                            <tr>
                                <td class="nopaddingtd">
                                    <table id="example" class="table table-striped responsive-utilities jambo_table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        @foreach ($finishings as $finishing)
                                            <tbody>
                                                <tr>
                                                    <td>{{ $finishing->description }}</td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                    {{ $finishings->links() }}
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
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
                            
                            <div class="col-md-12  ptp10">
                                
                                <form class="form-horizontal form-label-left" name="frmBlogPost" id="formPost" action="{{ url('admin/tentang/finishing/create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="item form-group">
                                        <label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Description <span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" name="description">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-6 col-sm-offset-4 col-md-8 col-md-offset-4">
                                            <button id="btnPost" name="btnPost" type="submit" class="btn btn-success">Submit</button>
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

{{-- <script type="text/javascript">
$(document).ready(function() {
  $('#summernote').summernote({
        placeholder: '',
        tabsize: 2,
        height: 300,
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
</script> --}}
@endsection