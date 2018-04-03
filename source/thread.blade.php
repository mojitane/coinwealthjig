@extends('_layouts.master')

@section('body')

<main>
  <div class="section">
    <div class="container">
      <div class="columns is-centered">
        <div class="column is-9">
          <div class="ad u-hide-mobile" style="width:100%; height: 6rem;"></div>
          <section class="c-thread">
            <article class="c-thread__post">
              <header class="c-thread__header u-hide-desktop">
                <div class="columns is-mobile is-multiline is-paddingless">
                  <div class="column is-narrow">
                    <div class="c-thread__avatar">
                      <div class="image is-1by1">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jadlimcaco/128.jpg" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="column">
                    <p class="has-text-weight-bold is-uppercase has-text-spaced is-size-6-light">James Smith</p>
                    <p class="c-thread__datetime is-size-7 is-uppercase has-text-spaced">Posted <time datetime="2018-03-27 12:00:00">23 hours</time> ago</p>
                    <ul class="c-thread__meta is-size-7">
                      <li><span class="icon is-small"><i class="far fa-dot-circle"></i></span> 11</li>
                      <li><span class="icon is-small"><i class="fas fa-eye"></i></span> 5</li>
                    </ul>
                  </div>
                  <div class="column is-12">
                    <h1 class="c-thread__title title has-text-spaced">UK, US Agencies Join Forces To Study And Regulate Cryptocurrencies</h1>
                  </div>
                </div>
              </header>
              <header class="c-thread__header u-hide-mobile">
                <div class="columns is-paddingless">
                  <div class="column is-3">
                    <div class="c-thread__avatar">
                      <div class="image is-1by1">
                        <img src="https://s3.amazonaws.com/uifaces/faces/twitter/jadlimcaco/128.jpg" alt="">
                      </div>
                    </div>
                    <p class="has-text-weight-bold has-text-centered is-uppercase has-text-spaced is-size-6-light">James Smith</p>
                  </div>
                  <div class="column is-9">
                    <h1 class="c-thread__title title has-text-spaced">UK, US Agencies Join Forces To Study And Regulate Cryptocurrencies</h1>
                    <ul class="c-thread__meta is-size-7">
                      <li><span class="icon is-small"><i class="far fa-dot-circle"></i></span> 11</li>
                      <li><span class="icon is-small"><i class="fas fa-eye"></i></span> 5</li>
                    </ul>
                    <p class="c-thread__datetime is-size-7 is-uppercase has-text-spaced">Posted <time datetime="2018-03-27 12:00:00">23 hours</time> ago</p>
                  </div>
                </div>
              </header>
              <div class="c-thread__body">
                <div class="columns is-widescreen">
                  <div class="column is-9 is-offset-3">
                    <p class="c-thread__source has-text-weight-bold has-text-spaced is-uppercase is-size-6-light">Link: news.com</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta perferendis neque consectetur officiis sunt, itaque amet sequi, iste expedita nihil nobis, dignissimos doloremque ullam recusandae nemo reiciendis nesciunt eligendi! Quia. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et placeat quasi perferendis officia aspernatur incidunt, facilis autem officiis saepe veritatis suscipit eum deleniti. Aliquam recusandae, quaerat. Nemo accusamus officiis nisi.</p>
                  </div>

                </div>
                <div class="ad u-hide-desktop" style="width:100%; height: 12rem;"></div>
              </div>
            </article>

            <div class="c-thread__replies">
              @include('_partials/threadreply')
              @include('_partials/threadreply')
              @include('_partials/threadreply')
              @include('_partials/threadreply')
            </div>
            <a href="#" class="button is-primary is-outlined has-text-spaced is-uppercase">Reply to thread</a>
          </section>
        </div>
      </div>
    </div>
  </div>
</main>

@endsection
