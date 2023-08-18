<?php

function getData($id)
{
    $row = 1;
    $line = array();

    if (($handle = fopen("../data/annuaire.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            array_push($line, $data[0]);
        }
        fclose($handle);

        $num = count($line);

        for ($l = 0; $l < $num; $l++) {
            $temp = explode(";", $line[$l]);
            if ($temp[0] === $id) {
                // echo $line[$l];
                return explode(";", $line[$l]);
            }
        }
    }

    return false;
}
