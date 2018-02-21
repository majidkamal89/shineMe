<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th @if($page_data[0]->slider[0]->type == 0) colspan="4" @else colspan="2" @endif>Slider Content</th>
        <td>
            <a href="javascript:;" class="btn btn-sm btn-primary load-slider-modal">Add New</a>
        </td>
    </tr>
    <tr>
        <th>Heading 1</th>
        @if($page_data[0]->slider[0]->type == 0)
            <th>Heading 2</th>
            <th>Text</th>
        @endif
        <th>Slider Image</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($page_data[0]->slider as $slider)
        <tr>
            <td>{!! ($slider->heading_1) ?? '' !!}</td>
            @if($slider->type == 0)
                <td>{!! ($slider->heading_2) ?? '' !!}</td>
                <td>{!! ($slider->text) ?? '' !!}</td>
            @endif
            <td>
                <img src="{!! (asset('/').$slider->image) !!}" class="img-thumbnail" width="150" />
                <br/><b>Title:</b> {!! ($slider->title) ?? '' !!}
                <br/><b>Alt:</b> {!! ($slider->alt) ?? '' !!}
            </td>
            <td>
                <a href="javascript:;" class="btn btn-xs btn-info edit-slider" data-id="{!! $slider->id !!}"
                   data-heading1="{!! $slider->heading_1 !!}" data-heading2="{!! $slider->heading_2 !!}"
                   data-text="{!! $slider->text !!}" data-image="{!! asset('/').$slider->image !!}"
                   data-title="{!! $slider->title !!}" data-alt="{!! $slider->alt !!}"
                   data-oldImage="{!! $slider->image !!}">Edit</a> |
                <a href="javascript:;" data-id="{!! $slider->id !!}"
                   data-pageId="{!! $page_data[0]->id !!}" class="btn btn-xs btn-danger service-delete-btn">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>