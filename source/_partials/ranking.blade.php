<div class="c-ranking" data-slideout-ignore>
  <table class="table is-hoverable c-ranking__table">
    <thead class="c-ranking__head">
      <tr>
        <th>Rank</th>
        <th>Coin</th>
        <th>Market Cap</th>
        <th>Price</th>
        <th>Change</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < $number; $i++)
      <tr>
        <td class="c-ranking__row c-ranking__row--toggle">1
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-ranking__row c-ranking__row--currency" title="Bitcoin"><span class="c-ranking__currency"><i class="cc BTC"></i></span> Bitcoin</td>
        <td class="c-ranking__row c-ranking__row--cap">$171.48B</td>
        <td class="c-ranking__row c-ranking__row--price"><span class="has-text-primary">$770.82</span></td>
        <td class="c-ranking__row c-ranking__row--change">12.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
      </tr>
      <tr>
        <td class="c-ranking__row c-ranking__row--toggle">2
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--alert is-active animated bounceIn"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-ranking__row c-ranking__row--currency" title="Ethereum"><span class="c-ranking__currency"><i class="cc ETH-alt"></i></span> Ethereum</td>
        <td class="c-ranking__row c-ranking__row--cap">$98.48B</td>
        <td class="c-ranking__row c-ranking__row--price"><span class="has-text-primary">$658.94</span></td>
        <td class="c-ranking__row c-ranking__row--change">4.0% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
      </tr>
      <tr>
        <td class="c-ranking__row c-ranking__row--toggle">3
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-ranking__toggle c-ranking__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-ranking__row c-ranking__row--currency" title="Ripple"><span class="c-ranking__currency"><i class="cc XRP-alt"></i></span> Ripple</td>
        <td class="c-ranking__row c-ranking__row--cap">$88.48B</td>
        <td class="c-ranking__row c-ranking__row--price"><span class="has-text-primary">$544.86</span></td>
        <td class="c-ranking__row c-ranking__row--change">2.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
      </tr>
      @endfor
    </tbody>
  </table>
</div>
