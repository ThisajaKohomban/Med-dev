



<x-admin-layout>
  <div class="container">

 
  <a href="{{ url('create') }}" class="btn btn-primary">Add Product</a>
 <!-- msg -->
  @if(session('success'))
  <div class="alert alert-success">
    {{ session('success') }}
  </div>
  @endif

    <table class="table">
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Price</th>
          <th>Price</th>
          <th>Total</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>

        @foreach($products as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->quantity }}</td>
        <td>Rs. {{ $item->price }}</td>
        <td>Rs. {{ $item->price }}</td>
        <td>
          <a href="{{ url('edit', $item->id) }}" class="btn btn-primary">Edit</a>
          <form action="{{ url('destroy', $item->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
      </tr>

    @endforeach
      </tbody>
    </table>
   
   
  </div>
</x-admin-layout>