<?php
function RandomString()
    {
        $characters = 'RLM';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring = $characters[rand(0, strlen($characters))];
        }
        return $randstring;
    }

    RandomString();
    echo $randstring;
?>