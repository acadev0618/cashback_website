@extends('admin.adminapp')
@section('header','userList')
@section('css')

<link href="{{asset('assets/global/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-datepicker/css/datepicker.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
@endsection
@section('content')
	<div class="page-content-wrapper">
		<div class="page-content">
			<div class="page-bar">
				<ul class="page-breadcrumb">
					<li>
						<i class="fa fa-home"></i>
						<a href="/admin/dashboard">Home</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="/admin/storelist">store</a>
						<i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="#">store Edit</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			Ebay Edit <small></small>
			</h3>
			<div class="row">
				<div class="col-md-12">
					<form class="form-horizontal form-row-seperated" action="#">
						<div class="portlet">
							<div class="portlet-title">
								
							</div>
							<div class="portlet-body">
								<div class="tabbable">
									
									<div class="tab-content no-space">
										<div class="tab-pane active" id="tab_general">
											<div class="form-body">
												<div class="form-group">
													<label class="col-md-2 control-label">Name: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="text" class="form-control" name="product[name]" placeholder="Ebay">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Description: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<textarea class="form-control" name="product[description]" placeholder="This is good ecormmerce site"></textarea>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">CashBack(%): <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="number" class="form-control" name="cashback" placeholder="5%">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Category: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<select class="form-control">
															<option>Travel</option>
															<option>Health</option>
															<option>Popular</option>
															<option>Grecerius</option>
															<option>Travel</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Logo: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="file" class="form-control" name="product[price]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">Image: <span class="required">
													* </span>
													</label>
													<div class="col-md-10">
														<input type="file" class="form-control" name="product[price]" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-2 control-label">

													</label>
													<div class="col-md-10">
														<button class="btn btn-success">Save</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
<script src="{{asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('assets/global/plugins/select2/select2.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/admin/pages/scripts/table-editable.js')}}"></script>
<script>
	jQuery(document).ready(function() {  
		Metronic.init(); 
	 	Layout.init(); // init layout
   		QuickSidebar.init(); // init quick sidebar
		Demo.init();  
		// EcommerceProductsEdit.init();
	})
</script>
@endsection