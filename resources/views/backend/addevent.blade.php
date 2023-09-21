@extends('backend.layouts.adminbased')

@section('content')

<div class="dashboard-container">
    <div class="board-holder">
        <div class="sidabar">
           @include("backend.layouts.sidebar")
        </div>
        <div class="main-content">
           <div class="topbar">
            @include("backend.layouts.topbar")
           </div>

           <div class="counters-items">
            @include("backend.layouts.counter")
           </div>

           <livewire:backend.addevent/>

        </div>
    </div>
</div>
@endsection
