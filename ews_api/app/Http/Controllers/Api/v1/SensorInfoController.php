<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \DateTime;

use App\Location;
use App\Datapoint;
use App\Sensor;
class SensorInfoController extends Controller
{


    public $successStatus=200;

    public function index()
    {

        return response()->json(['name'=>'Location','mobile'=>'888888','email'=>'sopheakyong@gmail.com','status'=>0]);
    }

    public function getLocation(Request $request)
    {
        if($request->type==null)
             $location=Location::all();
        else
            $location=Location::where('type',$request->type)->get();        

        return response()->json($location);
    }

    public function getSensorDatapoint(Request $request){

           $fromdate=date($request->fromdate);
           $todate=date($request->todate);
           $sensor=Sensor::where('external_id',$request->external_id)->firstOrFail();
           $data=Datapoint::with('Sensor')->where('sensor_id', $sensor->id);            
           if($this->validateDate($fromdate) && $this->validateDate($todate))
                 $data=$data->whereBetween('created_at',[$fromdate,$todate]);

           $data=$data->orderby('created_at','desc');
           $data=$data->get();

           return response()->json($data);

            //$data=Datapoint::find(1)->Sensor()->get();
           //$data=Datapoint::with('Sensor')->get();
           // $data=Datapoint::with('Sensor')->get();        
           /* no get detail Sensor */
           //$data=Sensor::where('external_id',$request->external_id)->firstOrFail()->Datapoint()->get(); 
    }


    function validateDate($date, $format = 'Y-m-d H:i:s')
    {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    } 




    public function postDatapoint(Request $request)
    {     

       $datapoint=new Datapoint();
       $datapoint->sensor_id=$request->sensor_id;
       $datapoint->location_id=$request->location_id;
       $datapoint->data=$request->data;
       $datapoint.save();
       return response()->json($datapoint);


    }


    public function updateSensor(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
