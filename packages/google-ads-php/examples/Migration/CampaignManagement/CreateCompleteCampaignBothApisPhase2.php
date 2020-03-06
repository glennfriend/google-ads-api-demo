<?php
/**
 * Copyright 2019 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Google\Ads\GoogleAds\Examples\Migration\CampaignManagement;

require __DIR__ . '/../vendor/autoload.php';

use Google\Ads\GoogleAds\Lib\V2\GoogleAdsClient;
use Google\Ads\GoogleAds\V2\Common\ManualCpc;
use Google\Ads\GoogleAds\V2\Enums\AdvertisingChannelTypeEnum\AdvertisingChannelType;
use Google\Ads\GoogleAds\V2\Enums\BudgetDeliveryMethodEnum\BudgetDeliveryMethod;
use Google\Ads\GoogleAds\V2\Enums\CampaignStatusEnum\CampaignStatus;
use Google\Ads\GoogleAds\V2\Resources\Campaign;
use Google\Ads\GoogleAds\V2\Resources\Campaign\NetworkSettings;
use Google\Ads\GoogleAds\V2\Resources\CampaignBudget;
use Google\Ads\GoogleAds\V2\Services\CampaignBudgetOperation;
use Google\Ads\GoogleAds\V2\Services\CampaignOperation;
use Google\Ads\GoogleAds\V2\Services\MutateCampaignBudgetsResponse;
use Google\Ads\GoogleAds\V2\Services\MutateCampaignsResponse;
use Google\AdsApi\AdWords\AdWordsServices;
use Google\AdsApi\AdWords\AdWordsSession;
use Google\AdsApi\AdWords\v201809\cm\AdGroup;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAd;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupAdStatus;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupCriterionService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupOperation;
use Google\AdsApi\AdWords\v201809\cm\AdGroupService;
use Google\AdsApi\AdWords\v201809\cm\AdGroupStatus;
use Google\AdsApi\AdWords\v201809\cm\AdRotationMode;
use Google\AdsApi\AdWords\v201809\cm\BiddableAdGroupCriterion;
use Google\AdsApi\AdWords\v201809\cm\BiddingStrategyConfiguration;
use Google\AdsApi\AdWords\v201809\cm\CpcBid;
use Google\AdsApi\AdWords\v201809\cm\ExpandedTextAd;
use Google\AdsApi\AdWords\v201809\cm\Keyword;
use Google\AdsApi\AdWords\v201809\cm\KeywordMatchType;
use Google\AdsApi\AdWords\v201809\cm\Money;
use Google\AdsApi\AdWords\v201809\cm\Operator;
use Google\AdsApi\AdWords\v201809\cm\UrlList;
use Google\AdsApi\AdWords\v201809\cm\UserStatus;
use Google\Protobuf\BoolValue;
use Google\Protobuf\Int64Value;
use Google\Protobuf\StringValue;

/**
 * This code example is the third in a series of code examples that shows how to create
 * a Search campaign using the AdWords API, and then migrate it to the Google Ads API one
 * functionality at a time. See CreateCompleteCampaignAdwordsApiOnly.php through
 * CreateCompleteCampaignBothApisPhase4.php for code examples in various stages of migration.
 *
 * In this code example, the functionalities to create a campaign budget and a search campaign
 * have been migrated to the Google Ads API. The remaining functionalities - creating an ad group,
 * creating expanded text ads and creating keywords - are using the AdWords API.
 */
class CreateCompleteCampaignBothApisPhase2
{

    // Number of ads being added/updated in this code example.
    private const NUMBER_OF_ADS = 5;
    // The list of keywords being added in this code example.
    private const KEYWORDS_TO_ADD = [
        "mars cruise",
        "space hotel"
    ];

    // The default page size for search queries.
    const PAGE_SIZE = 1000;

