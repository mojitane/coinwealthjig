@extends('_layouts.master')

@section('body')

<main>
  <div class="section">
    <div class="container">
      <div class="columns">
        <div class="column is-5">
          @include('_partials.ranking', ['number' => 1])
        </div>
        <div class="ad ad--mobile" style="width: 100%; max-width: 320px; height: 100px;"></div>
        <div class="column is-7">
          @include('_partials.highchart-carousel')
        </div>
      </div>
    </div>
  </div>
  <div class="section">
    <div class="container">
      <div class="l-home__watchlist">
        <div class="columns">
          <div class="column">
            <h1 class="title is-5 is-uppercase has-text-spaced">My cryptocurrency watchlist</h1>
          </div>
          <div class="column">
            <div class="c-alert c-alert--desktop">
              <div class="columns is-marginless">
                <div class="column c-alert__title">
                  <p class="title is-7 is-uppercase has-text-spaced">Want to know when something interesting happens?</p>
                </div>
                <div class="column c-alert__cta">
                  <a href="#" class="button is-primary has-text-spaced has-text-weight-light modal-button js-modal-button" data-target="modal-alert">Set an alert &gt;</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div>
          @include('_partials/ranking-watchlist')
        </div>
      </div>
    </div>
    <div class="container">
      <div class="cw-main">
        <div class="columns">
          <section class="column is-6">
            <div class="c-alert c-alert--mobile">
              <div class="columns is-marginless">
                <div class="column c-alert__title">
                  <p class="title is-6 is-uppercase has-text-spaced">Want to know when something interesting happens?</p>
                </div>
                <div class="column c-alert__cta">
                  <a href="#" class="button is-primary has-text-spaced has-text-weight-light modal-button js-modal-button" data-target="modal-alert">Set an alert &gt;</a>
                </div>
              </div>
            </div>
            <div class="cw-posts">
              <div class="c-posts__header">
                <h1 class="title is-5 c-posts__header-title has-text-spaced is-uppercase">From our communities</h1><a href="#" class="button is-primary c-posts__header-cta has-text-weight-light has-text-spaced">Start a Post &gt;</a>
              </div>
              @include('_partials.post-teaser')
              @include('_partials.post-teaser')
              @include('_partials.post-teaser')
              @include('_partials.post-teaser')
              @include('_partials.post-teaser')
              <div class="cw-posts__more">
                <a href="#" class="is-uppercase has-text-spaced has-text-weight-bold">Load more +</a>
              </div>
              <div class="cw-posts__join">
                <a href="#" class="button is-primary is-outlined is-uppercase">Join our community &gt;</a>
              </div>
            </div>
          </section>
          <div class="column is-5 is-offset-1">
            <div class="ad ad--desktop" style="height: 200px; width: 80%;"></div>
            <section class="cw-track">
              <div class="c-track__header">
                <div class="c-track__header-green">
                  <h1 class="title is-5 is-uppercase has-text-spaced c-track__header-title">Track your favorites</h1>
                  <h2 class="subtitle is-7 is-uppercase has-text-spaced c-track__header-subtitle" style="">Star the coins you want to track!</h2>
                </div>
              </div>
              @include('_partials.ranking', ['number' => 3])
              <div class="c-track__more">
                <a href="#" class="is-uppercase has-text-spaced has-text-weight-bold">Load more +</a>
              </div>
              <div class="c-track__top">
                <a href="#" class="button is-primary is-outlined is-uppercase">View top 100 &gt;</a>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
