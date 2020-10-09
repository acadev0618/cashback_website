@extends('admin.adminapp')
@section('header','userList')
@section('css')

<link href="{{asset('assets/global/css/components.css')}}" id="style_components" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/select2/select2.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
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
						<a href="#">storeList</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			StoreList <small>reports & statistics</small>
			</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>StoreList Table
							</div>
							<div class="add-button">
								<a href="/admin/addStore" class="btn btn-danger" onclick="addStore()">Add Store</a>
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr> 
								<th class="center">
									 No
								</th>
								<th class="center">
									 StoreName
								</th>
								<th class="center">
									 Country
								</th>
								<th class="center">
									 CashBack(%)
								</th>
								<th class="center">
									 Category
								</th>								
								<th class="center">
									 Edit
								</th>
								<th class="center">
									 Delete
								</th>
							</tr>
							</thead>
							<tbody class="center">
								<tr>
									<td class="center">
										 1
									</td>
									<td>
										 Ebay
									</td>
									<td>
										 United State
									</td>
									<td>
										 6
									</td>
									<td>
										 Travel
									</td>
									<td>
										<a href = "/admin/storeEdit"> Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td class="center">
										 2
									</td>
									<td>
										 Amazon
									</td>
									<td>
										 United State
									</td>
									<td>
										 10
									</td>
									<td>
										 Travel
									</td>
									<td>
										<a href = "#"> Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td class="center">
										3
									</td>
									<td>
										 Alibaba
									</td>
									<td>
										 China
									</td>
									<td>
										8
									</td>
									<td>
										 Travel
									</td>
									<td>
										<a href = "#"> Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td class="center">
										4
									</td>
									<td>
										 Walmart
									</td>
									<td>
										 United State
									</td>
									<td>
										 6
									</td>
									<td>
										 Travel
									</td>
									<td>
										<a href = "#"> Edit </a>
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
							</tbody>
							</table>
						</div>
					</div>
					<!-- END EXAMPLE TABLE PORTLET-->
				</div>
			</div>
		</div>
	</div>
@endsection
@section('script')
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
		TableEditable.init();
	})
</script>
@endsection