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
        //Loading just the normal data as json_encode getting eventDetails
        $qrCode = (QrCode::size(300)->generate(json_encode($eventDetails)));
        
        //Loading an image in the QR code

        // $imagePath = public_path('images/image.jpg'); // Replace with the correct image path
        // $imageData = base64_encode(file_get_contents($imagePath)); // Convert image into Base64 encoded data
        // $qrCode1 = QrCode::size(300)->generate($imageData); // Generate QR code using Base64 encoded data
       
       
        return view('qrcode', compact('qrCode','eventDetails'));
    }
}


