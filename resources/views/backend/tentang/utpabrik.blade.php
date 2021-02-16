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
				<h3 class="topspace">Tentang Utilitas Pabrik</h3>
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
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        @foreach ($utpabriks as $utpabrik)
                                            <tbody>
                                                <tr>
                                                    <td class="p20">{!! $utpabrik->description !!}</td>
                                                    <td>
                                                        <form action="{{ url('admin/tentang/utpabrik/delete', $utpabrik->id) }}" method="post">
                                                            @csrf
                                                            <button class="btn btn-danger" type="submit">
                                                                <i class="fa fa-trash"></i> DELETE
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        @endforeach
                                    </table>
                                    {{ $utpabriks->links() }}
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
                            
                            <div class="col-md-12  ptp10">
                                
                                <form class="form-horizontal form-label-left" name="frmBlogPost" id="formPost" action="{{ url('admin/tentang/utpabrik/create') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    
                                    <div class="item form-group">
                                        <div class="col-md-12 col-sm-6 col-xs-12">
                                            <textarea name="description" id="utpabrik"></textarea>
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

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
  $('#utpabrik').summernote({
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
</script>
@endsection