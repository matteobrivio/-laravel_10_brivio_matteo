<x-layout>

<div class="container">
    <div class="row justify-content-center alig-items-center">
        <div class="col-12 text-center mt-5" >
            <h2>REGISTRATI</h2>
        </div>
    </div>
    <form action="{{route('register')}}" method="POST">
    @csrf
        {{-- username e mail --}}
        <div class="row mt-3">
            <div class="col-6  text-center">
                <div class="row">
                        <label class="form-label" for="name">inserisci username</label>
                        <input class="form-control" type="text" id="name" name="name">
                </div>
            </div>
            <div class="col-6  text-center">
                <div class="row ">
                        <label class="form-label" for="email">inserisci email</label>
                        <input class="form-control" type="email" id="email" name="email">
                </div>
            </div>
        </div>
        {{-- psw e conferma psw --}}
        <div class="row mt-3">
            <div class="col-6 text-center">
                <div class="row ">
                    <label class="form-label" for="password">inserisci password</label>
                    <input class="form-control" type="password" id="password" name="password">
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="row ">
                    <label class="form-label" for="password_confirmation">inserisci conferma password</label>
                    <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                </div>
            </div>
        </div>
    {{-- bottone validazione --}}
        <div class="row text-center mt-3">
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Registrami</button>
            </div>
        </div>
        
    </form>

</div>

</x-layout>