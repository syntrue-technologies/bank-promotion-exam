<?php
// PHP file for SIP vs Lumpsum Calculator - BankWiser Pro
// Content optimized for SEO, mobile view, and Indian banking/wealth management audience.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>SIP vs Lumpsum Calculator | Mutual Fund Investment & Wealth Planning | BankWiser Pro</title>
    <meta name="description" content="Compare SIP vs Lumpsum investments with our professional calculator. Understand compounding, returns, and taxation for mutual funds in India. Essential for wealth managers and investors.">
    
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
      
        /* Radio Button Group */
        .radio-group {
            display: flex;
            justify-content: center; /* Center the buttons */
            gap: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .radio-group label {
            background-color: var(--bg-mid);
            padding: 10px 20px;
            border-radius: 6px;
            cursor: pointer;
            border: 1px solid var(--bg-mid);
            transition: all 0.2s ease-in-out;
            margin-top: 0; /* Override default label margin */
        }
        .radio-group input[type="radio"] {
            display: none; /* Hide the actual radio button */
        }
        .radio-group input[type="radio"]:checked + label {
            background-color: var(--vermillion);
            border-color: var(--vermillion);
            color: white;
            box-shadow: 0 4px 8px rgba(255, 87, 51, 0.3);
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
        
        .final-value {
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
        <h1>Professional SIP vs Lumpsum Calculator</h1>
        <form id="investmentForm">
            
            <label>Choose Investment Type:</label>
            <div class="radio-group">
                <input type="radio" id="investmentTypeSIP" name="investmentType" value="sip" checked>
                <label for="investmentTypeSIP">SIP</label>
                
                <input type="radio" id="investmentTypeLumpsum" name="investmentType" value="lumpsum">
                <label for="investmentTypeLumpsum">Lumpsum</label>
            </div>

            <div id="sipFields">
                <label for="sipAmount">Monthly SIP Amount (₹):</label>
                <input type="text" id="sipAmount" value="5,000" required inputmode="decimal" pattern="[0-9,]*">
            </div>

            <div id="lumpsumFields" style="display: none;">
                <label for="lumpsumAmount">Lumpsum Investment (₹):</label>
                <input type="text" id="lumpsumAmount" value="1,00,000" required inputmode="decimal" pattern="[0-9,]*">
            </div>

            <label for="expectedRate">Expected Annual Return (CAGR, %):</label>
            <input type="number" id="expectedRate" value="12.00" min="0.01" step="0.01" required>

            <label for="investmentTenure">Investment Tenure (Years):</label>
            <input type="number" id="investmentTenure" value="10" min="1" required>

            <button type="submit">Calculate Returns</button>
        </form>

        <div class="result-section">
            <p>Total Investment: <span id="totalInvestment" class="result-value">---</span></p>
            <p>Estimated Returns (Interest/Growth): <span id="estimatedReturns" class="result-value">---</span></p>
            <p>Maturity Value: <span id="maturityValue" class="result-value final-value">---</span></p>
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
        <h2>Banker's Guide: Optimizing Wealth with SIP vs Lumpsum</h2>
        
        <h3>The Compounding Power: SIP vs Lumpsum Formulas</h3>
        <p>
            Understanding the underlying math helps in advising clients. Both SIP and Lumpsum investments leverage the power of compounding, but through different mechanisms.
        </p>
        <div class="formula-box">
            <strong>For SIP (Future Value of Annuity Due):</strong>
            <br><br>
            $\text{FV}_{\text{SIP}} = P \times \frac{(1+r)^N - 1}{r} \times (1+r)$
            <br><br>
            Where: 
            <ul>
                <li>$P$: Monthly SIP Amount</li>
                <li>$r$: Monthly Rate of Return ($R_{annual} / 1200$)</li>
                <li>$N$: Total Number of Installments (Tenure in Months)</li>
            </ul>
            <br>
            <strong>For Lumpsum (Compound Interest):</strong>
            <br><br>
            $\text{FV}_{\text{Lumpsum}} = P \times (1 + R/100)^T$
            <br><br>
            Where: 
            <ul>
                <li>$P$: Lumpsum Principal Amount</li>
                <li>$R$: Annual Rate of Return</li>
                <li>$T$: Tenure in Years</li>
            </ul>
        </div>

        <h3>Key Investment & Tax Considerations (India)</h3>
        <ul style="list-style: disc; padding-left: 20px;">
            <li><strong>Rupee Cost Averaging (SIP):</strong> SIPs naturally benefit from Rupee Cost Averaging, where more units are bought when markets are low and fewer when high, averaging out the purchase cost and reducing risk.</li>
            <li><strong>Taxation of Mutual Fund Gains:</strong>
                <ul>
                    <li><strong>Equity Funds:</strong> Long-Term Capital Gains (LTCG) over ₹1 Lakh in a financial year are taxed at 10% without indexation. Short-Term Capital Gains (STCG) are taxed at 15%.</li>
                    <li><strong>Debt Funds:</strong> Gains are taxed as per the investor's income tax slab if held for less than 3 years. For holding periods over 3 years, gains are taxed at 20% with indexation benefits.</li>
                </ul>
            </li>
            <li><strong>Ideal Scenarios:</strong> SIPs are ideal for salaried individuals or those with regular income, fostering disciplined savings. Lumpsum investments are suitable for investors with a large corpus (e.g., bonus, maturity proceeds) who are bullish on market outlook.</li>
        </ul>

        <h2>Frequently Asked Questions (FAQs) for Wealth Management Professionals</h2>
        
        <details>
            <summary>What is the concept of 'Time Horizon' in SIP vs Lumpsum decisions?</summary>
            <p>
                The <strong>Time Horizon</strong> refers to the period for which an investor plans to stay invested. For SIPs, a longer time horizon (e.g., 5+ years) typically smooths out market volatility and maximizes compounding. Lumpsum investments also benefit from long horizons, but the timing of the initial investment plays a more critical role.
            </p>
        </details>
        
        <details>
            <summary>How does 'Risk Appetite' influence the choice between SIP and Lumpsum?</summary>
            <p>
                Investors with a lower risk appetite might prefer SIPs due to Rupee Cost Averaging, which mitigates the risk of investing a large sum at a market peak. Those with a higher risk appetite and strong market conviction might opt for lumpsum to capture potential immediate upward movement.
            </p>
        </details>

        <details>
            <summary>Are there any specific types of SIPs available in India beyond regular SIPs?</summary>
            <p>
                Yes. Besides regular SIPs, there are: <strong>Flexible SIPs</strong> (allows changing installment amount), <strong>Value Averaging Investment Plans (VIP)</strong> which invest more when NAV is low and less when NAV is high, and <strong>Perpetual SIPs</strong> which run indefinitely until stopped.
            </p>
        </details>
        
        <details>
            <summary>What role does asset allocation play when deciding SIP or Lumpsum?</summary>
            <p>
                Asset allocation is crucial irrespective of the investment method. A SIP or Lumpsum should be directed towards a fund that fits the investor's overall asset allocation strategy (e.g., 60% equity, 40% debt). The choice between SIP and lumpsum is about how to deploy funds into that chosen asset class.
            </p>
        </details>
        
        <details>
            <summary>How do market conditions (bull vs. bear) affect SIP vs Lumpsum decisions?</summary>
            <p>
                In a bear market, SIPs are often advantageous as they allow buying more units at lower prices. Lumpsum investments made during deep bear markets can generate significant returns when markets recover. In a bull market, SIPs are safer for new investments, while lumpsum carries the risk of investing at inflated valuations.
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
        // Input Formatting (Monthly SIP / Lumpsum Amount)
        // ----------------------------------------------------
        const sipAmountInput = document.getElementById('sipAmount');
        const lumpsumAmountInput = document.getElementById('lumpsumAmount');
        
        // Function to apply formatting on blur
        function applyFormatting(inputElement) {
            inputElement.addEventListener('blur', function() {
                const cleanedValue = cleanNumber(this.value);
                if (!isNaN(cleanedValue)) {
                    this.value = formatNumber(cleanedValue);
                }
            });
            inputElement.addEventListener('focus', function() {
                if (this.value) {
                    this.value = cleanNumber(this.value);
                }
            });
            // Initialize with formatting
            if (inputElement.value) {
                inputElement.value = formatNumber(cleanNumber(inputElement.value));
            }
        }
        applyFormatting(sipAmountInput);
        applyFormatting(lumpsumAmountInput);

        // ----------------------------------------------------
        // Radio Button Logic (Show/Hide Fields)
        // ----------------------------------------------------
        const investmentTypeRadios = document.querySelectorAll('input[name="investmentType"]');
        const sipFields = document.getElementById('sipFields');
        const lumpsumFields = document.getElementById('lumpsumFields');

        investmentTypeRadios.forEach(radio => {
            radio.addEventListener('change', function() {
                if (this.value === 'sip') {
                    sipFields.style.display = 'block';
                    lumpsumFields.style.display = 'none';
                    lumpsumAmountInput.value = ''; // Clear lumpsum if switching to SIP
                    sipAmountInput.required = true;
                    lumpsumAmountInput.required = false;

                } else {
                    sipFields.style.display = 'none';
                    lumpsumFields.style.display = 'block';
                    sipAmountInput.value = ''; // Clear SIP if switching to lumpsum
                    sipAmountInput.required = false;
                    lumpsumAmountInput.required = true;
                }
            });
        });

        // ----------------------------------------------------
        // SIP / Lumpsum Calculation Logic
        // ----------------------------------------------------
        document.getElementById('investmentForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Get and clean values
            const selectedType = document.querySelector('input[name="investmentType"]:checked').value;
            const P = (selectedType === 'sip') ? cleanNumber(sipAmountInput.value) : cleanNumber(lumpsumAmountInput.value); // Principal
            const R_annual = parseFloat(document.getElementById('expectedRate').value); // Annual Rate (%)
            const T_years = parseInt(document.getElementById('investmentTenure').value); // Tenure (Years)
            
            // Result elements
            const totalInvestmentSpan = document.getElementById('totalInvestment');
            const estimatedReturnsSpan = document.getElementById('estimatedReturns');
            const maturityValueSpan = document.getElementById('maturityValue');
            
            // Set error states if inputs are invalid
            if (isNaN(P) || isNaN(R_annual) || isNaN(T_years) || P <= 0 || R_annual < 0 || T_years <= 0) {
                maturityValueSpan.textContent = "Invalid Input";
                totalInvestmentSpan.textContent = "---";
                estimatedReturnsSpan.textContent = "---";
                return;
            }

            let totalInvestmentAmount;
            let maturityValue;
            
            if (selectedType === 'sip') {
                const r_monthly = (R_annual / 12) / 100; // Monthly rate
                const N_months = T_years * 12; // Total installments (months)
                totalInvestmentAmount = P * N_months;

                if (r_monthly === 0) {
                    maturityValue = totalInvestmentAmount;
                } else {
                    // Future Value of an Annuity Due (payments at beginning of period)
                    maturityValue = P * ((Math.pow(1 + r_monthly, N_months) - 1) / r_monthly) * (1 + r_monthly);
                }

            } else { // lumpsum
                totalInvestmentAmount = P;
                const R_annual_decimal = R_annual / 100;

                if (R_annual_decimal === 0) {
                    maturityValue = P;
                } else {
                    // Compound Interest Formula: A = P * (1 + R)^T
                    maturityValue = P * Math.pow(1 + R_annual_decimal, T_years);
                }
            }
            
            const estimatedReturns = maturityValue - totalInvestmentAmount;

            // 3. Display Results
            if (maturityValue && !isNaN(maturityValue)) {
                totalInvestmentSpan.textContent = currencyFormatter.format(totalInvestmentAmount);
                estimatedReturnsSpan.textContent = currencyFormatter.format(estimatedReturns);
                maturityValueSpan.textContent = currencyFormatter.format(maturityValue);
            } else {
                maturityValueSpan.textContent = "N/A";
                totalInvestmentSpan.textContent = "---";
                estimatedReturnsSpan.textContent = "---";
            }
        });
    </script>

</body>
</html>