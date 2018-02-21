<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="6">Contact Us emails</th>
    </tr>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Status</th>
        <th style="width: 120px;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($page_data[0]->contact_us as $val)
        <tr>
            <td>{!! $val->name !!}</td>
            <td>{!! $val->email !!}</td>
            <td>{!! $val->subject !!}</td>
            <td>{!! $val->message !!}</td>
            <td>{!! ($val->status == 1) ? '<span class="text-green">Submitted</span>':'<span class="text-red">Pending</span>' !!}</td>
            <td>
                @if($val->status == 0)
                    <a href="javascript:;" class="btn btn-xs btn-info load-email-modal"
                       data-id="{!! $val->id !!}" data-email="{!! $val->email !!}">Reply</a> |
                @endif
                <a href="javascript:;" data-id="{!! $val->id !!}" class="btn btn-xs btn-danger contact-delete-btn">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>