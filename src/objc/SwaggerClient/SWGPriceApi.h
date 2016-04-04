#import <Foundation/Foundation.h>
#import "SWGPrice.h"
#import "SWGObject.h"
#import "SWGApiClient.h"


/**
 * NOTE: This class is auto generated by the swagger code generator program. 
 * https://github.com/swagger-api/swagger-codegen 
 * Do not edit the class manually.
 */

@interface SWGPriceApi: NSObject

@property(nonatomic, assign)SWGApiClient *apiClient;

-(instancetype) initWithApiClient:(SWGApiClient *)apiClient;
-(void) addHeader:(NSString*)value forKey:(NSString*)key;
-(unsigned long) requestQueueSize;
+(SWGPriceApi*) apiWithHeader:(NSString*)headerValue key:(NSString*)key;
+(SWGPriceApi*) sharedAPI;
///
///
/// 
/// 
///
/// @param apikey 
/// @param ticker 
/// 
///
/// @return NSArray<SWGPrice>*
-(NSNumber*) priceGetByTickerWithCompletionBlock :(NSString*) apikey 
     ticker:(NSString*) ticker 
    
    completionHandler: (void (^)(NSArray<SWGPrice>* output, NSError* error))completionBlock;
    


///
///
/// 
/// 
///
/// @param apikey 
/// @param ticker 
/// @param date 
/// 
///
/// @return SWGPrice*
-(NSNumber*) priceGetWithCompletionBlock :(NSString*) apikey 
     ticker:(NSString*) ticker 
     date:(NSDate*) date 
    
    completionHandler: (void (^)(SWGPrice* output, NSError* error))completionBlock;
    



@end
