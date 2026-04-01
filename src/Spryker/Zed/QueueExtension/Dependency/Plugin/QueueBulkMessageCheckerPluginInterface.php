<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\QueueExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueueInformationCollectionTransfer;

/**
 * Used to get all the queues at once with messages.
 */
interface QueueBulkMessageCheckerPluginInterface
{
    /**
     * Specification:
     * - Get all queues at once with messages.
     *
     * @api
     *
     * @param array<string> $queueNames
     *
     * @return \Generated\Shared\Transfer\QueueInformationCollectionTransfer
     */
    public function getQueues(array $queueNames): QueueInformationCollectionTransfer;
}
