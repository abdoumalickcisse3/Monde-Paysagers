@extends('layout')

@section('content')

    <section class="home" id=home>
        <div class="home-content">
            <img src="{{ asset('images/jumbo.svg') }}" alt="" class="img-jumbo">
            <div class="home-right">
                <div class="home-text">
                    <h1>Fabriquer des chefs-d’œuvre verts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus hendrerit suscipit egestas. Nunc eget congue ante. Vivamus ut sapien et ex volutpat tincidunt eget at felis vivamus hendrerit suscipit egestas consectetur adipiscing elit.</p>
                </div>
                <div class="home-people">
                    <img src="{{ asset('images/people.svg') }}" alt="People">
                    <div class="home-people-text">
                        <h5>50K+</h5>
                        <p>Déjà Satisfaitent</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
</main>



@endsection