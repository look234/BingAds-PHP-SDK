<?php

namespace Microsoft\BingAds\V11\Reporting;

{
    /**
     * Defines a geographic performance report request.
     * @link https://docs.microsoft.com/en-us/bingads/reporting-service/geographicperformancereportrequest?view=bingads-11 GeographicPerformanceReportRequest Data Object
     * 
     * @uses NonHourlyReportAggregation
     * @uses GeographicPerformanceReportColumn
     * @uses GeographicPerformanceReportFilter
     * @uses AccountThroughAdGroupReportScope
     * @uses ReportTime
     */
    final class GeographicPerformanceReportRequest extends ReportRequest
    {
        /**
         * The type of aggregation to use to aggregate the report data.
         * @var NonHourlyReportAggregation
         */
        public $Aggregation;

        /**
         * The list of attributes and performance statistics to include in the report.
         * @var GeographicPerformanceReportColumn[]
         */
        public $Columns;

        /**
         * The filter information to use to filter the report data.
         * @var GeographicPerformanceReportFilter
         */
        public $Filter;

        /**
         * The scope of the report.
         * @var AccountThroughAdGroupReportScope
         */
        public $Scope;

        /**
         * The time period to use for the report.
         * @var ReportTime
         */
        public $Time;
    }

}
