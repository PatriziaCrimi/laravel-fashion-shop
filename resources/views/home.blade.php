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
          <div class="cards-wrapper d-flex justify-content-around flex-wrap">
            {{-- $dress è un'istanza/oggetto del Model "Dress" --}}
            @foreach ($dresses as $dress)
              {{-- "name" is a property of the Object/Instance $dress --}}
              <div class="card border-info mb-3" style="max-width: 18rem;">
                <div class="card-header text-uppercase">{{$dress->brand}}</div>
                <div class="card-body text-info">
                  <h5 class="card-title">{{$dress->name}}</h5>
                  {{-- "price" is NOT NULL --}}
                  <p class="card-text">
                    Price:
                    <span>{{$dress->price}}</span>
                    €
                  </p>
                  {{-- "size" is NOT NULL --}}
                  <p class="card-text size">Size:
                    @if ($dress->size === 0)
                      <span>xs</span>
                    @elseif ($dress->size === 1)
                      <span>s</span>
                    @elseif ($dress->size === 2)
                      <span>m</span>
                    @elseif ($dress->size === 3)
                      <span>l</span>
                    @elseif ($dress->size === 4)
                      <span>xl</span>
                    @elseif ($dress->size === 5)
                      <span>xxl</span>
                    @elseif ($dress->size === 6)
                      <span>xxxl</span>
                    @endif
                  </p>
                  {{-- If "design_gender" is NULL this is not printed --}}
                @if ($dress->design_gender || $dress->design_gender === 0)
                  <p class="card-text">Design gender:
                    @if ($dress->design_gender === 0)
                      <span>unisex</span>
                    @elseif ($dress->design_gender === 1)
                      <span>woman</span>
                    @elseif ($dress->design_gender === 2)
                      <span>man</span>
                    @endif
                  </p>
                @endif
                {{-- If "color" is NULL this is not printed --}}
                @if ($dress->color)
                  <p class="card-text">Color:
                    <span>{{$dress->color}}</span>
                  </p>
                @endif
                {{-- If "length" is NULL this is not printed --}}
                @if ($dress->length || $dress->length === 0)
                  <p class="card-text">Length:
                    @if ($dress->length === 0)
                      <span>over the knee</span>
                    @elseif ($dress->length === 1)
                      <span>mini</span>
                    @elseif ($dress->length === 2)
                      <span>midi</span>
                    @elseif ($dress->length === 3)
                      <span>maxi</span>
                    @endif
                  </p>
                @endif
                {{-- If "style" is NULL this is not printed --}}
                @if ($dress->style)
                  <p class="card-text">Style:
                    <span>{{$dress->style}}</span>
                  </p>
                @endif
                {{-- If "type" is NULL this is not printed --}}
                @if ($dress->type)
                  <p class="card-text">Type:
                    <span>{{$dress->type}}</span>
                  </p>
                @endif
                {{-- If "neckline" is NULL this is not printed --}}
                @if ($dress->neckline)
                  <p class="card-text">Neckline:
                    <span>{{$dress->neckline}}</span>
                  </p>
                @endif
                {{-- If "sleeve_length" is NULL this is not printed --}}
                @if ($dress->sleeve_length || $dress->sleeve_length === 0)
                  <p class="card-text">Sleeves:
                    @if ($dress->sleeve_length === 0)
                      <span>sleeveless</span>
                    @elseif ($dress->sleeve_length === 1)
                      <span>short sleeve</span>
                    @elseif ($dress->sleeve_length === 2)
                      <span>one sleeve</span>
                    @elseif ($dress->sleeve_length === 3)
                      <span>long sleeve</span>
                    @endif
                  </p>
                @endif
                {{-- If "description" is NULL this is not printed --}}
                @if ($dress->description)
                  <p class="card-text">Description:
                    <span>{{$dress->description}}</span>
                  </p>
                @endif
                {{-- If "notes" is NULL this is not printed --}}
                @if ($dress->notes)
                  <p class="card-text">Notes:
                    <span>{{$dress->notes}}</span>
                  </p>
                @endif
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>   {{-- Closing Section-Home container --}}
  </section>
@endsection
