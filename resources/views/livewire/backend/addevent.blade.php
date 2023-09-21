<div class="table-data">

    <div class="add-data">
        <button>Galleries</button>
        <button wire:click="$set('openform',true)">Add Gallery</button>
    </div>


     @if ($openform)
     <div class="formadd-div">
        <form action="" class="addform" enctype="multipart/form-data" method="POST">

            @csrf
            <button wire:click="$set('openform',false)"
           type="button" class="closeform">Clos form</button>
            <p>error</p>
            <input type="text" wire:model="name" placeholder="name">
            <input type="file" wire:model="image">
            <button>Save</button>
          </form>
     </div>
     @else
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
     @endif
   </div>
