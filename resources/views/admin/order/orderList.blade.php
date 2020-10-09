@extends('admin.adminapp')
@section('header','orderList')
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
						<a href="#">orderList</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			OrderList 
			</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>OrderList Table
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
									 Name
								</th>
								<th class="center">
									 Store Name
								</th>
								<th class="center">
									 Amount
								</th>
								<th class="center">
									 Cashback
								</th>
								<th class="center">
									 Order Date
								</th>
								<th class="center">
									 Status
								</th>
								<th class="center">
									 View
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
										Alex
									</td>
									<td>
										Ebay
									</td>
									<td>
										600USD
									</td>
									<td>
										12USD
									</td>
									<td>
										2020-09-18
									</td>
									<td>
										<span class="label label-sm label-info">Pending</span>
									</td>
									<td>
										<a href = "/admin/orderView"> View </a>
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
										Henry
									</td>
									<td>
										Ebay
									</td>
									<td>
										1200USD
									</td>
									<td>
										24USD
									</td>
									<td>
										2020-09-18
									</td>
									<td>
										<span class="label label-sm label-danger">Hold on</span>
									</td>
									<td>
										<a href = "/admin/orderView"> View </a>
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
										Yury
									</td>
									<td>
										Amazon
									</td>
									<td>
										600USD
									</td>
									<td>
										12USD
									</td>
									<td>
										2020-09-18
									</td>
									<td>
										<span class="label label-sm label-success">Closed</span>
									</td>
									<td>
										<a href = "/admin/orderView"> View </a>
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
										Ivan
									</td>
									<td>
										Alibaba
									</td>
									<td>
										600USD
									</td>
									<td>
										12USD
									</td>
									<td>
										2020-09-18
									</td>
									<td>
										<span class="label label-sm label-info">Pending</span>
									</td>
									<td>
										<a href = "/admin/orderView"> View </a>
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