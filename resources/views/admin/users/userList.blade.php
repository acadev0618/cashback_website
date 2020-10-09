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
						<a href="#">userList</a>
					</li>
				</ul>
			</div>
			<h3 class="page-title">
			UserList <small>reports & statistics</small>
			</h3>
			<div class="row">
				<div class="col-md-12">
					<!-- BEGIN EXAMPLE TABLE PORTLET-->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-edit"></i>UserList Table
							</div>
						</div>
						<div class="portlet-body">
							<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
							<thead>
							<tr> 
								<th class="center">
									 Username
								</th>
								<th class="center">
									 Full Name
								</th>
								<th class="center">
									 Points
								</th>
								<th class="center">
									 Notes
								</th>
								<th class="center">
									 Approve
								</th>
								<th class="center">
									 Delete
								</th>
							</tr>
							</thead>
							<tbody class="center">
								<tr>
									<td>
										 alex
									</td>
									<td>
										 Alex Nilson
									</td>
									<td>
										 1234
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 lisa
									</td>
									<td>
										 Lisa Wong
									</td>
									<td>
										 434
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 nick12
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 232
									</td>
									<td class="center">
										 power user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 goldweb
									</td>
									<td>
										 Sergio Jackson
									</td>
									<td>
										 132
									</td>
									<td class="center">
										 elite user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 webriver
									</td>
									<td>
										 Antonio Sanches
									</td>
									<td>
										 462
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
									</td>
									<td>
										<a class="delete" href="javascript:;">
										Delete </a>
									</td>
								</tr>
								<tr>
									<td>
										 gist124
									</td>
									<td>
										 Nick Roberts
									</td>
									<td>
										 62
									</td>
									<td class="center">
										 new user
									</td>
									<td>
										<input type = "checkbox" class = "" onchange = "userApprove()" style = "text-align:center">
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