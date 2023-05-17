<div class="row g-2">
 <!-- ========== Left Sidebar Start ========== -->
 <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 left-side-menu left-side-menu-detached p-4" style="background-color:#2c3e50;">
	<div class="leftbar-user text-white">
        <h3>
		<i class="fa fa-user-circle pr-2"></i>
            {{explode(" ",auth()->user()->name)[0]}}
        </h3>
	</div>
	<!--- Sidemenu -->
	<ul class="metismenu side-nav side-nav-light">
		<li type="none" class="side-nav-title side-nav-item s-3">Demo-Dashboard</li>
		<li type="none" class="side-nav-item active">
			<a href="{{route('dashboard')}}" class="side-nav-link">
			<i class="fa fa-th pr-2"></i>
			<span>Dashboard</span>
				
			</a>
		</li>
		<li type="none" class="side-nav-title side-nav-item s-3 ">User</li>
		<li type="none" class="side-nav-item active">
			<a href="{{route('user_list')}}" class="side-nav-link">
			<i class="fa fa-users pr-2" aria-hidden="true"></i>
				<span>Users List</span>
			</a>
		</li>
		<li type="none" class="side-nav-item active">
			<a href="{{ route('register-user') }}" class="side-nav-link">
				<i class="fa fa-user-plus pr-2"></i>
				<span>Registration</span>
			</a>
		</li>
		<li type="none" class="side-nav-title side-nav-item s-3">Home</li>
		<li type="none" class="side-nav-item active">
			<a href="{{ route('contentview') }}" class="side-nav-link">
			<i class="fa fa-home pr-2" aria-hidden="true"></i>
				<span>Home Pages</span>
			</a>
		</li>

		<li type="none" class="side-nav-title side-nav-item s-3">Pages</li>	
		<li type="none" class="side-nav-item active">
			<a href="{{ route('course')}}" class="side-nav-link">
			<i class="fa fa-archive pr-2" aria-hidden="true"></i>
				<span>Contents</span>
			</a>
		</li>
		<li type="none" class="side-nav-title side-nav-item s-3">Sign Out</li>
		<li type="none" class="side-nav-item active">
			<a href="{{ route('signout') }}" class="side-nav-link">
			<i class="fa fa-sign-out pr-2" aria-hidden="true"></i>
				<span>Logout</span>
			</a><br><br><br><br><br>
		</li>
	</ul>
</div>