//
//  SafeRidesAppDelegate.h
//  SafeRides
//
//  Created by Erik Parker on 9/24/11.
//  Copyright 2011 __MyCompanyName__. All rights reserved.
//

#import <UIKit/UIKit.h>
#import "MainViewViewController.h"

@interface SafeRidesAppDelegate : NSObject <UIApplicationDelegate> {
    UIWindow *window;
	MainViewViewController *viewController;
}

@property (nonatomic, retain) IBOutlet UIWindow *window;
@property (nonatomic, retain) MainViewViewController *viewController;

@end

