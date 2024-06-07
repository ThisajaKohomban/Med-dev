<x-admin-layout>
<form action="{{ route('newsave') }}" method="post" enctype="multipart/form-data">
@csrf
        <div class="form-group">
            <label for="name">Product Name</label>
            <input type="text" name="name" class="form-control" value="{{ old('name') }}" id="name" placeholder="Enter Product Name" required>
        </div>
        <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" step="0.01" name="price" class="form-control" value="{{ old('price') }}"  id="price" placeholder="Enter Product Price" required>
        </div>
        <div class="form-group">
            <label for="description">Product Description</label>
            <textarea name="description" class="form-control" id="description" placeholder="Enter Product Description"></textarea>
        </div>
        <div class="form-group">
            <label for="qty">Product Quantity</label>
            <input type="number" name="qty" class="form-control" id="qty" placeholder="Enter Product Quantity" required>
        </div>
        <div class="form-group">
            <label for="image">Product Image</label>
            <input type="file" name="image" class="form-control" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-admin-layout>
