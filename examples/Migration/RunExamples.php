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

namespace Google\Ads\GoogleAds\Examples\Migration;

require __DIR__ . '/vendor/autoload.php';

use GetOpt\GetOpt;
use Google\Ads\GoogleAds\Examples\Migration\CampaignManagement\CreateCompleteCampaignAdwordsApiOnly;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentNames;
use Google\Ads\GoogleAds\Examples\Utils\ArgumentParser;
use Google\Ads\GoogleAds\Lib\V1\GoogleAdsClient;
use Google\Ads\GoogleAds\Lib\V1\GoogleAdsClientBuilder;
use Google\Ads\GoogleAds\Lib\V1\GoogleAdsException;
use Google\Ads\GoogleAds\Lib\OAuth2TokenBuilder;
use Google\Ads\GoogleAds\V1\Errors\GoogleAdsError;
use Google\Ads\GoogleAds\V1\Services\GoogleAdsRow;
use Google\AdsApi\AdWords\AdWordsSessionBuilder;
use Google\AdsApi\Common\OAuth2TokenBuilder as AdWordsApiOAuth2TokenBuilder;
use Google\ApiCore\ApiException;

/** This class creates the API client objects and runs the migration examples. */
class RunExamples
{
    const DEVELOPER_TOKEN = 'INSERT_YOUR_DEVELOPER_TOKEN_HERE';
    const CLIENT_ID = 'INSERT_YOUR_OAUTH2_CLIENT_ID_HERE';
    const CLIENT_SECRET = 'INSERT_YOUR_OAUTH2_CLIENT_SECRET_HERE';
    const REFRESH_TOKEN = 'INSERT_YOUR_OAUTH2_REFRESH_TOKEN_HERE';
    const CUSTOMER_ID = 'INSERT_CUSTOMER_ID_HERE';
    const PAGE_SIZE = 1000;

    // Login Customer ID is a new configuration setting required in Google Ads API. This
    // is the customer ID of the authorized customer to use in the request, without
    // hyphens (-). If your access to the customer account is through a manager account,
    // this parameter is required and must be set to the customer ID of the manager account.
    // See https://developers.google.com/google-ads/api/docs/concepts/call-structure#login-customer-id
    // to learn more about this setting.
    const LOGIN_CUSTOMER_ID = 'INSERT_LOGIN_CUSTOMER_ID_HERE';

    public static function main()
    {
        // Generate a refreshable OAuth2 credential to be used for authentication against the
        // Google Ads API.
        $oAuth2Credential = (new OAuth2TokenBuilder())
            ->withClientId(self::CLIENT_ID)
            ->withClientSecret(self::CLIENT_SECRET)
            ->withRefreshToken(self::REFRESH_TOKEN)
            ->build();

        // Construct a Google Ads client to be used for Google Ads API calls.
        $googleAdsClient = (new GoogleAdsClientBuilder())
            ->withDeveloperToken(self::DEVELOPER_TOKEN)
            ->withLoginCustomerId(self::LOGIN_CUSTOMER_ID)
            ->withOAuth2Credential($oAuth2Credential)
            ->build();

        // Generate a refreshable OAuth2 credential to be used for authentication against the
        // AdWords API.
        $adWordsApiOAuth2Credential = (new AdWordsApiOAuth2TokenBuilder())
            ->withClientId(self::CLIENT_ID)
            ->withClientSecret(self::CLIENT_SECRET)
            ->withRefreshToken(self::REFRESH_TOKEN)
            ->build();

        // Construct an AdWords session to be used for AdWords API calls.
        $adWordsSession = (new AdWordsSessionBuilder())
            ->withDeveloperToken(self::DEVELOPER_TOKEN)
            ->withOAuth2Credential($adWordsApiOAuth2Credential)
            ->build();

        // Uncomment the relevant code example to run it.

        //CreateCompleteCampaignAdwordsApiOnly::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignAdwordsApiOnly::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignBothApisPhase1::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignBothApisPhase2::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignBothApisPhase3::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignBothApisPhase4::runExample($adWordsSession, self::CUSTOMER_ID);
        //CreateCompleteCampaignGoogleAdsApiOnly::runExample($adWordsSession, self::CUSTOMER_ID);
    }
}

RunExamples::main();