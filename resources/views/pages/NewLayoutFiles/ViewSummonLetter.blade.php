<!-- // Set the recipient name, address, date, time, description, your name, and your title
$recipientName = "John Doe";
$recipientAddress = "123 Main St, Anytown, USA";
$date = "January 1, 2022";
$time = "9:00 AM";
$description = "You are being summoned to appear before the Barangay Council in response to a noise complaint filed against you.";
$yourName = "Jane Smith";
$yourTitle = "Barangay Captain";

// Generate the HTML for the summon letter
$html = <<<HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summon Letter</title>
    <style>
        /* Add your CSS styling here */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .content {
            font-size: 16px;
            line-height: 1.5;
        }
        .signature {
            margin-top: 40px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            SUMMON LETTER
        </div>
        <div class="content">
            <p>
                To: $recipientName<br>
                Address: $recipientAddress<br>
                Date: $date
            </p>

            <p>
                Dear $recipientName,
            </p>

            <p>
                You are hereby summoned to appear before the Barangay Council on $date at $time in response to the following matter:
            </p>

            <p>
                $description
            </p>

            <p>
                Failure to appear on the specified date and time may result in further legal actions.
            </p>

            <p>
                Sincerely,
                <br>
                $yourName
                <br>
                $yourTitle
            </p>
        </div>
        <div class="signature">
            <img src="[Path to Signature Image]" alt="Signature">
            <br>
            [Your Signature]
        </div>
    </div>
</body>
</html>
<!-- HTML;

// Output the HTML
echo $html; -->
