
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $inputPrefixes = isset($_POST["prefix"]) ? $_POST["prefix"] : [];
        $customPrefix = isset($_POST["customPrefix"]) ? $_POST["customPrefix"] : "";
        $inputDomains = $_POST["domains"];

        // Split domains into an array
        $domainsArray = preg_split("/[\r\n]+/", $inputDomains);

        echo "<table>";
        echo "<tr><th>Domain</th><th>Original Domain</th><th>DKIM Record</th></tr>";

        foreach ($domainsArray as $domain) {
            $trimmedDomain = trim($domain);

            foreach ($inputPrefixes as $prefix) {
                echo "<tr>";
                $fullDomain = ($prefix == "custom" && $customPrefix != "") ? $customPrefix . $trimmedDomain : $prefix . $trimmedDomain;

                // Original Domain an zweiter Stelle
                echo "<td>$fullDomain</td>";

                // Hinzufügen der Original-Domain-Spalte
                echo "<td>$trimmedDomain</td>";

                $dkimRecord = getDkimRecord($fullDomain);

                if ($dkimRecord) {
                    echo "<td>$dkimRecord</td>";
                } else {
                    echo "<td>Not found</td>";
                }

                echo "</tr>";
            }
        }

        echo "</table>";
    }

    function getDkimRecord($domain)
    {
        $url = "https://dns.google/resolve?name=$domain&type=TXT";

        $response = file_get_contents($url);

        if ($response === false) {
            return null;
        }

        $json = json_decode($response, true);

        if (isset($json['Answer'])) {
            foreach ($json['Answer'] as $record) {
                if (isset($record['data']) && strpos($record['data'], 'v=DKIM1') !== false) {
                    return $record['data'];
                }
            }
        }

        return null;
    }
    ?>
