<?php

declare(strict_types=1);

namespace ethaniccc\PacketLimitFix;

use pocketmine\network\mcpe\RakLibInterface;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

    public function onEnable(){
        foreach($this->getServer()->getNetwork()->getInterfaces() as $interface){
            if($interface instanceof RakLibInterface){
                $interface->setPacketLimit(PHP_INT_MAX);
            }
        }
    }

}
