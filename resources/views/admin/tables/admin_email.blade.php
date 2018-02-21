<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Webmaster Email</th>
        <td>
            <a href="javascript:;" class="btn btn-sm btn-primary load-admin-email-modal">Add New</a>
        </td>
    </tr>
    <tr>
        <th>email</th>
        <th style="width: 130px;">Action</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($admin_email[0]))
        @foreach($admin_email as $val)
            <tr>
                <td>{!! $val->email !!}</td>
                <td>
                    <a href="javascript:;" data-id="{!! $val->id !!}"
                       data-email="{!! $val->email !!}"
                       class="btn btn-xs btn-info edit-admin-email">Edit</a> |
                    <a href="javascript:;" class="btn btn-xs btn-danger delete-admin-email"
                       data-id="{!! $val->id !!}">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>