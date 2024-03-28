<div class="row">

    <div class="col-xl-6">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="card sale-card">
                    <div class="card-header">
                        <h5>Barangay Captain</h5>
                    </div>
                    <div class="card-block proj-progress-card">
                        @foreach ($chairman_candidates as $c)
                        @php
                        $percentage = $c->votes == 0 ? 0 : number_format(($c->votes/$chairman_candidates->sum('votes')) * 100,2);
                        @endphp
                        <div class="row candidate">
                            <div class="col">
                                <h5>{{ $c->name }}</h5>
                                <h5 class="m-b-5 f-w-700">{{ $c->votes }} <span class="text-c-blue 0">votes ({{ $percentage }}%)</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-blue" style="width:{{ $percentage }}%" id="progress{{ $c->id }}"></div>
                                </div>
                                @auth
                                <div class="btn-vote">
                                    <button class="btn btn-danger unvote" type="button" data-id="{{ $c->id }}" data-votes="{{ $c->votes }}">-</button>
                                    <button class="btn btn-primary float-right vote" type="button" data-id="{{ $c->id }}">+</button>
                                </div>
                                @endauth
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card sale-card">
                    <div class="card-header">
                        <h5>Barangay Kagawad</h5>
                    </div>
                    <div class="card-block proj-progress-card">
                        <div class="row">
                            @foreach ($kagawad_candidates as $c)
                            @php
                            $percentage = $c->votes == 0 ? 0 : number_format(($c->votes/$kagawad_candidates->sum('votes')) * 100,2);
                            @endphp
                            <div class="col-xl-12 col-md-6 candidate">
                                <h5>{{ $c->name }}</h5>
                                <h5 class="m-b-5 f-w-700">{{ $c->votes }} <span class="text-c-blue 0">votes ({{ $percentage }}%)</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-blue" style="width:{{ $percentage }}%" id="progress{{ $c->id }}"></div>
                                </div>
                                @auth
                                <div class="btn-vote">
                                    <button class="btn btn-danger unvote" type="button" data-id="{{ $c->id }}" data-votes="{{ $c->votes }}">-</button>
                                    <button class="btn btn-primary float-right vote" type="button" data-id="{{ $c->id }}">+</button>
                                </div>
                                @endauth
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <div class="card sale-card">
                    <div class="card-header">
                        <h5>SK Chairman</h5>
                    </div>
                    <div class="card-block proj-progress-card">
                        @foreach ($sk_chairman_candidates as $c)
                        @php
                        $percentage = $c->votes == 0 ? 0 : number_format(($c->votes/$sk_chairman_candidates->sum('votes')) * 100,2);
                        @endphp
                        <div class="row candidate">
                            <div class="col">
                                <h5>{{ $c->name }}</h5>
                                <h5 class="m-b-5 f-w-700">{{ $c->votes }} <span class="text-c-blue 0">votes ({{ $percentage }}%)</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-blue" style="width:{{ $percentage }}%" id="progress{{ $c->id }}"></div>
                                </div>
                                @auth
                                <div class="btn-vote">
                                    <button class="btn btn-danger unvote" type="button" data-id="{{ $c->id }}" data-votes="{{ $c->votes }}">-</button>
                                    <button class="btn btn-primary float-right vote" type="button" data-id="{{ $c->id }}">+</button>
                                </div>
                                @endauth
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <div class="card sale-card">
                    <div class="card-header">
                        <h5>SK Kagawad</h5>
                    </div>
                    <div class="card-block proj-progress-card">
                        <div class="row">
                            @foreach ($sk_kagawad_candidates as $c)
                            @php
                            $percentage = $c->votes == 0 ? 0 : number_format(($c->votes/$sk_kagawad_candidates->sum('votes')) * 100,2);
                            @endphp
                            <div class="col-xl-12 col-md-6 candidate">
                                <h5>{{ $c->name }}</h5>
                                <h5 class="m-b-5 f-w-700">{{ $c->votes }} <span class="text-c-blue 0">votes ({{ $percentage }}%)</span>
                                </h5>
                                <div class="progress">
                                    <div class="progress-bar bg-c-blue" style="width:{{ $percentage }}%" id="progress{{ $c->id }}"></div>
                                </div>
                                @auth
                                <div class="btn-vote">
                                    <button class="btn btn-danger unvote" type="button" data-id="{{ $c->id }}" data-votes="{{ $c->votes }}">-</button>
                                    <button class="btn btn-primary float-right vote" type="button" data-id="{{ $c->id }}">+</button>
                                </div>
                                @endauth
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
