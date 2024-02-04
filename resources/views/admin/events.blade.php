@extends('layouts.master')

@section('title')
    Event
@endsection

@section('content')



<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"> EVENTS  </h4>

          @if (session('status'))
          <div class="alert alert-success" role="alert">
            {{ session('status') }}
          </div>
          @endif
         
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table" id="adTable">
              <thead class=" text-primary">
                <th>NO.</th>
                <th>NAME</th>
                <th>DESCRIPTION</th>
                <th>ORGANISER</th>
                <th>VENUE</th>
                <th>DATE</th> 
                <th>IMAGES</th>
                {{-- <th>EDIT</th>
                <th>DELETE</th> --}}
              </thead>
              <tbody>
                @foreach ($event as $data)
                <tr draggable="true" ondragstart="drag(event)" ondragover="allowDrop(event)" ondrop="drop(event)">
                  <td data-ad-id="{{$data->id}}">{{$data->id}}</td>
                  <td>{{$data->title}}</td>
                  <td>{{$data->description}}</td>
                  <td>{{$data->organiser}}</td>
                  <td>{{$data->venue}}</td>
                  <td>{{$data->date}}</td>
                  <td>
                    <a href="/add-images/{{$data->id}}" class="btn btn-primary">ADD</a>
                  </td>                 
                  {{-- <td>
                    <a href="#" class="btn btn-success">EDIT</a>
                  </td>
                  <td>
                    <a href="#" class="btn btn-danger">DELETE</a>
                  </td> --}}
                </tr>
                @endforeach
                

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="exampleModalx" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="recipient-name" class="col-form-label">Recipient:</label>
              <input type="text" class="form-control" id="recipient-name">
            </div>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Message:</label>
              <textarea class="form-control" id="message-text"></textarea>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Send message</button>
        </div>
      </div>
    </div>
  </div>
  <script>
    const exampleModal = document.getElementById('exampleModal')
if (exampleModal) {
  exampleModal.addEventListener('show.bs.modal', event => {
    // Button that triggered the modal
    const button = event.relatedTarget
    // Extract info from data-bs-* attributes
    const recipient = button.getAttribute('data-bs-whatever')
    // If necessary, you could initiate an Ajax request here
    // and then do the updating in a callback.

    // Update the modal's content.
    const modalTitle = exampleModal.querySelector('.modal-title')
    const modalBodyInput = exampleModal.querySelector('.modal-body input')

    modalTitle.textContent = `New message to ${recipient}`
    modalBodyInput.value = recipient
  })
}
</script>
<script>
  var dragItem;
  function drag(event){
    console.log('Drop event triggered.');
    dragItem=event.target;
    event.dataTransfer.effectAllowed="move";
    event.dataTransfer.setData("text/html",dragItem.outerHTML);
  }
function allowDrop(event)
{
  event.preventDefault();
}

function drop(event) {
event.preventDefault();
var targetTr = event.target.closest("tr");
var tableBody = document.querySelector("#adTable tbody"); 
var tableRows = Array. from (tableBody.querySelectorAll("tr")); 
var dragIndex = tableRows.indexOf(dragItem);
var targetIndex = tableRows.indexOf(targetTr);
if (dragIndex !== -1 && targetIndex !== -1) {
// Check if the drop position is between the start and end position of the dragged item 
var start = Math.min(dragIndex, targetIndex);
var end = Math.max(dragIndex, targetIndex);
// Reorder the table rows
var droppedRow = tableRows.splice (dragIndex, 1)[0];
 tableRows.splice (targetIndex, 0, droppedRow);
// Update the ad order and send it to the server using AJAX 
var positions =[];
tableRows.forEach(function (row, index) {
var id = row.querySelector("td").getAttribute("data-ad-id"); 
var adPosition = index + 1;
positions.push({
  id: id,
position: adPosition  
});
});

// Update the table with the new order
tableBody.innerHTML = "";
tableRows.forEach(function (row) { 
  tableBody.appendChild(row);
});

var formData = new FormData();
formData.append('positions', JSON.stringify(positions));
$.ajax({
url: '{{ route("drag.drop") }}',
type: 'POST',
data: formData,
processData: false,
contentType: false,
headers: {
  'X-CSRF-TOKEN': '{{ csrf_token() }}'
},
success: function (response) {
},
error: function (error) {
}
});
}
}
</script>
  
@endsection

@section('scripts')

@endsection