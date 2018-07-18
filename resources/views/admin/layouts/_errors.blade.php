@if (count($errors)>0)
        {{-- expr --}}
        <div class="alert alert-danger alert-dismissable">
            <ul>
                @foreach ($errors->all() as $error)
                    {{-- expr --}}
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
@endif