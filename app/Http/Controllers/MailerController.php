<?php

namespace App\Http\Controllers;

use App\Mail\SmtpChecker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailerController extends Controller
{
    public function checker(Request $request) {
		$response = [];
		if($request->method() == 'POST') {
			try{
				config()->set('mail.mailers.smtp.host', $request->host);
				config()->set('mail.mailers.smtp.port', $request->port);
				config()->set('mail.mailers.smtp.encryption', $request->encryption);
				config()->set('mail.mailers.smtp.username', $request->username);
				config()->set('mail.mailers.smtp.password', $request->password);
				config()->set('mail.from.address', $request->username);
				$details = [
					'subject' => 'Mail from SMTP Checker :: '.$request->username.'',
					'title' => 'SMTP Checker :: '.$request->host.' :: '.$request->username.'',
					'body' => 'This is for testing email using SMTP of '.$request->username.' <br> Host: '.$request->host.'<br> Port: '.$request->port.' <br> TLS: '.$request->encryption.''
				];
				Mail::to($request->to)->send(new SmtpChecker($details));

				$response = ['status' => 'success', 'message' => "Successfully sent"];
				return redirect('/')->with('success', 'Successfully sent');
			} catch(\Exception $exception) {
				$response = ['status' => 'error', 'message' => $exception->getMessage()];
				return redirect('/')->with('error', $exception->getMessage());
			}

		}

		return view('welcome', compact('response'));
	}
}
