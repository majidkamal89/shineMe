<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PHPMailer\PHPMailer\PHPMailer;

class ContactUs extends Model
{
    protected $table = 'contact_us';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'name',
        'email',
        'subject',
        'message',
        'status',
        'created_at',
        'updated_at'
    ];

    /**
     * Method to send email.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendEmail($email,$html,$subject)
    {
        $mail = new PHPMailer(true);
        $mail->SMTPOptions = array (
            'ssl' => array (
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        try {
            //$mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->SMTPSecure = 'ssl';
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME1');
            $mail->Password = env('MAIL_PASSWORD1');
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            //Recipients
            $mail->setFrom(env('MAIL_USERNAME1'), 'Shine me');
            $mail->addAddress($email);

            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $html;
            $mail->send();
            return 1;
        } catch (\Exception $e) {
            return 0;
        }
    }
}
