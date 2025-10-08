<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Advanced Income Tax Calculator (India) - New vs Old Regime Comparison | BankWiser Pro</title>
    <link rel="canonical" href="https://promotionstudymaterial.com/it.php">
    <meta name="description" content="Compare tax liability under the New vs. Old tax regimes. Instant calculation for FY 2024-25, including deductions like 80C, HRA, and home loan interest.">

    <!-- Open Graph (for Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:title" content="Income Tax Calculator (India) - New vs Old Regime | BankWiser Pro">
    <meta property="og:description" content="Easily compare your tax outgo under the new and old tax regimes. Make an informed decision for the current financial year.">
    <meta property="og:image" content="https://promotionstudymaterial.com/og-image.jpg">
    <meta property="og:url" content="https://promotionstudymaterial.com/it.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BankWiser Pro: Income Tax Calculator (New vs Old)">
    <meta name="twitter:description" content="Calculate and compare your income tax liability under both tax regimes to maximize your savings.">
    <meta name="twitter:image" content="https://promotionstudymaterial.com/og-image.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    </noscript>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ517ZS7X0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BJ517ZS7X0');
</script>  
  
<link rel="stylesheet" href="css/style.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Advanced Income Tax Calculator (India) - New vs Old Regime Comparison | BankWiser Pro",
  "url": "https://promotionstudymaterial.com/it.php",
  "description": "Compare tax liability under the New vs. Old tax regimes. Instant calculation for FY 2024-25, including deductions like 80C, HRA, and home loan interest.",
  "mainEntity": {
    "@type": "Calculator",
    "name": "Income Tax Comparison (FY 2024-25)"
  },
  "publisher": {
    "@type": "Organization",
    "name": "BankWiser Pro",
    "logo": {
      "@type": "ImageObject",
      "url": "/favicon.ico"
    }
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What is the difference between the New and Old Tax Regimes in India?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The Old Tax Regime allows for claiming numerous deductions and exemptions like HRA, 80C, 80D, etc., but has higher tax slab rates. The New Tax Regime offers lower tax slab rates but disallows most deductions, offering a simpler tax filing process. The Standard Deduction of ₹50,000 is available under both regimes for salaried individuals."
      }
    },
    {
      "@type": "Question",
      "name": "What is the tax rebate under Section 87A?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The tax rebate under Section 87A makes your tax liability zero if your taxable income is below a certain threshold. For the New Regime, this limit is ₹7 Lakhs. For the Old Regime, the limit is ₹5 Lakhs."
      }
    }
  ]
}
</script>
<style>
    #oldRegimeDeductions {
        border: 1px solid #E2E8F0;
        padding: 15px;
        border-radius: 8px;
        margin-top: 20px;
        background-color: var(--light-gray);
    }
    #oldRegimeDeductions h3 {
        margin-top: 0;
        margin-bottom: 10px;
        color: var(--primary-text);
        font-size: 1.1rem;
        text-align: center;
    }
    .tax-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
    }
    .tax-table th, .tax-table td {
        padding: 10px;
        text-align: right;
        border-bottom: 1px solid #E2E8F0;
    }
    .tax-table th {
        text-align: left;
        font-weight: 600;
        color: var(--gray-text);
    }
    .tax-table .regime-header {
        color: var(--primary-text);
        font-weight: 700;
        text-align: center;
        background-color: var(--pale-green);
    }
    .tax-table .tax-liability-row td {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--primary-green);
        background-color: #F0FFF4;
        border-bottom: 2px solid var(--primary-green);
    }
    .tax-saving {
        text-align: center;
        margin-top: 15px;
        font-weight: 700;
        color: #2F855A; /* Darker Green */
    }
    .tax-penalty {
        text-align: center;
        margin-top: 15px;
        font-weight: 700;
        color: #C53030; /* Darker Red */
    }
</style>
</head>
<body>
<div class="home-link">
    <a href="index.php">🏠 Home</a>
