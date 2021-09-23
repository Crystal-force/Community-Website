<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
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

<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
    <div class="top-bar-right">
        <ul class="custom">
            <li>
                <a href="{{route('edit-profile')}}" class="text-dark top-header-text"><i class="fa fa-user mr-1"></i>
                    <span>{{$logged_user->name}}</span></a>
            </li>
            <li>
                <a href="#" class="text-dark top-header-text"><i class="fa fa-envelope-open-o mr-1"></i>
                    <span>{{$logged_user->email}}</span></a>
            </li>
            <li>
                <a href="/logout" class="text-dark top-header-text"><i class="icon icon-power mr-1"></i>
                    <span>Logout</span></a>
            </li>
        </ul>
    </div>
</div>