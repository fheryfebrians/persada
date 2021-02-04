@extends('backend.layout.index')

@section('pageTitle', 'Daftar Banner')

@section('content')
<div class="clearfix midpart">
	<div class="row">
		<div class="col-sm-12 col-md-12">
			<div class="maintitle">
				<h3 class="topspace">Slider List</h3>
				<div class="timebox">
					<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#bannerModal">Add New Banner</a>
				</div>
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
						<div class="table-responsive">
							<table class="table">
								<tr>
									<td class="nopaddingtd">
										<table id="example" class="table table-striped responsive-utilities jambo_table">
											<thead>
												<tr class="headings">
													<th>ID</th>
                                                    <th>Banner</th>
                                                    <th>Action</th>
												</tr>
											</thead>
                                            @foreach ($banners as $banner)
                                                <tbody>
                                                    <tr>
														<td>{{ $banner->id }}</td>
                                                        <td>
                                                            <img src="{{ asset('storage/banner/'. $banner->banner) }}" alt="" style="width: 100px;">
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-danger btn-hover hapus" data-id="{{ $banner->id }}" data-action="{{ route('admin/banner/hapus',$banner->id) }}">
                                                                <i class="fa fa-trash"></i>
                                                              </button> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                        {{ $banners->links() }}
									</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Dashboard End -->
	</div>
</div>

<div class="modal" id="bannerModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add new banner</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ url('admin/banner/create') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-body">
                <input type="file" name="foto">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save changes</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </form>
      </div>
    </div>
</div>

<script type="text/javascript">
    $("body").on("click",".hapus",function(){
      var current_object = $(this);
      swal({
          title: "Apakah Anda Yakin?",
          text: "Data dan File yang ada akan dihapus ?",
          type: "error",
          showCancelButton: true,
          dangerMode: true,
          cancelButtonClass: '#DD6B55',
          confirmButtonColor: '#dc3545',
          confirmButtonText: 'Delete!',
      },function (result) {
          if (result) {
              var action = current_object.attr('data-action');
              var token = jQuery('meta[name="csrf-token"]').attr('content');
              var id = current_object.attr('data-id');
  
              $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
              $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
              $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
              $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
              $('body').find('.remove-form').submit();
          }
      });
  });
</script>

@endsection
