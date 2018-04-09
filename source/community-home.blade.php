@extends('_layouts.master')

@section('body')

<main>
  <div class="section">
    <div class="container">
      <h1 class="title is-5 is-uppercase has-text-spaced">
        The community
      </h1>
      <div class="columns">
        <aside class="column is-3">
          <div class="c-feed-menu">
            <div class="c-feed-menu__header">
              <h1 class="title is-6 is-uppercase has-text-spaced">Feeds</h1>
            </div>
            <div class="c-feed-menu__body">
              <ul class="c-feed__list">
                <li class="c-feed__item is-active"><a href="#">community 1</a></li>
                <li class="c-feed__item"><a href="#">community 2</a></li>
                <li class="c-feed__item"><a href="#">community 3</a></li>
                <li class="c-feed__item"><a href="#">community 4</a></li>
                <li class="c-feed__item"><a href="#">community 5</a></li>
                <li class="c-feed__item"><a href="#">community 6</a></li>
              </ul>
            </div>
          </div>
        </aside>
        <div class="column is-6">
          <section>
            <h1 class="title is-6 is-uppercase has-text-spaced u-hide-mobile">Popular today</h1>
            <div class="is-divider u-hide-desktop" data-content="POPULAR TODAY"></div>
            @include('_partials/threadreply')
            @include('_partials/threadreply')
            @include('_partials/threadreply')
          </section>
          <div class="ad u-hide-desktop" style="height: 150px;"></div>
          <section>
            <h1 class="title is-6 is-uppercase has-text-spaced u-hide-mobile">Most recent</h1>
            <div class="is-divider u-hide-desktop" data-content="MOST RECENT"></div>
            @include('_partials/threadreply')
            @include('_partials/threadreply')
            @include('_partials/threadreply')
          </section>
        </div>
        <div class="column is-3 u-hide-mobile">
          <div class="ad" style="height: 200px;"></div>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
