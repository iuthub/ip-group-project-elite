<!-- Gicen Array is used to convert category number to category name -->
<?php $categoryNumberToName = ['Breakfast', 'Lunch', 'Dinner', 'Dessert', 'Drink']; ?>

@extends('admin/layouts.main')
@section('content')

<div class="row row-cols-1 row-cols-md-3">
    @foreach ($foods as $food)
        <div class="col mb-4">
        <!-- Card -->
            <div class="card">

                <!--Card image-->
                <div class="view overlay">
                    <img class="card-img-top" src="/storage/food_images/{{$food->food_image}}" alt="Card image cap">
                    <a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                </div>

                <!--Card content-->
                <div class="card-body">

                    <!--Title-->
                    <h4 class="card-title">{{$food->name}}</h4>
                    <!--Text-->
                    <p class="card-text">Price: {{$food->price}}</p>
                    <p class="card-text">Rank: {{$food->rank}}</p>
                    <p class="card-text">Category: {{$categoryNumberToName[$food->category]}}</p>
                    <p class="card-text">{{$food->description}}</p>
                    <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                    
                    <form action="{{ route('editFood',  $food->id)}}" method="GET">
                        <button type="submit" class="btn btn-light-blue btn-md">Edit</button>
                    </form>
                    <form action="{{ route('deleteFood', $food->id)}}" method="POST">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-light-blue btn-md">Delete</button>
                    </form>
                </div>

            </div>
        </div>
    @endforeach
</div>

<div style="display: flex; justify-content: center;">{{$foods->links()}}</div>

@endsection
