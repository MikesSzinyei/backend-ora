<h1>Töltsd ki a mezőket</h1>
<form action="sub-drink" method="post">
    {{csrf_field()}}

    <!-- @if( $errors->any() )
        <ul>
            @foreach( $errors->all() as $error )
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif -->

    <p>
        <label for="">Név</label>
        <input type="text" name="name" value="{{ old('name') }}">
        <br>
        @error("name")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <label for="">Típus</label>
        <input type="text" name="type" value="{{ old('type') }}">
        <br>
        @error("type")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <label for="">Alkohol</label>
        <input type="text" name="alc" value="{{ old('alc') }}">
        <br>  
        @error("alc")
            <span>{{$message}}</span>
        @enderror
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>