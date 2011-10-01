//
//  SafeRidesAppDelegate.m
//  SafeRides
//
//  Created by Erik Parker on 9/24/11.
//  Copyright 2011 __MyCompanyName__. All rights reserved.
//

#import "SafeRidesAppDelegate.h"
#import "MainViewViewController.h"

@implementation SafeRidesAppDelegate

@synthesize window;
@synthesize viewController;

- (void)applicationDidFinishLaunching:(UIApplication *)application {    
	
	// Override point for customization after application launch
	MainViewViewController *aViewController = [[MainViewViewController alloc] 
											   initWithNibName:@"MainView" 
											   bundle:[NSBundle mainBundle]];	
	self.viewController = aViewController;
	[aViewController release];
	
	[window addSubview:[viewController view]];
	
	// Override point for customization after application launch
	[window makeKeyAndVisible];
}

- (void)dealloc {
    [window release];
    [super dealloc];
}


@end
