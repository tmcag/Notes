<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $userId = session('user.id');

        $notes = User::query()->find($userId)->notes()->get()->toArray();

        return view('notes.index', ['notes' => $notes]);
    }

    public function new()
    {
        return view('notes.new');
    }

    public function store(Request $request)
    {
        $rules = [
            'title' => 'required',
            'body' => 'required',
        ];

        $messages = [
            'title.required' => 'O título é obrigatorio.',
            'body.required' => 'O conteúdo da nota é obrigatorio.',
        ];

        $validation = $request->validate($rules, $messages);

        $userId = session('user.id');

        User::query()->findOrFail($userId)->notes()->create($validation);

        return redirect('/');
    }

    public function edit(string $id)
    {
        $userId = session('user.id');

        $note = User::query()->findOrFail($userId)->notes()->get()->find($id);

        if (! $note) {
            return redirect('/');
        }

        return view('notes.edit', ['note' => $note->toArray()]);
    }

    public function update(Request $request)
    {
        if (! $request->id) {
            return redirect('/');
        }

        $rules = [
            'title' => 'required',
            'body' => 'required',
        ];

        $messages = [
          'title.required' => 'O título é obrigatorio.',
          'body.required' => 'O conteúdo da nota é obrigatorio.',
        ];

        $validation = $request->validate($rules, $messages);

        $userId = session('user.id');
        $user = User::query()->findOrFail($userId);

        $note = $user->notes()->whereKey($request['id'])->firstOrFail();

        $note->update([
            'title' => $validation['title'],
            'body'  => $validation['body'],
        ]);

        return redirect('/');
    }

    public function delete(string $id)
    {
        $userId = session('user.id');

        $note = User::query()->findOrFail($userId)->notes()->get()->find($id);

        if (! $note) {
            return redirect('/');
        }

        $note->delete();

        return redirect('/');
    }
}
