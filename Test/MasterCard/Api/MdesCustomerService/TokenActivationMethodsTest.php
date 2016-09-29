<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are 
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of 
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of 
 * conditions and the following disclaimer in the documentation and/or other materials 
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its 
 * contributors may be used to endorse or promote products derived from this software 
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY 
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES 
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT 
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, 
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; 
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER 
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING 
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF 
 * SUCH DAMAGE.
 *
 */

namespace MasterCard\Api\MdesCustomerService;

use MasterCard\Core\Model\RequestMap;
use MasterCard\Core\ApiConfig;
use MasterCard\Core\Security\OAuth\OAuthAuthentication;
use Test\BaseTest;



class TokenActivationMethodsTest extends BaseTest {

    public static $responses = array();

    protected function setUp() {
        parent::setUp();
        //ApiConfig::setDebug(true);
        ApiConfig::setSandbox(true);
        BaseTest::resetAuthentication();
    }

    
    
                
        public function test_example_mdes_token_activation_methods()
        {
            

            

            $map = new RequestMap();
            $map->set("TokenActivationMethodsRequest.TokenUniqueReference", "DWSPMC00000000010906a349d9ca4eb1a4d53e3c90a11d9c");
            $map->set("TokenActivationMethodsRequest.AuditInfo.UserId", "A1435477");
            $map->set("TokenActivationMethodsRequest.AuditInfo.UserName", "John Smith");
            $map->set("TokenActivationMethodsRequest.AuditInfo.Organization", "Any Bank");
            $map->set("TokenActivationMethodsRequest.AuditInfo.Phone", "5555551234");
            
            
            $response = TokenActivationMethods::create($map);

            $ignoreAssert = array();
            
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[0].ActivationMethodType", "EMA");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[0].ActivationMethodValue", "AXXXXXXD@mc.com");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[0].ActivationMethodId", "123123122");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[0].ResendIndicator", "FALSE");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[1].ActivationMethodType", "CLC");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[1].ActivationMethodValue", "(555)123-4567");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[1].ActivationMethodId", "123123123");
            $this->customAssertEqual($ignoreAssert, $response, "TokenActivationMethodsResponse.ActivationMethods.ActivationMethod[1].ResendIndicator", "FALSE");
            

            self::putResponse("example_mdes_token_activation_methods", $response);
            
        }
        
    
    
    
    
    
    
    
}



