<div class="col-xl-6 col-lg-6 col-sm-4 col-7">
  <div class="top-bar-left d-flex">
      <div class="clearfix">
          <ul class="socials">
              <li>
                  <a class="social-icon text-dark top-header-text" href="#"><i class="fa fa-facebook"></i></a>
              </li>
              <li>
                  <a class="social-icon text-dark top-header-text" href="#"><i class="fa fa-twitter"></i></a>
              </li>
              <li>
                  <a class="social-icon text-dark top-header-text" href="#"><i class="fa fa-linkedin"></i></a>
              </li>
              <li>
                  <a class="social-icon text-dark top-header-text" href="#"><i class="fa fa-google-plus"></i></a>
              </li>
          </ul>
      </div>
      <div class="clearfix">
          <ul class="contact border-left">
              <li class="mr-5 d-lg-none">
                  <a href="#" class="callnumber text-dark top-header-text"><span><i class="fa fa-phone mr-1"></i>:
                          +123 456 7890</span></a>
              </li>
              <li class="dropdown mr-5">
                  <a href="#" class="text-dark top-header-text top-header-text" data-toggle="dropdown"><span> Language <i
                              class="fa fa-caret-down text-muted"></i></span> </a>
                  <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                      <a href="#" class="dropdown-item">
                          English
                      </a>
                      <a class="dropdown-item" href="#">
                          Spanish
                      </a>
                      <a class="dropdown-item" href="#">
                          Portugese
                      </a>
                  </div>
              </li>
          </ul>
      </div>
  </div>
</div>

<div class="col-xl-6 col-lg-6 col-sm-8 col-5">
    <div class="top-bar-right">
        <ul class="custom">
            <li>
                <a href="javascript:;" class="text-dark top-header-text"><i class="fa fa-user mr-1"></i>
                    <span>{{$logged_user->name}}</span></a>
            </li>
            <li>
                <a href="#" class="text-dark top-header-text"><i class="fa fa-envelope-o mr-1"></i>
                    <span>{{$logged_user->email}}</span></a>
            </li>
            <li class="dropdown">
                <a href="javascript:;" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span style="color:white"> My Dashboard</span></a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a href="{{route('edit-profile')}}" class="dropdown-item user-dashboard-icon">
                        <i class="dropdown-icon icon icon-user"></i> Profile
                    </a>
                    <a class="dropdown-item user-dashboard-icon" href="{{route('edit-course')}}">
                        <i class="dropdown-icon fa fa-laptop" ></i> Course
                    </a>
                    <a class="dropdown-item user-dashboard-icon" href="{{route('edit-product')}}">
                        <i class="dropdown-icon fe fe-package" ></i> Product
                    </a>
                    <a class="dropdown-item user-dashboard-icon" href="{{route('user-list')}}">
                        <i class="dropdown-icon icon icon-people"></i> Users
                    </a>
                    <a href="{{route('account-setting')}}" class="dropdown-item user-dashboard-icon" >
                        <i class="dropdown-icon  icon icon-settings"></i> Account Settings
                    </a>
                    <a class="dropdown-item user-dashboard-icon"  href="/logout">
                        <i class="dropdown-icon icon icon-power"></i> Log out
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>