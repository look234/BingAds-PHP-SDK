<?php

namespace Microsoft\BingAds\V11\CustomerManagement;

{
    /**
     * Defines a predicate for the list of entities requested using one of the search operations, for example SearchAccounts, SearchClientLinks, or SearchCustomers.
     * @link https://docs.microsoft.com/en-us/bingads/customer-management-service/predicate?view=bingads-11 Predicate Data Object
     * 
     * @uses PredicateOperator
     * @used-by SearchAccountsRequest
     * @used-by SearchClientLinksRequest
     * @used-by SearchCustomersRequest
     * @used-by SearchUserInvitationsRequest
     */
    final class Predicate
    {
        /**
         * The name of the element for  the object you are searching.
         * @var string
         */
        public $Field;

        /**
         * Defines the relationship between the field and the value.
         * @var PredicateOperator
         */
        public $Operator;

        /**
         * The string to search in the specified field.
         * @var string
         */
        public $Value;
    }

}
