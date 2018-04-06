<div id="app" class="c-rankingfull__container" data-slideout-ignore>
  <div class="buttons">
    <a @click="switchCurrencyUSD" :class="['button', currency == 'USD' ? 'is-primary' : '']">USD</a>
    <a @click="switchCurrencyEUR" :class="['button', currency == 'EUR' ? 'is-primary' : '']">EUR</a>
  </div>
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
      @for ($i = 0; $i < 10; $i++)
      <tr>
        <td class="c-rankingfull__row c-rankingfull__row--toggle">{{ $i+1 }}
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav is-active animated bounceIn"><i class="fas fa-star"></i></span>
          <span class="icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i :class="cryptoDataLocal[0].icon"></i></span> @{{cryptoDataLocal[0].currency}}</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">@{{cryptoDataLocal[0].cap | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">@{{cryptoDataLocal[0].price | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">@{{cryptoDataLocal[0].change}}% <span class="icon is-small has-text-primary"><i class="fas fa-caret-up"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">@{{cryptoDataLocal[0].low | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">@{{cryptoDataLocal[0].high | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">@{{cryptoDataLocal[0].volume | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">@{{cryptoDataLocal[0].averagevolume | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
      </tr>
      @endfor
    </tbody>
  </table>
</div>
