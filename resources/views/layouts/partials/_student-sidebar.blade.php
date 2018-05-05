<div class="side-nav">
  <nav>
    <ul>
      <li>
        <a href="{!! route('getStudentDashboard') !!}">
          <span><i class="fa fa-list-ul"></i></span>
          <span>Student Home</span>
        </a>
      </li>
      <li data-toggle="collapse" data-target="#subscriptions-dash" class="collapsed">
        <a href="#">
          <span><i class="fa fa-clipboard"></i></span>
          <span class="arrow">Notices</span>
        </a>
      </li>
      <ul class="sub-menu collapse" id="subscriptions-dash">
        <li><a href="{!! route('getStudentChannels') !!}" class="font-size-xs">All channels</a></li>
        <li><a href="{!! route('getStudentReminders') !!}" class="font-size-xs">Reminders</a></li>
        <li><a href="{!! route('getStudentSaved') !!}" class="font-size-xs">Saved notices</a></li>
      </ul>
      <li>
        <a href="{!! route('getStudentSettings')!!}">
          <span><i class="fa fa-wrench"></i></span>
          <span class="arrow">Settings</span>
        </a>
      </li>
      <li data-toggle="collapse" data-target="#profile-dash" class="collapsed">
        <a href="#">
          <span><i class="fa fa-user"></i></span>
          <span>Profile</span>
        </a>
      </li>
      <ul class="sub-menu collapse" id="profile-dash">
        <li><a href="{!! route('getStudentEdit') !!}" class="font-size-xs">Edit profile</a></li>
        <li><a href="{!! route('getStudentSubscriber') !!}" class="font-size-xs">Subscribers</a></li>
        <li><a href="{!! route('getStudentSubscription') !!}" class="font-size-xs">Subscriptions</a></li>
        <li><a href="/profile/wallet" class="font-size-xs">Wallet</a></li>
      </ul>
      <li>
        <a href="/inbox">
          <span><i class="fa fa-envelope-o"></i></span>
          <span>Messages</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