</div>
    <div class="container">
        <h1>Income Tax Comparison (FY 2024-25)</h1>
        <form id="taxForm">
            
            <label for="grossSalary">Annual Gross Salary (₹):</label>
            <input type="text" id="grossSalary" value="10,00,000" required inputmode="decimal" pattern="[0-9,]*">

            <label for="age">Age Group:</label>
            <select id="age">
                <option value="below60">Below 60 Years (General)</option>
                <option value="60to80">60 to 80 Years (Senior Citizen)</option>
                <option value="above80">Above 80 Years (Super Senior Citizen)</option>
            </select>
            
            <div id="oldRegimeDeductions">
                <h3>Old Regime Deductions (For Comparison)</h3>
                
                <label for="hraExempt">HRA Exemption (Estimate):</label>
                <input type="number" id="hraExempt" value="50000" min="0" step="100">

                <label for="sec80c">Section 80C Investment (Max ₹1.5 Lakh):</label>
                <input type="number" id="sec80c" value="150000" min="0" max="150000" step="100">

                <label for="sec24b">Home Loan Interest (Sec 24b - Max ₹2 Lakh):</label>
                <input type="number" id="sec24b" value="200000" min="0" max="200000" step="100">

                <label for="sec80d">Health Insurance (Sec 80D):</label>
                <input type="number" id="sec80d" value="25000" min="0" max="100000" step="100">
                
                <label for="sec80ccd1b">NPS Contribution (Sec 80CCD(1B) - Max ₹50k):</label>
                <input type="number" id="sec80ccd1b" value="0" min="0" max="50000" step="100">
                
            </div>

            <button type="submit">Calculate Tax Liability</button>
        </form>

        <div class="result-section">
            <h2>Tax Comparison (Old vs. New)</h2>
            <table class="tax-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <td class="regime-header">Old Regime</td>
                        <td class="regime-header">New Regime</td>
                    </tr>
                </thead>
                <tbody id="taxResultsBody">
                    <tr><th>Gross Income</th><td id="grossOld">---</td><td id="grossNew">---</td></tr>
                    <tr><th>Standard Deduction (₹50k)</th><td id="stdDeductionOld">---</td><td id="stdDeductionNew">---</td></tr>
                    <tr><th>Total Chapter VI-A Deductions</th><td id="totalDeductionsOld">---</td><td>0.00</td></tr>
                    <tr><th>Taxable Income</th><td id="taxableOld">---</td><td id="taxableNew">---</td></tr>
                    <tr class="tax-liability-row"><th>Net Tax Liability (incl. Cess)</th><td id="taxLiabilityOld">---</td><td id="taxLiabilityNew">---</td></tr>
                </tbody>
            </table>
            <div id="taxSavingsMessage" class="tax-saving"></div>
        </div>
    </div>

      <div class="calculator-header">Essential Banker Tools</div>
    <div class="calculator-grid">
        
        <a href="emi.php" class="calculator-tile">
            <span class="tile-icon">💰</span>
            <span class="tile-name">Loan EMI Calculator</span>
        </a>
        
      	<a href="amortization.php" class="calculator-tile">
    		<span class="tile-icon">💰</span>
    		<span class="tile-name">Amortization Schedule Calculator</span>
		</a>
      
        <a href="fd.php" class="calculator-tile">
            <span class="tile-icon">🏦</span>
            <span class="tile-name">Fixed Deposit (FD) Calculator</span>
        </a>
        
        <a href="rd.php" class="calculator-tile">
            <span class="tile-icon">🗓️</span>
            <span class="tile-name">Recurring Deposit (RD) Calculator</span>
        </a>
        
        <a href="sip.php" class="calculator-tile">
            <span class="tile-icon">📈</span>
            <span class="tile-name">SIP / Lumpsum Calculator</span>
        </a>
                
      	<a href="agecalc.php" class="calculator-tile">
        	<span class="tile-icon">🎂</span>
        	<span class="tile-name">Age Calculator</span>
    	</a>
      
    </div>
  
    <div class="content-section">
        <h2>Wealth Manager's Handbook: New vs. Old Tax Regime</h2>
        
        <h3>The Core Differentiators (Current FY)</h3>
        <p>
            The choice between the Old Tax Regime and the New Tax Regime (default since FY 2023-24) is the most critical decision for salaried individuals.
        </p>
        <ul style="list-style: disc; padding-left: 20px;">
            <li><strong>Old Regime:</strong> Lower slab rates but allows for claiming over 70 exemptions and deductions (e.g., 80C, HRA, Sec 24b). Best for individuals with high loan/insurance commitments.</li>
            <li><strong>New Regime:</strong> Higher basic exemption limit (₹3 Lakh), but offers only a few deductions (like the ₹50,000 Standard Deduction). Best for individuals with minimal investments and deductions.</li>
            <li><strong>Key Change:</strong> The ₹50,000 Standard Deduction is now available under both the Old and New Regimes for salaried individuals (post FY 2023-24 amendment).</li>
        </ul>

        <h2>Tax Compliance FAQs for Banking Professionals</h2>
        
        <details>
            <summary>What is the 'Rebate' under Section 87A for both regimes?</summary>
            <p>
                Section 87A offers a full tax rebate if the taxable income does not exceed a certain limit. For the New Regime, the limit is ₹7 Lakh. For the Old Regime, the limit is ₹5 Lakh. This means those earning just above these limits may pay significantly more tax.
            </p>
        </details>
        
        <details>
            <summary>Is the Standard Deduction of ₹50,000 applicable in both regimes?</summary>
            <p>
                Yes, for the current Financial Year, the Standard Deduction of ₹50,000 for salaried and pensioners is applicable under both the Old and the New Tax Regimes. This significantly improved the benefit of the New Regime.
            </p>
        </details>

        <details>
            <summary>How is the interest on a self-occupied Home Loan treated under the two regimes?</summary>
            <p>
                Under the Old Regime, interest paid on a self-occupied house property loan (Sec 24b) is deductible up to ₹2 Lakh per annum. Under the New Regime, this deduction is not available, making the Old Regime often better for high home loan borrowers.
            </p>
        </details>
        
    </div>
    
    <div class="branding">
        Tool for Banking Professionals
    </div>
    <div class="home-link">
        <a href="https://play.google.com/store/apps/details?id=bankwiser.bankpromotion.material&hl=en" target="_blank" rel="noopener noreferrer">Powered by BankWiser Pro</a>
    </div>

    <script>
        const currencyFormatter = new Intl.NumberFormat('en-IN', { style: 'currency', currency: 'INR', minimumFractionDigits: 0, maximumFractionDigits: 0 });
        function cleanNumber(str) { return typeof str === 'string' ? parseFloat(str.replace(/,/g, '')) : parseFloat(str); }
        function formatNumber(num) { return isNaN(num) ? '---' : num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 }); }

        const STANDARD_DEDUCTION = 50000;
        const HEALTH_CESS = 0.04;

        const OLD_REGIME_SLABS = {
            below60: [{ limit: 250000, rate: 0.00 }, { limit: 500000, rate: 0.05 }, { limit: 1000000, rate: 0.20 }, { limit: Infinity, rate: 0.30 }],
            '60to80': [{ limit: 300000, rate: 0.00 }, { limit: 500000, rate: 0.05 }, { limit: 1000000, rate: 0.20 }, { limit: Infinity, rate: 0.30 }],
            above80: [{ limit: 500000, rate: 0.00 }, { limit: 1000000, rate: 0.20 }, { limit: Infinity, rate: 0.30 }]
        };
        const NEW_REGIME_SLABS = [{ limit: 300000, rate: 0.00 }, { limit: 600000, rate: 0.05 }, { limit: 900000, rate: 0.10 }, { limit: 1200000, rate: 0.15 }, { limit: 1500000, rate: 0.20 }, { limit: Infinity, rate: 0.30 }];

        function calculateTax(taxableIncome, slabs) {
            let tax = 0;
            let lastLimit = 0;
            for (const slab of slabs) {
                if (taxableIncome > lastLimit) {
                    const taxableInSlab = Math.min(taxableIncome, slab.limit) - lastLimit;
                    tax += taxableInSlab * slab.rate;
                }
                lastLimit = slab.limit;
            }
            return tax;
        }

        document.getElementById('taxForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const grossSalary = cleanNumber(document.getElementById('grossSalary').value) || 0;
            const ageGroup = document.getElementById('age').value;
            
            const hraExempt = cleanNumber(document.getElementById('hraExempt').value) || 0;
            const sec80c = Math.min(cleanNumber(document.getElementById('sec80c').value) || 0, 150000);
            const sec24b = Math.min(cleanNumber(document.getElementById('sec24b').value) || 0, 200000);
            const sec80d = cleanNumber(document.getElementById('sec80d').value) || 0;
            const sec80ccd1b = Math.min(cleanNumber(document.getElementById('sec80ccd1b').value) || 0, 50000);

            // Old Regime
            const totalDeductionsOld = hraExempt + STANDARD_DEDUCTION + sec24b + sec80c + sec80d + sec80ccd1b;
            let taxableOld = grossSalary - totalDeductionsOld;
            taxableOld = Math.max(0, taxableOld);
            
            let taxBeforeCessOld = calculateTax(taxableOld, OLD_REGIME_SLABS[ageGroup]);
            if (taxableOld <= 500000) taxBeforeCessOld = 0; // Rebate 87A
            const taxLiabilityOld = taxBeforeCessOld * (1 + HEALTH_CESS);

            // New Regime
            let taxableNew = grossSalary - STANDARD_DEDUCTION;
            taxableNew = Math.max(0, taxableNew);

            let taxBeforeCessNew = calculateTax(taxableNew, NEW_REGIME_SLABS);
            if (taxableNew <= 700000) taxBeforeCessNew = 0; // Rebate 87A
            const taxLiabilityNew = taxBeforeCessNew * (1 + HEALTH_CESS);

            document.getElementById('taxResultsBody').innerHTML = `
                <tr><th>Gross Income</th><td>${currencyFormatter.format(grossSalary)}</td><td>${currencyFormatter.format(grossSalary)}</td></tr>
                <tr><th>Standard Deduction</th><td>${currencyFormatter.format(STANDARD_DEDUCTION)}</td><td>${currencyFormatter.format(STANDARD_DEDUCTION)}</td></tr>
                <tr><th>Total Other Deductions</th><td>${currencyFormatter.format(totalDeductionsOld - STANDARD_DEDUCTION)}</td><td>${currencyFormatter.format(0)}</td></tr>
                <tr><th>Taxable Income</th><td>${currencyFormatter.format(taxableOld)}</td><td>${currencyFormatter.format(taxableNew)}</td></tr>
                <tr class="tax-liability-row"><th>Net Tax Liability</th><td id="taxLiabilityOld">${currencyFormatter.format(taxLiabilityOld)}</td><td id="taxLiabilityNew">${currencyFormatter.format(taxLiabilityNew)}</td></tr>
            `;

            const savings = taxLiabilityOld - taxLiabilityNew;
            const taxSavingsMessage = document.getElementById('taxSavingsMessage');
            if (savings > 0) {
                taxSavingsMessage.textContent = `You save ${currencyFormatter.format(savings)} by choosing the New Regime!`;
                taxSavingsMessage.className = 'tax-saving';
            } else if (savings < 0) {
                taxSavingsMessage.textContent = `You save ${currencyFormatter.format(Math.abs(savings))} by choosing the Old Regime!`;
                taxSavingsMessage.className = 'tax-penalty';
            } else {
                taxSavingsMessage.textContent = `Tax liability is the same under both regimes.`;
                taxSavingsMessage.className = 'tax-neutral';
            }
        });

        const grossSalaryInput = document.getElementById('grossSalary');
        grossSalaryInput.addEventListener('blur', function() {
            const cleanedValue = cleanNumber(this.value);
            if (!isNaN(cleanedValue)) { this.value = formatNumber(cleanedValue); }
        });
        grossSalaryInput.addEventListener('focus', function() {
            if (this.value) { this.value = cleanNumber(this.value); }
        });
        if (grossSalaryInput.value) {
            grossSalaryInput.value = formatNumber(cleanNumber(grossSalaryInput.value));
        }
    </script>

</body>
</html>