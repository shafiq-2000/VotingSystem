<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EVM Invoice Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .invoice {
            width: 80%;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
        }
       table, th, td {
       border: 1px solid black;
       border-collapse: collapse;
       text-align: center;
        }
        .invoice-header {
            text-align: center;
        }

        .invoice-details {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
        }

        .invoice-items {
            margin-top: 20px;
        }

        .item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .item-description,
        .item-total {
            width: 50%;
        }

        .total {
            margin-top: 20px;
            text-align: right;
        }

        .print-button {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>

<div class="invoice">
    <div class="invoice-header">
        <h2>Electronic Voting Machine System</h2>
        <p>Invoice Report</p>
    </div>

    <div class="invoice-details">
        <div>
           
            <h3>INFO:</h3>
            <p>Total Voters: ................................................</p>
            <p>Total Casting:  ..............................................</p>
            <p>Correct Vote:  ...............................................</p>
            <p>Wrong Vote:  ................................................</p>
            <p>Platform .......................................................</p>
            <p>Vote: ............................................................</p>
            <br>
             <p>Candidates Name:</p>
             <table>
                 <!--President-->
                <tr>
                    <th>President</th>
                    <th>Total Votes</th>
                    <th>Agent sig.</th>
                    <th>Officer sig.</th>
                  
                <tr>
                    <td>Sadiq Iqbal</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Arfin khan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pabon Shaha</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                
                <!--vice president-->
                
                
                <tr>
                    <th>Vice-President</th>
                    <th>Total Votes</th>
                    <th>Agent sig.</th>
                    <th>Officer sig.</th>
                  
                <tr>
                    <td>Nazim Uddin</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Parvez</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Ibrahin Khan</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                
                <!--membar-->
                
                
                <tr>
                    <th>President</th>
                    <th>Total Votes</th>
                    <th>Agent sig.</th>
                    <th>Officer sig.</th>
                  
                <tr>
                    <td>Afsana akter</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>Sampa Akter</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                
                
            </table><br> <br>
        </div>

        <div>
            <h3>Invoice #12345</h3>
            <p>Issue Date: January 15, 2024</p>
        </div>
    </div>

    <div class="invoice-items">
        <div class="item">
            <div class="item-description">EVM SERIAL NUMBER</div>
            <div class="item-quantity">#5623:</div>
            <div class="item-price">#5324</div>
            <div class="item-total">#4235</div>
        </div>

        <!-- Additional items can be added as needed -->
    </div>

    <div class="total">
        <p><strong>Senior Officer:</strong></p>
    </div>

    <div class="print-button">
        <button onclick="printInvoice()">Print Invoice</button>
    </div>
</div>

<script>
    function printInvoice() {
        window.print();
    }
</script>

</body>
</html>
