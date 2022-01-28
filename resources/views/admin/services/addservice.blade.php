@include ('layouts.admin.head')
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="{{asset('admin/vendors/images/preloader.gif')}}" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			
			
		</div>
	</div>

	@include ('layouts.admin.header')

	@include ('layouts.admin.sidebar')
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="xs-pd-20-10 pd-ltr-20">
			<div class="page-header">
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<div class="title">
							<h4>Dashboard</h4>
						</div>
						<nav aria-label="breadcrumb" role="navigation">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{route('service.index')}}">หน้าจัดการ Services</a></li>
								<li class="breadcrumb-item active" aria-current="page">เพิ่มข้อมูล</li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<div class="dropdown-menu dropdown-menu-right">
								<a class="dropdown-item" href="#">Export List</a>
								<a class="dropdown-item" href="#">Policies</a>
								<a class="dropdown-item" href="#">View Assets</a>
							</div>
						</div>
					</div>
				</div>
			</div>
            <div class="row">
                <div class="col-lg-12">
                  <section class="panel">
                    <header class="panel-heading">
                    เพิ่มข้อมูล Service
                    </header>
                    <br>
                    <div class="panel-body">
                      <form role="form" action="{{route('service.create')}}" method="post">
						@csrf
                        <div class="form-group">
                            <label for="exampleInputText">ชื่องานบริการ</label>
                            <input type="text" name="name" class="form-control" id="exampleInputText" placeholder="Enter Service">
                          </div>
                        <div class="form-group">
                          <label for="exampleInputText">รายละเอียด</label>
                          <input type="text" name="text" class="form-control" id="exampleInputText" placeholder="Enter Content">
                        </div>
                        <!-- <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div> -->
                        <!-- <div class="checkbox">
                          <label>
                                                <input type="checkbox"> Check me out
                                            </label>
                        </div> -->
                        <button type="submit" class="btn btn-primary">เพิ่มข้อมูล</button>
                      </form>
      
                    </div>
                  </section>
                </div>
             
              </div>
			<!-- <div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div> -->
		</div>
	</div>
	<!-- js -->
	<script src="{{asset('admin/vendors/scripts/core.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/script.min.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/process.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/layout-settings.js')}}"></script>
	<script src="{{asset('admin/src/plugins/jQuery-Knob-master/jquery.knob.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/highcharts-6.0.7/code/highcharts.js')}}"></script>
	<script src="{{asset('admin/src/plugins/highcharts-6.0.7/code/highcharts-more.js')}}"></script>
	<script src="{{asset('admin/src/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js')}}"></script>
	<script src="{{asset('admin/src/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('admin/vendors/scripts/dashboard2.js')}}"></script>
</body>
</html>