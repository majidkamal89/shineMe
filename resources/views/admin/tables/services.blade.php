<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="5">Services</th>
        <td>
            <a href="javascript:;" class="btn btn-sm btn-primary load-service-modal">Add New</a>
        </td>
    </tr>
    <tr>
        <th>Heading 1</th>
        <th>Heading 2</th>
        <th>Description</th>
        <th>Detail Description</th>
        <th>Banner Image</th>
        <th style="width: 115px;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($page_data[0]->services as $service)
        <tr>
            <td>{!! ($service->heading_1) !!}</td>
            <td>{!! ($service->heading_2) !!}</td>
            <td>{!! (str_limit($service->description, $limit = 200, $end = '...')) !!}</td>
            <td>{!! (str_limit($service->detail_description, $limit = 200, $end = '...')) !!}</td>
            <td>
                <img src="{!! (asset('/').$service->banner_image) !!}" width="150" />
            </td>
            <td>
                <a href="javascript:;" class="btn btn-xs btn-info edit-service" data-id="{!! $service->id !!}"
                   data-heading1="{!! $service->heading_1 !!}" data-heading2="{!! $service->heading_2 !!}"
                   data-description="{!! str_replace('"', '', $service->description) !!}" data-image="{!! asset('/').$service->banner_image !!}"
                   data-title="{!! $service->title !!}" data-alt="{!! $service->alt !!}"
                   data-oldImage="{!! $service->banner_image !!}"
                   data-detailDescription="{!! str_replace('"', '', $service->detail_description) !!}">Edit</a> |
                <a href="javascript:;" class="btn btn-xs btn-danger service-delete-btn"
                   data-id="{!! $service->id !!}" data-pageId="{!! $page_data[0]->id !!}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>