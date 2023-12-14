<h1>Töltsd ki a mezőket</h1>
<form action="submit-data" method="post">
{{csrf_field()}}

<p>
    <label for="">Név</label>
    <input type="text" name="name" value="{{ old('name') }}">
    <br>
        @error("name")
            <span>{{$message}}</span>
        @enderror
</p>
<p>
    <label for="">Magasság</label>
    <input type="text" name="height" value="{{ old('height') }}">
    <br>
        @error("height")
            <span>{{$message}}</span>
        @enderror
</p>
<p>
    <label for="">Hely</label>
    <input type="text" name="location" value="{{ old('location') }}">
    <br>
        @error("location")
            <span>{{$message}}</span>
        @enderror
</p>
<p>
    <button type="submit">Küldés</button>
</p>
</form>

