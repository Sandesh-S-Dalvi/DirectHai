@extends('layout.master')

@section('content')

<div class="container" id="main">
	<div class="row" id="Header">
		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">YourAgent</a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Link</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!-- <li><a href="#">Link</a></li> -->
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Account info<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</linki>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- <div class="row" id="profile">
			<div class="container-fluid" style="padding:8px">
				...
				
			</div> -->
		</div>
		<div class="row" id="Search">
			<div class="col-md-10">
				<div class="row">
					<div class="col-md-3">
						<div id="filter" style="height: 390px;border: 1px solid Blue">
							Filter
						</div>
					</div>
					<div class="col-md-9">
						<div class="row" id="breadcrumb">
							<ol class="breadcrumb">
								<li><a href="#">Home</a></li>
								<li class="active">Search</li>
							</ol>
						</div>
						<div class="row" id="result" style="height: 330px;border: 1px solid Blue">
							Search Result
						</div>
						<div class="row" id="advt1" style="height: 90px;border: 1px solid Blue">
							Advertisement_base
						</div>
					</div>
				</div>		
			</div>
			<div class="col-md-2" id="advtside">
				<div class="row" id="advtside1" style="height: 200px ;border: 1px solid Blue">
					Advt_side1
				</div>
				<div class="row" id="advtside2" style="height: 200px;border: 1px solid Blue">
					Advt_side2
				</div>
			</div>
		</div>
		<div class="row" id="Footer">
			<div class="footer">
				Footer
			</div>
		</div>
	</div>
</div>

