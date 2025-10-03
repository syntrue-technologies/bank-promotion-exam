<?php
// PHP file for Advanced Income Tax Calculator (India) - BankWiser Pro
// Designed to compare tax liability under New vs. Old Tax Regimes for an Indian user.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Advanced Income Tax Calculator (India) - New vs Old Regime Comparison | BankWiser Pro</title>
    <meta name="description" content="Calculate Income Tax liability for the current financial year in India. Compare tax savings under the New Regime (Simplified) vs. Old Regime (Deductions) using HRA, 80C, 80D, and Home Loan interest.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    </noscript>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-BJ517ZS7X0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BJ517ZS7X0');
</script>  
  
    <style>
        /* Replicating key variables from your existing pages */
        :root {
            --vermillion: #FF5733;
            --vermillion-light: #FF9A8B;
            --stardust: rgba(255,255,255,0.9);
            --bg-dark: #24243E;
            --bg-mid: #302B63;
        }
        
		/* --- HOME LINK STYLING --- */
.home-link {
    display: block; /* Makes it take up full width for easy clicking */
    text-align: left;
    max-width: 450px; /* Matches the container width */
    width: 95%;
    margin: 10px auto 0;
}

.home-link a {
    color: var(--vermillion-light); /* Uses your brand color */
    text-decoration: none;
    font-weight: 600;
    padding: 5px 10px;
    border-radius: 5px;
    transition: color 0.3s;
    font-size: 1rem;
}

.home-link a:hover {
    color: var(--vermillion);
}

