<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DKIM Checker</title>
    <link rel="stylesheet" href="../sslchecker/styles/stylez.css" />

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        hr {

            border: 1px dotted #ccc;
        }
    </style>
</head>

<body>

    <h1>Bulk DKIM Checker</h1>
    <hr>
    <p><b>Information:</b><br>mail-connect._domainkey <br>TXT-Record <br>
        v=DKIM1; k=rsa;
        p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDCdG1MYcrYYxCb3fcCSfgs6GyprlkaKNJ1qCsru1B0/ndQD7iLFECzU2UPGXlSsevM56HxvAQNodjA0zvyrPbAKKdStEeLj1IbySxUoqRjCQOviLS4SI8duVtTd53kum1ugvQtGd7byj6THGkIvJEpI22QzhF2uMfh9ijCiesjAQIDAQAB
    </p>
    <hr>


    <form method="post">
        <label style="font-style: italic;">Select Domain Prefix (optional):</label><br>
        <input type="checkbox" name="prefix[]" value="google._domainkey.">google._domainkey. - Google Standard
        <br>
        <input type="checkbox" name="prefix[]" value="crsend._domainkey.">crsend._domainkey. - CleverReach
        <br>
        <input type="checkbox" name="prefix[]" value="mail-connect._domainkey.">mail-connect._domainkey. - All-Connect
        <br>
        <input type="checkbox" name="prefix[]" value="custom"> Custom Prefix
        <input type="text" name="customPrefix" placeholder="Enter custom prefix">
        <!-- Add more checkboxes as needed -->
        <br><br>

        <label style="font-style: italic;">Enter domains, one per line</label><br>
        <textarea name="domains" rows="4" cols="50" required></textarea>
        <br>
        <button type="submit" class="btn-check-ssl">Check DKIM</button>
        <p></p>
    </form>


    <?php include 'dkimchecker.php' ?>




</body>

</html>