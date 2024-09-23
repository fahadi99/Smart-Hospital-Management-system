<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Receipt</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-sizing: border-box;
        }
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header img {
            max-width: 100px;
            max-height: 100px;
            width: auto;
            height: auto;
        }
        .header .title {
            flex-grow: 1;
            text-align: center;
            padding: 0 10px; /* Add padding to create space between the logos and the text */
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        .totals {
            text-align: right;
            margin-top: 20px;
        }
        .totals div {
            margin-bottom: 5px;
        }

        /* Print specific styles */
        @media print {
            body {
                margin: 0;
                padding: 0;
                font-size: 12pt;
            }
            .container {
                width: 100%;
                max-width: none;
                padding: 0;
                margin: 0 auto;
            }
            table, th, td {
                font-size: 12pt;
                page-break-inside: avoid;
            }
            .totals div {
                font-size: 12pt;
            }
            @page {
                size: A4;
                margin: 20mm;
            }
        }

        #underline-gap {
            text-decoration: underline;
            text-underline-position: under;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <img src="<?php echo e('data:image/png;base64,'.base64_encode(file_get_contents(public_path('logo.jpg')))); ?>" width="250px" alt="" style="margin-bottom: -100px !important">
            <div class="title">
                <h2 id="underline-gap"><strong>Smart Institute of Rehabilitation</strong></h2>
                <h2 id="underline-gap"><strong>Medicine (SIRM)</strong></h2>
                <h5><strong>CASH RECEIPT</strong></h5>
            </div>
            <img src="<?php echo e('data:image/png;base64,'.base64_encode(file_get_contents(public_path('samrtcitylogo.png')))); ?>" alt="" style="margin-left : 600px !important;  margin-top : -160px !important">
        </div>

        <div class="receipt-info" style="text-align: right;">
            <p>Receipt #: <?php echo e($obj->receipt_number); ?></p>
        </div>

        <table>
            <tr>
                <td>Name:</td>
                <td><?php echo e(ucfirst($patient->name_of_patient)); ?></td>
                <td>Age:</td>
                <td><?php echo e($patient->age); ?></td>
            </tr>
            <tr>
                <td>Category:</td>
                <?php $patient_category=str_replace("_"," ",$patient->patient_category); ?>
                <td><?php echo e(ucfirst($patient_category)); ?></td>
                <td>Cell:</td>
                <td><?php echo e($patient->cell); ?></td>
            </tr>
            <tr>
                <td>MR NO:</td>
                <td colspan="3"><?php echo e($patient->patient_mr_number); ?></td>
            </tr>
        </table>

        <table>
            <tr>
                <th>Sr.</th>
                <th>Service Category</th>
                <th>Amount</th>
            </tr>
            <?php $i = 0; ?>
            <?php $__currentLoopData = $invoice_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php $i++ ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($service->service_name); ?></td>
                <td><?php echo e($service->price); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php if(isset($filldata_services )): ?>
            <?php for($i = 0; $i < $filldata_services; $i++): ?>
            <tr>
                <td>&nbsp;</td>
                <td&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
            <?php endfor; ?>
            <?php endif; ?>


        </table>

        <div class="totals">
            <?php if(isset($obj->total_amount)): ?>
            <div>Total Amount: &nbsp;&nbsp; <?php echo e($obj->total_amount); ?></div>
            <?php else: ?>
            <div>Total Amount: ____________</div>
            <?php endif; ?>
            <?php if(isset($obj->discount_amount)): ?>
            <?php if($obj->discount_amount > 0): ?>
                <div>Discount:  &nbsp;&nbsp; <?php echo e($obj->discount_amount); ?></div>
            <?php endif; ?>
            <?php endif; ?>
            <?php if(isset($obj->net_amount)): ?>
            <?php if($obj->discount_amount > 0): ?>
            <div  style="margin-right: 100px !importantt"> Net Amount: &nbsp;&nbsp; &nbsp;&nbsp; <?php echo e($obj->net_amount); ?></div>
            <?php else: ?>
            <div>Net Amount:  &nbsp;&nbsp; <?php echo e($obj->net_amount); ?></div>
            <?php endif; ?>
            <?php endif; ?>
            <?php if(isset($obj->amount_received)): ?>

            <?php if($obj->discount_amount > 0): ?>
            <div style="margin-right: 100px !importantt">Amount Received: &nbsp;&nbsp; &nbsp;&nbsp;  <?php echo e($obj->amount_received); ?></div>
            <?php else: ?>
            <div >Amount Received:  &nbsp;&nbsp; <?php echo e($obj->amount_received); ?></div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
<?php /**PATH D:\hms_temp\resources\views/documents/receipts/latest.blade.php ENDPATH**/ ?>