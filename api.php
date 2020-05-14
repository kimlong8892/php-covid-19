<?php
    $url = "https://code.junookyo.xyz/api/ncov-moh/data.json?fbclid=IwAR2MiNmT91txxlIdB22eIVjSTxTUfjfMokZfeQiLbB46EU-tuuiJgAKcCNc";
    $rs = file_get_contents($url);
    $rs = json_decode($rs);