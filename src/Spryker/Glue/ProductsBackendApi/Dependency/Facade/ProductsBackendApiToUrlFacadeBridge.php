<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsBackendApi\Dependency\Facade;

use Generated\Shared\Transfer\UrlCollectionTransfer;
use Generated\Shared\Transfer\UrlCriteriaTransfer;
use Generated\Shared\Transfer\UrlTransfer;

class ProductsBackendApiToUrlFacadeBridge implements ProductsBackendApiToUrlFacadeInterface
{
    /**
     * @var \Spryker\Zed\Url\Business\UrlFacadeInterface
     */
    protected $urlFacade;

    /**
     * @param \Spryker\Zed\Url\Business\UrlFacadeInterface $urlFacade
     */
    public function __construct($urlFacade)
    {
        $this->urlFacade = $urlFacade;
    }

    public function getUrlCollection(UrlCriteriaTransfer $urlCriteriaTransfer): UrlCollectionTransfer
    {
        return $this->urlFacade->getUrlCollection($urlCriteriaTransfer);
    }

    public function updateUrl(UrlTransfer $urlTransfer): UrlTransfer
    {
        return $this->urlFacade->updateUrl($urlTransfer);
    }

    public function createUrl(UrlTransfer $urlTransfer): UrlTransfer
    {
        return $this->urlFacade->createUrl($urlTransfer);
    }
}
