<?php

namespace Amz\FbaInboundEligibility\Api;

use Amz\FbaInboundEligibility\Model\GetItemEligibilityPreviewResponse as GetItemEligibilityPreviewResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class FbaInbound extends AbstractAPI
{
    /**
     * This operation gets an eligibility preview for an item that you specify. You can
     * specify the type of eligibility preview that you want (INBOUND or COMMINGLING).
     * For INBOUND previews, you can specify the marketplace in which you want to
     * determine the item's eligibility.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 1 | 1 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'marketplaceIds'		The identifier for the marketplace in which you want to
     *                       determine eligibility. Required only when program=INBOUND.
     *                       'asin'		The ASIN of the item for which you want an eligibility preview.
     *                       'program'		The program that you want to check eligibility against.
     *
     * @return GetItemEligibilityPreviewResponse
     */
    public function getItemEligibilityPreview(array $queries = []): GetItemEligibilityPreviewResponse
    {
        return $this->client->request('getItemEligibilityPreview', 'GET', 'fba/inbound/v1/eligibility/itemPreview',
            [
                'query' => $queries,
            ]
        );
    }
}
