<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th>Name</th>
        <th>Slug</th>
        @if($page_data[0]->page_sequence == 0 || $page_data[0]->page_sequence == 2)
            <th>Futur Major{!! ($page_data[0]->page_sequence == 0) ? '<small>(Program)</small>':'' !!}</th>
        @endif
        @if($page_data[0]->page_sequence == 6)
            <th>Contact Form</th>
        @endif
        <th>Meta Description</th>
        <th>Meta Keywords</th>
        <th>File<small>(.blade)</small></th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{!! ($page_data[0]->page_name) ?? '' !!}</td>
        <td>{!! ($page_data[0]->slug) ?? '' !!}</td>
        @if($page_data[0]->page_sequence == 0)
            <td>{!! ($page_data[0]->future_major_program == 1) ? 'Yes':'No' !!}</td>
        @elseif($page_data[0]->page_sequence == 2)
            <td>{!! ($page_data[0]->future_major == 1) ? 'Yes':'No' !!}</td>
        @endif
        @if($page_data[0]->page_sequence == 6)
            <td>{!! ($page_data[0]->contact_us_form == 1) ? 'Yes':'No' !!}</td>
        @endif
        <td>{!! ($page_data[0]->meta_description) ?? '' !!}</td>
        <td>{!! ($page_data[0]->meta_keywords ) ?? '' !!}</td>
        <td>{!! ($page_data[0]->file_name ) ?? '' !!}</td>
        <td>
            <a href="javascript:;" data-id="{!! $page_data[0]->id !!}"
               data-sequence="{!! $page_data[0]->page_sequence !!}" class="btn btn-xs btn-info edit-page">Edit</a> |
            <a href="{!! ($page_data[0]->slug != '' && $page_data[0]->slug != '/') ? '/'.$page_data[0]->slug:'/' !!}" target="_blank" class="btn btn-xs btn-success">View</a>
        </td>
    </tr>
    </tbody>
</table>