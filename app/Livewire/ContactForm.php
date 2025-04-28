<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;
    public $successMessage;
    public $errorMessage;
    public $isSubmitting = false;
    public $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:5000',
        'subject' => 'required|string|max:255',
        'phone' => 'required|string|max:255',
    ];
    public $validationAttributes = [
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Message',
        'subject' => 'Subject',
        'phone' => 'Phone',
    ];
    public $messages = [
        'name.required' => 'Please enter your name.',
        'email.required' => 'Please enter your email address.',
        'email.email' => 'Please enter a valid email address.',
        'message.required' => 'Please enter your message.',
        'subject.required' => 'Please enter your subject or question.',
        'phone.required' => 'Please enter your phone number.',
    ];
    public $listeners = ['resetForm'];
    public $formId = 'contact-form';
    public $formClass = 'bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4';
    public $submitButtonClass = 'bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded';
    public $submitButtonText = 'Send Message';
    public $successButtonClass = 'bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded';
    public $successButtonText = 'OK';
    public $errorButtonClass = 'bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded';
    public $errorButtonText = 'Try Again';
    public $successTitle = 'Message Sent';
    public $errorTitle = 'Error Sending Message';
    public $successDescription = 'Your message has been sent successfully.';
    public $errorDescription = 'There was an error sending your message. Please try again later.';
    public $successIcon = 'check-circle';
    public $errorIcon = 'exclamation-circle';

    public function submit()
    {
        $this->reset(['successMessage', 'errorMessage']);
        $validated = $this->validate(
            $this->rules,
            $this->messages,
            $this->validationAttributes
        );

        $this->isSubmitting = true;
        try {
            // Simulate sending the message
            sleep(2); // Simulate a delay for sending the message
            // Here you would typically send the message, e.g., via email or store it in a database
            // For example: Contact::create($validated);
        } catch (\Exception $e) {
            $this->isSubmitting = false;
            $this->errorMessage = 'There was an error sending your message. Please try again later.';
            return;
        }
        $this->isSubmitting = false;
        //save to database
        $validated['status'] = 'new';
        $validated['ip_address'] = request()->ip();
        $validated['created_at'] = now();
        $validated['updated_at'] = now();
        Contact::create($validated);

        $this->successMessage = 'Your message has been sent successfully!';
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
