<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Deletes one or more ads from the specified ad group.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/deleteads?view=bingads-11 DeleteAds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsRequest
    {
        /**
         * The ID of the ad group that contains the ads to delete.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The IDs of the ads to delete.
         * @var integer[]
         */
        public $AdIds;
    }
}
