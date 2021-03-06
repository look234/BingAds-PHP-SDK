<?php

namespace Microsoft\BingAds\V11\AdInsight;

{
    /**
     * The language criterion that you can include when requesting keyword ideas or traffic estimates.
     * @link https://docs.microsoft.com/en-us/bingads/ad-insight-service/languagecriterion?view=bingads-11 LanguageCriterion Data Object
     * 
     * @used-by LanguageSearchParameter
     */
    final class LanguageCriterion extends Criterion
    {
        /**
         * The language that you require.
         * @var string
         */
        public $Language;
    }

}
