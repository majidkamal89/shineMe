<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="3">Program Major List</th>
        <td><a href="{!! route('dashboard.createProgramList', (($page_data[0]->slug == '/') ? 'home-page':$page_data[0]->slug)) !!}" class="btn btn-sm btn-primary">Add New</a></td>
    </tr>
    <tr>
        <th>Heading 1</th>
        <th>Heading 2</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @if(!empty($page_data[0]->majors[0]->programMajorList[0]))
        @foreach($page_data[0]->majors[0]->programMajorList as $progran_list)
            <tr>
                <td>{!! ($progran_list->heading_1) ?? '' !!}</td>
                <td>{!! ($progran_list->heading_2) ?? '' !!}</td>
                <td>{!! ($progran_list->description) ?? '' !!}</td>
                <td>
                    <a href="{!! route('dashboard.editProgramList', [(($page_data[0]->slug == '/') ? 'home-page':$page_data[0]->slug), $progran_list->id]) !!}" class="btn btn-xs btn-info"
                       data-id="{!! $progran_list->id !!}"
                       data-heading1="{!! $progran_list->heading_1 !!}"
                       data-heading2="{!! $progran_list->heading_2 !!}">Edit</a>
                    <a href="javascript:;" class="btn btn-xs btn-danger delete-program-list"
                       data-url="{!! route('dashboard.deleteProgramList', [(($page_data[0]->slug == '/') ? 'home-page':$page_data[0]->slug), $progran_list->id]) !!}">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
    </tbody>
</table>