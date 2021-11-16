<?php

declare(strict_types=1);

namespace thebigcrafter\APM\commands\subcommands;

use CortexPE\Commando\BaseSubCommand;
use pocketmine\command\CommandSender;
use pocketmine\utils\TextFormat;
use thebigcrafter\APM\APM;
use thebigcrafter\APM\jobs\Updater;

class UpdateCommand extends BaseSubCommand
{
    protected function prepare(): void
    {
    }

    public function onRun(CommandSender $sender, string $aliasUsed, array $args): void
    {
        $sender->sendMessage(APM::$PREFIX . TextFormat::YELLOW . "Updating...");
        Updater::updateRepo();
        $sender->sendMessage(APM::$PREFIX . TextFormat::GREEN . "Updated!");
    }
}
