<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin Courses | Dashboard</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@include('admin.includes.stylesheets')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('admin.includes.main-header')
@include('admin.includes.js-scripts')
<!-- Left side column. contains the logo and sidebar-->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less-->
		<section class="sidebar">
			@include('admin.includes.user-panel-sidebar')
			@include('admin.includes.sidebar-menu')
		</section>
	</aside>
	<!-- Content Wrapper. Contains page content-->
	<div class="content-wrapper">
		@yield('content')
	</div>
	<!-- /.content-wrapper-->
@include('admin.includes.footer')
@include('admin.includes.control-sidebar')
<!--
	Add the sidebar's background. This div must be placed
	immediately after the control sidebar
	-->
	<div class="control-sidebar-bg"></div>
	<!-- ./wrapper-->
</div>
</body>
</html>