    /**
     * Runs the CreateCompleteCampaignBothApisPhase2 example.
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID
     */
    public static function runExample(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        GoogleAdsClient $googleAdsClient,
        int $customerId
    ) {
        $campaignBudget = self::createCampaignBudget($googleAdsClient, $customerId);
        $campaign = self::createCampaign($googleAdsClient, $customerId, $campaignBudget);
        $adGroup = self::createAdGroup(
            $adWordsServices,
            $adWordsSession,
            $campaign->getId()->getValue()
        );
        self::createTextAds($adWordsServices, $adWordsSession, $adGroup->getId());
        self::createKeywords(
            $adWordsServices,
            $adWordsSession,
            $adGroup->getId(),
            self::KEYWORDS_TO_ADD
        );
    }

    /**
     * Creates a campaign budget.
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID
     * @return CampaignBudget the newly created campaign budget
     */
    private static function createCampaignBudget(
        GoogleAdsClient $googleAdsClient,
        int $customerId
    ) {
        // Creates a campaign budget.
        $campaignBudget = new CampaignBudget([
            'name' => new StringValue(['value' => 'Interplanetary Cruise Budget #' . uniqid()]),
            'delivery_method' => BudgetDeliveryMethod::STANDARD,
            'amount_micros' => new Int64Value(['value' => 500000])
        ]);

        // Creates a campaign budget operation.
        $campaignBudgetOperation = new CampaignBudgetOperation();
        $campaignBudgetOperation->setCreate($campaignBudget);

        // Issues a mutate request to add campaign budgets.
        $campaignBudgetServiceClient = $googleAdsClient->getCampaignBudgetServiceClient();
        /** @var MutateCampaignBudgetsResponse $campaignBudgetResponse */
        $campaignBudgetResponse = $campaignBudgetServiceClient->mutateCampaignBudgets(
            $customerId,
            [$campaignBudgetOperation]
        );

        $campaignBudgetResourceName = $campaignBudgetResponse->getResults()[0]->getResourceName();
        $newCampaignBudget = self::getCampaignBudget(
            $googleAdsClient,
            $customerId,
            $campaignBudgetResourceName
        );

        printf("Added budget named '%s'.%s", $newCampaignBudget->getName()->getValue(), PHP_EOL);

        return $newCampaignBudget;
    }

    /**
     * Gets a campaign budget.
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID
     * @param string $resourceName the resource name of the campaign budget to retrieve
     * @return CampaignBudget the campaign budget
     */
    private static function getCampaignBudget(
        GoogleAdsClient $googleAdsClient,
        int $customerId,
        string $resourceName
    ) {
        $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
        $query = "SELECT campaign_budget.id, campaign_budget.name, campaign_budget.resource_name " .
                 "FROM campaign_budget " .
                 "WHERE campaign_budget.resource_name = '$resourceName'";

        $response =
            $googleAdsServiceClient->search($customerId, $query, ['pageSize' => self::PAGE_SIZE]);

        return $response->getIterator()->current()->getCampaignBudget();
    }

    /**
     * Creates a campaign.
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID
     * @param CampaignBudget $campaignBudget the campaign budget
     * @return Campaign the newly created campaign
     */
    private static function createCampaign(
        GoogleAdsClient $googleAdsClient,
        int $customerId,
        CampaignBudget $campaignBudget
    ) {
        $trueValue = new BoolValue(['value' => true]);
        $falseValue = new BoolValue(['value' => false]);

        $startDate = new StringValue(['value' => date('Ymd', strtotime('+1 day'))]);
        $endDate = new StringValue(['value' => date('Ymd', strtotime('+1 month'))]);

        $campaign = new Campaign([
            'name' => new StringValue(['value' => 'Interplanetary Cruise #' . uniqid()]),
            'advertising_channel_type' => AdvertisingChannelType::SEARCH,
            // Recommendation: Set the campaign to PAUSED when creating it to prevent
            // the ads from immediately serving. Set to ENABLED once you've added
            // targeting and the ads are ready to serve.
            'status' => CampaignStatus::PAUSED,
            // Sets the bidding strategy and budget.
            'manual_cpc' => new ManualCpc(),
            'campaign_budget' => $campaignBudget->getResourceName(),
            // Adds the network settings configured above.
            'network_settings' => new NetworkSettings([
                'target_google_search' => $trueValue,
                'target_search_network' => $trueValue,
                'target_content_network' => $falseValue,
                'target_partner_search_network' => $falseValue
            ]),
            // Optional: Sets the start and end dates.
            'start_date' => $startDate,
            'end_date' => $endDate
        ]);

        // Creates a campaign operation.
        $campaignOperation = new CampaignOperation();
        $campaignOperation->setCreate($campaign);

        // Issues a mutate request to add campaigns.
        $campaignServiceClient = $googleAdsClient->getCampaignServiceClient();
        /** @var MutateCampaignsResponse $campaignResponse */
        $campaignResponse = $campaignServiceClient->mutateCampaigns(
            $customerId,
            [$campaignOperation]
        );

        $campaignResourceName = $campaignResponse->getResults()[0]->getResourceName();
        $newCampaign = self::getCampaign($googleAdsClient, $customerId, $campaignResourceName);

        printf("Added campaign named '%s'.%s", $newCampaign->getName()->getValue(), PHP_EOL);

        return $newCampaign;
    }

