<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\QueueExtension\Dependency\Plugin;

use Generated\Shared\Transfer\QueueDynamicSettingsTransfer;

interface DynamicSettingsUpdaterPluginInterface
{
    /**
     * Specification:
     * - Expands dynamic settings for queue.
     * - Use it if settings can be updated during runtime.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\QueueDynamicSettingsTransfer $queueDynamicSettingsTransfer
     *
     * @return \Generated\Shared\Transfer\QueueDynamicSettingsTransfer
     */
    public function update(QueueDynamicSettingsTransfer $queueDynamicSettingsTransfer): QueueDynamicSettingsTransfer;
}
