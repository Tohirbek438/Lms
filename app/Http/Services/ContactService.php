<?php

namespace App\Http\Services;

use App\Models\Contact;

class ContactService
{
    public function create(array $data): Contact
    {
        $contact = new Contact;
        $contact->number1 = $data['number1'];
        $contact->other_number = $data['other_number'];
        $contact->email = $data['email'];
        $contact->location = $data['location'];
        $contact->save();

        return $contact;
    }

    public function update(Contact $contact, array $data)
    {
        $contact->number1 = $data['number1'];
        $contact->other_number = $data['other_number'];
        $contact->email = $data['email'];
        $contact->location = $data['location'];
        $contact->save();

        return $contact;
    }

    public function delete(Contact $contact): void
    {
        $contact->delete();
    }
}
