<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Amortization Schedule with Moratorium | Banker's Tool | BankWiser Pro</title>
    <meta name="description" content="Generate complete amortization schedule with Principal, Interest, EMI, and Moratorium period calculation for any loan.">
    
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;600;700&display=swap" rel="stylesheet">
    </noscript>

<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

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

      	/* --- AMORTIZATION TABLE STYLES --- */
/* ... existing styles ... */

/* Target the container of the summary text */
.result-section {
    /* Ensure the main container text is black */
    color: #000 !important; 
}

/* Ensure any paragraphs within the summary are black */
.result-section p {
    color: #000 !important;
}

/* Ensure the large figure values (spans) are also black */
.result-section .result-value,
.result-section .emi-value {
    color: #000 !important;
    /* You may want to increase the font weight or size here for emphasis: */
    /* font-weight: 700 !important; */
}	
      
        /* --- HOME LINK STYLING --- */
        .print-white-bg {
    		background-color: white !important;
    		color: black !important;
    		box-shadow: none !important;
    		/* Ensure Z-index is lower than watermark in live view */
    		z-index: 1; 
		}	
      
        .home-link {
            display: block;
            text-align: left;
            max-width: 900px; /* Adjusted for wider table */
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
        
        /* Input Styles (Copied from your EMI page) */
        label { display: block; margin-top: 15px; font-weight: 600; color: var(--stardust); font-size: 1rem; }
        input[type="text"], input[type="number"] { width: 95%; padding: 12px; margin-top: 5px; border: 1px solid var(--bg-mid); border-radius: 6px; background-color: var(--bg-dark); color: white; font-size: 1.05rem; transition: border-color 0.3s; -webkit-appearance: none; appearance: none; }
        input:focus { outline: none; border-color: var(--vermillion); }
        button { width: 100%; padding: 15px; margin-top: 30px; background: var(--vermillion); color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 1.1rem; font-weight: 700; transition: background-color 0.3s, transform 0.2s; box-shadow: 0 5px 15px rgba(255, 87, 51, 0.4); }
        button:hover { background-color: #e54d2e; transform: translateY(-1px); }

        /* --- PDF BUTTON --- */
        .pdf-button {
            position: absolute;
            top: 15px;
            right: 15px;
            padding: 8px 15px;
            background-color: #008CBA;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 600;
            z-index: 100;
            transition: background-color 0.3s;
        }
        .pdf-button:hover {
            background-color: #007bb5;
        }
        @media (max-width: 920px) {
            .pdf-button {
                position: static;
                margin-bottom: 20px;
            }
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
      
        /* --- AMORTIZATION TABLE STYLES --- */
        .amortization-section {
            position: relative; /* For watermark positioning */
            width: 95%;
            max-width: 900px;
            margin: 40px auto;
            background-color: rgba(255, 255, 255, 1);
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            padding: 20px;
            overflow-x: auto;
        }
        .amortization-section h2 {
            color: white;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 20px;
            padding-bottom: 5px;
            border-bottom: 2px solid rgba(255, 255, 255, 0.1);
        }
        #amortizationTable {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            min-width: 600px;
          	color: #000;
        }
        #amortizationTable th, #amortizationTable td {
            padding: 10px;
            text-align: right;
            border-bottom: 1px solid var(--bg-mid);
          	color: #000 !important;
        }
        #amortizationTable th:first-child, #amortizationTable td:first-child {
            text-align: center;
          	color: #000 !important;
        }
        #amortizationTable th {
            background-color: rgba(211, 211, 211, 1);
            color: black;
            font-weight: 700;
            position: sticky;
            top: 0;
        }

      	        #amortizationTable tbody tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 1);
        }
        .moratorium-row {
            background-color: rgba(255, 87, 51, 0.1) !important;
            color: var(--vermillion-light);
            font-style: italic;
        }
      


/* --- WATERMARK --- */
.watermark {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) rotate(-30deg);
    font-size: 4rem;
    color: rgba(0, 128, 0, 0.20); /* Increased opacity for better visibility */
    pointer-events: none;
    user-select: none;
    font-weight: 700;
    white-space: nowrap;
    z-index: 2; 
}

