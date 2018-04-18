@extends('_layouts.master')

@section('body')

<main>
  <section class="section">
    <div class="container">
      <section class="l-singlecoin__main">
        <header class="l-singlecoin__header">
          <h1 class="title is-4 has-text-spaced is-uppercase">Bitcoin | BTC</h1>
          <ul class="o-listselect">
            <li class="o-listselect__item is-active">USD</li>
            <li class="o-listselect__item">BTC</li>
            <li class="o-listselect__item">ETH</li>
            <li class="o-listselect__item">XRP</li>
            <li class="o-listselect__item">BCH</li>
          </ul>
        </header>
        <div class="columns">
          <div class="column l-singlecoin__descriptionlist">
            <div class="o-descriptionlist">
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">Rank</div>
                <div class="o-descriptionlist__description">1</div>
              </div>
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">
                  Rank change<!--<br>
                  1D | 7D | 30D-->
                </div>
                <div class="o-descriptionlist__description">0</div>
              </div>
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">Price</div>
                <div class="o-descriptionlist__description">$ 1,0166.90</div>
              </div>
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">Market cap</div>
                <div class="o-descriptionlist__description">$ 171.48B</div>
              </div>
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">24 hour price change</div>
                <div class="o-descriptionlist__description"></div>
              </div>
              <div class="o-descriptionlist__item">
                <div class="o-descriptionlist__title">Volume</div>
                <div class="o-descriptionlist__description">$ 171.48B</div>
              </div>
            </div>
          </div>
          <div class="column l-singlecoin__highcharts is-7-desktop is-5-tablet">
            <div class="l-singlecoin__highcharts-container" id="js-highcharts-container-1"></div>
            <div class="level is-mobile">
              <div class="level-left"></div>
              <div class="level-right">
                <div class="level-item"><a href="#"><i class="fab fa-facebook-f fa-lg"></i></a></div>
                <div class="level-item"><a href="#"><i class="fab fa-twitter fa-lg"></i></a></div>
              </div>
            </div>
          </div>
          <div class="column l-singlecoin__alert-mobile u-hide-desktop has-text-centered">
            <p class="title is-6 is-uppercase has-font-weight-bold">Want to know when somthing interesting happens?</p>
            <a href="#" class="button is-primary modal-button js-modal-button" data-target="modal-alert-vue">Set an alert &gt;</a>
          </div>
          <div class="column l-singlecoin__iconcolumn">
            <div class="o-iconcolumn">
              <div class="o-iconcolumn__item">
                <div class="o-iconcolumn__icon"><img src="/img/coinicon01.png" alt=""></div>
                <div class="o-iconcolumn__text">www.bitcoin.com</div>
              </div>
              <div class="o-iconcolumn__item">
                <div class="o-iconcolumn__icon"><img src="/img/coinicon02.png" alt=""></div>
                <div class="o-iconcolumn__text">Explorer 1</div>
              </div>
              <div class="o-iconcolumn__item">
                <div class="o-iconcolumn__icon"><img src="/img/coinicon03.png" alt=""></div>
                <div class="o-iconcolumn__text">Message Boards</div>
              </div>
              <div class="o-iconcolumn__item">
                <div class="o-iconcolumn__icon"><img src="/img/coinicon04.png" alt=""></div>
                <div class="o-iconcolumn__text">Source Code</div>
              </div>
            </div>
            <div class="has-text-centered">
              <a href="#" class="button is-outlined is-light is-uppercase is-medium">Buy now</a>
            </div>
          </div>
        </div>
      </section>
      <aside>
        <div class="l-singlecoin__aside">
          <div class="columns">
            <div class="column is-7">
              <section class="l-singlecoin__recent-posts">
                <div class="columns u-hide-mobile">
                  <div class="column is-7 has-text-right">
                    <p class="is-uppercase has-text-spaced is-size-7">Want to know when something interesting happens?</p>
                  </div>
                  <div class="column is-5">
                    <a href="#" class="button is-primary is-fullwidth is-uppercase modal-button js-modal-button" data-target="modal-alert-vue">Set an alert &gt;</a>
                  </div>
                </div>
                <header>
                  <h1 class="title is-5 is-uppercase has-text-spaced">Recent posts</h1>
                  <p class="subtitle u-subtitle-has-margin">
                    <ul class="o-listselect is-uppercase has-text-spaced is-size-7">
                      <li class="o-listselect__item is-active">Date</li>
                      <li class="o-listselect__item">Votes</li>
                      <li class="o-listselect__item">Views</li>
                    </ul>
                  </p>
                </header>
                @include('_partials.post-teaser')
                @include('_partials.post-teaser')
                @include('_partials.post-teaser')
                <a href="#" class="button is-primary is-outlined is-uppercase has-text-spaced">Join our community &gt;</a>
              </section>
            </div>
            <div class="column is-4 is-offset-1">
            <div class="ad" style="height: 200px;"></div>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </section>
</main>

@endsection
