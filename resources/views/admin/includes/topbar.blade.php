	<!--**********************************
			Nav header start
		***********************************-->
		<div class="nav-header">
			<a href="index.html" class="brand-logo">
            <img class="logo-abbr" src="{{URL::to('/public/admin/assets/images/logo/logo.png')}}" width="70" height="53" alt="Image">


			</a>
			<div class="nav-control">
				<div class="hamburger">
					<span class="line"></span>
					<span class="line"></span>
					<span class="line"></span>
				</div>
			</div>
		</div>
		<!--**********************************
	Nav header end
***********************************-->



		<!--**********************************
	Header start
***********************************-->
		<div class="header">
			<div class="header-content">
				<nav class="navbar navbar-expand">
					<div class="collapse navbar-collapse justify-content-between">
						<div class="header-left">
							<!-- <form>
								<div class="input-group search-area">
									<span class="input-group-text"><button class="bg-transparent border-0">
											<svg width="19" height="19" viewBox="0 0 19 19" fill="none"
												xmlns="">
												<circle cx="8.78605" cy="8.78605" r="8.23951" stroke="white"
													stroke-linecap="round" stroke-linejoin="round" />
												<path d="M14.5168 14.9447L17.7471 18.1667" stroke="white"
													stroke-linecap="round" stroke-linejoin="round" />
											</svg>
										</button></span>
									<input type="text" class="form-control" placeholder="Search">
								</div>
							</form> -->
						</div>
						<ul class="navbar-nav header-right">

							<li class="nav-item dropdown notification_dropdown">
								<a class="nav-link bell dz-fullscreen" href="javascript:void(0);">
									<svg id="icon-full" viewBox="0 0 24 24" width="20" height="20" stroke="currentColor"
										stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round"
										class="css-i6dzq1">
										<path
											d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
											style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
									<svg id="icon-minimize" width="20" height="20" viewBox="0 0 24 24" fill="none"
										stroke="A098AE" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
										class="feather feather-minimize">
										<path
											d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3"
											style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path>
									</svg>
								</a>
							</li>
							<li class="nav-item ps-3">
								<div class="dropdown header-profile2">
									<a class="nav-link" href="javascript:void(0);" role="button"
										data-bs-toggle="dropdown" aria-expanded="false">
										<div class="header-info2 d-flex align-items-center">
											<div class="header-media">
												<img  src="{{URL::to('/public/admin/assets')}}/images/tab/1.jpg" alt="">
											</div>
											<div class="header-info">
												<h6> {{ Auth::guard('admin')->user() ?    Auth::guard('admin')->user()->first_name : 'Admin'   }}</h6>
												<p> {{ Auth::guard('admin')->user()->email  }}</p>
											</div>

										</div>
									</a>
									<div class="dropdown-menu dropdown-menu-end" style="">
										<div class="card border-0 mb-0">
											<div class="card-header py-2">
												<div class="products">
													<img  src="{{URL::to('/public/admin/assets')}}/images/tab/1.jpg" class="avatar avatar-md" alt="">
													<div>
                                                    <h6> {{ Auth::guard('admin')->user() ?    Auth::guard('admin')->user()->first_name : 'Admin'   }}</h6>

														<span>{{ Auth::guard('admin')->user()->email  }}</span>
													</div>
												</div>
											</div>
											<div class="card-body px-0 py-2">
												<a  href="{{URL::to('/public/admin/assets')}}/Profile.html" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="">
														<path fill-rule="evenodd" clip-rule="evenodd"
															d="M11.9848 15.3462C8.11714 15.3462 4.81429 15.931 4.81429 18.2729C4.81429 20.6148 8.09619 21.2205 11.9848 21.2205C15.8524 21.2205 19.1543 20.6348 19.1543 18.2938C19.1543 15.9529 15.8733 15.3462 11.9848 15.3462Z"
															stroke="var(--primary)" stroke-width="1.5"
															stroke-linecap="round" stroke-linejoin="round" />
														<path fill-rule="evenodd" clip-rule="evenodd"
															d="M11.9848 12.0059C14.5229 12.0059 16.58 9.94779 16.58 7.40969C16.58 4.8716 14.5229 2.81445 11.9848 2.81445C9.44667 2.81445 7.38857 4.8716 7.38857 7.40969C7.38 9.93922 9.42381 11.9973 11.9524 12.0059H11.9848Z"
															stroke="var(--primary)" stroke-width="1.42857"
															stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Profile </span>
												</a>


											</div>
											<div class="card-footer px-0 py-2">
												<a href="javascript:void(0);" class="dropdown-item ai-icon ">
													<svg width="20" height="20" viewBox="0 0 24 24" fill="none"
														xmlns="">
														<path fill-rule="evenodd" clip-rule="evenodd"
															d="M20.8066 7.62355L20.1842 6.54346C19.6576 5.62954 18.4907 5.31426 17.5755 5.83866V5.83866C17.1399 6.09528 16.6201 6.16809 16.1307 6.04103C15.6413 5.91396 15.2226 5.59746 14.9668 5.16131C14.8023 4.88409 14.7139 4.56833 14.7105 4.24598V4.24598C14.7254 3.72916 14.5304 3.22834 14.17 2.85761C13.8096 2.48688 13.3145 2.2778 12.7975 2.27802H11.5435C11.0369 2.27801 10.5513 2.47985 10.194 2.83888C9.83666 3.19791 9.63714 3.68453 9.63958 4.19106V4.19106C9.62457 5.23686 8.77245 6.07675 7.72654 6.07664C7.40418 6.07329 7.08843 5.98488 6.8112 5.82035V5.82035C5.89603 5.29595 4.72908 5.61123 4.20251 6.52516L3.53432 7.62355C3.00838 8.53633 3.31937 9.70255 4.22997 10.2322V10.2322C4.82187 10.574 5.1865 11.2055 5.1865 11.889C5.1865 12.5725 4.82187 13.204 4.22997 13.5457V13.5457C3.32053 14.0719 3.0092 15.2353 3.53432 16.1453V16.1453L4.16589 17.2345C4.41262 17.6797 4.82657 18.0082 5.31616 18.1474C5.80575 18.2865 6.33061 18.2248 6.77459 17.976V17.976C7.21105 17.7213 7.73116 17.6515 8.21931 17.7821C8.70746 17.9128 9.12321 18.233 9.37413 18.6716C9.53867 18.9488 9.62708 19.2646 9.63043 19.5869V19.5869C9.63043 20.6435 10.4869 21.5 11.5435 21.5H12.7975C13.8505 21.5 14.7055 20.6491 14.7105 19.5961V19.5961C14.7081 19.088 14.9088 18.6 15.2681 18.2407C15.6274 17.8814 16.1154 17.6806 16.6236 17.6831C16.9451 17.6917 17.2596 17.7797 17.5389 17.9393V17.9393C18.4517 18.4653 19.6179 18.1543 20.1476 17.2437V17.2437L20.8066 16.1453C21.0617 15.7074 21.1317 15.1859 21.0012 14.6963C20.8706 14.2067 20.5502 13.7893 20.111 13.5366V13.5366C19.6717 13.2839 19.3514 12.8665 19.2208 12.3769C19.0902 11.8872 19.1602 11.3658 19.4153 10.9279C19.5812 10.6383 19.8213 10.3981 20.111 10.2322V10.2322C21.0161 9.70283 21.3264 8.54343 20.8066 7.63271V7.63271V7.62355Z"
															stroke="var(--primary)" stroke-width="1.5"
															stroke-linecap="round" stroke-linejoin="round" />
														<circle cx="12.175" cy="11.889" r="2.63616"
															stroke="var(--primary)" stroke-width="1.5"
															stroke-linecap="round" stroke-linejoin="round" />
													</svg>

													<span class="ms-2">Settings </span>
												</a>
												<a  href="{{route('admin.logout')}}" class="dropdown-item ai-icon">
													<svg class="profle-logout" xmlns=""
														width="18" height="18" viewBox="0 0 24 24" fill="none"
														stroke="#ff7979" stroke-width="2" stroke-linecap="round"
														stroke-linejoin="round">
														<path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
														<polyline points="16 17 21 12 16 7"></polyline>
														<line x1="21" y1="12" x2="9" y2="12"></line>
													</svg>
													<span class="ms-2 text-danger">Logout </span>
												</a>
											</div>
										</div>

									</div>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
		<!--**********************************
	Header end
***********************************-->
