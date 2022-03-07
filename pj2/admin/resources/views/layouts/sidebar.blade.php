<div class="sidebar" data-background-color="brown" data-active-color="danger">
	<div class="logo">
		<a href="/quan-ly-san-bong" class="simple-text logo-mini">
			CT
		</a>

		<a href="/quan-ly-san-bong" class="simple-text logo-normal">
			Quản lý sân bóng
		</a>
	</div>
	<div class="sidebar-wrapper">
	<div class="user">
	<div class="info">
	<div class="photo">
	<img src="{{ asset('assets') }}/img/faces/ava.jpg" />
	</div>

	<a data-toggle="collapse" href="#collapseExample" class="collapsed">
	<span>
	{{ Session::get('FullNameA') }}
	<b class="caret"></b>
	</span>
	</a>
				
	<div class="collapse" id="collapseExample">
		<ul class="nav">
		<li>
		<a href="{{ route('info-admin.index') }}">
								<span class="sidebar-mini"> PF</span>
								<span class="sidebar-normal">Profile</span>
		</a>
		</li>
	<li>
	<a href="{{ route('logout') }}">
								<span class="sidebar-mini"> LO</span>
								<span class="sidebar-normal">Log out</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<ul class="nav">
			<li>
				<a href="{{ route('quan-ly-san-bong.index') }}">
					<i class="ti-announcement"></i>
					<p>Quản lý sân bóng</p>
				</a>
			</li>
			<li>
				<a href="{{ route('quan-ly-he-thong.index') }}">
					<i class="ti-user"></i>
					<p>Quản lý hệ thống</p>
					</a>
				</a>
			</li>
			{{-- <li>
				
					<a data-toggle="collapse" href="#componentsExamples">
					<i class="ti-agenda"></i>
					<p>Thông tin đặt sân
					<b class="caret"></b>
					</p>
				</a>
				<div class="collapse" id="componentsExamples">
					<ul class="nav">
				<li>
					<a href="{{ route('quan-ly-thong-tin-dat-san.index') }}">
					<span class="sidebar-mini">CD</span>
					<span class="sidebar-normal">Đơn chưa duyệt</span>
					</a>
				</li>
				<li>
					<a href="{{ route('quan-ly-thong-tin-dat-san.index') }}">
					<span class="sidebar-mini">DD</span>
					<span class="sidebar-normal">Đơn đã duyệt</span>
					</a>
				</li>
			</ul></div>
			
			<li>

				<a data-toggle="collapse" href="#componentsExamples" >
				<i class="ti-exchange-vertical"></i>
				<p>Quản lý doanh thu
											<b class="caret"></b>
				</p>
				</a>
				<div class="collapse" id="componentsExamples">
				<ul class="nav">
									<li>
										<a href="{{ route('quan-ly-doanh-thu.index') }}">
										<span class="sidebar-mini">SB</span>
										<span class="sidebar-normal">Doanh thu sân bóng</span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="sidebar-mini">KV</span>
										<span class="sidebar-normal">Doanh thu khu vực</span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="sidebar-mini">TM</span>
										<span class="sidebar-normal">Khung giờ thuê nhiều nhất</span>
										</a>
									</li>
									<li>
										<a href="#">
										<span class="sidebar-mini">IV</span>
										<span class="sidebar-normal">Khung giờ đã đặt</span>
										</a>
									</li>
								</li>	
		</ul>
		</div> --}}
<li>
	<a data-toggle="collapse" href="#formsExamples">
	<i class="ti-agenda"></i>
	<p>Thông tin đặt sân
	<b class="caret"></b>
	</p>
	</a>
<div class="collapse" id="formsExamples">
	<ul class="nav">
	<li>
	<a href="{{ route('thong-tin-dat-san/chua-duyet.index') }}">
	{{-- <a href="#"> --}}
	<span class="sidebar-mini">CD</span>
	<span class="sidebar-normal">Đơn chưa duyệt</span>
	</a>
	</li>

	<li>
	<a href="{{ route('thong-tin-dat-san/da-duyet.index') }}">
	{{-- <a href="#"> --}}
	<span class="sidebar-mini">DD</span>
	<span class="sidebar-normal">Đơn đã duyệt</span>
	</a>
	</li>
	
</ul>
</div>
</li>
		<li>
		<a data-toggle="collapse" href="#tablesExamples">
<i class="ti-exchange-vertical"></i>
<p>
	Quản lý doanh thu
<b class="caret"></b>
</p>
</a>
<div class="collapse" id="tablesExamples">
	<ul class="nav">
	<li>
		{{-- {{ route('quan-ly-doanh-thu.sb') }} --}}
		<a href="{{ route('quan-ly-doanh-thu.sb') }}">
		<span class="sidebar-mini">SB</span>
		<span class="sidebar-normal">Doanh thu sân bóng</span>
		</a>
	</li>
	<li>
		<a href="{{ route('quan-ly-doanh-thu.kv') }}">
		<span class="sidebar-mini">KV</span>
		<span class="sidebar-normal">Doanh thu khu vực</span>
		</a>
	</li>
	{{-- <li>
		<a href="{{ route('quan-ly-doanh-thu.tnn') }}">
		<span class="sidebar-mini">NN</span>
		<span class="sidebar-normal">Khung giờ thuê nhiều nhất</span>
		</a>
	</li> --}}
	<li>
		<a href="{{ route('quan-ly-doanh-thu.dd') }}">
		<span class="sidebar-mini">ĐD</span>
		<span class="sidebar-normal">Khung giờ đã đặt</span>
		</a>
	</li>

</ul>
</div>
</li>
		
	</div>
</div>
