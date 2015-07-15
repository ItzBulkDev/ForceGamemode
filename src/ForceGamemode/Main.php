<?php

namespace ForceGamemode;

use pocketmine\player;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\PlayerJoinEvent;

class Main extends PluginBase implements Listener {

public function onEnable(){
$this->getServer()->getPluginManager()->registerEvents($this, $this);
}

public function onJoinEvent(PlayerJoinEvent $event){
$player = $event->getPlayer();
if($player->isOp()){
  return true;
  }else{
  $player->setGamemode(1);
  }
  }
  }