    /**
     * Gets a campaign.
     * @param GoogleAdsClient $googleAdsClient the Google Ads API client
     * @param int $customerId the client customer ID
     * @param string $campaignResourceName the resource name of the campaign to retrieve
     * @return Campaign the campaign
     */
    private static function getCampaign(
        GoogleAdsClient $googleAdsClient,
        int $customerId,
        string $campaignResourceName
    ) {
        $googleAdsServiceClient = $googleAdsClient->getGoogleAdsServiceClient();
        $query = "SELECT campaign.id, campaign.name, campaign.resource_name " .
                 "FROM campaign " .
                 "WHERE campaign.resource_name = '$campaignResourceName'";

        $response =
            $googleAdsServiceClient->search($customerId, $query, ['pageSize' => self::PAGE_SIZE]);

        return $response->getIterator()->current()->getCampaign();
    }

     /**
     * Creates an ad group.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $campaignId the campaign ID
     * @return AdGroup the newly created ad group
     */
    private static function createAdGroup(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $campaignId
    ) {
        /** @var AdGroupService $adGroupService */
        $adGroupService = $adWordsServices->get($adWordsSession, AdGroupService::class);

        // Create an ad group.
        $adGroup = new AdGroup();
        $adGroup->setCampaignId($campaignId);
        $adGroup->setName('Earth to Mars Cruise #' . uniqid());

        // Set ad group bids.
        $bid = new CpcBid();
        $money = new Money();
        $money->setMicroAmount(10000000);
        $bid->setBid($money);
        $biddingStrategyConfiguration = new BiddingStrategyConfiguration();
        $biddingStrategyConfiguration->setBids([$bid]);
        $adGroup->setBiddingStrategyConfiguration($biddingStrategyConfiguration);

        // Optional: Set the rotation mode.
        $rotationMode = new AdGroupAdRotationMode(AdRotationMode::OPTIMIZE);
        $adGroup->setAdGroupAdRotationMode($rotationMode);

        $adGroup->setStatus(AdGroupStatus::ENABLED);

        // Create an ad group operation.
        $operation = new AdGroupOperation();
        $operation->setOperand($adGroup);
        $operation->setOperator(Operator::ADD);

        // Create the ad group on the server and print out its information.
        $result = $adGroupService->mutate([$operation]);
        $createdAdGroup = $result->getValue()[0];
        printf(
            "Ad group with ID %d and name '%s' was created.%s",
            $createdAdGroup->getId(),
            $createdAdGroup->getName(),
            PHP_EOL
        );

        return $createdAdGroup;
    }

