//
//  MainViewViewController.h
//  SafeRides
//
//  Created by Erik Parker on 9/24/11.
//  Copyright 2011 __MyCompanyName__. All rights reserved.
//

#import <UIKit/UIKit.h>


@interface MainViewViewController : UIViewController <UITextFieldDelegate> {
	UITextField *textInput;
	UILabel *label;
	NSString *name;
}

@property (nonatomic, retain) IBOutlet UITextField *textInput;
@property (nonatomic, retain) IBOutlet UILabel *label;
@property (nonatomic, copy) NSString *response;

- (IBAction)getResponse:(id)sender;

@end
