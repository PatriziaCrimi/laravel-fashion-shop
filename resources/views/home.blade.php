@extends('layouts.app')

@section('page-title', 'Homepage')

@section('section')
  <section id="home" class="text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1>{{$title}}</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <ul>
            {{-- $dress è un'istanza/oggetto del Model "Dress" --}}
            @foreach ($dresses as $dress)
              {{-- "name" is a property of the Object/Instance $dress --}}
              <li>{{$dress->name}}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>   {{-- Closing Section-Home container --}}
  </section>
@endsection
