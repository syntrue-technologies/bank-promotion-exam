<?php
// PHP file for Professional EMI Calculator - BankWiser Pro
// Content optimized for SEO, mobile view, and Indian banking audience.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>EMI Calculator | Amortization Guide & Floating Rate Logic | BankWiser Pro</title>
    <meta name="description" content="Advanced EMI Calculator. Calculates monthly EMI, Total Interest for Home Loan, Car Loan, Education Loan etc.">
    
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
        
        .emi-value {
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
        <h1>Professional Loan EMI Calculator</h1>
        <form id="emiForm">
            
            <label for="principal">Loan Amount (₹):</label>
            <input type="text" id="principal" value="1,00,000" required inputmode="decimal" pattern="[0-9,]*">

            <label for="rate">Annual Interest Rate (%):</label>
            <input type="number" id="rate" value="10.00" min="0.01" step="0.01" required>

            <label for="tenure">Loan Tenure (Months):</label>
            <input type="number" id="tenure" value="12" min="1" required>

            <button type="submit">Calculate EMI</button>
        </form>

        <div class="result-section">
            <p>Monthly EMI: <span id="emiResult" class="result-value emi-value">---</span></p>
            <p>Total Principal: <span id="totalPrincipal" class="result-value">---</span></p>
            <p>Total Interest Paid: <span id="interestResult" class="result-value">---</span></p>
            <p>Total Payment: <span id="totalPayment" class="result-value">---</span></p>
        </div>
    </div>

      <div class="calculator-header">Essential Banker Tools</div>
    <div class="calculator-grid">
        
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
        <h2>Banker's Guide: Understanding EMI Calculation & Amortization</h2>
        
        <h3>The Reducing Balance EMI Formula</h3>
        <p>
            This calculator uses the standard Reducing Balance method, which is mandatory for almost all retail loans in India. The interest component decreases monthly as the principal balance is repaid.
        </p>
        <div class="formula-box">
            The Equated Monthly Installment (EMI) is calculated using the following formula:
            <br><br>
            $\text{EMI} = P \times r \times \frac{(1 + r)^n}{(1 + r)^n - 1}$
            <br><br>
            Where: 
            <ul>
                <li>$P$: Principal Loan Amount</li>
                <li>$r$: Monthly Interest Rate ($R_{annual} / 1200$)</li>
                <li>$n$: Loan Tenure in Months</li>
            </ul>
        </div>

        <h3>Key Banking Concepts for Loan Professionals (India)</h3>
        <ul style="list-style: disc; padding-left: 20px;">
            <li><strong>Amortization:</strong> This is the process of paying off debt over time in regular installments. In a typical EMI structure, the principal component is small initially but increases over time, while the interest component decreases.</li>
            <li><strong>MCLR/RLLR:</strong> Many retail loans are benchmarked against the Marginal Cost of Funds Based Lending Rate (MCLR) or the Repo Rate Linked Lending Rate (RLLR) as per RBI guidelines, determining the variable interest rate.</li>
            <li><strong>Foreclosure Charges:</strong> As per RBI rules, banks are generally not allowed to levy foreclosure charges or pre-payment penalties on floating rate term loans sanctioned to individual borrowers (e.g., home loans).</li>
        </ul>

        <h2>Frequently Asked Questions (FAQs) for Bank Promotion Exams</h2>
        
        <details>
            <summary>What is the difference between a Fixed and Floating Interest Rate?</summary>
            <p>
                A <strong>Fixed Rate</strong> remains constant throughout the loan tenure, providing predictable EMI payments. A <strong>Floating Rate</strong> is linked to an external or internal benchmark (like RLLR or MCLR) and changes periodically, causing the interest rate and potentially the EMI or tenure to fluctuate.
            </p>
        </details>
        
        <details>
            <summary>How does pre-payment affect the Amortization Schedule?</summary>
            <p>
                When a borrower makes a pre-payment (partial or full), the amount directly reduces the outstanding principal. This results in the remaining EMI payments having a much larger principal component, significantly reducing the total interest paid and often shortening the loan tenure.
            </p>
        </details>

        <details>
            <summary>What is the P-Segment (Priority Sector) target relevance for housing loans?</summary>
            <p>
                Certain segments of Home Loans, especially those involving lower amounts or specific beneficiary groups, qualify under the bank's Priority Sector Lending (PSL) targets mandated by the RBI. This classification is vital for meeting regulatory goals.
            </p>
        </details>
        
        <details>
            <summary>What is a 'Step-up' or 'Step-down' EMI option?</summary>
            <p>
                A Step-up EMI allows the borrower to start with lower EMIs that gradually increase over time, aligning with expected income growth. A Step-down EMI is the opposite—higher payments initially, decreasing later—suited for those expecting their income to drop after a certain period.
            </p>
        </details>
        
        <details>
            <summary>Is there any tax benefit on a Home Loan EMI in India?</summary>
            <p>
                Yes. Under Section 80C of the Income Tax Act, the principal component of the EMI is deductible up to ₹1.5 Lakh per year. Additionally, the interest component is deductible up to ₹2 Lakh per year under Section 24(b) for self-occupied property (as of current tax laws).
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

        // Function to clean up loan amount input (remove commas)
        function cleanNumber(str) {
            if (typeof str === 'string') {
                return parseFloat(str.replace(/,/g, ''));
            }
            return parseFloat(str);
        }

        // Function to format number with commas
        function formatNumber(num) {
            // Check if num is valid before formatting
            if (isNaN(num)) return '';
            return num.toLocaleString('en-IN', { minimumFractionDigits: 0, maximumFractionDigits: 0 });
        }

        // ----------------------------------------------------
        // Principal Input Formatting (Adding/Removing Commas)
        // ----------------------------------------------------
        const principalInput = document.getElementById('principal');
        
        // Format on blur (when user clicks out)
        principalInput.addEventListener('blur', function() {
            const cleanedValue = cleanNumber(this.value);
            if (!isNaN(cleanedValue)) {
                this.value = formatNumber(cleanedValue);
            }
        });

        // Clean on focus (when user clicks in)
        principalInput.addEventListener('focus', function() {
            // Only clean if it's not empty, allowing user to start typing easily
            if (this.value) {
                this.value = cleanNumber(this.value);
            }
        });

        // Initialize principal value with formatting
        if (principalInput.value) {
            principalInput.value = formatNumber(cleanNumber(principalInput.value));
        }

        // ----------------------------------------------------
        // EMI Calculation Logic
        // ----------------------------------------------------
        document.getElementById('emiForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // 1. Get and clean values
            const P = cleanNumber(principalInput.value); // Principal
            const R_annual = parseFloat(document.getElementById('rate').value); // Annual Rate (%)
            const N_months = parseInt(document.getElementById('tenure').value); // Tenure (Months)
            
            // Result elements
            const emiResult = document.getElementById('emiResult');
            const interestResult = document.getElementById('interestResult');
            const totalPrincipal = document.getElementById('totalPrincipal');
            const totalPayment = document.getElementById('totalPayment');
            
            // Set error states if inputs are invalid
            if (isNaN(P) || isNaN(R_annual) || isNaN(N_months) || P <= 0 || R_annual < 0 || N_months <= 0) {
                emiResult.textContent = "Invalid Input";
                interestResult.textContent = "---";
                totalPrincipal.textContent = "---";
                totalPayment.textContent = "---";
                return;
            }

            // 2. Calculation
            const r_monthly = (R_annual / 12) / 100; // Monthly Rate

            let emi;
            let totalInterest;
            let totalPayable;
            
            if (r_monthly === 0) {
                // Case for 0% interest
                emi = P / N_months;
                totalInterest = 0;
            } else {
                const power = Math.pow(1 + r_monthly, N_months);
                // Standard EMI Formula
                emi = P * r_monthly * power / (power - 1);
                
                // Total Payments & Interest
                totalPayable = emi * N_months;
                totalInterest = totalPayable - P;
            }

            // 3. Display Results
            if (emi && !isNaN(emi)) {
                // Total Payments (re-calculated to ensure all figures align)
                totalPayable = emi * N_months;
                
                // Displaying final calculated values
                emiResult.textContent = currencyFormatter.format(emi);
                interestResult.textContent = currencyFormatter.format(totalInterest);
                totalPrincipal.textContent = currencyFormatter.format(P);
                totalPayment.textContent = currencyFormatter.format(totalPayable);
            } else {
                emiResult.textContent = "N/A";
                interestResult.textContent = "---";
                totalPrincipal.textContent = "---";
                totalPayment.textContent = "---";
            }
        });
    </script>

</body>
</html>