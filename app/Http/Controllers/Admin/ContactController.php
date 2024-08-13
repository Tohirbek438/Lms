<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Http\Services\ContactService;
use App\Models\Contact;
use App\Models\ContactModel;

class ContactController extends Controller
{
    protected $onlineService;

    public function __construct(ContactService $contactService)
    {
        $this->onlineService = $contactService;
    }

    public function index()
    {
        $contact = ContactModel::first();

        return view('admin.sites.contact.show', compact('contact'));
    }

    public function create()
    {
        return view('admin.sites.contact.create');
    }

    public function edit($id)
    {
        $contact = ContactModel::findOrFail($id);

        return view('admin.sites.contact.edit', compact('contact'));
    }

    public function store(ContactRequest $request)
    {
        $data = $request->validated();
        $this->onlineService->create($data);

        return redirect()->route('contact.index');
    }

    public function show(int $id)
    {
        $contact = ContactModel::findOrFail($id);

        return view('admin.sites.contact.show', ['contact' => $contact]);
    }

    public function update(ContactRequest $request, int $id)
    {
        $mediaPortal = Contact::findOrFail($id);
        $data = $request->validated();
        $mediaPortal = $this->onlineService->update($mediaPortal, $data);

        return redirect()->route('contact.index')->with('success', 'Contact information updated successfully.');
    }

    public function destroy(int $id)
    {
        $mediaPortal = Contact::findOrFail($id);
        $this->onlineService->delete($mediaPortal);

        return redirect()->route('contact.index');
    }
}
