<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="4">Discover Your Future Majors</th>
    </tr>
    <tr>
        <th>Heading 1</th>
        <th>Heading 2</th>
        @if($page_data[0]->majors[0]->type == 1)
            <th>Text</th>
        @endif
        <th>Step 1</th>
        <th>Step 2</th>
        @if($page_data[0]->majors[0]->type == 0)
            <th>Step 3</th>
        @endif
        <th>Button Text</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{!! ($page_data[0]->majors[0]->heading_1) ?? '' !!}</td>
        <td>{!! ($page_data[0]->majors[0]->heading_2) ?? '' !!}</td>
        @if($page_data[0]->majors[0]->type == 1)
            <td>{!! ($page_data[0]->majors[0]->text) ?? '' !!}</td>
        @endif
        <td>{!! ($page_data[0]->majors[0]->step_1) ?? '' !!}</td>
        <td>{!! ($page_data[0]->majors[0]->step_2) ?? '' !!}</td>
        @if($page_data[0]->majors[0]->type == 0)
            <td>{!! ($page_data[0]->majors[0]->step_3) ?? '' !!}</td>
        @endif
        <td>{!! ($page_data[0]->majors[0]->button_text) ?? '' !!}</td>
        <td>
            <a href="javascript:;" class="btn btn-xs btn-info edit-program"
               data-id="{!! $page_data[0]->majors[0]->id !!}"
               data-heading1="{!! $page_data[0]->majors[0]->heading_1 !!}"
               data-heading2="{!! $page_data[0]->majors[0]->heading_2 !!}"
               data-text="{!! $page_data[0]->majors[0]->text !!}"
               data-step1="{!! $page_data[0]->majors[0]->step_1 !!}"
               data-step2="{!! $page_data[0]->majors[0]->step_2 !!}"
               data-step3="{!! $page_data[0]->majors[0]->step_3 !!}"
               data-button="{!! $page_data[0]->majors[0]->button_text !!}">Edit</a>
        </td>
    </tr>
    </tbody>
</table>