/* --- PRINT STYLES (for PDF/Printing) --- */
@media print {
    body {
        background: white !important;
        color: black !important;
        padding: 0;
    }
    /* Hide navigation and input elements */
    .home-link, .container, .calculator-grid, .pdf-button, .branding, .content-section {
        display: none;
    }
    
    .amortization-section {
        /* Force full width and remove dark backgrounds for clean printing */
        box-shadow: none;
        background: white; 
        color: black;
        border: none;
        margin: 0;
        max-width: none;
        width: 100%;
        overflow: visible;
        padding: 0;
        position: relative;
        z-index: 0;
    }

    /* Ensure table rows/headers print correctly */
    #amortizationTable {
        width: 100% !important;
    }
    #amortizationTable th {
        background-color: #eee !important;
        color: black !important;
        border: 1px solid #ccc;
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
    }
    #amortizationTable td {
        border: 1px solid #ddd;
    }
    #amortizationTable tbody tr {
        background-color: transparent !important; /* All rows white */
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
    }
    .watermark {
        font-size: 6rem;
        /* Increased visibility for print/PDF */
        color: rgba(0, 0, 0, 0.12); /* Slightly darker black for guaranteed visibility */
        -webkit-print-color-adjust: exact;
        color-adjust: exact;
        z-index: 2; /* Ensure it's captured */
    }
}
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
    </style>
</head>
<body>
<div class="home-link">
    <a href="index.php">🏠 Home</a>
</div>
<div class="container">
    <h1>Amortization Schedule Calculator</h1>
    <form id="amortizationForm">
        
        <label for="principal">Loan Amount (₹):</label>
        <input type="text" id="principal" value="1,00,000" required inputmode="decimal" pattern="[0-9,]*">

        <label for="rate">Annual Interest Rate (%):</label>
        <input type="number" id="rate" value="10.00" min="0.01" step="0.01" required>

        <label for="tenure">Loan Tenure (Months):</label>
        <input type="number" id="tenure" value="12" min="1" required>
        
        <label for="moratorium">Moratorium Period (Months - Interest is charged):</label>
        <input type="number" id="moratorium" value="0" min="0" required>

        <button type="submit">Generate Schedule</button>
    </form>
</div>

<div id="amortizationOutput" class="amortization-section" style="display: none;">
    <button class="pdf-button" onclick="generatePDF()">Generate PDF</button>
    <h2>Loan Amortization Schedule</h2>
    <div class="watermark">BankWiser Pro</div>
    
    <div id="summaryResults"></div>

<table id="amortizationTable">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Principal O/S</th>
                <th>EMI / Payment</th>
                <th>Principal Repayment</th>
                <th>Interest Paid</th>
                <th>Balance Outstanding</th> </tr>
        </thead>
        <tbody>
            </tbody>
    </table>
</div>

<div class="calculator-header">Essential Banker Tools</div>
<div class="calculator-grid">
    			
  	 <a href="emi.php" class="calculator-tile">
        <span class="tile-icon">💰</span>
        <span class="tile-name">Loan EMI Calculator</span>
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
    <h2>Banker's Guide: Understanding Amortization with Moratorium</h2>
    
    <p>
        The Amortization Schedule is the backbone of any loan, detailing every payment over the loan's life, showing how the EMI is split between Principal Repayment and Interest Paid. This is a critical tool for bankers and borrowers alike to track the loan balance and interest accrual accurately.
    </p>
    
    <h3>Moratorium Period (Interest Bearing)</h3>
    <p>
        The moratorium (or holiday) period is a key concept in project finance and education loans. During this period, the borrower typically does not pay the EMI. However, **interest continues to accrue** (simple interest) and is added to the principal balance (capitalized) at the end of the moratorium. This capitalized amount becomes the new principal for calculating the EMI for the remaining tenure. Our calculator factors in this capitalization to provide a truly accurate schedule.
    </p>

    <h3>Understanding Loan Repayment Breakdown</h3>
    <ul style="list-style: disc; padding-left: 20px;">
        <li>Principal O/S (Beg): The outstanding loan amount at the beginning of the month.</li>
        <li>EMI/Payment: The fixed monthly payment (or only interest payment during the moratorium).</li>
        <li>Interest Paid: The portion of the EMI that goes towards the interest for that month.</li>
        <li>Principal Repayment: The portion of the EMI that goes towards reducing the outstanding principal. This component increases with time as the interest component decreases.</li>
    </ul>
    
    <p>
        Use the BankWiser Pro Amortization Schedule Calculator to quickly and accurately forecast your loan liabilities, including the impact of any moratorium period on your final loan principal and total interest burden.
    </p>

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

    // Input Formatting Logic (as per your EMI code)
    const principalInput = document.getElementById('principal');
    principalInput.addEventListener('blur', function() {
        const cleanedValue = cleanNumber(this.value);
        if (!isNaN(cleanedValue)) {
            this.value = formatNumber(cleanedValue);
        }
    });
    principalInput.addEventListener('focus', function() {
        if (this.value) {
            this.value = cleanNumber(this.value);
        }
    });
    if (principalInput.value) {
        principalInput.value = formatNumber(cleanNumber(principalInput.value));
    }
    
