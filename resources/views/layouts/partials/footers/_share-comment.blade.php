<section>
  <div class="btn-group btn-group-sm" role="group" aria-label="Button group with nested dropdown">


    <form class="" action="{{ route('postCommentLike', ['noticeId' =>$notice->id, 'commentId' => $comment->id]) }}" method="POST" id="postCommentLike-{{ $comment->id }}">
      {{ csrf_field() }}
    </form>

    <button onclick="document.getElementById('postCommentLike-{{ $comment->id }}').submit();" class="btn btn-secondary borderless-btn btn-sm" title="Like"><i class="

    @if ($isLike[$comment->id] === 1)
      fa fa-heart text-info
    @else
        fa fa-heart
    @endif
      glyph-r-margin


    "></i>{{ $likeShareComment[$comment->id]['like'] }}</button>

    <div class="btn-group btn-group-sm" role="group">

      <button id="btnGroupDrop1" type="button" class="btn btn-secondary borderless-btn btn-sm dropdown-toggle text-muted" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Share">
        <i class="fa fa-share-alt glyph-r-margin text-muted"></i>{{ $likeShareComment[$comment->id]['share'] }}
      </button>

      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">

        <form class="" action="{{ route('postNoticeCommentShare', ['id' => $comment->id, 'to' => 'whatsapp']) }}" method="POST" id="postNoticeCommentShareWhatsapp-{{ $comment->id }}">
          {{ csrf_field() }}
        </form>

        <form class="" action="{{ route('postNoticeCommentShare', ['id' => $comment->id, 'to' => 'timeline']) }}" method="POST" id="postNoticeCommentShareTimeline-{{ $comment->id }}">
          {{ csrf_field() }}
        </form>

        <a onclick="document.getElementById('postNoticeCommentShareWhatsapp-{{ $comment->id }}').submit();" class="dropdown-item" href="#"><i class="fa fa-whatsapp glyph-r-margin"></i>WhatsApp</a>

        <a onclick="document.getElementById('postNoticeCommentShareTimeline-{{ $comment->id }}').submit();" class="dropdown-item" href="#"><i class="fa fa-user glyph-r-margin"></i>Timeline</a>
      </div>
    </div>
  </div>
</section>
