<?php

namespace Modules\Article\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class PostsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'              => 'required|max:191',
            'slug'              => 'nullable|max:191',
            'intro'             => 'required',
            'content'           => 'required',
            'type'              => 'required|max:191',
            'created_by_alias'  => 'nullable|max:191',
            'featured_image'    => 'required|max:191',
            'is_featured'       => 'required',
            'order'             => 'nullable|numeric',
            'status'            => 'required',
            'file'              => 'mimes:pdf,docx,txt,csv,zip|max:15000',
        ];
    }
}
