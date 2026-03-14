<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class PenRequest extends FormRequest
{
    public function authorize(): bool { return true; }
    public function rules()
{
    return [
        'name' => 'required|string|max:100',
        'code' => 'nullable|string|max:20|unique:pens,code',
        'category' => 'required|string|max:50',
        'capacity' => 'required|integer|min:1',
        'status' => 'nullable|in:active,inactive',
    ];
}
}
