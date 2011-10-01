    //
//  MainViewViewController.m
//  SafeRides
//
//  Created by Erik Parker on 9/24/11.
//  Copyright 2011 __MyCompanyName__. All rights reserved.
//

#import "MainViewViewController.h"


@implementation MainViewViewController

@synthesize textInput;
@synthesize label;
@synthesize response;

- (IBAction)getResponse:(id)sender {
	self.response = textInput.text;
	
	NSString *nameString = response;
	if([nameString length] == 0) {
		nameString = @"Default";
	}
	NSString *greeting = [[NSString alloc] 
						  initWithFormat:@"Hello, my name is %@!", nameString];
	label.text = greeting;
	[greeting release];
}

- (BOOL)textFieldShouldReturn:(UITextField *)theTextField {
	if(theTextField == textInput) {
		[textInput resignFirstResponder];
	}
	return YES;
}

- (void)viewDidLoad {
	[super viewDidLoad];
	NSLog(@"self.view=%@", self.view);
	
	// uncomment the following only if desperate
	 self.view.frame = CGRectMake(0, 20, 320, 460);
	 NSLog(@"self.view=%@", self.view);
}

- (void)didReceiveMemoryWarning {
    [super didReceiveMemoryWarning];
}

- (void)viewDidUnload {
    [super viewDidUnload];
}

- (void)dealloc {
	[textInput release];
	[label release];
	[response release];
    [super dealloc];
}


@end
