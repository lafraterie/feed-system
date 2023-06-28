<?php

namespace feed;





use pocketmine\plugin\PluginBase;



use feed\feed;


class Main extends PluginBase {

    private static Main $instace;

    public static function getInstance(): Main
    {
        return self::$instace;
    }

    public function onEnable(): void
    {
        @mkdir($this->getDataFolder());
        $this->saveDefaultConfig();


        self::$instace = $this;


        $this->getLogger()->notice("Allumé avec succès!");



        $this->getServer()->getCommandMap()->register("", new feed());




        $this->saveResource("config.yml");



}
}

