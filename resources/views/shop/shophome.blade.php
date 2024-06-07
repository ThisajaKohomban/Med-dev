<x-shop-layout>






    <section class="blog-posts grid-system">
        <div class="container">
            <div class="all-blog-posts">
                <div class="row">

                    @foreach ($products as $product)
                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb">
                                    <img src="{{ asset('images/' . $product->image) }}" all="">
                                </div>
                                <div class="down-content">
                                    <span style="color: red"> {{ $product->price }}</span>
                                    <a href="{{ url('more/' . $product->id) }}">
                                        <h4>{{ $product->name }}</h4>
                                    </a>
                                    <p> {{ $product->description }}</p>
                                   
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </section>


</x-shop-layout>
