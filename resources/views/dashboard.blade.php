<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <img src="{{ URL::to('media/user/'. Auth::user()-> photo)}}" alt="">
        <table class="table table-striped">
             <h1 class="display-2">{{ Auth::user()-> name}}</h1>

             
     <tr>
     <td>Name</td>
     <td>{{ Auth::user()-> name}}</td>

     </tr>

     <tr>
        <td>Username</td>
        <td>{{ Auth::user()-> username}}</td>

        </tr>
     <tr>
        <td>Email</td>
        <td>{{ Auth::user()-> email}}</td>



        </tr>
        <tr>
            <td>Cell</td>
            <td>{{ Auth::user()-> cell}}</td>

            </tr>
            
                <tr>
                    <td>Location</td>
                    <td>{{ Auth::user()-> location}}</td>
   
                    </tr>

        </table>


    </div>
</x-app-layout>
