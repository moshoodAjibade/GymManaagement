// Method to handle form submission
    public function submitForm(Request $request)
    {
        // Add your validation rules here if needed
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Process the form data, save to database, or send an email
        // You can access form data using $request->input('field_name')

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Thank you for your message!');
    }
    public function user(Request $request)
    {
        $contactFields = $request->validate([
            'name' => ['required', 'min:7'],
            'email' => ['required', 'email'],
            'message' => ['required']
            
        ]);
       
        User::create($contactFields);

        return redirect()->back()->with("Hello", 
        "user Request successful and you will be notified soon");
    
    }

    

public function trainer(Request $request)
    {
        $data = new trainer;
        $data->fullname=$request->fullname;
        $data->emailid=$request->emailid;
        $data->message=$request->message;
        $data->status = "in progress";

        if (Auth::id())    {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with("Hello", 
        "Contact Request successful and you will be notified soon");
    
    }

    public function showappointment(Request $request)
    {
        $data = new showappointment;
        $data->fullname=$request->fullname;
        $data->emailid=$request->emailid;
        $data->phone=$request->phone;
        $data->membershipplan=$request->membershipplan;
        $data->trainertype=$request->trainertype;
        $data->date=$request->date;
        $data->status = "in progress";

        if (Auth::id())    {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with("Hello", 
        "Your Gym Booking Appointment Request 
        is successful and you will be notified soon");

         $data = doctor::find($id);
         return view ('admin.updatetrainer', compact('data'));

    
    }

    public function edittrainer(Request $request, $id){
        $doctor = doctor::find($id);
        $trainer->name=$request->name;
        $trainer->emailid=$request->emailid;
        $trainer->phone=$request->phone;
        $trainer->trainertype=$request->trainertype;
        if (Auth::id())    {
            $userid=Auth::user()->id;
            $appoint=modifytrainer::where('user_id', $userid)->get();
            return view('user.modifytrainer', compact('appoint'));
        }
        
         else{
            return redirect()->back();
         }
    }

    public function cancel_trainer($id){
        $data=train::find($id);
        $data->delete();
        return redirect()->back();

    }

    public function showappointment(Request $request)
    {
        $data = new showappointment;
        $data->fullname=$request->fullname;
        $data->emailid=$request->emailid;
        $data->phone=$request->phone;
        $data->membershipplan=$request->membershipplan;
        $data->trainertype=$request->trainertype;
        $data->date=$request->date;
        $data->status = "in progress";

        if (Auth::id())    {
            $data->user_id=Auth::user()->id;
        }

        $data->save();

        return redirect()->back()->with("Hello", 
        "Your Gym Booking Appointment Request 
        is successful and you will be notified soon");
    
    }

    public function editappointment(){
        if (Auth::id())    {
            $userid=Auth::user()->id;
            $appoint=appointment::where('user_id', $userid)->get();
            return view('user.appointment', compact('appoint'));
        }
        
         else{
            return redirect()->back();
         }
    }

    public function cancel_appointment($id){
        $data=appointment::find($id);
        $data->delete();
        return redirect()->back();

    }  
