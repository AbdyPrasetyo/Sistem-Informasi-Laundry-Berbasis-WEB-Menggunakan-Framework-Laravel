<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ComplaintSuggestion;
use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplaintSuggestionController extends Controller
{
    /**
     * View complaint suggestion page
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $user = Auth::user();

        $message = Message::all();
        $suggestions = ComplaintSuggestion::where([
            'type'  => 1,
            'reply' => null,
        ])->get();

        $complaints = ComplaintSuggestion::where([
            'type'  => 2,
            'reply' => null,
        ])->get();
        $happy = ComplaintSuggestion::where([
            'type'  => 3,
            'reply' => null,
        ])->get();

        $count = ComplaintSuggestion::whereNull('reply', '')->count();
        $all = ComplaintSuggestion::All();

        return view('admin.complaint_suggestion', compact('user', 'suggestions', 'complaints', 'count', 'all', 'message','happy'));
    }

    /**
     * Get complaint suggestion by id
     *
     * @param  \App\Models\ComplaintSuggestion $complaintSuggestion
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(ComplaintSuggestion $complaintSuggestion): JsonResponse
    {
        return response()->json($complaintSuggestion);
    }

    /**
     * Send complaint suggestion reply
     *
     * @param  \App\Models\ComplaintSuggestion $complaintSuggestion
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(ComplaintSuggestion $complaintSuggestion, Request $request): JsonResponse
    {
        $complaintSuggestion->reply = $request->input('reply');
        $complaintSuggestion->save();

        return response()->json();
    }
}
