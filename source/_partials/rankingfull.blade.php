<div class="c-rankingfull__container" data-slideout-ignore>
  <table class="table is-hoverable c-rankingfull__table">
    <thead class="c-rankingfull__head">
      <tr>
        <th>Rank</th>
        <th>Exchange</th>
        <th>Market Cap</th>
        <th>Price</th>
        <th>Change</th>
        <th>Day low</th>
        <th>Day high</th>
        <th>Volume</th>
        <th>Average volume</th>
      </tr>
    </thead>
    <tbody>
      @for ($i = 0; $i < 3; $i++)
      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">1
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc BTC"></i></span> Bitcoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$171.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$770.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">12.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$271.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$161.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$171.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$211.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">2
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc ETH"></i></span> Ethereum</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">3
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc XRP-alt"></i></span> Ripple</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">4
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc LTC"></i></span> Litecoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-danger">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-danger"><i class="fas fa-caret-down"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">5
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc NMC"></i></span> Namecoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">6
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc DOGE-alt"></i></span> Dogecoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-danger">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-danger"><i class="fas fa-caret-down"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">7
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert is-active animated bounceIn"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc DASH-alt"></i></span> Dash</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>

      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">8
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i class="cc PPC-alt"></i></span> Peercoin</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">$91.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">$421.82</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">13.5% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">$251.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">$131.2</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">$151.48B</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">$171.48B</td>
      </tr>
      @endfor
    </tbody>
  </table>
</div>
