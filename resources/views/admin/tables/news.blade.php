<table class="table table-bordered table-hover">
    <thead>
    <tr>
        <th colspan="4">News</th>
        <td>
            <a href="javascript:;" class="btn btn-sm btn-primary load-news-modal">Add New</a>
        </td>
    </tr>
    <tr>
        <th>Heading</th>
        <th>Description</th>
        <th>Detail Description</th>
        <th>Banner Image</th>
        <th style="width: 115px;">Action</th>
    </tr>
    </thead>
    <tbody>
    @foreach($page_data[0]->newsEvents as $news)
        <tr>
            <td>
                {!! ($news->heading) !!}
            </td>
            <td>{!! (str_limit($news->description, $limit = 200, $end = '...')) !!}</td>
            <td>
                {!! (str_limit($news->detail_description, $limit = 200, $end = '...')) !!}
                <br/><hr/>
                <b>Facebook:</b> {!! ($news->facebook) ? $news->facebook:'' !!}
                <br/>
                <b>Twitter:</b> {!! ($news->twitter) ? $news->twitter:'' !!}
                <br/>
                <b>Linkedin:</b> {!! ($news->linkedin) ? $news->linkedin:'' !!}
                <br/>
                <b>Youtube:</b> {!! ($news->youtube) ? $news->youtube:'' !!}
            </td>
            <td>
                <img src="{!! (asset('/').$news->banner_image) !!}" title="{!! $news->title !!}" alt="{!! $news->alt !!}" width="150" />
            </td>
            <td>
                <a href="javascript:;" class="btn btn-xs btn-info edit-news"
                   data-id="{!! $news->id !!}"
                   data-heading="{!! $news->heading !!}"
                   data-facebook="{!! $news->facebook !!}"
                   data-description="{!! str_replace('"', '', $news->description) !!}"
                   data-image="{!! asset('/').$news->banner_image !!}"
                   data-title="{!! $news->title !!}"
                   data-alt="{!! $news->alt !!}"
                   data-oldImage="{!! $news->banner_image !!}"
                   data-detailDescription="{!! str_replace('"', '', $news->detail_description) !!}"
                   data-twitter="{!! $news->twitter !!}"
                   data-linkedin="{!! $news->linkedin !!}"
                   data-youtube="{!! $news->youtube !!}"
                >Edit</a> |
                <a href="javascript:;" class="btn btn-xs btn-danger deleteNews"
                   data-id="{!! $news->id !!}" data-pageId="{!! $page_data[0]->id !!}">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>