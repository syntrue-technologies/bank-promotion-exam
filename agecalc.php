<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Age Calculator for Bankers | Calculate Age from Date of Birth | BankWiser Pro</title>
    <meta name="description" content="Quickly and accurately calculate a borrower's age from their Date of Birth (DOB) as of today or a specific date. Essential for KYC and loan eligibility checks.">
    <meta name="keywords" content="age calculator, calculate age from DOB, banker tool, KYC age calculation, loan eligibility age, BankWiser Pro">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    </noscript>

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
            
        /* --- GLOBAL STYLES & BACKGROUND --- */
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

        /* --- HOME LINK STYLING --- */
        .home-link {
            display: block;
            text-align: left;
            max-width: 900px;
            width: 95%;
            margin: 10px auto 0;
        }
        .home-link a {
            color: var(--vermillion-light);
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

        /* --- CALCULATOR CONTAINER (Inputs) --- */
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
        
        /* Input Styles */
        label { display: block; margin-top: 15px; font-weight: 600; color: var(--stardust); font-size: 1rem; }
        input[type="text"], input[type="date"], input[type="number"] { width: 95%; padding: 12px; margin-top: 5px; border: 1px solid var(--bg-mid); border-radius: 6px; background-color: var(--bg-dark); color: white; font-size: 1.05rem; transition: border-color 0.3s; -webkit-appearance: none; appearance: none; }
        input:focus { outline: none; border-color: var(--vermillion); }
        button { width: 100%; padding: 15px; margin-top: 30px; background: var(--vermillion); color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 1.1rem; font-weight: 700; transition: background-color 0.3s, transform 0.2s; box-shadow: 0 5px 15px rgba(255, 87, 51, 0.4); }
        button:hover { background-color: #e54d2e; transform: translateY(-1px); }

        /* --- RESULT DISPLAY --- */
        #ageOutput {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--bg-mid);
            border-radius: 8px;
            text-align: center;
            color: white;
            font-size: 1.2rem;
            font-weight: 600;
            border: 1px solid var(--vermillion);
        }
        #ageOutput p {
            margin: 10px 0;
        }
        .result-value {
            display: block;
            font-size: 2rem;
            font-weight: 700;
            color: var(--vermillion-light);
            margin-top: 10px;
        }

        /* --- TOOL GRID STYLES (Copied from Amortization page) --- */
        .calculator-header {
            max-width: 900px;
            width: 95%;
            margin-top: 40px;
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--vermillion-light);
            text-align: center;
            padding: 10px 0;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }
        .calculator-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            max-width: 900px;
            width: 95%;
            margin: 20px auto 40px;
        }
        .calculator-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            background-color: var(--bg-dark);
            border-radius: 10px;
            text-decoration: none;
            color: var(--stardust);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 1px solid var(--bg-mid);
        }
        .calculator-tile:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
            background-color: var(--bg-mid);
        }
        .tile-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
        .tile-name {
            font-weight: 600;
            text-align: center;
            font-size: 0.95rem;
        }
        
        /* --- SEO Content Styles --- */
        .content-section {
            max-width: 900px;
            width: 95%;
            margin: 40px auto;
            padding: 20px;
            background-color: rgba(36, 36, 62, 0.7);
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        .content-section h2 {
            color: var(--vermillion-light);
            font-size: 1.5rem;
            margin-bottom: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            padding-bottom: 5px;
        }
        .content-section h3 {
            color: var(--stardust);
            font-size: 1.2rem;
            margin-top: 25px;
            margin-bottom: 10px;
        }
        .content-section p, .content-section li {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 15px;
            color: rgba(255, 255, 255, 0.85);
        }
        .content-section ul {
            padding-left: 25px;
            list-style: disc;
        }
        
        .branding {
            margin-top: 20px;
            color: var(--vermillion-light);
            font-weight: 600;
            font-size: 0.9rem;
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
    </style>
</head>
<body>

<div class="home-link">
    <a href="index.php">🏠 Home</a>
</div>

<div class="container">
    <h1>Borrower Age Calculator</h1>
    <form id="ageForm">
        
        <label for="dob">Borrower's Date of Birth (DOB):</label>
        <input type="date" id="dob" required>

        <label for="referenceDate">Calculate Age As Of (Today by default):</label>
        <input type="date" id="referenceDate">

        <button type="submit">Calculate Age</button>
    </form>
    
    <div id="ageOutput" style="display: none;">
        <p>Age of Borrower:</p>
        <span class="result-value" id="resultYears"></span>
        <p id="resultBreakdown"></p>
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
    
    <a href="it.php" class="calculator-tile">
        <span class="tile-icon">🧾</span>
        <span class="tile-name">Income Tax Calculator (India)</span>
    </a>
    
</div>

<div class="content-section">
    <h2>Banker's Guide: Accurate Age Calculation for Loan Eligibility</h2>
    
    <p>
        Accurately determining a borrower's age is a fundamental step in the Know Your Customer (KYC) process and for assessing loan eligibility. Bankers must ensure that the borrower falls within the bank's minimum and maximum age criteria, both at the time of sanction and at the time of loan maturity. Our Age Calculator simplifies this critical step, allowing calculation of age as of today's date or any specified reference date.
    </p>

    <h3>Why Age Matters in Banking</h3>
    <ul>
        <li>Maximum Age Limit: Most retail loans (like Home Loans or Personal Loans) have an upper age limit for borrowers, typically 60 years for salaried individuals and 65-70 years for self-employed individuals, often tied to their retirement age.</li>
        <li>Loan Tenure Calculation: The maximum permitted loan tenure is frequently constrained by the borrower's age at loan maturity. For example, if the maximum age at maturity is 60, a 45-year-old borrower can only be sanctioned a loan for a maximum of 15 years.</li>
        <li>Minor Accounts: For opening bank accounts for minors, the exact age is crucial to determine when the account holder attains majority (18 years) and the account status needs to be converted.</li>
    </ul>
    
    <h3>How to Use the Age Calculator</h3>
    <p>
        To ensure regulatory compliance, always refer to the borrower's Date of Birth (DOB) as mentioned on valid KYC documents (Aadhaar, Passport, Driving License, etc.).
    </p>
    <ol>
        <li>Enter the Borrower's exact Date of Birth (DOB).</li>
        <li>Leave the "Calculate Age As Of" field blank to find the age as of today.</li>
        <li>Enter a specific future date (like the proposed loan maturity date) to check the borrower's age on that date, which is essential for compliance checks.</li>
    </ol>
    <p>
        This essential tool ensures bankers can make swift and accurate decisions regarding eligibility and tenure, minimizing manual errors and speeding up the loan processing cycle.
    </p>

</div>

<div class="branding">
    Tool for Banking Professionals
</div>
<div class="home-link">
    <a href="https://play.google.com/store/apps/details?id=bankwiser.bankpromotion.material&hl=en" target="_blank" rel="noopener noreferrer">Powered by BankWiser Pro</a>
</div>

<script>
    document.getElementById('ageForm').addEventListener('submit', function(e) {
        e.preventDefault();

        const dobInput = document.getElementById('dob').value;
        const refDateInput = document.getElementById('referenceDate').value;
        
        if (!dobInput) {
            alert("Please enter the Borrower's Date of Birth.");
            return;
        }

        const dob = new Date(dobInput);
        let refDate = refDateInput ? new Date(refDateInput) : new Date();

        // Time difference in milliseconds
        const diffTime = refDate.getTime() - dob.getTime();
        if (diffTime < 0) {
            document.getElementById('resultYears').textContent = "0";
            document.getElementById('resultBreakdown').textContent = "DOB cannot be after the reference date.";
            document.getElementById('ageOutput').style.display = 'block';
            return;
        }

        // --- Core Age Calculation Logic (Accurate) ---
        let years = refDate.getFullYear() - dob.getFullYear();
        let months = refDate.getMonth() - dob.getMonth();
        let days = refDate.getDate() - dob.getDate();
        
        if (days < 0) {
            months--;
            // Find the number of days in the previous month of the reference date
            days += new Date(refDate.getFullYear(), refDate.getMonth(), 0).getDate();
        }

        if (months < 0) {
            years--;
            months += 12;
        }
        
        // --- Display Results ---
        document.getElementById('resultYears').textContent = years;
        
        let breakdownText = `( ${years} Years, ${months} Months, ${days} Days )`;
        document.getElementById('resultBreakdown').textContent = breakdownText;

        document.getElementById('ageOutput').style.display = 'block';
    });
</script>

</body>
</html>
