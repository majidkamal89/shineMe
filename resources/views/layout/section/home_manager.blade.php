@if(!empty($general_message[0]))
    <section class="homegeneral-manager trans before_trans before_top_trans">
        <span class="homegeneral_manager_bg trans trans_opacity right-trans delay-1 resize_item"
              data-offset="left:1620"></span>

        <div class="container-fluid">

            <div class="container">
                <div class="row">
                    <h1 class="general-h1">{!! ($general_message[0]->title_1) ?? '' !!}</h1>
                    <p class="general-p">{!! ($general_message[0]->content_1) ?? '' !!}</p>
                </div>
            </div>
        </div>
        <div class="manager-beforeimg">
        </div>
        <!--/container-->
    </section>
@endif