// ----------------------------------------------------
// AMORTIZATION CALCULATION LOGIC (FINAL: Interest Paid Moratorium)
// ----------------------------------------------------
document.getElementById('amortizationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const P_initial = cleanNumber(principalInput.value); // Initial Principal
    const R_annual = parseFloat(document.getElementById('rate').value); // Annual Rate (%)
    const N_months = parseInt(document.getElementById('tenure').value); // Total Tenure (Months)
    const M_months = parseInt(document.getElementById('moratorium').value) || 0; // Moratorium (Months)
    
    const r_monthly = (R_annual / 12) / 100; // Monthly Rate

    const tableBody = document.getElementById('amortizationTable').getElementsByTagName('tbody')[0];
    const outputSection = document.getElementById('amortizationOutput');
    tableBody.innerHTML = '';
    outputSection.style.display = 'none';

    if (isNaN(P_initial) || isNaN(R_annual) || isNaN(N_months) || P_initial <= 0 || R_annual < 0 || N_months <= 0 || M_months < 0) {
        alert("Please enter valid positive values for all fields.");
        return;
    }
    if (M_months >= N_months) {
        alert("Moratorium period must be less than the total loan tenure.");
        return;
    }
    
    let principal_os_beg = P_initial;
    let totalInterestPaid = 0;
    let totalPrincipalPaid = 0;
    let capitalizedInterest = 0; // Will remain 0 as interest is being paid
    let schedule = [];
    
    // --- 1. MORATORIUM PERIOD CALCULATION (Interest Paid Monthly) ---
    const monthlyMoratoriumInterest = P_initial * r_monthly; // Constant interest amount based on original principal
    
    for (let i = 1; i <= M_months; i++) {
        let interest = monthlyMoratoriumInterest;
        
        // Key change: EMI/Payment equals the interest, as the borrower pays it off
        let emi = interest; 
        let principalRepayment = 0;
        
        // Key change: Principal Outstanding (EOP) remains the same since interest is paid
        let principal_os_eop = P_initial; 
        
        schedule.push({
            srNo: i,
            principalOSBeg: P_initial, // Principal O/S at Beg is constant
            emi: emi,
            principalRepayment: principalRepayment,
            interest: interest,
            principalOSEnd: principal_os_eop,
            isMoratorium: true
        });
        
        // principal_os_beg remains P_initial until the loop ends
        totalInterestPaid += interest;
    }
    
    // --- CAPITALIZATION FIX ---
    // Since interest was paid, the principal for EMI calculation remains the original principal.
    principal_os_beg = P_initial;
    capitalizedInterest = 0;
    
    const P_new = principal_os_beg; // Principal remains P_initial
    const N_repayment = N_months - M_months; // Remaining Tenure
    
    // --- 2. EMI CALCULATION for Repayment Period ---
    let emi_repayment = 0;
    if (r_monthly > 0) {
        const power = Math.pow(1 + r_monthly, N_repayment);
        emi_repayment = P_new * r_monthly * power / (power - 1);
    } else {
        emi_repayment = P_new / N_repayment;
    }
    
    // --- 3. REPAYMENT PERIOD CALCULATION ---
    for (let i = 1; i <= N_repayment; i++) {
        let interest = principal_os_beg * r_monthly;
        let principalRepayment = emi_repayment - interest;
        
        // Adjust last payment to ensure principal hits zero due to rounding
        let principal_os_eop = principal_os_beg - principalRepayment;
        if (i === N_repayment) {
            // Recalculate everything for the last month to ensure zero balance
            principalRepayment = principal_os_beg;
            emi_repayment = principalRepayment + interest;
            principal_os_eop = 0;
        }

        totalPrincipalPaid += principalRepayment;
        totalInterestPaid += interest;

        schedule.push({
            srNo: M_months + i,
            principalOSBeg: principal_os_beg,
            emi: emi_repayment,
            principalRepayment: principalRepayment,
            interest: interest,
            principalOSEnd: principal_os_eop,
            isMoratorium: false
        });

        // The principal for the NEXT month is the EOP of the current month
        principal_os_beg = principal_os_eop;
    }
    
    // --- 4. DISPLAY SCHEDULE ---
    schedule.forEach(row => {
        const newRow = tableBody.insertRow();
        if (row.isMoratorium) {
            newRow.className = 'moratorium-row';
        }
        
        // Cells: Sr. No., Principal O/S (Beg), EMI/Payment, Principal Repayment, Interest, Balance O/S (EOP)
        newRow.insertCell().textContent = row.srNo;
        newRow.insertCell().textContent = currencyFormatter.format(row.principalOSBeg);
        newRow.insertCell().textContent = currencyFormatter.format(row.emi);
        newRow.insertCell().textContent = currencyFormatter.format(row.principalRepayment);
        newRow.insertCell().textContent = currencyFormatter.format(row.interest);
        newRow.insertCell().textContent = currencyFormatter.format(row.principalOSEnd);
    });

    // --- 5. DISPLAY SUMMARY ---
    const P_summary = P_initial;
    const totalPayment = P_summary + totalInterestPaid;
    
    const summaryHtml = `
        <div class="result-section" style="max-width: 100%; margin-bottom: 20px;">
            <p>Initial Loan Amount: <span class="result-value">${currencyFormatter.format(P_summary)}</span></p>
            ${M_months > 0 ? `<p>Interest Paid During Moratorium: <span class="result-value">${currencyFormatter.format(totalInterestPaid - (totalInterestPaid - (P_new - P_initial)))}</span></p>` : ''}
            <p>New Principal (Repayment Start): <span class="result-value">${currencyFormatter.format(P_new)}</span></p>
            <p>Calculated Repayment EMI: <span class="result-value emi-value">${currencyFormatter.format(emi_repayment)}</span></p>
            <p>Total Interest Paid (Overall): <span class="result-value">${currencyFormatter.format(totalInterestPaid)}</span></p>
            <p>Total Payment (P + I): <span class="result-value">${currencyFormatter.format(totalPayment)}</span></p>
        </div>
    `;
    
    // Note: The "Interest Paid During Moratorium" line is complex to display zero, 
    // a simpler approach is to remove it if you are not capitalizing interest, or just show P_new.
    // I simplified the summary display here for clarity:
    
    const simplifiedSummaryHtml = `
        <div class="result-section" style="max-width: 100%; margin-bottom: 20px;">
            <p>Initial Loan Amount: <span class="result-value">${currencyFormatter.format(P_summary)}</span></p>
            ${M_months > 0 ? `<p>Moratorium Interest Paid Monthly: <span class="result-value">${currencyFormatter.format(monthlyMoratoriumInterest)}</span></p>` : ''}
            <p>Repayment Principal: <span class="result-value">${currencyFormatter.format(P_new)}</span></p>
            <p>Calculated Repayment EMI: <span class="result-value emi-value">${currencyFormatter.format(emi_repayment)}</span></p>
            <p>Total Interest Paid (Overall): <span class="result-value">${currencyFormatter.format(totalInterestPaid)}</span></p>
            <p>Total Payment (P + I): <span class="result-value">${currencyFormatter.format(totalPayment)}</span></p>
        </div>
    `;

    document.getElementById('summaryResults').innerHTML = simplifiedSummaryHtml;
    
    outputSection.style.display = 'block';
});

