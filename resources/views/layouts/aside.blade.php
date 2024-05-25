<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar <?php if (Auth::user()->userType == '2'): ?>
    <?php echo 'hide' ?>
  <?php endif ?>" >
  <div class="custom-scroll custom-scroll-light">
    <ul class="sidebar-menu">
      <li class="menu-title">مینو ها</li>

      <li class="with-sub">
        <a href="/home" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa  fa-home"></i></span>
          <span class="s-text">داشبورد</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="/posts" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-building"></i></span>
          <span class="s-text">دل نوشته ها</span>
        </a>
      </li>

      <li class="with-sub">
        <a href="/ads" class="waves-effect  waves-light">
          <span class="s-icon"><i class="fa fa-building"></i></span>
          <span class="s-text">آگاهی ها</span>
        </a>
      </li>


      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-users"></i></span>
          <span class="s-text">کاربران</span>
        </a>
        <ul>
          <li><a href="{{route('usersList')}}">لیست کاربران</a></li>
          <li><a href="{{route('blockList')}}">کاربران بلاک شده</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>
<!-- Aside End -->


<div class="site-sidebar <?php if (Auth::user()->userType == '1'): ?>
    <?php echo 'hide' ?>
  <?php endif ?>" style="background-color: #e8ebf0">
</div>
