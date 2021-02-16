@extends('backend.layout.index')

@section('pageTitle', 'Add New Gallery')

@section('styles')
<link rel="stylesheet" href="{{ asset('admin/js/jquery-ui-1.11.4.custom/jquery-ui.css') }}" type="text/css" />
<link rel="stylesheet" href="{{ asset('admin/js/timepicker/jquery-ui-timepicker-addon.css') }}" type="text/css" />
@endsection

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Add New Gallery</h3>
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
						
						<form class="form-horizontal form-label-left" name="frmBlogPost" id="formPost" action="{{ url('admin/galeri/create') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="item form-group">
								<label for="" class="control-label col-md-4 col-sm-4 col-xs-12">Bidang <span class="required">*</span></label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<select name="bidang" id="">
										<option value="">--Pilih Bidang--</option>
										<option value="Tim Tulangan">Tim Tulangan</option>
										<option value="Tim Produksi">Tim Produksi</option>
										<option value="Tim Finishing">Tim Finishing</option>
										<option value="Tim Utilitas Pabrik">Tim Utilitas Pabrik</option>
										<option value="K3">K3</option>
									</select>
								</div>
							</div>

							<div class="item form-group">
								<label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Foto  <span class="required">*</span></label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<input id="foto" name="foto" class="form-control" type="file" value="" />
								</div>
                            </div>
                            
                            <div class="item form-group">
								<label class="control-label col-md-4 col-sm-4 col-xs-12" for="name">Keterangan <span class="required">*</span></label>
								<div class="col-md-4 col-sm-6 col-xs-12">
									<textarea name="keterangan" id="galeri" class="form-control"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-sm-6 col-sm-offset-4 col-md-6 col-md-offset-4">
									<button id="btnPost" name="btnPost" type="submit" class="btn btn-success">Submit</button>
									<button type="button" class="btn btn-primary" onclick="location.href='{{ url('admin/galeri')}}'">Cancel</button>
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
<script type="text/javascript">
$(document).ready(function() {
  $('#galeri').summernote({
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