    /**
     * Creates text ads.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $adGroupId the ad group ID
     */
    private static function createTextAds(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $adGroupId
    ) {
        /** @var AdGroupAdService $adGroupAdService */
        $adGroupAdService = $adWordsServices->get($adWordsSession, AdGroupAdService::class);

        $operations = [];

        for ($i = 0; $i < self::NUMBER_OF_ADS; $i++) {
            // Create an expanded text ad.
            $expandedTextAd = new ExpandedTextAd();
            $expandedTextAd->setHeadlinePart1('Cruise #' . uniqid() . ' to Mars');
            $expandedTextAd->setHeadlinePart2('Best Space Cruise Line');
            $expandedTextAd->setHeadlinePart3('For Your Loved Ones');
            $expandedTextAd->setDescription('Buy your tickets now!');
            $expandedTextAd->setDescription2('Discount ends soon');
            $expandedTextAd->setFinalUrls(['http://www.example.com']);

            // Create ad group ad.
            $adGroupAd = new AdGroupAd();
            $adGroupAd->setAdGroupId($adGroupId);
            $adGroupAd->setAd($expandedTextAd);

            // Optional: Set additional settings.
            $adGroupAd->setStatus(AdGroupAdStatus::PAUSED);

            // Create ad group ad operation and add it to the list.
            $operation = new AdGroupAdOperation();
            $operation->setOperand($adGroupAd);
            $operation->setOperator(Operator::ADD);
            $operations[] = $operation;
        }

        // Create the ad group ads on the server and print out their information.
        $result = $adGroupAdService->mutate($operations);
        foreach ($result->getValue() as $adGroupAd) {
            /** @var ExpandedTextAd $ad */
            $ad = $adGroupAd->getAd();
            printf(
                "Expanded text ad with ID %d and headline '%s - %s%s'"
                . " was created.%s",
                $ad->getId(),
                $ad->getHeadlinePart1(),
                $ad->getHeadlinePart2(),
                $ad->getHeadlinePart3()  ? ' - ' . $ad->getHeadlinePart3() : '',
                PHP_EOL
            );
        }
    }

    /**
     * Creates keywords.
     *
     * @param AdWordsServices $adWordsServices the AdWords services
     * @param AdWordsSession $adWordsSession the AdWords session
     * @param int $adGroupId the ad group ID
     * @param string[] $keywordsToAdd
     */
    private static function createKeywords(
        AdWordsServices $adWordsServices,
        AdWordsSession $adWordsSession,
        int $adGroupId,
        array $keywordsToAdd
    ) {
        /** @var AdGroupCriterionService $adGroupCriterionService */
        $adGroupCriterionService =
            $adWordsServices->get($adWordsSession, AdGroupCriterionService::class);

        $operations = [];

        foreach ($keywordsToAdd as $keywordText) {
            // Create a keyword.
            $keyword = new Keyword();
            $keyword->setText($keywordText);
            $keyword->setMatchType(KeywordMatchType::BROAD);

            // Create a biddable ad group criterion.
            $adGroupCriterion = new BiddableAdGroupCriterion();
            $adGroupCriterion->setAdGroupId($adGroupId);
            $adGroupCriterion->setCriterion($keyword);

            // Optional: Set the user status.
            $adGroupCriterion->setUserStatus(UserStatus::PAUSED);
            // Optional: Set the keyword destination url.
            $adGroupCriterion->setFinalUrls(
                new UrlList(['http://www.example.com/mars/cruise/?kw=' . urlencode($keywordText)])
            );

            // Create an ad group criterion operation and add it to the list.
            $operation = new AdGroupCriterionOperation();
            $operation->setOperand($adGroupCriterion);
            $operation->setOperator(Operator::ADD);
            $operations[] = $operation;
        }

        // Create the keywords on the server and print out their information.
        $result = $adGroupCriterionService->mutate($operations);
        foreach ($result->getValue() as $adGroupCriterion) {
            /** @var Keyword $keyword */
            $keyword = $adGroupCriterion->getCriterion();
            printf(
                "Keyword with ad group ID %d, keyword ID %d, text '%s' and match type '%s'"
                . " was created.%s",
                $adGroupCriterion->getAdGroupId(),
                $keyword->getId(),
                $keyword->getText(),
                $keyword->getMatchType(),
                PHP_EOL
            );
        }
    }
}
