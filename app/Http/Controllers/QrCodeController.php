<?php
namespace App\Http\Controllers;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Http\Request;
use App\Models\Event;

class QrCodeController extends Controller
{
    public function generateQRCode($eventId)
    {
        // Fetch the event details based on the event ID from the database
        $event = Event::find($eventId);

        if (!$event) {
            abort(404); // Handle the case where the event is not found
        }

        $eventDetails = [
            'location' => $event->location,
            'time' => $event->time,
            'eventName' => $event->eventName,
            'eventCost' => $event->eventCost,
            // Add more details as needed
        ];
    
        // $qrCode = QrCode::size(300)
        //     ->generate(json_encode($eventDetails));
        $qrCode = (QrCode::size(300)->generate(json_encode($eventDetails)));
    
        return view('qrcode', compact('qrCode', 'eventDetails'));
    }
}


