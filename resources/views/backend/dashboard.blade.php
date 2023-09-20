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

           <div class="table-data">

            <div class="add-data">
                <button>Galleries</button>
                <button>Add Gallery</button>
            </div>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                </tbody>
              </table>

             <div class="formadd-div">
                <form action="" class="addform" enctype="multipart/form-data" method="POST">
                    @csrf
                    <button>Clos</button>
                    <input type="text" placeholder="name">
                    <input type="file">
                    <button>Save</button>
                  </form>
             </div>
           </div>

        </div>
    </div>
</div>
@endsection
