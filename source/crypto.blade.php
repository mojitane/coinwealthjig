@extends('_layouts.master')

@section('body')

<main>
  <section class="section">
    <div class="container">
      <header class="c-rankingfull__title">
        <h1 class="title is-uppercase has-text-spaced is-5">All cryptocurrencies by marketcap</h1>
      </header>
      <div class="columns c-rankingfull__columns">
        <div class="column is-3">
          <div class="ad" style="width: 100%; height: 10rem;"></div>
        </div>
        <div class="column is-9">
          @include('_partials.rankingfull')
        </div>
      </div>
    </div>
  </section>
</main>

@endsection
