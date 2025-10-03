<?php
// PHP file for Term Deposit (FD) Interest and Maturity Calculator - BankWiser Pro
// Content optimized for SEO, mobile view, and Indian banking audience, using quarterly compounding.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Fixed Deposit (FD) Interest & Maturity Calculator | BankWiser Pro</title>
    <meta name="description" content="Term Deposit (FD) Calculator: calculate FD maturity value and interest earned based on mandatory quarterly compounding. Includes TDS and premature withdrawal rules.">
    
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
        
        /* Typography for Content Sections */
        .content-section p, .content-section li {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--stardust);
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
           CALCULATOR CONTAINER (Responsive)
           ------------------------------------------- */
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
        
        input[type="text"], input[type="number"] {
            width: 95%; 
            padding: 12px;
            margin-top: 5px;
            border: 1px solid var(--bg-mid);
            border-radius: 6px;
            background-color: var(--bg-dark);
            color: white;
            font-size: 1.05rem;
            transition: border-color 0.3s;
            -webkit-appearance: none;
            appearance: none;
        }
        
        input:focus {
            outline: none;
            border-color: var(--vermillion);
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
        
        /* -------------------------------------------
           RESULT SECTION 
           ------------------------------------------- */
        .result-section {
            margin-top: 30px;
            padding: 15px; 
            border: 2px solid var(--vermillion-light);
            background-color: var(--bg-mid);
            border-radius: 8px;
            color: var(--stardust);
        }
        
        .result-section p {
            margin: 10px 0; 
            font-size: 1rem;
            display: flex;
            justify-content: space-between;
            line-height: 1.4;
        }
        
        .result-value {
            font-weight: 700;
            color: white;
            font-size: 1.1rem;
            text-align: right;
            max-width: 50%; 
        }
        
        .maturity-value {
            color: var(--vermillion-light); 
            font-size: 1.2rem; 
        }

        /* -------------------------------------------
           SEO CONTENT & FAQ STYLES
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
        .content-section h3 {
            font-size: 1.2rem; 
            color: white; 
            margin: 1.5em 0 0.5em; 
            font-weight: 600;
        }
        .formula-box {
            background-color: var(--bg-mid); 
            padding: 15px; 
            border-radius: 6px; 
            font-size: 0.95rem; 
            overflow-x: auto;
        }

        /* FAQ Styling */
        details {
            margin-bottom: 15px; 
            border: 1px solid var(--bg-mid); 
            border-radius: 8px; 
            background-color: rgba(36, 36, 62, 0.8); 
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }
        summary {
            padding: 18px; 
            font-weight: 600; 
            cursor: pointer; 
            list-style: none; 
            color: white;
        }
        details p {
            padding: 0 18px 18px 18px; 
            margin: 0; 
            border-top: 1px solid var(--bg-mid); 
            font-size: 1rem;
        }
        
        /* -------------------------------------------
           BRANDING & UTILITY LINKS
           ------------------------------------------- */
        .branding {
            margin-top: 25px;
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.6);
            text-align: center;
        }
        
        .home-link {
            text-align: center;
            margin-top: 15px;
            margin-bottom: 50px; 
        }
        .home-link a {
            color: var(--vermillion-light);
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
        }
        
        @media (min-width: 600px) {
            .container {
                padding: 30px;
            }
            h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
<div class="home-link">
    <a href="index.php">🏠 Home</a>
</div>
    <div class="container">
        <h1>Professional Fixed Deposit (FD) Calculator</h1>
        <form id="fdForm">
            
            <label for="principal">Principal Deposit Amount (₹):</label>
            <input type="text" id="principal" value="1,00,000" required inputmode="decimal" pattern="[0-9,]*">

            <label for="rate">Annual Interest Rate (R, %):</label>
            <input type="number" id="rate" value="7.50" min="0.01" step="0.01" required>

            <label>Deposit Tenure:</label>
            <div style="display: flex; gap: 10px;">
                <input type="number" id="tenureYears" value="5" min="0" step="1" placeholder="Years" style="width: 48%;" required>
                <input type="number" id="tenureMonths" value="0" min="0" max="11" step="1" placeholder="Months" style="width: 48%;" required>
            </div>

            <button type="submit">Calculate Maturity</button>
        </form>

        <div class="result-section">
            <p>Initial Principal: <span id="initialPrincipal" class="result-value">---</span></p>
            <p>Total Interest Earned: <span id="interestEarned" class="result-value">---</span></p>
            <p>Maturity Amount: <span id="maturityResult" class="result-value maturity-value">---</span></p>
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
      
        <a href="rd.php" class="calculator-tile">
            <span class="tile-icon">🗓️</span>
            <span class="tile-name">Recurring Deposit (RD) Calculator</span>
        </a>
        
        <a href="sip.php" class="calculator-tile">
            <span class="tile-icon">📈</span>
            <span class="tile-name">SIP / Lumpsum Calculator</span>
        </a>
        
        <a href="it.php" class="calculator-tile">
            <span class="tile-icon">🧾</span>
            <span class="tile-name">Income Tax Calculator (India)</span>
        </a>
        
      	<a href="agecalc.php" class="calculator-tile">
        	<span class="tile-icon">🎂</span>
        	<span class="tile-name">Age Calculator</span>
    	</a>
      
    </div>
  
    <div class="content-section">
        <h2>Banker's Guide: FD Calculation, Compounding & Indian Tax Norms</h2>
        
        <h3>The Compounding Logic: Why Quarterly is Standard in India</h3>
        <p>
            The majority of Indian banks calculate and compound interest on Fixed Deposits quarterly, even if the interest payment option chosen by the customer is monthly, yearly, or at maturity. This calculator uses the standard cumulative deposit formula.
        </p>
        <div class="formula-box">
            The maturity value ($A$) is calculated based on quarterly compounding (where $n$ is the number of compounding periods per year, so $n=4$):
            <br><br>
            $\text{Maturity Amount} = P \times \left(1 + \frac{R/100}{n}\right)^{n \times T}$
            <br><br>
            Where: 
            <ul>
                <li>$P$: Principal Amount</li>
                <li>$R$: Annual Interest Rate</li>
                <li>$T$: Tenure in Years</li>
                <li>$n$: Compounding frequency (4 for Quarterly)</li>
            </ul>
        </div>

        <h3>Key Tax & Operational Considerations (India)</h3>
        <ul style="list-style: disc; padding-left: 20px;">
            <li><strong>TDS on FD Interest:</strong> Interest earned on FDs is fully taxable. Banks deduct TDS at 10% if the accrued interest exceeds ₹40,000 (₹50,000 for senior citizens) in a financial year. The TDS is applied even if the interest is not paid out until maturity.</li>
            <li><strong>Premature Closure Penalty:</strong> Banks apply a penalty (typically 0.5% to 1.0% reduction) on the interest rate if the FD is broken prematurely. The interest will be paid at the lower rate applicable for the period the deposit actually ran or the contracted rate, whichever is lower.</li>
            <li><strong>Tax-Saver FDs:</strong> These FDs qualify for a deduction under Section 80C (up to ₹1.5 Lakh), but come with a mandatory 5-year lock-in period and generally do not allow premature withdrawal or loan facilities.</li>
        </ul>

        <h2>Frequently Asked Questions (FAQs) for Term Deposit Professionals</h2>
        
        <details>
            <summary>What is the minimum tenure for a Fixed Deposit in commercial banks?</summary>
            <p>
                As per RBI guidelines, the minimum tenure for a Fixed Deposit is 7 days. The maximum tenure is typically 10 years. Deposits below 7 days are generally not allowed, except in special cases such as inter-bank deposits.
            </p>
        </details>
        
        <details>
            <summary>Is quarterly interest compounding the same as quarterly interest payout?</summary>
            <p>
                No. Compounding is the frequency at which earned interest is added back to the principal to start earning interest itself. Payout is the frequency at which the bank actually sends the accumulated interest to the customer's account (e.g., monthly, quarterly, or at maturity). For Cumulative FDs, compounding is typically quarterly, but payout is at maturity.
            </p>
        </details>

        <details>
            <summary>Can a loan facility be availed against a Tax-Saver FD?</summary>
            <p>
                No. Because Tax-Saver FDs qualify for deduction under Section 80C and have a mandatory 5-year lock-in period, banks cannot offer a loan or overdraft facility against these specific deposits. This rule ensures the tax benefit is utilized for long-term savings.
            </p>
        </details>
        
        <details>
            <summary>What is the bank's responsibility regarding TDS on joint accounts?</summary>
            <p>
                In a joint FD account, the TDS certificate (Form 16A) is issued in the name of the first holder of the FD, as the first holder is usually the one considered primarily responsible for reporting the income. Banks must ensure the interest accrued is tracked against the first holder's PAN.
            </p>
        </details>
        
        <details>
            <summary>How is the interest on a broken (prematurely withdrawn) FD calculated?</summary>
            <p>
                When an FD is broken, the interest is not paid at the contracted rate. It is paid at the lower of two rates: (1) the rate applicable for the tenure the FD actually remained with the bank, OR (2) the original contracted rate. A penalty (e.g., 1%) is usually deducted from this new interest rate.
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
            minimumFractionDigits: 2
        });

        // Function to clean up amount input (remove commas)
        function cleanNumber(str) {
            if (typeof str === 'string') {
                return parseFloat(str.replace(/,/g, ''));
            }
            return parseFloat(str);
        }

        // Function to format number with commas (for principal display)
        function formatNumber(num) {
            if (isNaN(num)) return '';
            return num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        // ----------------------------------------------------
        // Principal Input Formatting
        // ----------------------------------------------------
        const principalInput = document.getElementById('principal');
        
        // Format on blur
        principalInput.addEventListener('blur', function() {
            const cleanedValue = cleanNumber(this.value);
            if (!isNaN(cleanedValue)) {
                this.value = formatNumber(cleanedValue);
            }
        });

        // Clean on focus
        principalInput.addEventListener('focus', function() {
            if (this.value) {
                this.value = cleanNumber(this.value);
            }
        });

        // Initialize principal value with formatting
        if (principalInput.value) {
            principalInput.value = formatNumber(cleanNumber(principalInput.value));
        }

        // ----------------------------------------------------
        // FD Calculation Logic (Quarterly Compounding)
        // ----------------------------------------------------
        document.getElementById('fdForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Get and clean values
            const P = cleanNumber(principalInput.value); // Principal
            const R_annual = parseFloat(document.getElementById('rate').value); // Annual Rate (%)
            const years = parseInt(document.getElementById('tenureYears').value); 
            const months = parseInt(document.getElementById('tenureMonths').value); 
            
            // Result elements
            const maturityResult = document.getElementById('maturityResult');
            const interestEarned = document.getElementById('interestEarned');
            const initialPrincipal = document.getElementById('initialPrincipal');
            
            // Set error states if inputs are invalid
            if (isNaN(P) || isNaN(R_annual) || isNaN(years) || isNaN(months) || P <= 0 || R_annual < 0 || (years === 0 && months === 0)) {
                maturityResult.textContent = "Invalid Input";
                interestEarned.textContent = "---";
                initialPrincipal.textContent = "---";
                return;
            }

            // 2. Calculation (Quarterly Compounding: n=4)
            const n = 4; // Compounding frequency per year
            const T_totalYears = years + (months / 12); // Total tenure in years
            const R_annual_decimal = R_annual / 100;

            // Total number of compounding periods (N = n * T)
            // Note: Since banks calculate interest for odd periods (less than a quarter) slightly differently, 
            // we use the precise compounding formula which gives the best estimate.
            const N_periods = n * T_totalYears; 
            
            let maturityAmount;
            
            if (R_annual_decimal === 0) {
                // Case for 0% interest
                maturityAmount = P;
            } else {
                // Standard Compound Interest Formula: A = P * (1 + R/n)^(n*T)
                maturityAmount = P * Math.pow(1 + (R_annual_decimal / n), N_periods);
            }
            
            const totalInterest = maturityAmount - P;

            // 3. Display Results
            if (maturityAmount && !isNaN(maturityAmount)) {
                // Displaying final calculated values
                maturityResult.textContent = currencyFormatter.format(maturityAmount);
                interestEarned.textContent = currencyFormatter.format(totalInterest);
                initialPrincipal.textContent = currencyFormatter.format(P);
            } else {
                maturityResult.textContent = "N/A";
                interestEarned.textContent = "---";
                initialPrincipal.textContent = "---";
            }
        });
    </script>

</body>
</html>