@extends('layouts.main-layout')

@section('content')
  <main class="home">
    <ul>
      @foreach ($cars as $car)
        <li>
          <details>
            <summary>
              Car {{$car -> id}}:  {{ $car -> name}} , {{$car -> model }}
            </summary>
            <p>
              <a href="{{ route('pilot', $car -> id) }}">
                PILOTS
              </a>
            </p>
            <p>
              <a href="{{ route('brand', $car -> id) }}">
               BRAND
              </a>
            </p>
          </details>
        </li>
      @endforeach
    </ul>

    <button>
      <a href="{{ route('create') }}">
        Create new pilot
      </a>
    </button>
  </main>
@endsection
