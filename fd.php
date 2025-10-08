<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Fixed Deposit (FD) Interest & Maturity Calculator | BankWiser Pro</title>
    <meta name="description" content="Term Deposit (FD) Calculator: calculate FD maturity value and interest earned based on mandatory quarterly compounding. Includes TDS and premature withdrawal rules.">
    
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
            <p>Maturity Amount: <span id="maturityResult" class="result-value emi-value">---</span></p>
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

            const N_periods = n * T_totalYears; 
            
            let maturityAmount;
            
            if (R_annual_decimal === 0) {
                maturityAmount = P;
            } else {
                maturityAmount = P * Math.pow(1 + (R_annual_decimal / n), N_periods);
            }
            
            const totalInterest = maturityAmount - P;

            // 3. Display Results
            if (maturityAmount && !isNaN(maturityAmount)) {
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
