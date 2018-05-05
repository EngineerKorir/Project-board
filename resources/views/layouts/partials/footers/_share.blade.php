<section id="share">
  <div class="hmi-buttons">
    <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">
      <div class="btn-group btn-group-sm" role="group">
        <button id="btnSave" type="button" class="btn btn-secondary borderless-btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Save">
          <i class="fa fa-bookmark glyph-r-margin"></i>
        </button>
        <div class="dropdown-menu" aria-labelledby="btnSave">
          <a class="dropdown-item" href="#">Save</a>
          <a class="dropdown-item" href="#">Reminder</a>
        </div>
      </div>

      <form class="" action="{{ route('postNoticeLike', ['id' => $notice->id]) }}" method="POST" id="postNoticeLike">
        {{ csrf_field() }}
      </form>

      <button onclick="document.getElementById('postNoticeLike').submit();" class="btn btn-secondary borderless-btn btn-sm" title="Like">
        <i class="

        @if ($isLikeNotice === 1)
          fa fa-heart text-info
        @else
            fa fa-heart
        @endif
          glyph-r-margin

        "></i>{{ $likeShare['like'] }}</button>

      <button type="button" class="btn btn-secondary borderless-btn btn-sm" title="Comments"><i class="fa fa-comment glyph-r-margin"></i>{{ $totalComments }}</button>

      <button type="button" class="btn btn-secondary borderless-btn btn-sm" title="Attachments"><i class="fa fa-paperclip text-muted glyph-r-margin glyph-l-margin"></i>{{ $totalAttachments }}</button>

      <div class="btn-group btn-group-sm" role="group">
        <button id="btnShare" type="button" class="btn btn-secondary borderless-btn btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Share">
          <i class="fa fa-share-alt glyph-r-margin"></i>{{ $likeShare['share'] }}
        </button>

        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnShare">

          <form class="" action="{{ route('postNoticeShare', ['id' => $notice->id, 'to' => 'whatsapp']) }}" method="POST" id="postNoticeShareWhatsapp">
            {{ csrf_field() }}
          </form>

          <form class="" action="{{ route('postNoticeShare', ['id' => $notice->id, 'to' => 'timeline']) }}" method="POST" id="postNoticeShareTimeline">
            {{ csrf_field() }}
          </form>

          <a onclick="document.getElementById('postNoticeShareWhatsapp').submit();" class="dropdown-item" href="#"><i class="fa fa-whatsapp glyph-r-margin"></i>WhatsApp</a>

          <a onclick="document.getElementById('postNoticeShareTimeline').submit();" class="dropdown-item" href="#"><i class="fa fa-user glyph-r-margin"></i>Timeline</a>

        </div>
      </div>
    </div>
  </div> <!-- /.hmi-buttons -->
</section>
