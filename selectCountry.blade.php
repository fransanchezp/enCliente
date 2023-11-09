@extends('app.base')
@section('title', 'Select')

@section('content')


    <h1>Select Country</h1>
    <form method="get">
        <select name="country">
            @foreach ($countries as $country)
                <option value="{{ $country }}" @if($countrySelection == $selection) selected @endif>{{ $country }}</option>
            @endforeach
        </select>
        <button type="submit">Select</button>
    </form>


@endsection