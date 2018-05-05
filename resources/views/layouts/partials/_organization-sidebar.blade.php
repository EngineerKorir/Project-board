<div class="side-nav">
  <nav>
    <ul>
      <li>
        <a href="{!! route('getOrganizationDashboard') !!}">
          <span><i class="fa fa-list-ul"></i></span>
          <span>Org. Home</span>
        </a>
      </li>

      <li data-toggle="collapse" data-target="#notices-dash" class="collapsed">
        <a href="#">
          <span><i class="fa fa-clipboard"></i></span>
          <span class="arrow">Notices</span>
        </a>
      </li>

      <ul class="sub-menu collapse" id="notices-dash">
        <li><a href="{!! route('getOrganizationAllNotices') !!}" class="font-size-xs">All notices</a></li>
        <li><a href="{!! route('getOrganizationNewNotice') !!}" class="font-size-xs">New notice</a></li>
        <li><a href="{!! route('getOrganizationNoticeCats') !!}" class="font-size-xs">Notice categories</a></li>
      </ul>

      <li data-toggle="collapse" data-target="#subscribers-dash" class="collapsed">
        <a href="#">
          <span><i class="fa fa-user"></i></span>
          <span>Subscribers</span>
        </a>
      </li>

      <ul class="sub-menu collapse" id="subscribers-dash">
        <li><a href="{!! route('getOrganizationAllSubscribers') !!}" class="font-size-xs">Subscribers</a></li>
        <li><a href="{!! route('getOrganizationSubscriberComments') !!}" class="font-size-xs">Comments</a></li>
      </ul>

      <li>
        <a href="{!! route('getOrganizationMessagesAll') !!}" title="Messages">
          <span><i class="fa fa-envelope-o"></i></span>
          <span>Messages</span>
        </a>
      </li>

      <li>
        <a href="{!! route('getOrganizationSettings') !!}" title="Settings">
          <span><i class="fa fa-wrench"></i></span>
          <span>Settings</span>
        </a>
      </li>
    </ul>
  </nav>
</div>
