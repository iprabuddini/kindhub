
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div>
                <div class="panel panel-default">
                    <div class="panel-heading">Classes</div>

                    <div class="panel-body table-responsive">

                        <router-view name="classList"></router-view>
                        <router-view name="teachersListComponent"></router-view>
                        <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

