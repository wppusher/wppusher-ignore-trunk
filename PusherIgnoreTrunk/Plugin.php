<?php

namespace PusherIgnoreTrunk;

use Pusher\Plugin as RegularPlugin;

class Plugin extends RegularPlugin
{
    public function getSlug()
    {
        if ($this->hasSubdirectory() and $this->getSubdirectory() === 'trunk') {
            return $this->repository->getSlug();
        }

        return parent::getSlug();
    }
}
