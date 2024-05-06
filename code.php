    <!-- <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="widp=device-widp, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

        <link href="style.css" rel="stylesheet">
    </head>
    <body>
    <div class="container">
        <div>
            <b>Cash Calculator</b>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-building"></i></span>
                    <input class="form-control" type="text" id="orgName" placeholder="Enter your organisation name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-card-checklist"></i></span>
                    <input class="form-control" type="text" id="orgID" placeholder="Enter your organisation ID">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                    <input class="form-control" type="text" id="empName" placeholder="Enter your Employee Name">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-badge-cc"></i></span>
                    <input class="form-control" type="text" id="empID" placeholder="Enter your employee ID">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-credit-card"></i></span>
                    <input class="form-control" type="text" id="accNumber" placeholder="Enter your valid account number">
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                    <input class="form-control" type="text" id="contactNumber" placeholder="Enter your contact number">
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-cash-coin"></i></span>
                    <input class="form-control" type="text" id="cash" placeholder="Enter the total cash value">
                </div>
        </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="bi bi-journal"></i></span>
                    <input class="form-control" type="text" placeholder="Remark">
                </div>
            </div>
        </div>
    </div>

        </div>
            <body>
  <div class="container">
  <b>Your Money Calculator</b>

    <form id="calculator" class="row g-3">
        <div class="col-md-6">
            <p for="num1" class="form-p">Choose Amount:</p>
            <input class="form-control" type="number" id="num1" name="num1" placeholder="Enter your amount">
        </div>
        <div class="col-md-6">
            <p for="num2" class="form-p">Your Earning Money:</p>
            <input class="form-control" type="number" id="num2" name="num2" placeholder="Enter your earning amount">
        </div>
        <div class="col-md-6">
            <p for="operation" class="form-p">Choose Money Option</p>
            <select id="operation" name="operation" class="form-control">
                <option value="add">Increment</option>
                <option value="subtract">Decrement</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
            </select>
        </div>
        <div class="col-md-12" style="display: flex;justify-content: flex-end;">
            <button  class="btn btn-primary" type="submit">Search Your Amount</button> 
        </div>
        <div class="col-md-12">
        <b>Total Wallet Data:</b>
        <span class="results" id="result"></span>
        </div>
        
    </form>
            
                <script>
                    const form = document.getElementById('calculator');
                    const resultDiv = document.getElementById('result');
            
                    form.addEventListener('submit', function(event) {
                        event.preventDefault(); 
            
                        const num1 = parseFloat(document.getElementById('num1').value);
                        const num2 = parseFloat(document.getElementById('num2').value);
                        const operation = document.getElementById('operation').value;
            
                        let result;
            
                        switch(operation) {
                            case 'add':
                                result = num1 + num2;
                                break;
                            case 'subtract':
                                result = num1 - num2;
                                break;
                            case 'multiply':
                                result = num1 * num2;
                                break;
                            case 'divide':
                                result = num1 / num2;
                                break;
                            default:
                                result = "No Money";
                        }
                        
                        resultDiv.innerText =  + result;
                    });
                </script>
            </body>
        
    </body>
    </html> -->


  

