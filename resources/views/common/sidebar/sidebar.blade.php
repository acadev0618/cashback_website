<div class="page-sidebar-wrapper">
	<!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
	<!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->

	<div class="page-sidebar navbar-collapse collapse">
		<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
			<!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
			<li class="sidebar-toggler-wrapper">
				<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				<div class="sidebar-toggler">
				</div>
				<!-- END SIDEBAR TOGGLER BUTTON -->
			</li>
			@if($menu == "dashboard")
			<li class="start active open">
			@else 
			<li class="">
			@endif
				<a href="/admin/dashboard">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					
				</a>
			</li>
			
			@if($menu == "user")
			<li class="start active open">
			@else 
			<li class="">
			@endif
				<a href="/admin/userlist">
					<i class="icon-user"></i>
					<span class="title">User</span>
					<span class="selected"></span>
					
				</a>
			</li>
			@if($menu == "store")
			<li class="start active open">
			@else 
			<li class="">
			@endif
				<a href="/admin/storelist">
					<i class="icon-basket"></i>
					<span class="title">Store</span>
					<span class="selected"></span>
				</a>
			</li>
			@if($menu == "order")
			<li class="start active open">
			@else 
			<li class="">
			@endif
				<a href="/admin/orderlist">
					<i class="icon-basket"></i>
					<span class="title">Order</span>
					<span class="selected"></span>
				</a>
			</li>
			@if($menu == "transaction")
			<li class="start active open">
			@else 
			<li class="">
			@endif
				<a href="/admin/transactionlist">
					<i class="fa fa-credit-card"></i>
					<span class="title">Transaction</span>
					<span class="selected"></span>
				</a>
			</li>
			<!-- <li class="start active open">
				<a href="javascript:;">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					<span class="selected"></span>
					<span class="arrow open"></span>
				</a>
			</li> -->
		</ul>
		<!-- END SIDEBAR MENU -->
	</div>
</div>