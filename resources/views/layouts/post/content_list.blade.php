<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr align="center">
          <th>Title</th>
          <th>Posted on</th>
          <th>Closed Registration</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($table['sortedPosts'] as $index => $post)
        @isset($post['event_id'])
        <tr class="opreg type-content">
            <td>{{ $post['event_title'] }}</td>
            <td align="center">{{ $post['posted_on'] }}</td>
            <td align="center">{{ $post['closed_on'] }}</td>
            @if ($table['open'][$index])
            <td align="center">
              <button style="padding: 1px;" class="btn col-sm-9 btn-success">Open Registration</button>
            </td>
            @else
            <td align="center">
              <button style="padding: 1px;" class="btn col-sm-9 btn-danger" >Registration Closed</button>
            </td>
            @endif
            <td align="center">
              <a href="{{ route('infoEvent', $post['event_id']) }}" style="padding: 1px 12px;" class="btnAction btn btn-info" ><i class="fa fa-info"></i></a>
              <a href="{{ route('editEvent', $post['event_id']) }}" style="padding: 1px 12px;" class="btnAction btn btn-dark" ><i class="fa fa-pencil-square-o"></i></a>
              <form action="{{ route('deleteEvent') }}" method="POST" enctype="multipart/form-data">@csrf
                <button type="submit" style="padding: 1px 12px;" class="btnAction btn btn-danger" name="id" value="{{ $post['event_id'] }}" ><i class="fa fa-trash-o"></i></button>
              </form>
            </td>
          </tr>
        @endisset
      @endforeach
        <tr class="news type-content">
          <td>Pembukaan Acara Academic Award</td>
          <td align="center">10 Feb 2021</td>
          <td align="center">28 Feb 2021</td>
          <td align="center"><button style="padding: 1px;"  class="btn col-sm-9 btn-warning">News</button></td>
          <td align="center">
            <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-info" ><i class="fa fa-info"></i></button>
            <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-dark" ><i class="fa fa-pencil-square-o"></i></button>
            <button type="button" style="padding: 1px 12px;" class="btnAction btn btn-danger" ><i class="fa fa-trash-o"></i></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