/* Ensure the container moves down slightly to accommodate the link */
.container {
    margin-top: 10px; 
}      
      
        /* -------------------------------------------
           GLOBAL STYLES & BACKGROUND
           ------------------------------------------- */
        body {
            font-family: 'Space Grotesk', sans-serif;
            background: linear-gradient(-45deg, #0F0C29, var(--bg-mid), var(--bg-dark));
            color: var(--stardust);
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
            padding: 10px; 
            box-sizing: border-box;
            margin: 0;
        }
        
        .container {
            max-width: 95%; 
            width: 450px; 
            margin: 20px auto;
            padding: 20px;
            background-color: rgba(36, 36, 62, 0.9);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            border: 1px solid var(--bg-mid);
        }
        
        h1 {
            font-size: 1.6rem; 
            font-weight: 700;
            margin-bottom: 25px;
            text-align: center;
            color: var(--vermillion-light);
        }
        
        /* -------------------------------------------
           INPUT STYLES
           ------------------------------------------- */
        label {
            display: block;
            margin-top: 15px;
            font-weight: 600;
            color: var(--stardust);
            font-size: 1rem;
        }
        
        input[type="text"], input[type="number"], select {
            width: 95%; 
            padding: 12px;
            margin-top: 5px;
            border: 1px solid var(--bg-mid);
            border-radius: 6px;
            background-color: var(--bg-dark);
            color: white;
            font-size: 1.05rem;
        }
        
        /* Deductions Section Toggle */
        #oldRegimeDeductions {
            border: 1px solid rgba(255, 87, 51, 0.3);
            padding: 15px;
            border-radius: 8px;
            margin-top: 20px;
            background-color: rgba(48, 43, 99, 0.7);
        }
        #oldRegimeDeductions h3 {
            margin-top: 0;
            margin-bottom: 10px;
            color: var(--stardust);
            font-size: 1.1rem;
            text-align: center;
        }

        button {
            width: 100%;
            padding: 15px;
            margin-top: 30px;
            background: var(--vermillion);
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.1rem;
            font-weight: 700;
            transition: background-color 0.3s, transform 0.2s;
            box-shadow: 0 5px 15px rgba(255, 87, 51, 0.4);
        }
        
        button:hover {
            background-color: #e54d2e;
            transform: translateY(-1px);
        }
        
         /* --- CALCULATOR TILES SECTION --- */
        .calculator-header {
            margin-top: 50px;
            font-size: 1.8rem;
            color: white;
            font-weight: 700;
            text-align: center;
            margin-bottom: 20px;
        }
        .calculator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
            gap: 15px;
            max-width: 800px;
            width: 100%;
            margin: 0 auto 50px;
            padding: 0 10px;
        }
        .calculator-tile {
            background-color: var(--bg-mid);
            padding: 20px 15px;
            border-radius: 12px;
            text-decoration: none;
            color: white;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            border: 1px solid rgba(255, 255, 255, 0.1);
            min-height: 120px;
        }
        .calculator-tile:hover {
            transform: translateY(-5px);
            background-color: var(--bg-dark);
            border-color: var(--vermillion);
            box-shadow: 0 8px 20px rgba(255, 87, 51, 0.4);
        }
        .tile-icon {
            font-size: 2.2rem;
            margin-bottom: 5px;
            color: var(--vermillion-light);
        }
        .tile-name {
            font-size: 1rem;
            line-height: 1.2;
        }     
      
        /* -------------------------------------------
           RESULT SECTION (Comparison Table)
           ------------------------------------------- */
        .result-section {
            margin-top: 30px;
            background-color: var(--bg-mid);
            border-radius: 8px;
            padding: 15px;
        }

        .tax-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }
        .tax-table th, .tax-table td {
            padding: 10px;
            text-align: right;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        .tax-table th {
            text-align: left;
            font-weight: 600;
            color: var(--stardust);
            background-color: var(--bg-dark);
        }
        .tax-table .regime-header {
            color: var(--vermillion-light);
            font-weight: 700;
            text-align: center;
            background-color: #3f3972;
        }
        .tax-table .tax-liability-row td {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--vermillion-light);
            background-color: rgba(255, 87, 51, 0.1);
            border-bottom: 2px solid var(--vermillion);
        }
        .tax-saving {
            text-align: center;
            margin-top: 15px;
            font-weight: 700;
            color: #4CAF50; /* Green for saving */
        }
        .tax-penalty {
            text-align: center;
            margin-top: 15px;
            font-weight: 700;
            color: var(--vermillion-light); /* Red for loss */
        }

        /* -------------------------------------------
           SEO Content & Footer (Same as previous pages)
           ------------------------------------------- */
        .content-section {
            max-width: 800px;
            width: 100%;
            margin: 40px auto;
            padding: 0 10px;
            text-align: left;
        }
        .content-section h2 {
            font-size: 1.5rem; 
            margin-top: 2em; 
            color: var(--vermillion-light); 
            border-bottom: 2px solid rgba(255, 87, 51, 0.2); 
            padding-bottom: 5px; 
            text-align: center;
            font-weight: 600;
        }
        
        .branding, .home-link {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 50px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
        }
        .home-link a {
            color: var(--vermillion-light);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
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
                <h3>Old Regime Deductions (Required for comparison)</h3>
                
                <label for="hraExempt">HRA Exemption (Estimate - Enter lower of three limits):</label>
                <input type="number" id="hraExempt" value="50000" min="0" step="100">

                <label for="sec80c">Section 80C Investment (Max ₹1.5 Lakh):</label>
                <input type="number" id="sec80c" value="150000" min="0" max="150000" step="100">

                <label for="sec24b">Home Loan Interest (Sec 24b - Max ₹2 Lakh for self-occupied):</label>
                <input type="number" id="sec24b" value="200000" min="0" max="200000" step="100">

                <label for="sec80d">Health Insurance (Sec 80D - Max ₹25k/₹50k):</label>
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
        // Currency formatter for Indian Rupees (INR)
        const currencyFormatter = new Intl.NumberFormat('en-IN', {
            style: 'currency',
            currency: 'INR',
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        });

        // Function to clean up amount input (remove commas)
        function cleanNumber(str) {
            if (typeof str === 'string') {
                return parseFloat(str.replace(/,/g, ''));
            }
            return parseFloat(str);
        }

        // Function to format number with commas (for display)
        function formatNumber(num) {
            if (isNaN(num)) return '---';
            return num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        // Standard Deduction for Salaried/Pensioners (Applicable in both regimes post-FY23-24)
        const STANDARD_DEDUCTION = 50000;
        const HEALTH_CESS = 0.04; // 4%

        // ----------------------------------------------------
        // Tax Slabs for FY 2024-25 (A.Y. 2025-26)
        // ----------------------------------------------------

        // Tax Slabs for General Citizens (Below 60)
        const OLD_REGIME_SLABS = [
            { limit: 250000, rate: 0.00 },
            { limit: 500000, rate: 0.05 },
            { limit: 1000000, rate: 0.20 },
            { limit: Infinity, rate: 0.30 }
        ];

        // New Regime Slabs (Applicable to all age groups)
        const NEW_REGIME_SLABS = [
            { limit: 300000, rate: 0.00 },
            { limit: 600000, rate: 0.05 },
            { limit: 900000, rate: 0.10 },
            { limit: 1200000, rate: 0.15 },
            { limit: 1500000, rate: 0.20 },
            { limit: Infinity, rate: 0.30 }
        ];
        
        // Function to calculate tax liability (excluding cess and surcharge)
        function calculateTax(taxableIncome, slabs, rebateLimit) {
            let tax = 0;
            let currentSlabStart = 0;

            for (let i = 0; i < slabs.length; i++) {
                const slab = slabs[i];
                if (taxableIncome > currentSlabStart) {
                    const taxableInSlab = Math.min(taxableIncome, slab.limit) - currentSlabStart;
                    tax += taxableInSlab * slab.rate;
                }
                currentSlabStart = slab.limit;
                if (taxableIncome <= slab.limit) break;
            }

            // Apply Rebate under Sec 87A
            if (taxableIncome <= rebateLimit) {
                tax = Math.min(tax, 25000); // Max rebate is 25,000 for Old Regime
                if (rebateLimit === 700000) { // New Regime logic (full rebate up to 7L, effectively zero tax)
                    tax = 0; 
                }
            }

            // Surcharge is complex (50L, 1Cr, 2Cr, 5Cr) and is omitted for simplicity in a *calculator* design.
            // A professional tool would calculate this.

            return tax;
        }

        // ----------------------------------------------------
        // Main Calculation Function
        // ----------------------------------------------------
        document.getElementById('taxForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Get Core Inputs
            const grossSalary = cleanNumber(document.getElementById('grossSalary').value) || 0;
            const ageGroup = document.getElementById('age').value;
            
            // 2. Get Old Regime Deductions
            const hraExempt = cleanNumber(document.getElementById('hraExempt').value) || 0;
            const sec80c = Math.min(cleanNumber(document.getElementById('sec80c').value) || 0, 150000);
            const sec24b = Math.min(cleanNumber(document.getElementById('sec24b').value) || 0, 200000);
            const sec80d = cleanNumber(document.getElementById('sec80d').value) || 0; // Max logic applied later
            const sec80ccd1b = Math.min(cleanNumber(document.getElementById('sec80ccd1b').value) || 0, 50000);
            
            // --- OLD REGIME CALCULATION ---
            let totalDeductionsOld = 0;
            let taxableOld = grossSalary;
            let basicExemptionOld = 250000;
            let rebateLimitOld = 500000; // Sec 87A rebate limit for old regime

            // Adjust Basic Exemption for Senior/Super Senior Citizens
            if (ageGroup === '60to80') basicExemptionOld = 300000;
            if (ageGroup === 'above80') basicExemptionOld = 500000;

            // 2.1 Calculate Total Deductions
            // HRA is an exemption from Gross, not a Chapter VI-A deduction
            taxableOld -= hraExempt; 
            
            // Standard Deduction
            taxableOld -= STANDARD_DEDUCTION;
            
            // Sec 24b (Home Loan Interest)
            taxableOld -= sec24b; 

            // Chapter VI-A Deductions
            // 80C + 80CCD(1B)
            const chapterVIdeductions = sec80c + sec80ccd1b;
            totalDeductionsOld = hraExempt + STANDARD_DEDUCTION + sec24b + chapterVIdeductions + sec80d; // Sum for display

            // Maximize 80C/80CCD(1B) combined deduction for calculation only
            taxableOld -= chapterVIdeductions;
            
            // 80D is calculated on actuals (simplified here, but typically maxes out)
            taxableOld -= sec80d; 
            
            // 2.2 Calculate Tax (Old Regime)
            const taxBeforeCessOld = calculateTax(taxableOld, OLD_REGIME_SLABS, rebateLimitOld);
            const taxLiabilityOld = taxBeforeCessOld * (1 + HEALTH_CESS);

            // --- NEW REGIME CALCULATION ---
            let taxableNew = grossSalary;
            let basicExemptionNew = 300000; // Basic exemption is 3L for all in New Regime
            let rebateLimitNew = 700000; // Sec 87A rebate limit for new regime (effective zero tax up to 7L)

            // 3.1 Calculate Deductions (New Regime only allows Standard Deduction)
            taxableNew -= STANDARD_DEDUCTION; // Only 50k Standard Deduction is allowed
            
            // 3.2 Calculate Tax (New Regime)
            const taxBeforeCessNew = calculateTax(taxableNew, NEW_REGIME_SLABS, rebateLimitNew);
            const taxLiabilityNew = taxBeforeCessNew * (1 + HEALTH_CESS);

            // 4. Display Results
            const resultsBody = document.getElementById('taxResultsBody');
            resultsBody.innerHTML = `
                <tr><th>Gross Income</th><td>${currencyFormatter.format(grossSalary)}</td><td>${currencyFormatter.format(grossSalary)}</td></tr>
                <tr><th>Standard Deduction (₹50k)</th><td>${currencyFormatter.format(STANDARD_DEDUCTION)}</td><td>${currencyFormatter.format(STANDARD_DEDUCTION)}</td></tr>
                <tr><th>Total Chapter VI-A & Other Deductions</th><td>${currencyFormatter.format(totalDeductionsOld - STANDARD_DEDUCTION)}</td><td>${currencyFormatter.format(0)}</td></tr>
                <tr><th>Taxable Income</th><td>${currencyFormatter.format(taxableOld)}</td><td>${currencyFormatter.format(taxableNew)}</td></tr>
                <tr><th>Tax Before Cess</th><td>${currencyFormatter.format(taxBeforeCessOld)}</td><td>${currencyFormatter.format(taxBeforeCessNew)}</td></tr>
                <tr class="tax-liability-row"><th>Net Tax Liability (incl. Cess)</th><td id="taxLiabilityOld">${currencyFormatter.format(taxLiabilityOld)}</td><td id="taxLiabilityNew">${currencyFormatter.format(taxLiabilityNew)}</td></tr>
            `;

            // 5. Display Savings Message
            const taxSavingsMessage = document.getElementById('taxSavingsMessage');
            const savings = taxLiabilityOld - taxLiabilityNew;

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

            // Initialize gross salary with formatting
            const grossSalaryInput = document.getElementById('grossSalary');
            if (grossSalaryInput.value) {
                grossSalaryInput.value = formatNumber(cleanNumber(grossSalaryInput.value));
            }
        });

        // Initialize principal input with formatting
        const grossSalaryInput = document.getElementById('grossSalary');
        if (grossSalaryInput.value) {
            grossSalaryInput.value = formatNumber(cleanNumber(grossSalaryInput.value));
        }
        grossSalaryInput.addEventListener('blur', function() {
            const cleanedValue = cleanNumber(this.value);
            if (!isNaN(cleanedValue)) {
                this.value = formatNumber(cleanedValue);
            }
        });
        grossSalaryInput.addEventListener('focus', function() {
            if (this.value) {
                this.value = cleanNumber(this.value);
            }
        });
    </script>

</body>
</html>