<?php
/**
 * Copyright © 2018 OpenGento, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */

namespace Flurrybox\EnhancedPrivacy\Service\Anonymize;

/**
 * Interface ProcessorInterface
 * @api
 */
interface ProcessorInterface
{
    /**
     * Execute the anonymize processor for the given entity ID.
     * It allows to anonymize the related data.
     *
     * @param int $entityId
     * @return bool
     */
    public function execute(int $entityId): bool;
}