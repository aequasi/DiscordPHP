<?php

/*
 * This file is apart of the DiscordPHP project.
 *
 * Copyright (c) 2016 David Cole <david@team-reflex.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the LICENSE.md file.
 */

namespace Discord\Manager;

use Discord\Model\Channel;

/**
 * @author Aaron Scherer <aequasi@gmail.com>
 */
class ChannelManager extends AbstractManager
{
    /**
     * @return string
     */
    public function getModel()
    {
        return Channel::class;
    }
}
