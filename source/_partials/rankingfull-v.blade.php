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
    <tbody v-cloak>
      <tr v-for="coin in cryptoData">
        <td class="c-rankingfull__row c-rankingfull__row--toggle">@{{ coin.rank }}
          <span :class="['icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--fav', {'is-active animated bounceIn': coin.toggleStar}]" @click="cryptoData[coin.rank-1].toggleStar = !coin.toggleStar"><i class="fas fa-star"></i></span>
          <span :class="['icon is-small js-ranking-toggle c-rankingfull__toggle c-rankingfull__toggle--alert', , {'is-active animated bounceIn': coin.toggleAlert}]" @click="cryptoData[coin.rank-1].toggleAlert = !coin.toggleAlert"><i class="fas fa-exclamation-triangle"></i></span>
        </td>
        <td class="c-rankingfull__row c-rankingfull__row--currency" title="Bitcoin"><span class="c-rankingfull__currency"><i :class="coin.icon"></i></span> @{{coin.currency}}</td>
        <td class="c-rankingfull__row c-rankingfull__row--cap">@{{coin.cap | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--price"><span class="has-text-primary">@{{coin.price | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</span></td>
        <td class="c-rankingfull__row c-rankingfull__row--change">@{{coin.change}}% <span :class="['icon is-small', coin.change >= 0 ? 'has-text-primary' : 'has-text-danger']"><i :class="['fas', coin.change >= 0 ? 'fa-caret-up' : 'fa-caret-down']"></i></span></td>
        <td class="c-rankingfull__row c-rankingfull__row--low">@{{coin.low | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--high">@{{coin.high | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--volume">@{{coin.volume | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
        <td class="c-rankingfull__row c-rankingfull__row--averagevolume">@{{coin.averagevolume | currency(configSymbol, configSeparator, configFractionCount,
configFractionSeparator, configSymbolPosition, configSymbolSpacing) }}</td>
      </tr>
    </tbody>
  </table>
</div>
