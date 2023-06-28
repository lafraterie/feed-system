<?php

namespace feed;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\event\Listener;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class feed extends Command{

    public function __construct()
    {
        parent::__construct("feed","Permet de vous nourrir","/feed",["eat"]);
    }

    public function execute(CommandSender $sender, string $commandLabel, array $args)
    {
        if ($sender instanceof Player){
            if ($sender->hasPermission("feed.cmd") or Server::getInstance()->isOp($sender->getName())) {
                $sender->getHungerManager()->setFood(20);
                $sender->getHungerManager()->setSaturation(20);
                $sender->sendPopup("§l§c Vous avait bien était nourrit!");
            }
        }
    }
}