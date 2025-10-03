<?php
// PHP file for Recurring Deposit (RD) Calculator - BankWiser Pro
// Content optimized for SEO, mobile view, and Indian banking audience.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Recurring Deposit (RD) Calculator with Quarterly Compounding | BankWiser Pro</title>
    <meta name="description" content="Recurring Deposit (RD) Calculator calculate Maturity Amount and Interest Earned with accurate quarterly compounding logic. Includes Indian tax laws (TDS) and RBI guidelines.">
    
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
        /* Replicating key variables from your index.html for consistent look */
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
            margin-bottom: 50px; /* Added margin for footer spacing */
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
        <h1>Professional Recurring Deposit (RD) Calculator</h1>
        <form id="rdForm">
            
            <label for="installment">Monthly Installment (P, ₹):</label>
            <input type="text" id="installment" value="10,000" required inputmode="decimal" pattern="[0-9,]*">

            <label for="rate">Annual Interest Rate (R, %):</label>
            <input type="number" id="rate" value="7.50" min="0.01" step="0.01" required>

            <label for="tenure">Deposit Tenure (N, Months):</label>
            <input type="number" id="tenure" value="60" min="6" step="1" required>

            <button type="submit">Calculate Maturity</button>
        </form>

        <div class="result-section">
            <p>Total Deposit Amount: <span id="totalDeposit" class="result-value">---</span></p>
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
      
        <a href="fd.php" class="calculator-tile">
            <span class="tile-icon">🏦</span>
            <span class="tile-name">Fixed Deposit (FD) Calculator</span>
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
        <h2>Banker's Guide: Understanding RD Calculation & Regulations in India</h2>
        
        <h3>The Logic Behind Your RD Maturity (Quarterly Compounding)</h3>
        <p>
            For banking professionals, accurate compounding is key. This calculator uses the standard commercial method for Recurring Deposits in India, where interest is compounded quarterly, even though the deposit installment is monthly.
        </p>
        <div class="formula-box">
            The maturity value ($M$) is the sum of the maturity value of each installment ($P$). The exponent is the number of remaining quarters for that installment to earn interest.
            <br><br>
            $\text{Maturity Amount} = \sum_{m=1}^{N} \left[ P \times \left(1 + \frac{R_{ann}}{4 \times 100}\right)^{\frac{N-m+1}{3}} \right]$
        </div>

        <h3>Key Regulatory & Tax Considerations (India)</h3>
        <ul style="list-style: disc; padding-left: 20px;">
            <li><strong>Tax Deducted at Source (TDS):</strong> Interest earned on RDs is <strong>fully taxable</strong> as per the income tax slab. Banks are required to deduct TDS at <strong>10%</strong> if the interest earned exceeds <strong>₹40,000</strong> (₹50,000 for senior citizens) in a financial year (subject to change). (Form 15G/15H can be submitted to avoid TDS).</li>
            <li><strong>Liquidity:</strong> RDs have a mandatory <strong>lock-in period of 3 months</strong>. Premature closure after this period generally incurs a penalty, often involving a reduction of the interest rate to the rate applicable for the period the deposit remained with the bank, plus a small penal charge.</li>
            <li><strong>Loan Against RD:</strong> Banks typically allow a loan/overdraft facility against the security of the RD receipt, up to <strong>90-95%</strong> of the deposit value.</li>
        </ul>

        <h2>Frequently Asked Questions (FAQs) for Bank Promotion Exams</h2>
        
        <details>
            <summary>Is there a difference in compounding frequency for RD and FD in banks?</summary>
            <p>
                Yes. While <strong>Fixed Deposit (FD)</strong> interest is usually compounded <strong>quarterly</strong>, it is paid out (or re-invested) annually. <strong>Recurring Deposit (RD)</strong> interest is calculated on monthly installments but compounded <strong>quarterly</strong>. This quarterly compounding is essential for accurately computing the maturity amount on RDs.
            </p>
        </details>
        
        <details>
            <summary>What is the minimum and maximum tenure for a Recurring Deposit?</summary>
            <p>
                The minimum tenure for a Recurring Deposit is typically <strong>6 months</strong>. The tenure can be in multiples of 3 months thereafter (e.g., 9, 12, 15 months). The maximum tenure usually goes up to <strong>10 years (120 months)</strong>.
            </p>
        </details>

        <details>
            <summary>If a customer misses an installment, what is the bank's penalty/procedure?</summary>
            <p>
                Banks levy a penalty for default on monthly installments, typically charged as a fine (e.g., ₹1.5 to ₹2 per ₹100 of installment) for the month of default. If the default continues for a specified period (e.g., 6 consecutive months), the bank may have the right to prematurely close the RD account.
            </p>
        </details>
        
        <details>
            <summary>Can a bank customer nominate a beneficiary for an RD account?</summary>
            <p>
                Yes, nomination facility under Section 45ZA of the Banking Regulation Act, 1949, is available for Recurring Deposits. This is crucial for smooth claims processing in the event of the depositor's demise.
            </p>
        </details>
        
        <details>
            <summary>What is the required documentation for opening an RD account?</summary>
            <p>
                For KYC-compliant customers, no additional documentation is needed. For new customers, <strong>Proof of Identity</strong> (e.g., PAN Card, Aadhaar Card) and <strong>Proof of Address</strong> (e.g., Utility Bill) are required, similar to opening a Savings Bank Account or FD.
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
        // Monthly Installment Input Formatting
        // ----------------------------------------------------
        const installmentInput = document.getElementById('installment');
        
        // Format on blur
        installmentInput.addEventListener('blur', function() {
            const cleanedValue = cleanNumber(this.value);
            if (!isNaN(cleanedValue)) {
                this.value = formatNumber(cleanedValue);
            }
        });

        // Clean on focus
        installmentInput.addEventListener('focus', function() {
            if (this.value) {
                this.value = cleanNumber(this.value);
            }
        });

        // Initialize installment value with formatting
        if (installmentInput.value) {
            installmentInput.value = formatNumber(cleanNumber(installmentInput.value));
        }

        // ----------------------------------------------------
        // RD Calculation Logic
        // ----------------------------------------------------
        document.getElementById('rdForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Get and clean values
            const P = cleanNumber(installmentInput.value); // Monthly Installment
            const R_annual = parseFloat(document.getElementById('rate').value); // Annual Rate (%)
            const N_months = parseInt(document.getElementById('tenure').value); // Tenure (Months)
            
            // Result elements
            const maturityResult = document.getElementById('maturityResult');
            const interestEarned = document.getElementById('interestEarned');
            const totalDeposit = document.getElementById('totalDeposit');
            
            // Set error states if inputs are invalid
            if (isNaN(P) || isNaN(R_annual) || isNaN(N_months) || P <= 0 || R_annual < 0 || N_months < 6) {
                maturityResult.textContent = "Invalid Input";
                interestEarned.textContent = "---";
                totalDeposit.textContent = "---";
                return;
            }

            // 2. Calculation (Assuming Quarterly Compounding - 4 times a year)
            const R_annual_decimal = R_annual / 100;
            const r_q = R_annual_decimal / 4; // Quarterly Rate
            const totalDepositAmount = P * N_months;
            
            let maturityAmount = 0;
            
            if (r_q === 0) {
                // Case for 0% interest
                maturityAmount = totalDepositAmount;
            } else {
                // Calculation loop: sum of the future value of each installment
                for (let m = 1; m <= N_months; m++) {
                    // Number of quarters remaining for this installment
                    const quartersRemaining = (N_months - m + 1) / 3;
                    
                    // Add maturity value of this installment (P * (1 + r_q) ^ quarters)
                    maturityAmount += P * Math.pow(1 + r_q, quartersRemaining);
                }
            }
            
            const totalInterest = maturityAmount - totalDepositAmount;

            // 3. Display Results
            if (maturityAmount && !isNaN(maturityAmount)) {
                // Displaying final calculated values
                maturityResult.textContent = currencyFormatter.format(maturityAmount);
                interestEarned.textContent = currencyFormatter.format(totalInterest);
                totalDeposit.textContent = currencyFormatter.format(totalDepositAmount);
            } else {
                maturityResult.textContent = "N/A";
                interestEarned.textContent = "---";
                totalDeposit.textContent = "---";
            }
        });
    </script>

</body>
</html>