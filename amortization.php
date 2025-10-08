<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Amortization Schedule with Moratorium | Banker's Tool | BankWiser Pro</title>
    <link rel="canonical" href="https://promotionstudymaterial.com/amortization.php">
    <meta name="description" content="Generate a complete loan amortization schedule, including principal, interest, and EMI breakdown. Features moratorium period calculation for accurate financial planning.">
    <meta name="keywords" content="amortization schedule, loan amortization, emi schedule, loan repayment schedule, moratorium period, bank loan calculator, bankwiser pro">

    <!-- Open Graph (for Facebook, LinkedIn, WhatsApp) -->
    <meta property="og:title" content="Loan Amortization Schedule Calculator | BankWiser Pro">
    <meta property="og:description" content="Generate a detailed loan amortization schedule with moratorium period logic. Essential for bankers and borrowers.">
    <meta property="og:image" content="https://promotionstudymaterial.com/og-image.jpg">
    <meta property="og:url" content="https://promotionstudymaterial.com/amortization.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BankWiser Pro: Amortization Schedule Calculator">
    <meta name="twitter:description" content="Visualize your loan repayment with a detailed amortization table, including moratorium impact.">
    <meta name="twitter:image" content="https://promotionstudymaterial.com/og-image.jpg">

    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
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
    
