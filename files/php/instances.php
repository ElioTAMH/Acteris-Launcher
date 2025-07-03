<?php
$instance['acteris'] = array_merge($instance['acteris'], array(
    "loadder" => array(
        "minecraft_version" => "1.20.1",
        "loadder_type" => "forge",
        "loadder_version" => "latest"
    ),
    "verify" => true,
    "ignored" => array(
        'config',
        'essential',
        'logs',
        'resourcepacks',
        'saves',
        'screenshots',
        'shaderpacks',
        'W-OVERFLOW',
        'options.txt',
        'optionsof.txt',
        'servers.dat'
    ),
    "whitelist" => array(
        'EvilerCrib27313'
    ),
    "whitelistActive" => true,
    "status" => array(
        "nameServer" => "Acteris",
        "ip" => "91.197.6.237",
        "port" => 25723
    )
));
?>
