import request = require('request');
import promise = require('bluebird');
import http = require('http');

// ===============================================
// This file is autogenerated - Please do not edit
// ===============================================

/* tslint:disable:no-unused-variable */

export class Price {
    date: Date;
    ticker: string;
    value: number;
}


interface Authentication {
    /**
    * Apply authentication settings to header and query params.
    */
    applyToRequest(requestOptions: request.Options): void;
}

class HttpBasicAuth implements Authentication {
    public username: string;
    public password: string;
    applyToRequest(requestOptions: request.Options): void {
        requestOptions.auth = {
            username: this.username, password: this.password
        }
    }
}

class ApiKeyAuth implements Authentication {
    public apiKey: string;

    constructor(private location: string, private paramName: string) {
    }

    applyToRequest(requestOptions: request.Options): void {
        if (this.location == "query") {
            (<any>requestOptions.qs)[this.paramName] = this.apiKey;
        } else if (this.location == "header") {
            requestOptions.headers[this.paramName] = this.apiKey;
        }
    }
}

class OAuth implements Authentication {
    public accessToken: string;

    applyToRequest(requestOptions: request.Options): void {
        requestOptions.headers["Authorization"] = "Bearer " + this.accessToken;
    }
}

class VoidAuth implements Authentication {
    public username: string;
    public password: string;
    applyToRequest(requestOptions: request.Options): void {
        // Do nothing
    }
}

export class PriceApi {
    protected basePath = 'http://localhost:15534';
    protected defaultHeaders : any = {};



    public authentications = {
        'default': <Authentication>new VoidAuth(),
    }

    constructor(basePath?: string);
    constructor(basePathOrUsername: string, password?: string, basePath?: string) {
        if (password) {
            if (basePath) {
                this.basePath = basePath;
            }
        } else {
            if (basePathOrUsername) {
                this.basePath = basePathOrUsername
            }
        }
    }
    private extendObj<T1,T2>(objA: T1, objB: T2) {
        for(let key in objB){
            if(objB.hasOwnProperty(key)){
                objA[key] = objB[key];
            }
        }
        return <T1&T2>objA;
    }
    /**
     * 
     * 
     * @param apikey 
     * @param ticker 
     */
    public priceGetByTicker (apikey: string, ticker: string) : Promise<{ response: http.ClientResponse; body: Array<Price>;  }> {
        const path = this.basePath + '/Price/{ticker}'
            .replace('{' + 'ticker' + '}', String(ticker));
        let queryParameters: any = {};
        let headerParams: any = this.extendObj({}, this.defaultHeaders);
        let formParams: any = {};


        // verify required parameter 'apikey' is set
        if (!apikey) {
            throw new Error('Missing required parameter apikey when calling priceGetByTicker');
        }

        // verify required parameter 'ticker' is set
        if (!ticker) {
            throw new Error('Missing required parameter ticker when calling priceGetByTicker');
        }

        if (apikey !== undefined) {
            queryParameters['apikey'] = apikey;
        }

        let useFormData = false;

        let deferred = promise.defer<{ response: http.ClientResponse; body: Array<Price>;  }>();

        let requestOptions: request.Options = {
            method: 'GET',
            qs: queryParameters,
            headers: headerParams,
            uri: path,
            json: true,
        }

        this.authentications.default.applyToRequest(requestOptions);

        if (Object.keys(formParams).length) {
            if (useFormData) {
                (<any>requestOptions).formData = formParams;
            } else {
                requestOptions.form = formParams;
            }
        }

        request(requestOptions, (error, response, body) => {
            if (error) {
                deferred.reject(error);
            } else {
                if (response.statusCode >= 200 && response.statusCode <= 299) {
                    deferred.resolve({ response: response, body: body });
                } else {
                    deferred.reject({ response: response, body: body });
                }
            }
        });

        return deferred.promise;
    }
    /**
     * 
     * 
     * @param apikey 
     * @param ticker 
     * @param date 
     */
    public priceGet (apikey: string, ticker: string, date: Date) : Promise<{ response: http.ClientResponse; body: Price;  }> {
        const path = this.basePath + '/Price/{ticker}/{date}'
            .replace('{' + 'ticker' + '}', String(ticker))
            .replace('{' + 'date' + '}', String(date));
        let queryParameters: any = {};
        let headerParams: any = this.extendObj({}, this.defaultHeaders);
        let formParams: any = {};


        // verify required parameter 'apikey' is set
        if (!apikey) {
            throw new Error('Missing required parameter apikey when calling priceGet');
        }

        // verify required parameter 'ticker' is set
        if (!ticker) {
            throw new Error('Missing required parameter ticker when calling priceGet');
        }

        // verify required parameter 'date' is set
        if (!date) {
            throw new Error('Missing required parameter date when calling priceGet');
        }

        if (apikey !== undefined) {
            queryParameters['apikey'] = apikey;
        }

        let useFormData = false;

        let deferred = promise.defer<{ response: http.ClientResponse; body: Price;  }>();

        let requestOptions: request.Options = {
            method: 'GET',
            qs: queryParameters,
            headers: headerParams,
            uri: path,
            json: true,
        }

        this.authentications.default.applyToRequest(requestOptions);

        if (Object.keys(formParams).length) {
            if (useFormData) {
                (<any>requestOptions).formData = formParams;
            } else {
                requestOptions.form = formParams;
            }
        }

        request(requestOptions, (error, response, body) => {
            if (error) {
                deferred.reject(error);
            } else {
                if (response.statusCode >= 200 && response.statusCode <= 299) {
                    deferred.resolve({ response: response, body: body });
                } else {
                    deferred.reject({ response: response, body: body });
                }
            }
        });

        return deferred.promise;
    }
}
