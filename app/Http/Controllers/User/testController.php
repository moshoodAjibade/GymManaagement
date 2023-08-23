/*

 public function signups(Request $request) {
        $formFields = $request->validate([
            'fullname' => ['required', 'min:7'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'phone' => ['required', 'min:10'],
            'membershipplan' => ['required'],
            'date' => ['required']
            
        ]);

        // Hash Password
          $formFields['password'] = bcrypt($formFields['password']);
       
        
        Membership::create($formFields);


    
    }

    
    public function contacts(Request $request)
    {
        $contactFields = $request->validate([
            'fullname' => ['required', 'min:7'],
            'emailid' => ['required', 'email'],
            'message' => ['required']
            
        ]);
       
        Contact::create($contactFields);

        return redirect()->back()->with("Hello", 
        "Contact Request successful and you will be notified soon");
    
    } public function signups(Request $request) {
        $formFields = $request->validate([
            'fullname' => ['required', 'min:7'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8'],
            'phone' => ['required', 'min:10'],
            'membershipplan' => ['required'],
            'date' => ['required']
            
        ]);

        // Hash Password
          $formFields['password'] = bcrypt($formFields['password']);
       
        
        Membership::create($formFields);


    
    }

    
    public function contacts(Request $request)
    {
        $contactFields = $request->validate([
            'fullname' => ['required', 'min:7'],
            'emailid' => ['required', 'email'],
            'message' => ['required']
            
        ]);
       
        Contact::create($contactFields);

        return redirect()->back()->with("Hello", 
        "Contact Request successful and you will be notified soon");
    
    }
*/