<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
class ResetPassword extends Mailable
{
  use Queueable, SerializesModels;

  /**
  * Create a new message instance.
  *
  * @return void
  */
  public function __construct($user)
  {
    $this->user = $user;
  }

  /**
  * Build the message.
  *
  * @return $this
  */
  public function build()
  {
    $user = $this->user;
    return $this->view('mail.resetPassword', compact('user'));
  }
}