<link rel="stylesheet" href="css/style.css">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "name": "Amortization Schedule with Moratorium | Banker's Tool | BankWiser Pro",
  "url": "https://promotionstudymaterial.com/amortization.php",
  "description": "Generate a complete loan amortization schedule, including principal, interest, and EMI breakdown. Features moratorium period calculation for accurate financial planning.",
  "mainEntity": {
    "@type": "Calculator",
    "name": "Amortization Schedule Calculator"
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
      "name": "What is an Amortization Schedule?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "An amortization schedule is a complete table of periodic loan payments, showing the amount of principal and the amount of interest that comprise each payment until the loan is paid off at the end of its term."
      }
    },
    {
      "@type": "Question",
      "name": "What is a moratorium period in a loan?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The moratorium period is a time during the loan term when the borrower is not required to make EMI payments. However, interest continues to accrue during this period and is typically capitalized—added to the principal loan amount—at the end of the moratorium."
      }
    },
    {
      "@type": "Question",
      "name": "How is an EMI broken down into principal and interest?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "In an amortization schedule, each EMI payment consists of two components: interest and principal. Initially, the interest component is high, and the principal component is low. As the loan matures, the interest portion decreases while the principal portion increases, even though the EMI amount remains constant."
      }
    }
  ]
}
</script>
<style>
    /* Additional styles for amortization table */
    .amortization-section {
        position: relative;
        width: 95%;
        max-width: 900px;
        margin: 40px auto;
        background-color: var(--white);
        border-radius: 12px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        padding: 20px;
        overflow-x: auto;
        border: 1px solid #E2E8F0;
    }
    .amortization-section h2 {
        color: var(--primary-text);
        font-size: 1.5rem;
        text-align: center;
        margin-bottom: 20px;
        padding-bottom: 5px;
        border-bottom: 2px solid #E2E8F0;
    }
    #amortizationTable {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.95rem;
        min-width: 600px;
        color: var(--gray-text);
    }
    #amortizationTable th, #amortizationTable td {
        padding: 10px;
        text-align: right;
        border-bottom: 1px solid #E2E8F0;
        color: var(--gray-text);
    }
    #amortizationTable th:first-child, #amortizationTable td:first-child {
        text-align: center;
    }
    #amortizationTable th {
        background-color: var(--light-gray);
        color: var(--primary-text);
        font-weight: 700;
        position: sticky;
        top: 0;
    }
    #amortizationTable tbody tr:nth-child(even) {
        background-color: #F7FAFC;
    }
    .moratorium-row {
        background-color: #FFF5F5 !important;
        color: #C53030;
        font-style: italic;
    }
    .pdf-button {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 8px 15px;
        background-color: var(--primary-green);
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
        background-color: #1EAE56;
    }
    .watermark {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%) rotate(-30deg);
        font-size: 4rem;
        color: rgba(45, 55, 72, 0.08);
        pointer-events: none;
        user-select: none;
        font-weight: 700;
        white-space: nowrap;
        z-index: 0;
    }
    @media (max-width: 920px) {
        .pdf-button {
            position: static;
            margin-bottom: 20px;
            width: 100%;
        }
    }
    @media print {
        body { background: white !important; color: black !important; padding: 0; }
        .home-link, .container, .calculator-grid, .pdf-button, .branding, .content-section { display: none; }
        .amortization-section { box-shadow: none; background: white; color: black; border: none; margin: 0; max-width: none; width: 100%; overflow: visible; padding: 0; }
        #amortizationTable { width: 100% !important; }
        #amortizationTable th { background-color: #eee !important; color: black !important; border: 1px solid #ccc; -webkit-print-color-adjust: exact; color-adjust: exact; }
        #amortizationTable td { border: 1px solid #ddd; }
        #amortizationTable tbody tr { background-color: transparent !important; -webkit-print-color-adjust: exact; color-adjust: exact; }
        .watermark { font-size: 6rem; color: rgba(0, 0, 0, 0.12); -webkit-print-color-adjust: exact; color-adjust: exact; }
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
    
    <div id="summaryResults" class="result-section" style="max-width: 100%; margin-bottom: 20px;"></div>

    <table id="amortizationTable">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Principal O/S</th>
                <th>EMI / Payment</th>
                <th>Principal Repayment</th>
                <th>Interest Paid</th>
                <th>Balance Outstanding</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

<div class="content-section">
    <h2>Banker's Guide: Understanding Amortization with Moratorium</h2>

    <p>
        The Amortization Schedule is the backbone of any loan, detailing every payment over the loan's life, showing how the EMI is split between Principal Repayment and Interest Paid. This is a critical tool for bankers and borrowers alike to track the loan balance and interest accrual accurately.
    </p>

    <h3>Moratorium Period (Interest Bearing)</h3>
    <p>
        The moratorium (or holiday) period is a key concept in project finance and education loans. During this period, the borrower typically does not pay the EMI. However, <strong>interest continues to accrue</strong> (simple interest) and is added to the principal balance (capitalized) at the end of the moratorium. This capitalized amount becomes the new principal for calculating the EMI for the remaining tenure. Our calculator factors in this capitalization to provide a truly accurate schedule.
    </p>

    <h3>Understanding Loan Repayment Breakdown</h3>
    <ul style="list-style: disc; padding-left: 20px;">
        <li><strong>Principal O/S (Beg):</strong> The outstanding loan amount at the beginning of the month.</li>
        <li><strong>EMI/Payment:</strong> The fixed monthly payment (or only interest payment during the moratorium).</li>
        <li><strong>Interest Paid:</strong> The portion of the EMI that goes towards the interest for that month.</li>
        <li><strong>Principal Repayment:</strong> The portion of the EMI that goes towards reducing the outstanding principal. This component increases with time as the interest component decreases.</li>
    </ul>

    <p>
        Use the BankWiser Pro Amortization Schedule Calculator to quickly and accurately forecast your loan liabilities, including the impact of any moratorium period on your final loan principal and total interest burden.
    </p>
</div>

<div class="content-section faq-section">
    <h2>Frequently Asked Questions (FAQs)</h2>
    <details>
        <summary>What is an Amortization Schedule?</summary>
        <p>An amortization schedule is a complete table of periodic loan payments, showing the amount of principal and the amount of interest that comprise each payment until the loan is paid off at the end of its term.</p>
    </details>
    <details>
        <summary>What is a moratorium period in a loan?</summary>
        <p>The moratorium period is a time during the loan term when the borrower is not required to make EMI payments. However, interest continues to accrue during this period and is typically capitalized—added to the principal loan amount—at the end of the moratorium.</p>
    </details>
    <details>
        <summary>How is an EMI broken down into principal and interest?</summary>
        <p>In an amortization schedule, each EMI payment consists of two components: interest and principal. Initially, the interest component is high, and the principal component is low. As the loan matures, the interest portion decreases while the principal portion increases, even though the EMI amount remains constant.</p>
    </details>
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

    // Input Formatting Logic
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
    
document.getElementById('amortizationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const P_initial = cleanNumber(principalInput.value);
    const R_annual = parseFloat(document.getElementById('rate').value);
    const N_months = parseInt(document.getElementById('tenure').value);
    const M_months = parseInt(document.getElementById('moratorium').value) || 0;
    
    const r_monthly = (R_annual / 12) / 100;

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
    let capitalizedInterest = 0;
    let schedule = [];
    
    const monthlyMoratoriumInterest = P_initial * r_monthly;
    
    for (let i = 1; i <= M_months; i++) {
        let interest = principal_os_beg * r_monthly;
        capitalizedInterest += interest;
        principal_os_beg += interest;
        
        schedule.push({
            srNo: i,
            principalOSBeg: principal_os_beg - interest,
            emi: 0,
            principalRepayment: 0,
            interest: interest,
            principalOSEnd: principal_os_beg,
            isMoratorium: true
        });
        
        totalInterestPaid += interest;
    }
    
    const P_new = principal_os_beg;
    const N_repayment = N_months - M_months;
    
    let emi_repayment = 0;
    if (r_monthly > 0) {
        const power = Math.pow(1 + r_monthly, N_repayment);
        emi_repayment = P_new * r_monthly * power / (power - 1);
    } else {
        emi_repayment = P_new / N_repayment;
    }
    
    for (let i = 1; i <= N_repayment; i++) {
        let interest = principal_os_beg * r_monthly;
        let principalRepayment = emi_repayment - interest;
        
        let principal_os_eop = principal_os_beg - principalRepayment;
        if (i === N_repayment) {
            principalRepayment = principal_os_beg;
            emi_repayment = principalRepayment + interest;
            principal_os_eop = 0;
        }

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

        principal_os_beg = principal_os_eop;
    }
    
    schedule.forEach(row => {
        const newRow = tableBody.insertRow();
        if (row.isMoratorium) {
            newRow.className = 'moratorium-row';
        }
        
        newRow.insertCell().textContent = row.srNo;
        newRow.insertCell().textContent = currencyFormatter.format(row.principalOSBeg);
        newRow.insertCell().textContent = currencyFormatter.format(row.emi);
        newRow.insertCell().textContent = currencyFormatter.format(row.principalRepayment);
        newRow.insertCell().textContent = currencyFormatter.format(row.interest);
        newRow.insertCell().textContent = currencyFormatter.format(row.principalOSEnd);
    });

    const totalPayment = P_initial + totalInterestPaid;
    
    const summaryHtml = `
        <p>Initial Loan Amount: <span class="result-value">${currencyFormatter.format(P_initial)}</span></p>
        ${M_months > 0 ? `<p>Capitalized Interest (Moratorium): <span class="result-value">${currencyFormatter.format(capitalizedInterest)}</span></p>` : ''}
        <p>New Principal for Repayment: <span class="result-value">${currencyFormatter.format(P_new)}</span></p>
        <p>Calculated Repayment EMI: <span class="result-value emi-value">${currencyFormatter.format(emi_repayment)}</span></p>
        <p>Total Interest Paid: <span class="result-value">${currencyFormatter.format(totalInterestPaid)}</span></p>
        <p>Total Payment (P + I): <span class="result-value">${currencyFormatter.format(totalPayment)}</span></p>
    `;

    document.getElementById('summaryResults').innerHTML = summaryHtml;
    
    outputSection.style.display = 'block';
});