// ----------------------------------------------------
// PDF GENERATION LOGIC (Final Fixed Version for All Issues)
// ----------------------------------------------------
const { jsPDF } = window.jspdf;

function generatePDF() {
    const scheduleElement = document.getElementById('amortizationOutput');
    const summaryElement = scheduleElement.querySelector('.result-section');
    const pdfButton = document.querySelector('.pdf-button');
    
    // Hide the PDF button during capture
    pdfButton.style.display = 'none';

    // --- 1. Apply Print Styles and Wide Capture Width ---
    scheduleElement.classList.add('print-white-bg');
    if (summaryElement) {
        summaryElement.classList.add('print-white-bg');
    }
    
    const originalMaxWidth = scheduleElement.style.maxWidth;
    const originalWidth = scheduleElement.style.width;
    scheduleElement.style.maxWidth = '1200px';
    scheduleElement.style.width = 'fit-content';

    // Set up PDF properties (A4 Portrait)
    const pdf = new jsPDF('p', 'mm', 'a4');
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = pdf.internal.pageSize.getHeight();
    
    // Footer and Header Variables
    const footerText = "Download BankWiser Pro App";
    const footerY = pdfHeight - 10;
    const headerY = 15; // Top margin for header text
    const imageStart = 30; // Y position where the captured image starts
    const pageMargin = 10; // Left/Right margin for image
    const effectivePdfWidth = pdfWidth - (pageMargin * 2); // 190mm

    // Function to draw header and footer on any page
    function drawPageInfo(doc, pageNum) {
        // Draw Header
        doc.setFontSize(16);
        doc.text("Loan Amortization Schedule", pdfWidth / 2, headerY, { align: "center" });
        doc.setFontSize(10);
        // Note: No "(Cont.)" header is used, only page numbering
        doc.text(`Generated by BankWiser Pro | Page ${pageNum}`, pdfWidth / 2, headerY + 7, { align: "center" });
        
        // Draw Footer
        doc.setFontSize(10);
        doc.text(footerText, pdfWidth / 2, footerY, { align: "center" });
    }

    // --- 2. Capture the HTML table ---
    html2canvas(scheduleElement, {
        scale: 2,
        ignoreElements: (element) => element.classList.contains('pdf-button')
    }).then(canvas => {
        const imgData = canvas.toDataURL('image/jpeg', 1.0);
        
        const imgWidth = effectivePdfWidth; 
        const imgHeight = (canvas.height * imgWidth) / canvas.width;
        
        let heightLeft = imgHeight;
        let position = 0; // The slice position of the captured image
        let pageCount = 1;

        // --- Draw First Page ---
        drawPageInfo(pdf, pageCount);
        // Add the image to the PDF, starting below the header
        pdf.addImage(imgData, 'JPEG', pageMargin, imageStart, imgWidth, imgHeight);
        
        // Height consumed on the first page
        const consumedHeight = pdfHeight - imageStart;
        heightLeft -= consumedHeight;
        
        // --- Draw Subsequent Pages Loop ---
        while (heightLeft > 0) {
            pageCount++;
            pdf.addPage();
            
            // Draw Header and Footer on new page
            drawPageInfo(pdf, pageCount);
            
            // The position is negative to shift the image up, showing the next slice
            // (Total height consumed so far + header margin offset)
            position = - (consumedHeight * (pageCount - 1)) + imageStart;
            
            // Add the image segment
            pdf.addImage(imgData, 'JPEG', pageMargin, position, imgWidth, imgHeight);

            // Update remaining height
            heightLeft -= (pdfHeight - imageStart);
        }

        pdf.save('BankWiserPro_Amortization_Schedule.pdf');
        
        // --- 3. Restore original styles ---
        scheduleElement.style.maxWidth = originalMaxWidth;
        scheduleElement.style.width = originalWidth;
        scheduleElement.classList.remove('print-white-bg');
        if (summaryElement) {
            summaryElement.classList.remove('print-white-bg');
        }
        
        // Show the PDF button again
        pdfButton.style.display = 'block';
    });
}
</script>

</body>
</html>