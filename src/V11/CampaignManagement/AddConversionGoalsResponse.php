<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Adds new conversion goals to the account's shared conversion goal library.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/addconversiongoals?view=bingads-11 AddConversionGoals Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddConversionGoals
     */
    final class AddConversionGoalsResponse
    {
        /**
         * A list of unique system identifiers corresponding to the conversion goals that were added.
         * @var integer[]
         */
        public $ConversionGoalIds;

        /**
         * An array of BatchError objects that contain details for any request items that were not successful.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
