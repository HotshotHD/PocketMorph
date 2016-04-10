<?php

namespace pocketmorph\morph;

use pocketmine\entity\Entity;
use pocketmine\nbt\tag\IntTag;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\Player;

class MorphVillager extends Entity implements MorphEntity
{

    const NETWORK_ID = 15;

    public function getName()
    {
        return "Villager";
    }


    public function spawnTo(Player $player)
    {

        $pk = new AddEntityPacket();
        $pk->eid = $this->getId();
        $pk->type = self::NETWORK_ID;
        $pk->x = $this->x;
        $pk->y = $this->y;
        $pk->z = $this->z;
        $pk->yaw = $this->yaw;
        $pk->pitch = $this->pitch;
        $pk->metadata = [
            3 => [0, $this->getDataProperty(3)],
            15 => [0, 1]
        ];        
		$player->dataPacket($pk);
        parent::spawnTo($player);
    }

}
