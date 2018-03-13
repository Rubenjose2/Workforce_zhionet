var countries = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.whitespace,
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    prefetch: 'http://pages.revox.io/json/countries-list.json'
});

// passing in `null` for the `options` arguments will result in the default
// options being used
$('#states').typeahead(null, {
    name: 'countries',
    source: countries
});