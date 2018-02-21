@if(!empty($major_program[0]))
    @if($major_program[0]->type == 0)
        <section class="container-fluid" id="home-joinnow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="join-text">
                            <h2>{!! ($major_program[0]->heading_1) ?? '' !!}</h2>

                            <h3>{!! ($major_program[0]->heading_2) ?? '' !!}</h3>
                            <p>{!! ($major_program[0]->text) ?? '' !!}</p>
                            <ul class="join-steps">
                                @foreach($major_program[0]->step as $key => $val)
                                    <li>
                                        <p><span class="trans fade-trans delay-1">{!! ($key+1) !!}</span></p>

                                        <p class="trans left2-trans delay-2">{!! $val !!}</p>
                                    </li>
                                @endforeach
                                <ul class="hidden-xs"></ul>
                            </ul>
                        </div>
                        <div class="join-nowbtn">
                            <a href="{!! route('listAllMajors', $major_program[0]->id) !!}" class="btn trans fade-trans delay-7">{!! ($major_program[0]->button_text) ?? '' !!}</a>
                        </div>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </section>
    @endif

    @if($major_program[0]->type == 1)
        <section class="container-fluid" id="general-joinnow">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="join-text">
                            <h2>{!! ($major_program[0]->heading_1) ?? '' !!}</h2>

                            <h3>{!! ($major_program[0]->heading_2) ?? '' !!}</h3>

                            <p>{!! ($major_program[0]->text) ?? '' !!}</p>
                            <ul class="join-steps">
                                @foreach($major_program[0]->step as $key => $val)
                                    <li>
                                        <p><span>{!! ($key+1) !!}</span></p>

                                        <p>{!! $val !!}</p>
                                    </li>
                                @endforeach
                                <ul>
                                </ul>
                            </ul>
                        </div>
                        <div class="join-nowbtn">
                            <a href="{!! route('listAllMajors', $major_program[0]->id) !!}" class="btn">{!! ($major_program[0]->button_text) ?? '' !!}</a></div>
                    </div>
                </div>
                <!--/row-->
            </div>
            <!--/container-->
        </section>
    @endif
@endif