<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsBackendApi\Dependency\Facade;

use Generated\Shared\Transfer\UrlCollectionTransfer;
use Generated\Shared\Transfer\UrlCriteriaTransfer;
use Generated\Shared\Transfer\UrlTransfer;

interface ProductsBackendApiToUrlFacadeInterface
{
    public function getUrlCollection(UrlCriteriaTransfer $urlCriteriaTransfer): UrlCollectionTransfer;

    public function updateUrl(UrlTransfer $urlTransfer): UrlTransfer;

    public function createUrl(UrlTransfer $urlTransfer): UrlTransfer;
}
