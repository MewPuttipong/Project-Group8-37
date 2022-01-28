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
								<li class="breadcrumb-item"><a href="{{asset('index')}}">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">Forms</li>
								<li class="breadcrumb-item active" aria-current="page"><a href="{{route('content.index')}}">หน้าจัดการ Content</a></li>
							</ol>
						</nav>
					</div>
					<div class="col-md-6 col-sm-12 text-right">
						<div class="dropdown">
							<a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
								December 2021
							</a>
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
						ตาราง Content
                    </header>
					<a href="{{route('content.addcontent')}}" class="btn btn-primary">เพิ่มข้อมูล</a>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>ลำดับ</th>
                            <th>ชื่อเนื้อหา</th>
                            <th>รายละเอียด</th>
                            <th>รูป</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>แก้ไขข้อมูล</th>
                            <th>ลบข้อมูล</th>
                         
                          </tr>
                        </thead>
                        @foreach ($content as $create)
						            <tbody>
							          <tr>
							            <td>{{$create->content_id}}</td>
                          				<td>{{$create->contentname}}</td>
							            <td>{{$create->detail}}</td>
										<td>
											<img src="{{asset('/admin/images/'.$create->image)}}" alt="" style="width: 1500px">
										</td>
							            <td>{{$create->created_at}}</td>
							            <td>{{$create->updated_at}}</td>
							            <form action="{{url('admin.content.index','$create->content_id')}}" method="post" enctype="multipart/form-data">
										@csrf
							            <td><a href="{{route('content.editcontent',[$create->content_id])}}" class="btn btn-warning">แก้ไขข้อมูล</a></td>
							            <td><a href="{{url('/admin/content/delete/'.$create->content_id)}}" type="submit" class="btn btn-danger">ลบข้อมูล</a></td>
							            </form> 
							          </tr>
							
						            </tbody>
						            @endforeach

                      </table>
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