const { jsPDF } = window.jspdf;

function generatePDF() {
    const scheduleElement = document.getElementById('amortizationOutput');
    const pdfButton = document.querySelector('.pdf-button');
    
    pdfButton.style.display = 'none';

    const originalMaxWidth = scheduleElement.style.maxWidth;
    const originalWidth = scheduleElement.style.width;
    scheduleElement.style.maxWidth = '1200px';
    scheduleElement.style.width = 'fit-content';

    const pdf = new jsPDF('p', 'mm', 'a4');
    const pdfWidth = pdf.internal.pageSize.getWidth();
    const pdfHeight = pdf.internal.pageSize.getHeight();
    
    const footerText = "Download BankWiser Pro App";
    const footerY = pdfHeight - 10;
    const headerY = 15;
    const imageStart = 30;
    const pageMargin = 10;
    const effectivePdfWidth = pdfWidth - (pageMargin * 2);

    function drawPageInfo(doc, pageNum) {
        doc.setFontSize(16);
        doc.text("Loan Amortization Schedule", pdfWidth / 2, headerY, { align: "center" });
        doc.setFontSize(10);
        doc.text(`Generated by BankWiser Pro | Page ${pageNum}`, pdfWidth / 2, headerY + 7, { align: "center" });
        doc.setFontSize(10);
        doc.text(footerText, pdfWidth / 2, footerY, { align: "center" });
    }

    html2canvas(scheduleElement, {
        scale: 2,
        ignoreElements: (element) => element.classList.contains('pdf-button')
    }).then(canvas => {
        const imgData = canvas.toDataURL('image/jpeg', 1.0);
        const imgWidth = effectivePdfWidth; 
        const imgHeight = (canvas.height * imgWidth) / canvas.width;
        
        let heightLeft = imgHeight;
        let position = imageStart;
        let pageCount = 1;

        drawPageInfo(pdf, pageCount);
        pdf.addImage(imgData, 'JPEG', pageMargin, position, imgWidth, imgHeight);
        
        heightLeft -= (pdfHeight - imageStart - 10);
        
        while (heightLeft > 0) {
            position = - (pdfHeight * (pageCount - 1)) + imageStart;
            pageCount++;
            pdf.addPage();
            drawPageInfo(pdf, pageCount);
            pdf.addImage(imgData, 'JPEG', pageMargin, position, imgWidth, imgHeight);
            heightLeft -= pdfHeight;
        }

        pdf.save('BankWiserPro_Amortization_Schedule.pdf');
        
        scheduleElement.style.maxWidth = originalMaxWidth;
        scheduleElement.style.width = originalWidth;
        
        pdfButton.style.display = 'block';
    });
}
</script>

</body>
</html>