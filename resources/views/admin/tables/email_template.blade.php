<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="2">Email Template</th>
        <td>
            <a href="javascript:;" class="btn btn-sm btn-primary load-template-modal">Add New</a>
        </td>
    </tr>
    <tr>
        <th>Subject</th>
        <th>Message</th>
        <th style="width: 130px;">Action</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($email_template[0]))
        @foreach($email_template as $template)
            <tr>
                <td>{!! $template->subject !!}</td>
                <td>{!! $template->message !!}</td>
                <td>
                    <a href="javascript:;" data-id="{!! $template->id !!}"
                       data-subject="{!! $template->subject !!}"
                       data-message="{!! $template->message !!}"
                       class="btn btn-xs btn-info edit-email-template">Edit</a> |
                    <a href="javascript:;" class="btn btn-xs btn-danger delete-email-template"
                       data-id="{!! $template->id !!}">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>