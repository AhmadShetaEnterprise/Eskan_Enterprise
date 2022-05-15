public function store(Request $request)

{

    if($request->has('user_id') && !empty($request->input('user_id'))) {

        dd('user_id is not empty.');

    } else {

        dd('user_id is empty.');

    }

}
