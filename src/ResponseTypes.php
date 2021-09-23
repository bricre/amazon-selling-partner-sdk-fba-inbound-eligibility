<?php

namespace Amz\FbaInboundEligibility;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public static $types = [
        'getItemEligibilityPreview' => [
            '200.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '400.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '401.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '403.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '404.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '429.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '500.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
            '503.' => 'Amz\\FbaInboundEligibility\\Model\\GetItemEligibilityPreviewResponse',
        ],
    ];
}
