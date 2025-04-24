<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Payslip Generator</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      margin-bottom: 30px;
      color: #333;
    }

    form {
      background: white;
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
      width: 100%;
      max-width: 400px;
      margin-bottom: 40px;
    }

    label {
      display: block;
      margin-bottom: 15px;
      font-weight: 600;
      color: #555;
    }

    input {
      width: 100%;
      padding: 12px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      margin-top: 20px;
      width: 100%;
      padding: 12px;
      background: #007BFF;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s;
    }

    button:hover {
      background: #0056d2;
    }

    .payslip {
      background: white;
      padding: 25px;
      border-radius: 12px;
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
      opacity: 0;
      transform: translateY(50px);
    }

    .payslip h2 {
      margin-top: 0;
      color: #007BFF;
    }

    .payslip p {
      margin: 8px 0;
      color: #444;
    }

    @media (max-width: 600px) {
      form, .payslip {
        padding: 20px;
      }
    }
  </style>
</head>
<body>

  <h1>Payslip Generator</h1>

  <form id="payslip-form">
    <label>
      Employee ID
      <input type="text" name="employeeId" required />
    </label>
    <label>
      Month
      <input type="text" name="month" required />
    </label>
    <button type="submit">Generate Payslip</button>
  </form>

  <div id="payslip" class="payslip"></div>

  <script>
    const form = document.getElementById('payslip-form');
    const payslipDiv = document.getElementById('payslip');

    form.addEventListener('submit', function (e) {
      e.preventDefault();

      // Simulated payslip data (replace this with a real API call)
      const formData = new FormData(form);
      const employeeId = formData.get('employeeId');
      const month = formData.get('month');

      const payslipData = {
        employeeId,
        month,
        salary: 5000,
        bonus: 500,
        deductions: 300,
        netPay: 5200,
        generatedAt: new Date().toLocaleString()
      };

      payslipDiv.innerHTML = `
        <h2>Payslip - ${payslipData.month}</h2>
        <p><strong>Employee ID:</strong> ${payslipData.employeeId}</p>
        <p><strong>Salary:</strong> $${payslipData.salary}</p>
        <p><strong>Bonus:</strong> $${payslipData.bonus}</p>
        <p><strong>Deductions:</strong> $${payslipData.deductions}</p>
        <p><strong>Net Pay:</strong> $${payslipData.netPay}</p>
        <p><em>Generated at: ${payslipData.generatedAt}</em></p>
      `;

      // GSAP animation
      gsap.fromTo(payslipDiv, 
        { opacity: 0, y: 50 },
        { opacity: 1, y: 0, duration: 1, ease: "power2.out" }
      );
    });
  </script>

</body>
</html>




