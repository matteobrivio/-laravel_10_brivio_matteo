<x-layout>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Benvenuto</h1>
        </div>
    </div>
    @guest
    <div class="row">
        <div class="col-12">
            <a href="{{route('login')}}">accedi</a>
        </div>
        <div class="col-12">
            <a href="{{route('register')}}">registrati</a>
        </div>
    </div>
    @endguest
    @auth
    <div class="row">
        <div class="col">
            <p>
                il tuo nome è {{Auth::user()->name}} e la tua mail è {{Auth::user()->email}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit">Esci</button>
            </form>

        </div>
    </div>
    @endauth

</div>


</x-layout>