<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsBackendApi\Processor\Reader;

use Generated\Shared\Transfer\GlueRequestTransfer;
use Generated\Shared\Transfer\GlueResponseTransfer;
use Generated\Shared\Transfer\ProductAbstractCriteriaTransfer;

interface ProductAbstractReaderInterface
{
    public function getProductAbstractCollection(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;

    public function getProductAbstract(GlueRequestTransfer $glueRequestTransfer): GlueResponseTransfer;

    public function readProductAbstractCollection(ProductAbstractCriteriaTransfer $productAbstractCriteriaTransfer): GlueResponseTransfer;
}
