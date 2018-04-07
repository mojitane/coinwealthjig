<div class="c-rankingfull__container" data-slideout-ignore>
  <table class="table is-hoverable c-rankingfull__table">
    <thead class="c-rankingfull__head">
      <tr>
        <th>Rank</th>
        <th>Exchange</th>
        <th>Total 24 hour volume</th>
        <th>Average 24 hour volume</th>
        <th>Number of pairs</th>
        <th>website</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 4; $i++)
      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">1
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc BTC"></i></span> Bitcoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumetotal">$171.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumeaverage">$770.82</td>
        <td class="c-rankingfull__row c-rankingfull__row--pairs">2150</td>
        <td class="c-rankingfull__row c-rankingfull__row--website">www.bitifinex.com</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">2
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Ripple"><span class="c-rankingfull__currency"><i class="cc XRP-alt"></i></span> Ripple</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumetotal">$171.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumeaverage">$770.82</td>
        <td class="c-rankingfull__row c-rankingfull__row--pairs">2150</td>
        <td class="c-rankingfull__row c-rankingfull__row--website">www.bitifinex.com</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">3
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Ethereum"><span class="c-rankingfull__currency"><i class="cc ETH"></i></span> Ethereum</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumetotal">$171.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--volumeaverage">$770.82</td>
        <td class="c-rankingfull__row c-rankingfull__row--pairs">2150</td>
        <td class="c-rankingfull__row c-rankingfull__row--website">www.bitifinex.com</td>
      </tr>
      @endfor
    </tbody>
  </table>
</div>
