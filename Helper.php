<?php

class Helper
{

    const URL = API_MONITORING;

    public static function ms($t)
    {
        if (preg_match('/^\d{2}\:\d{2}\:\d{2}\.\d{3}$/', $t)) {
            $e  = explode(".", $t);
            $e1 = strtotime($e[0]) - strtotime('TODAY');

            return (($e1 * 1000) + (int)$e[1]);
        } else {
            return $t;
        }
    }

    public static function post($data)
    {
        $ch = curl_init(self::URL);

        // Mengatur opsi cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   // Mengembalikan respons sebagai string
        curl_setopt($ch, CURLOPT_POST, true);             // Menentukan metode HTTP POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));  // Menentukan data POST

        // Mengatur header HTTP untuk Basic Authentication
        // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        // curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");

        // Menentukan header tambahan jika diperlukan
        // curl_setopt($ch, CURLOPT_HTTPHEADER, [
        //     'Content-Type: application/x-www-form-urlencoded', // Tipe konten
        // ]);

        // Eksekusi permintaan cURL dan ambil respons
        $response = curl_exec($ch);

        // Periksa apakah ada kesalahan dalam permintaan
        if (curl_errno($ch)) {
            echo 'cURL error: ' . curl_error($ch);
        } else {
            // Menampilkan hasil respons
            echo 'Response: ' . $response;
        }

        // Tutup sesi cURL
        curl_close($ch);
    }
}
