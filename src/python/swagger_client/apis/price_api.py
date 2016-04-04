# coding: utf-8

"""
PriceApi.py
Copyright 2015 SmartBear Software

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
"""

from __future__ import absolute_import

import sys
import os

# python 2 and python 3 compatibility library
from six import iteritems

from ..configuration import Configuration
from ..api_client import ApiClient


class PriceApi(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    Ref: https://github.com/swagger-api/swagger-codegen
    """

    def __init__(self, api_client=None):
        config = Configuration()
        if api_client:
            self.api_client = api_client
        else:
            if not config.api_client:
                config.api_client = ApiClient()
            self.api_client = config.api_client

    def price_get_by_ticker(self, apikey, ticker, **kwargs):
        """
        
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.price_get_by_ticker(apikey, ticker, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str apikey:  (required)
        :param str ticker:  (required)
        :return: list[Price]
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['apikey', 'ticker']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method price_get_by_ticker" % key
                )
            params[key] = val
        del params['kwargs']

        # verify the required parameter 'apikey' is set
        if ('apikey' not in params) or (params['apikey'] is None):
            raise ValueError("Missing the required parameter `apikey` when calling `price_get_by_ticker`")
        # verify the required parameter 'ticker' is set
        if ('ticker' not in params) or (params['ticker'] is None):
            raise ValueError("Missing the required parameter `ticker` when calling `price_get_by_ticker`")

        resource_path = '/Price/{ticker}'.replace('{format}', 'json')
        method = 'GET'

        path_params = {}
        if 'ticker' in params:
            path_params['ticker'] = params['ticker']

        query_params = {}
        if 'apikey' in params:
            query_params['apikey'] = params['apikey']

        header_params = {}

        form_params = {}
        files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'text/json', 'application/xml', 'text/xml'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type([])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='list[Price]',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response

    def price_get(self, apikey, ticker, date, **kwargs):
        """
        
        

        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please define a `callback` function
        to be invoked when receiving the response.
        >>> def callback_function(response):
        >>>     pprint(response)
        >>>
        >>> thread = api.price_get(apikey, ticker, date, callback=callback_function)

        :param callback function: The callback function
            for asynchronous request. (optional)
        :param str apikey:  (required)
        :param str ticker:  (required)
        :param datetime date:  (required)
        :return: Price
                 If the method is called asynchronously,
                 returns the request thread.
        """

        all_params = ['apikey', 'ticker', 'date']
        all_params.append('callback')

        params = locals()
        for key, val in iteritems(params['kwargs']):
            if key not in all_params:
                raise TypeError(
                    "Got an unexpected keyword argument '%s'"
                    " to method price_get" % key
                )
            params[key] = val
        del params['kwargs']

        # verify the required parameter 'apikey' is set
        if ('apikey' not in params) or (params['apikey'] is None):
            raise ValueError("Missing the required parameter `apikey` when calling `price_get`")
        # verify the required parameter 'ticker' is set
        if ('ticker' not in params) or (params['ticker'] is None):
            raise ValueError("Missing the required parameter `ticker` when calling `price_get`")
        # verify the required parameter 'date' is set
        if ('date' not in params) or (params['date'] is None):
            raise ValueError("Missing the required parameter `date` when calling `price_get`")

        resource_path = '/Price/{ticker}/{date}'.replace('{format}', 'json')
        method = 'GET'

        path_params = {}
        if 'ticker' in params:
            path_params['ticker'] = params['ticker']
        if 'date' in params:
            path_params['date'] = params['date']

        query_params = {}
        if 'apikey' in params:
            query_params['apikey'] = params['apikey']

        header_params = {}

        form_params = {}
        files = {}

        body_params = None

        # HTTP header `Accept`
        header_params['Accept'] = self.api_client.\
            select_header_accept(['application/json', 'text/json', 'application/xml', 'text/xml'])
        if not header_params['Accept']:
            del header_params['Accept']

        # HTTP header `Content-Type`
        header_params['Content-Type'] = self.api_client.\
            select_header_content_type([])

        # Authentication setting
        auth_settings = []

        response = self.api_client.call_api(resource_path, method,
                                            path_params,
                                            query_params,
                                            header_params,
                                            body=body_params,
                                            post_params=form_params,
                                            files=files,
                                            response_type='Price',
                                            auth_settings=auth_settings,
                                            callback=params.get('callback'))
        return response
