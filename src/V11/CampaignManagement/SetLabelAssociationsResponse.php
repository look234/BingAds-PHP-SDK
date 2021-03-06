<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Sets label associations.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/setlabelassociations?view=bingads-11 SetLabelAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetLabelAssociations
     */
    final class SetLabelAssociationsResponse
    {
        /**
         * An array of BatchError objects that contain details for any associations that were not successfully retrieved.
         * @var BatchError[]
         */
        public $PartialErrors;
    }
}
