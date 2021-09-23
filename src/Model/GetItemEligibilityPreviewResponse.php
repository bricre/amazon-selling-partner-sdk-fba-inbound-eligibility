<?php

namespace Amz\FbaInboundEligibility\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the getItemEligibilityPreview operation.
 */
class GetItemEligibilityPreviewResponse extends AbstractModel
{
    /**
     * The payload for the getItemEligibilityPreview operation.
     *
     * @var \Amz\FbaInboundEligibility\Model\ItemEligibilityPreview
     */
    public $payload = null;

    /**
     * An unexpected condition occurred during the GetItemEligibilityPreview operation.
     *
     * @var \Amz\FbaInboundEligibility\Model\ErrorList
     */
    public $errors = null;
}
