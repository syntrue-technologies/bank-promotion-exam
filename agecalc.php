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
    <h1>Borrower Age Calculator</h1>
    <form id="ageForm">
        
        <label for="dob">Borrower's Date of Birth (DOB):</label>
        <input type="date" id="dob" required>

        <label for="referenceDate">Calculate Age As Of (Today by default):</label>
        <input type="date" id="referenceDate">

        <button type="submit">Calculate Age</button>
    </form>
    
    <div class="result-section" id="ageOutput" style="display: none;">
        <p>Age of Borrower: <span id="resultYears" class="result-value emi-value">---</span></p>
        <p>Detailed Breakdown: <span id="resultBreakdown" class="result-value">---</span></p>
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
        const resultYears = document.getElementById('resultYears');
        const resultBreakdown = document.getElementById('resultBreakdown');

        if (diffTime < 0) {
            resultYears.textContent = "Invalid";
            resultBreakdown.textContent = "DOB cannot be after the reference date.";
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
        resultYears.textContent = years;
        
        let breakdownText = `${years} Years, ${months} Months, ${days} Days`;
        resultBreakdown.textContent = breakdownText;

        document.getElementById('ageOutput').style.display = 'block';
    });
</script>

</body>
</html>
