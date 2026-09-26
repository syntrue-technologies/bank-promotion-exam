function cleanNumber(str) {
    if (typeof str === 'string') {
        return parseFloat(str.replace(/,/g, ''));
    }
    return parseFloat(str);
}

function formatNumber(num) {
    if (isNaN(num)) return '';
    return num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
}

const currencyFormatter = new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
    minimumFractionDigits: 2
});

const currencyFormatterNoDecimals = new Intl.NumberFormat('en-IN', {
    style: 'currency',
    currency: 'INR',
    minimumFractionDigits: 0,
    maximumFractionDigits: 0
});
