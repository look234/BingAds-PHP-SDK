<?php

namespace Microsoft\BingAds\V11\CampaignManagement;

{
    /**
     * Gets a temporary URL that you can use to download a file that contains the supported geographical location targeting codes.
     * @link https://docs.microsoft.com/en-us/bingads/campaign-management-service/getgeolocationsfileurl?view=bingads-11 GetGeoLocationsFileUrl Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetGeoLocationsFileUrl
     */
    final class GetGeoLocationsFileUrlResponse
    {
        /**
         * The file URL that you can use to download the geographical location targeting codes for the version, language, and locale that you requested.
         * @var string
         */
        public $FileUrl;

        /**
         * The date and time that the provided file URL will expire.
         * @var \DateTime
         */
        public $FileUrlExpiryTimeUtc;

        /**
         * The date and time that the geographical locations file for the specified version, language, and locale was last updated.
         * @var \DateTime
         */
        public $LastModifiedTimeUtc;
    }
}
