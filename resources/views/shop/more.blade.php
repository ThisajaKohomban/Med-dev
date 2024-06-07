<x-shop-layout>


  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div>
              <img src="{{ asset('images/' . $products->image) }}" alt="" style="max-width: 100%; max-height: 100%;">

          </div>

{{--          <br>--}}

{{--          <div class="row">--}}
{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-1-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-2-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-3-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}

{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-4-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-5-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}
{{--            <div class="col-sm-4 col-6">--}}
{{--              <div>--}}
{{--                <img src="assets/images/product-6-720x480.jpg" alt="" class="img-fluid">--}}
{{--              </div>--}}
{{--              <br>--}}
{{--            </div>--}}
{{--          </div>--}}

{{--          <br>--}}
        </div>

        <div class="col-md-5">
          <div class="sidebar-item recent-posts">
            <div class="sidebar-heading">
              <h2>Info</h2>
            </div>
<h3>{{$products->price}}</h3>
            <div class="content">
              <p>{{$products->description}}</p>
            </div>
          </div>

          <br>
          <br>
{{--product add success msg--}}
@if(session('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif
          <div class="contact-us">
            <div class="sidebar-item contact-form">
              <div class="sidebar-heading">
                <h2>Add to Cart</h2>
              </div>

              <div class="content">

                <form action="{{ route('cart.add', $products->id) }}" method="POST">
                    @csrf
                    <input type="number" name="quantity" value="1" min="1" required>
                    <button type="submit" style="background-color: rebeccapurple">Add to Cart</button>
                </form>

              </div>
            </div>
          </div>

          <br>
        </div>
      </div>
    </div>
  </section>


</x-shop-layout>
