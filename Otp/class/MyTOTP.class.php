<?php
use OTPHP\TOTP;




class MyTOTP
        {
            public static function generateCode($secret, $interval = 120, $digest = 'sha1', $length = 6)
            {
                $totp = TOTP::create($secret, $interval, $digest, $length);
                return $totp->now();
            }

            function verifyOTP($secret, $code, $interval = 120, $digest = 'sha1', $length = 6) {
                $totp = TOTP::create($secret, $interval, $digest, $length);
                return $totp->verify($code);
            }
            

        // Ajoutez d'autres méthodes ici pour étendre ou modifier le comportement de la classe TOTP
        }



?>