<?php

namespace Amz\FbaInboundEligibility\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response object which contains the ASIN, marketplaceId if required,
 * eligibility program, the eligibility status (boolean), and a list of
 * ineligibility reason codes.
 */
class ItemEligibilityPreview extends AbstractModel
{
    /**
     * The ASIN for which eligibility was determined.
     *
     * @var string
     */
    public $asin = null;

    /**
     * The marketplace for which eligibility was determined.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * The program for which eligibility was determined.
     *
     * @var string
     */
    public $program = null;

    /**
     * Indicates if the item is eligible for the program.
     *
     * @var bool
     */
    public $isEligibleForProgram = null;

    /**
     * Potential Ineligibility Reason Codes.
     *
     * @var string[]|||
     */
    public $ineligibilityReasonList = null;
}
