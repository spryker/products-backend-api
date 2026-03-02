<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsBackendApi\Processor\Reader;

use Generated\Shared\Transfer\ProductConcreteCriteriaTransfer;
use Generated\Shared\Transfer\ProductConcreteResourceCollectionTransfer;

interface ProductConcreteResourceReaderInterface
{
    public function getProductConcreteResourceCollection(
        ProductConcreteCriteriaTransfer $productConcreteCriteriaTransfer
    ): ProductConcreteResourceCollectionTransfer;
}
